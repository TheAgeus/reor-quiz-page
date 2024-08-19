<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RE&OR Analytics</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="icon" href="{{ asset('images/reor-logo.png') }}" sizes="32x32" type="image/png">
</head>

<style>
  ::-webkit-scrollbar {
    width: 1px;
  }
</style>

<div style="position: absolute; top:1rem; right:1rem;">
  <a class="text-white" href="/login">Login</a>
</div>

<body style="background: linear-gradient(135deg, #147577, #94e7c7);" class="flex items-center justify-center min-h-screen">
  @include('components.quiz-form')
</body>
</html>
