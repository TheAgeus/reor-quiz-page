@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4 flex flex-col items-center">
        <div class="p-6 rounded-lg shadow-md w-full max-w-lg bg-white">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
                <!-- View Quizes Button -->
                <form action="{{ route('quizes.index') }}" method="GET" class="w-full">
                    <button type="submit" style="background-color: #198b9a" class="flex items-center justify-center text-white px-4 py-2 rounded-lg shadow-lg transition-colors duration-300 ease-in-out w-full">
                        <i class="fas fa-eye mr-2"></i> View Quizes
                    </button>
                </form>
                <!-- Create Quiz Button -->
                <form action="{{ route('dashboard.create') }}" method="GET" class="w-full">
                    <button type="submit" style="background-color: #198b9a" class="flex items-center justify-center text-white px-4 py-2 rounded-lg shadow-lg transition-colors duration-300 ease-in-out w-full">
                        <i class="fas fa-plus mr-2"></i> Create Quiz
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
