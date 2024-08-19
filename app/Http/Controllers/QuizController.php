<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Exports\QuizesExport;
use Maatwebsite\Excel\Facades\Excel;

class QuizController extends Controller
{
    public function store(Request $request) 
    {
        // Validate the form data
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'attended_by' => 'required|string|max:255',
            'question1' => 'required|integer|between:1,5',
            'question2' => 'required|integer|between:1,5',
            'question3' => 'required|integer|between:1,5',
            'question4' => 'required|integer|between:1,5',
            'question5' => 'required|integer|between:1,5',
            'question6' => 'required|integer|between:1,5',
            'question7' => 'nullable|string|max:1000',
            'question8' => 'nullable|string|max:1000',
            'question9' => 'nullable|string|max:1000',
        ]);

        // Store the data in the database (you'll need to create a corresponding model and table)
        // Example: QuizResponse is a model that corresponds to a 'quiz_responses' table
        $quizResponse = new QuizResponse();
        $quizResponse->full_name = $validatedData['full_name'];
        $quizResponse->mobile = $validatedData['mobile'];
        $quizResponse->email = $validatedData['email'];
        $quizResponse->attended_by = $validatedData['attended_by'];
        $quizResponse->question1 = $validatedData['question1'];
        $quizResponse->question2 = $validatedData['question2'];
        $quizResponse->question3 = $validatedData['question3'];
        $quizResponse->question4 = $validatedData['question4'];
        $quizResponse->question5 = $validatedData['question5'];
        $quizResponse->question6 = $validatedData['question6'];
        $quizResponse->question7 = $validatedData['question7'];
        $quizResponse->question8 = $validatedData['question8'];
        $quizResponse->question9 = $validatedData['question9'];
        $quizResponse->save();

        // Redirect back with a success message
        return redirect()->route('quiz')->with('success', 'Thank you for submitting your survey!');
    }

    public function index(Request $request)
    {
        $year = $request->input('year');
        $month = $request->input('month');

        $query = Quiz::query();

        if ($year) {
            $query->whereYear('created_at', $year);
        }

        if ($month) {
            $query->whereMonth('created_at', $month);
        }

        $quizes = $query->paginate(10);

        return view('quizes.index', compact('quizes'));
    }

    public function show($id)
    {
        $quiz = Quiz::findOrFail($id);
        return view('quizes.show', compact('quiz'));
    }

    public function export(Request $request)
    {
        $year = $request->input('year');
        $month = $request->input('month');

        return Excel::download(new QuizesExport($year, $month), 'quizes.xlsx');
    }

}
