<header class="bg-blue-900 flex items-center">
    <div class="container mx-auto">
      <div class="flex justify-between items-center px-4">
        <div class="py-3 items-center">
          <a href="/" class="text-slate-200 font-bold text-2xl lg:text-3xl font-hahmlet">
            Fahmi
          </a>
        </div>
        <div>
          <form action="/logout" method="POST">
            @csrf
            <button class="bg-sky-500 items-center rounded-lg px-4 py-1 text-white font-inter font-bold" type="submit">logout</button>
          </form>
        </div>
      </div>
    </div>
</header>