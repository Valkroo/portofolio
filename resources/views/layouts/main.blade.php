<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hahmlet:wght@400;500;600;700&family=Inter:wght@100;200;400;500;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Portofolio Fahmi</title>
</head>
<body>
    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>