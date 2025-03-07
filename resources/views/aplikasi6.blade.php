<x-layout>
    <!-- Hapus flex justify-center agar konten tidak di-wrap menjadi container terbatas -->
    <div class="w-full">
        <x-slot:sentot>{{ $sentot }}</x-slot:sentot>
        <article class="py-8 w-full border-b border-gray-500">
          <h2 class="text-center mb-1 text-3xl tracking-tight font-bold text-gray-900">
            Analisis Sentiment <a class="text-red-500">Machine Learning</a> Mengukur Tingkat Opini Masyarakat / Users
          </h2>
          <div class="text-base text-center text-gray-600">
            <a href="/posts"> Creator : Budi Utomo </a>
            <p class="my-4 font-thin">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, fugiat perspiciatis iure quae nobis at, odit commodi a, illum aliquam sequi ullam exercitationem voluptatum nulla. Molestiae blanditiis odio voluptatibus possimus voluptatum et cumque esse non dolorem. Nulla quibusdam, voluptatibus dolor a, aliquam illum nihil, vitae quaerat adipisci ipsa odit optio!
            </p>
            <a href="/posts" class="font-medium text-blue-900 hover:underline">&laquo; Back to the last page</a>
          </div>
          <div class="mt-4 text-center">
            <img src="img/machine_learning.png" alt="Deskripsi Gambar" class="mx-auto w-80 h-auto rounded-lg shadow-lg">
          </div>
        </article>
      </div>
      
      <div class="bg-white rounded-xl shadow-lg">
        <!-- Kamu bisa menggunakan container responsif Tailwind untuk mengatur padding -->
        <div class="mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
          <h2 class="sr-only">Products</h2>
          <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 xl:gap-x-8">
            <a href="#" class="group">
              <img src="img/machine_learning_1.png" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="w-full h-auto max-w-2xl rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
              <p class="mt-1 text-lg font-medium text-gray-900">Labeling Sentiment</p>
              <h3 class="mt-4 text-sm text-gray-700">Membuat Clustering pada setiap masing-masing variabel dan melakukan visualisasi statistik untuk melihat Sentiment yang didapat.</h3>
            </a>
            <a href="#" class="group">
              <img src="img/machine_learning_2.png" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="w-full h-auto rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
              <p class="mt-1 text-lg font-medium text-gray-900">Labeling Sentiment</p>
              <h3 class="mt-4 text-sm text-gray-700">Melakukan visualisasi dengan diagram baris untuk membandingkan keseluruhan opini yang didapat pada keseluruhan dataset.</h3>
            </a>
            <a href="#" class="group">
              <img src="img/machine_learning_3.png" alt="Person using a pen to cross a task off a productivity paper card." class="w-full h-auto rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
              <p class="mt-1 text-lg font-medium text-gray-900">Visualisasi Piechart</p>
              <h3 class="mt-4 text-sm text-gray-700">Melakukan Visualisasi Piechart dengan bentuk % untuk melihat sentiment/opini yang didapat setelah melakukan pengolahan dan analisis pada keseluruhan dataset.</h3>
            </a>
            <a href="#" class="group">
              <img src="img/machine_learning_4.png" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="w-full h-auto rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
              <p class="mt-1 text-lg font-medium text-gray-900">Confusion Matrix</p>
              <h3 class="mt-4 text-sm text-gray-700">Untuk melihat kelayakan performa machine learning yang dibuat untuk melakukan sebuah klasifikasi.</h3>
            </a>
            <a href="#" class="group">
              <img src="img/machine_learning_5.png" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="w-full h-auto rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
              <p class="mt-1 text-lg font-medium text-gray-900">K-FOLD CROSS Validation</p>
              <h3 class="mt-4 text-sm text-gray-700">Bertujuan Untuk Melakukan Validasi Dari Hasil Pengolahan dan Analisis Untuk Membuktikan Hasil Akurasi dari Evaluasi Metrik yang didapat terbilang valid.</h3>
            </a>
            <a href="#" class="group">
                <img src="img/machine_learning_6.png" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="w-full h-auto rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
                <p class="mt-1 text-lg font-medium text-gray-900">Evaluasi Support Vector Machine</p>
              <h3 class="mt-4 text-sm text-gray-700">Output dari keseluruhan yang didapat setelah melakukan pemprosesan dan analisis.</h3>
              </a>
          </div>
        </div>
    </div>
    
    </div>
  </div>
  </x-layout>
  