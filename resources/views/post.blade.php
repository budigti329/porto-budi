<x-layout>
  <!-- Hapus flex justify-center agar konten tidak di-wrap menjadi container terbatas -->
  <div class="w-full">
    <x-slot:sentot>{{ $sentot }}</x-slot:sentot> 
    <article class="py-8 w-full border-b border-gray-500">
      <h2 class="text-center mb-1 text-3xl tracking-tight font-bold text-gray-900">
        {{ $post['sentot'] }}
      </h2>
      <div class="text-base text-center text-gray-600">
        <a href="/posts"> {{ $post['author'] }} | 19 Februari 2025</a>
      <p class="my-4 font-thin">
        {{ $post['body'] }}
      </p>
      <a href="/posts" class="font-medium text-blue-900 hover:underline">
        &laquo; Back to the last page
      </a>
    </article>
  </div>
    <div class="bg-white">
      <!-- Kamu bisa menggunakan container responsif Tailwind untuk mengatur padding -->
      <div class="mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
        <h2 class="sr-only">Products</h2>
        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
          <a href="#" class="group">
            <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/category-page-04-image-card-01.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
            <h3 class="mt-4 text-sm text-gray-700">Earthen Bottle</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$48</p>
          </a>
          <a href="#" class="group">
            <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
            <h3 class="mt-4 text-sm text-gray-700">Nomad Tumbler</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
          </a>
          <a href="#" class="group">
            <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/category-page-04-image-card-03.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
            <h3 class="mt-4 text-sm text-gray-700">Focus Paper Refill</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$89</p>
          </a>
          <a href="#" class="group">
            <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/category-page-04-image-card-04.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
            <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
          </a>
          <a href="#" class="group">
            <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/category-page-04-image-card-04.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
            <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
          </a>
          <!-- More products... -->
        </div>
      </div>
    </div>
  </div>
</div>
</x-layout>
