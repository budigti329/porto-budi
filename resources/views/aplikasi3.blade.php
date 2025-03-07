<x-layout>
  <!-- Hapus flex justify-center agar konten tidak di-wrap menjadi container terbatas -->
  <div class="w-full">
    <x-slot:sentot>{{ $sentot }}</x-slot:sentot> 
    <article class="py-8 w-full border-b border-gray-500">
      <h2 class=" text-center mb-1 text-3xl tracking-tight font-bold text-gray-900">Application <a class="text-green-500">Website</a> Online Shop </h2>
      <div class="text-base text-center text-gray-600">
        <a href="/posts"> Creator : Budi Utomo </a>
      <p class="my-4 font-thin">
        Coming Soon!
      </p>
      <a href="/posts" class="font-medium text-blue-900 hover:underline">
        &laquo; Back to the last page
      </a>
      <div class="mt-4 text-center">
        <img src="img/cuming.jpg" alt="Deskripsi Gambar" class="mx-auto w-80 h-auto rounded-lg shadow-lg">
      </div>
    </article>
  </div>
  <div class="bg-white">
    <!-- Kamu bisa menggunakan container responsif Tailwind untuk mengatur padding -->
    <div class="mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
      <h2 class="sr-only">Products</h2>
      <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 xl:gap-x-8">
        <a href="#" class="group">
          <img src="img/cuming.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="w-full h-auto max-w-2xl rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
          <p class="mt-1 text-lg font-medium text-gray-900">Coming Soon!</p>
          <h3 class="mt-4 text-sm text-gray-700">Coming Soon!</h3>
        </a>
        <a href="#" class="group">
          <img src="img/cuming.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="w-full h-auto max-w-2xl rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
          <p class="mt-1 text-lg font-medium text-gray-900">Coming Soon!</p>
          <h3 class="mt-4 text-sm text-gray-700">Coming Soon!</h3>
        </a>
        <a href="#" class="group">
          <img src="img/cuming.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="w-full h-auto rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
          <p class="mt-1 text-lg font-medium text-gray-900">Coming Soon!</p>
          <h3 class="mt-4 text-sm text-gray-700">Coming Soon!</h3>
        </a>
        <a href="#" class="group">
          <img src="img/cuming.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="w-full h-auto rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
          <p class="mt-1 text-lg font-medium text-gray-900">Coming Soon!</p>
          <h3 class="mt-4 text-sm text-gray-700">Coming Soon!</h3>
        </a>
        <a href="#" class="group">
          <img src="img/cuming.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="w-full h-auto rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
          <p class="mt-1 text-lg font-medium text-gray-900">Coming Soon!</p>
          <h3 class="mt-4 text-sm text-gray-700">Coming Soon!</h3>
        </a>
        <a href="#" class="group">
            <img src="img/cuming.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="w-full h-auto rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
            <p class="mt-1 text-lg font-medium text-gray-900">Coming Soon!</p>
          <h3 class="mt-4 text-sm text-gray-700">Coming Soon!</h3>
          </a>
      </div>
    </div>
  </div>
  </div>
</div>
</x-layout>
