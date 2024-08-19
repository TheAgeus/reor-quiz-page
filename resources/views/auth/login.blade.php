<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RE&OR / Login</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="icon" href="{{ asset('images/reor-logo.png') }}" sizes="32x32" type="image/png">
</head>

<div style="position: absolute; top:1rem; right:1rem;">
  <a class="text-white" href="/">Home</a>
</div>

<body style="background: linear-gradient(135deg, #147577, #94e7c7);" class=" flex items-center justify-center min-h-screen">
  <div class="w-full max-w-xs md:max-w-md">
    

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}" style="background-color: rgba(204, 244, 254, 0.2)" class=" shadow-md rounded px-8 pt-6 pb-8 mb-4">
      @csrf
        <!-- Logo -->
      <div class="flex justify-center mb-6">
        <img src="{{ asset('images/reor-logo.png') }}" alt="Logo" class="h-20 w-20">
      </div>

      <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-2xl md:text-2xl text-center pb-4">
        <span class="block">
            RE&OR Analytics.
        </span>
    </h1>

      <!-- Email Input -->
      <div class="mb-4">
        <label for="email" class=" block text-sm font-bold mb-2">Correo electrónico</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-200 focus:shadow-outline">
      </div>

      <!-- Password Input -->
      <div class="mb-6">
        <label for="password" class=" block text-sm font-bold mb-2">Contraseña</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-200 focus:shadow-outline">
      </div>

      <!-- Submit Button -->
      <div class="flex items-center justify-between">
        <button type="submit" style="background-color: #198b9a" class="text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
          Sign In
        </button>
      </div>
    </form>

  </div>
</body>
</html>
