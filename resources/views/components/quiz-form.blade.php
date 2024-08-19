<div class="w-full max-w-lg mt-8">
  <!-- Form -->
  <form action=" {{ route('quiz') }} " method="POST" style="background-color: rgba(204, 244, 254, 0.2)" class="shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf


    <div class="flex justify-center mb-6">
      <img src="{{ asset('images/reor-logo.png') }}" alt="Logo" class="h-20 w-20">
    </div>
    
    <!-- Title -->
    <h1 class="text-3xl font-bold tracking-tight text-gray-900 text-center mb-8">
      RE&OR Analytics
    </h1>

    <h2 class="text-2xl tracking-tight text-gray-900 text-center mb-8">
      Llena todos los campos para enviar una encuesta
    </h2>
    
    <!-- Full Name -->
    <div class="mb-4">
      <label for="full_name" class="block text-sm font-bold mb-2">Nombre completo</label>
      <input required type="text" id="full_name" placeholder="Enter your full name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-200 focus:shadow-outline">
    </div>

    <!-- Mobile -->
    <div class="mb-4">
      <label for="mobile" class="block text-sm font-bold mb-2">Número de teléfono</label>
      <input required type="tel" id="mobile" placeholder="Enter your mobile number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-200 focus:shadow-outline">
    </div>

    <!-- Email -->
    <div class="mb-4">
      <label for="email" class="block text-sm font-bold mb-2">Correo electrónico</label>
      <input required type="email" id="email" placeholder="Enter your email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-200 focus:shadow-outline">
    </div>

    <!-- Attended By -->
    <div class="mb-4">
      <label for="attended_by" class="block text-sm font-bold mb-2">Fuiste atendido por</label>
      <select required id="attended_by" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-200 focus:shadow-outline">
        <option value="" disabled selected>Select one</option>
        <option value="Robinson Castro">Agustín Aguilar</option>
        <option value="Isvy Miranda">Isvy Miranda</option>
        <option value="Edgar Vargas">Edgar Vargas</option>
        <option value="Edwin Saldaña">Edwin Saldaña</option>
        <option value="Hugo Hernandez">Hugo Hernandez</option>
        <option value="Daniel Castillo">Daniel Castillo</option>
        <option value="José Manuel Ron">Manuel Ron</option>
        <option value="Robinson Rodriguez">Robinson Rodriguez</option>
        <option value="Pablo Chavez">Pablo Chavez</option>
        <option value="Sergio Orozco">Sergio Orozco</option>
        <option value="Aton Ortoga">Aton Ortoga</option>
        <option value="Marcia Esparza">Marcia Esparza</option>
        <option value="Roberto Escudero">Roberto Escudero</option>
        <option value="Armando Reynaga">Armando Reynaga</option>
        <option value="Oscar Reynaga">Oscar Reynaga</option>
        <option value="Cynthia Portales">Cynthia Portales</option>
        <option value="Edgar Sandoval">Edgar Sandoval</option>
        <option value="Cristian Sandoval">Cristian Sandoval</option>
      </select>
    </div>

    <!-- Question 1 -->
    <div class="mb-4">
      <label for="question1" class="block text-sm font-bold mb-2">¿Cómo calificaría en general el servicio recibido por nuestro despacho contable? (Escala de 1 a 5, donde 1 es muy insatisfecho y 5 es muy satisfecho)</label>
      <select required id="question1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-200 focus:shadow-outline">
        <option value="" disabled selected>Select a score</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>

    <!-- Question 2 -->
    <div class="mb-4">
      <label for="question2" class="block text-sm font-bold mb-2">¿Qué tan satisfecho está con la calidad del trabajo realizado por nuestro equipo? (Escala de 1 a 5)</label>
      <select required id="question2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-200 focus:shadow-outline">
        <option value="" disabled selected>Select a score</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>

    <!-- Question 3 -->
    <div class="mb-4">
      <label for="question3" class="block text-sm font-bold mb-2">¿Cómo calificaría la precisión y puntualidad de los informes que recibió? (Escala de 1 a 5)</label>
      <select required id="question3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-200 focus:shadow-outline">
        <option value="" disabled selected>Select a score</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>

    <!-- Question 4 -->
    <div class="mb-4">
      <label for="question4" class="block text-sm font-bold mb-2">¿Cómo evaluaría la comunicación con nuestro equipo? (Escala de 1 a 5)</label>
      <select required id="question4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-200 focus:shadow-outline">
        <option value="" disabled selected>Select a score</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>

    <!-- Question 5 -->
    <div class="mb-4">
      <label for="question5" class="block text-sm font-bold mb-2">¿Qué tan bien entendió las explicaciones y recomendaciones proporcionadas? (Escala de 1 a 5)</label>
      <select required id="question5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-200 focus:shadow-outline">
        <option value="" disabled selected>Select a score</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>

    <!-- Question 6 -->
    <div class="mb-4">
      <label for="question6" class="block text-sm font-bold mb-2">¿Cómo calificaría la rapidez y eficacia con la que resolvimos cualquier problema o inquietud que tuvo? (Escala de 1 a 5)</label>
      <select required id="question6" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-200 focus:shadow-outline">
        <option value="" disabled selected>Select a score</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>

    <!-- Question 7 Open -->
    <div class="mb-4">
      <label for="question7" class="block text-sm font-bold mb-2">¿Qué aspectos del servicio le gustaría que mejoráramos?</label>
      <textarea required id="question7" placeholder="Enter your response" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-200 focus:shadow-outline"></textarea>
    </div>

    <!-- Question 8 Open -->
    <div class="mb-4">
      <label for="question8" class="block text-sm font-bold mb-2">¿Hay algún servicio adicional que le gustaría que ofreciéramos?</label>
      <textarea required id="question8" placeholder="Enter your response" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-200 focus:shadow-outline"></textarea>
    </div>

    <!-- Question 9 Open -->
    <div class="mb-4">
      <label for="question9" class="block text-sm font-bold mb-2">¿Tiene algún otro comentario o sugerencia que le gustaría compartir con nosotros?</label>
      <textarea required id="question9" placeholder="Enter your response" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-200 focus:shadow-outline"></textarea>
    </div>

    <!-- Submit Button -->
    <div class="flex items-center justify-between">
      <button type="submit" style="background-color: #198b9a" class="text-white py-1 px-4 rounded focus:outline-none focus:shadow-outline">
        Enviar
      </button>
    </div>
  </form>
</div>