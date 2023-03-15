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
  <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
</head>
<body>
   @include('admin.partials.navbar')

    <section>
        <div class="flex flex-col">
            <div class="flex flex-1">
                <div class="flex flex-col bg-blue-200 w-52 p-4 h-screen sticky top-0">
                    <div class="p-2"><a href="/dashboard" class="text-base font-inter font-semibold">My Dashboard</a></div>
                    <div class="p-2"><a href="/dashboard/posts" class="text-base font-inter font-semibold">All post</a></div>
                </div>
                <div class="w-full p-6">
                    @yield('dashboard')
                </div>
            </div>
        </div>
    </section>
    <script>
        ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
            } );


        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug')
    
          title.addEventListener('change', function() {
            fetch('/dashboard/cekSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
          });
    </script>
</body>
</html>