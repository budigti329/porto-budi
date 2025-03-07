<x-layout>
  <!-- Hapus flex justify-center agar konten tidak di-wrap menjadi container terbatas -->
  <div class="w-full">
    <x-slot:sentot>{{ $sentot }}</x-slot:sentot> 
    <article class="py-8 w-full border-b border-gray-500">
      <h2 class=" text-center mb-1 text-3xl tracking-tight font-bold text-gray-900">Application <a class="text-green-500">Website</a> Profile Company / Perusahaan</h2>
      <div class="text-base text-center text-gray-600">
        <a href="/posts"> Creator : Budi Utomo </a>
      <p class="my-4 font-thin">
        Aplikasi Perusahaan Yang memiliki berbagai section dimulai dari nama perusahaan, lalu kinerja atau visi misi perusahaan dan juga dilanjutkan pada catalog atau produk atau jasa yang ditawarkan setelah nya ada section untuk mengikuti media sosial (LinkTree), dan juga feedback serta footer yang dapat dikonfigurasikan dengan berbagai element.
      </p>
      <a href="/posts" class="font-medium text-blue-900 hover:underline">
        &laquo; Back to the last page
      </a>
      <div class="mt-4 text-center">
        <img src="img/html.png" alt="Deskripsi Gambar" class="mx-auto w-80 h-auto rounded-lg shadow-lg">
      </div>
    </article>
  </div>
  <div class="bg-white">
    <!-- Kamu bisa menggunakan container responsif Tailwind untuk mengatur padding -->
    <div class="mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
      <h2 class="sr-only">Products</h2>
      <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 xl:gap-x-8">
        <a href="#" class="group">
          <img src="img/peru1.png" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="w-full h-auto max-w-2xl rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
          <p class="mt-1 text-lg font-medium text-gray-900">Hero Section / Section Awal</p>
          <h3 class="mt-4 text-sm text-gray-700">Hero Section atau Tampilan Awal Paling atas dibuat dengan gambar serta nama perusahaan atau website dengan memberikan efek gradasi serta corak ombak menggunakan cdn javascript.</h3>
        </a>
        <a href="#" class="group">
          <img src="img/peru2.png" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="w-full h-auto max-w-2xl rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
          <p class="mt-1 text-lg font-medium text-gray-900">Section About / Tentang Perusahaan ataupun Website.</p>
          <h3 class="mt-4 text-sm text-gray-700">Menggunakan Carousel atau Slideshow dengan bantuan javascript yang didalam nya bisa di isi dengan informasi atau step by step tentang perusahaan ataupun website tersebut.</h3>
        </a>
        <a href="#" class="group">
          <img src="img/peru3.png" alt="Person using a pen to cross a task off a productivity paper card." class="w-full h-auto rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
          <p class="mt-1 text-lg font-medium text-gray-900">Section Catalog / Product</p>
          <h3 class="mt-4 text-sm text-gray-700">Berisikan Tentang Product apa saja yang tersedia atau dijual didalam Website/Perusahaan ini.</h3>
        </a>
        <a href="#" class="group">
          <img src="img/peru4.png" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="w-full h-auto rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
          <p class="mt-1 text-lg font-medium text-gray-900">LinkTree</p>
          <h3 class="mt-4 text-sm text-gray-700">Terdapat Bagian yang mengarahkan ke sosial media ataupun Community perusahaan/website tersebut.</h3>
        </a>
        <a href="#" class="group">
          <img src="img/peru5.png" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="w-full h-auto rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
          <p class="mt-1 text-lg font-medium text-gray-900">Contact Section</p>
          <h3 class="mt-4 text-sm text-gray-700">Terdapat Section Kontak Jika ingin memberikan feedback dari para users/pengguna dalam keberlangsungan kemajuan kinerja website ataupun fungsionalitas website.</h3>
        </a>
        <a href="#" class="group">
            <img src="img/peru6.png" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="w-full h-auto rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
            <p class="mt-1 text-lg font-medium text-gray-900">Footer</p>
          <h3 class="mt-4 text-sm text-gray-700">Masih Terdapat banyak space kosong yang dapat dikembangkan lebih lanjut.</h3>
          </a>
      </div>
    </div>
  </div>
  </div>
</div>
</x-layout>
