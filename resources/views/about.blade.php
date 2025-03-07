<x-layout>
  <x-slot:sentot>{{ $sentot }}</x-slot:sentot>
  <div class="bg-white p-6 max-w-4xl mx-auto border rounded-lg shadow-lg">
      <nav aria-label="Breadcrumb" class="mb-4">
          <ol role="list" class="flex space-x-2 text-sm text-gray-500">
              <li class="flex items-center">
                  <a href="#" class="text-gray-900">About me</a>
                  <svg class="h-5 w-4 mx-2 text-gray-300" fill="currentColor" viewBox="0 0 16 20">
                      <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                  </svg>
              </li>
              <li class="flex items-center">
                  <a href="#" class="text-gray-900">Biodata</a>
              </li>
          </ol>
      </nav>

      <!-- Image and Info Section -->
      <div class="flex flex-col lg:flex-row items-start lg:items-center lg:space-x-8">
          <img src="img/profile.jpeg" alt="Profile Picture" class="rounded-lg w-32 h-32 object-cover border">
          <div class="mt-4 lg:mt-0">
              <h1 class="text-2xl font-bold text-gray-900">Budi Utomo</h1>
              <p class="text-gray-700">Junior Web Developer</p>
          </div>
      </div>

      <!-- Detail Section-->
      <div class="mt-6 border-t border-gray-200 pt-4">
          <dl class="space-y-4 text-gray-700">
              <div class="grid grid-cols-3 gap-4">
                  <dt class="font-medium text-gray-900">Full Name / Nama Lengkap :</dt>
                  <dd class="col-span-2">Budi Utomo</dd>
              </div>
              <div class="grid grid-cols-3 gap-4">
                  <dt class="font-medium text-gray-900">Age / Umur :</dt>
                  <dd class="col-span-2">24 Tahun</dd>
              </div>
              <div class="grid grid-cols-3 gap-4">
                  <dt class="font-medium text-gray-900">Email Address :</dt>
                  <dd class="col-span-2">budits.gti@gmail.com</dd>
              </div>
              <div class="grid grid-cols-3 gap-4">
                  <dt class="font-medium text-gray-900">Skill / Kemampuan :</dt>
                  <dd class="col-span-2">Programmer Junior Web Developer</dd>
              </div>
              <div class="grid grid-cols-3 gap-4">
                  <dt class="font-medium text-gray-900">About Me / Tentang Saya :</dt>
                  <dd class="col-span-2">Saya adalah lulusan S1 Teknik Informatika yang memiliki passion mendalam di dunia pemrograman. Sebagai Junior Web Developer, saya bersemangat menciptakan solusi digital yang inovatif dan fungsional. Selain itu, saya juga tertarik pada Machine Learning, Data Science, serta pengembangan aplikasi mobile menggunakan Android Studio.</dd>
              </div>
          </dl>
      </div>

      <!-- Attachment Section -->
      <div class="mt-6 border-t border-gray-200 pt-4">
          <h2 class="text-lg font-medium text-gray-900">Attachment / Lampiran</h2>
          <ul class="mt-2 border border-gray-200 rounded-md divide-y divide-gray-100">
              <li class="flex justify-between items-center p-4 text-gray-700">
                  <div class="flex items-center space-x-2">
                      <svg class="size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z" clip-rule="evenodd" />
                      </svg>
                      <span class="font-medium truncate">CV_LENGKAP_BUDI_UTOMO.pdf</span>
                      <span class="text-gray-400">497.KB</span>
                  </div>
                  <a href="pdf/CV_LENGKAP_BUDI_UTOMO.pdf" download class="text-indigo-600 hover:text-indigo-500">Download</a>
              </li>
          </ul>
      </div>
  </div>
</x-layout>