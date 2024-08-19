@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Detalles de la Encuesta</h1>
    
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold mb-4">Nombre completo: <br> {{ $quiz->full_name }}</h2>
        <p class="mb-4"><span class="font-semibold">Número de encuesta:</span> <br> {{ $quiz->id }} </p>
        <p class="mb-4"><span class="font-semibold">Número de teléfono:</span> <br> {{ $quiz->mobile }} </p>
        <p class="mb-4"><span class="font-semibold">Correo electrónico:</span> <br> {{ $quiz->email }} </p>
        <p class="mb-4"><span class="font-semibold">Fuiste atendido por:</span> <br> {{ $quiz->attended_by }} </p>

        <h3 class="mt-4 text-lg font-bold">Respuestas:</h3>
        <p class="mb-4"><span class="font-semibold">¿Cómo calificaría en general el servicio recibido por nuestro despacho contable? (Escala de 1 a 5, donde 1 es muy insatisfecho y 5 es muy satisfecho):</span> <br> {{ $quiz->question1 }}</p>
        <p class="mb-4"><span class="font-semibold">¿Qué tan satisfecho está con la calidad del trabajo realizado por nuestro equipo? (Escala de 1 a 5)</span> <br> {{ $quiz->question2 }}</p>
        <p class="mb-4"><span class="font-semibold">¿Cómo calificaría la precisión y puntualidad de los informes que recibió? (Escala de 1 a 5)</span> <br> {{ $quiz->question3 }}</p>
        <p class="mb-4"><span class="font-semibold">¿Cómo evaluaría la comunicación con nuestro equipo?</span> <br> {{ $quiz->question4 }}</p>
        <p class="mb-4"><span class="font-semibold">¿Qué tan bien entendió las explicaciones y recomendaciones proporcionadas? (Escala de 1 a 5)</span> <br> {{ $quiz->question5 }}</p>
        <p class="mb-4"><span class="font-semibold">¿Cómo calificaría la rapidez y eficacia con la que resolvimos cualquier problema o inquietud que tuvo? (Escala de 1 a 5)</span> <br> {{ $quiz->question6 }}</p>
        @if($quiz->question7)
            <p class="mb-4"><span class="font-semibold">¿Qué aspectos del servicio le gustaría que mejoráramos?</span> <br> {{ $quiz->question7 }}</p>
        @endif
        @if($quiz->question8)
            <p class="mb-4"><span class="font-semibold">¿Hay algún servicio adicional que le gustaría que ofreciéramos?</span> <br> {{ $quiz->question8 }}</p>
        @endif
        @if($quiz->question9)
            <p class="mb-4"><span class="font-semibold">¿Tiene algún otro comentario o sugerencia que le gustaría compartir con nosotros?</span> <br> {{ $quiz->question9 }}</p>
        @endif
    </div>
</div>
@endsection