@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center p-4">
  <h1 class="text-2xl font-bold mb-4">Quizes</h1>

  <!-- Filter Form -->
  <form method="GET" action="{{ route('quizes.index') }}" class="mb-4">
    <div class="flex gap-4">
      <div>
        <label for="year" class="block text-sm font-medium text-gray-700">Year</label>
        <select name="year" id="year" class="block w-full mt-1">
          <option value="">Select Year</option>
          @foreach(range(date('Y'), date('Y') - 10) as $year)
            <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>{{ $year }}</option>
          @endforeach
        </select>
      </div>

      <div>
        <label for="month" class="block text-sm font-medium text-gray-700">Month</label>
        <select name="month" id="month" class="block w-full mt-1">
          <option value="">Select Month</option>
          @foreach(range(1, 12) as $month)
            <option value="{{ $month }}" {{ request('month') == $month ? 'selected' : '' }}>
              {{ DateTime::createFromFormat('!m', $month)->format('F') }}
            </option>
          @endforeach
        </select>
      </div>

      <div class="flex items-end gap-2">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Filter</button>

        <!-- Export Button -->
        <a href="{{ route('quizes.export', ['year' => request('year'), 'month' => request('month')]) }}" 
           class="bg-green-500 text-white px-4 py-2 rounded">Export to Excel</a>
      </div>
    </div>
  </form>

  <p class="mb-4 text-lg">Total Quizes: {{ $quizes->total() }}</p>

  <div class="flex flex-wrap gap-4 justify-center">
      @foreach ($quizes as $quiz)
        <div class="bg-white p-4 rounded shadow flex-1 flex-col w-full max-w-sm flex-grow">
            <div class="flex-1">
                <h2 class="text-xl font-bold">Nombre completo: {{ $quiz->full_name }}</h2>
                <p><span class="font-semibold">Número de encuesta:</span> {{ $quiz->id }} </p>
                <p><span class="font-semibold">Número de teléfono:</span> {{ $quiz->mobile }} </p>
                <p><span class="font-semibold">Correo electrónico:</span> {{ $quiz->email }} </p>
                <p><span class="font-semibold">Fuiste atendido por:</span> {{ $quiz->attended_by }} </p>
                <p><span class="font-semibold">Registrado el:</span> {{ $quiz->created_at }}</p>
                <div class="mt-4 flex gap-2">
                  <a href="{{ route('quizes.show', $quiz->id) }}" class="bg-red-500 text-white px-2 py-1 rounded">Ver encuesta</a>
              </div>
            </div>
        </div>
      @endforeach
  </div>
  
  <!-- Pagination Links -->
  <div class="mt-4">
    {{ $quizes->links() }}
  </div>

</div>
@endsection
