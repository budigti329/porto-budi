<x-layout>
  <x-slot:sentot>{{ $sentot }}</x-slot:sentot>
  <h3 class="text-xl"></h3>
  <div class="bg-white rounded-2xl shadow-lg overflow-hidden border-4 border-orange-600 p-6">
      <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
        <div>
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Selamat datang di portofolio saya!</h2>
          <p class="mt-4 text-gray-600">Perkenalkan nama saya <b class="text-red-500">Budi Utomo</b>, Fresh graduate S1 Teknik Informatika dengan minat di bidang pemrograman, khususnya sebagai <b class="text-red-500">Junior Web Developer</b>. Saya memiliki passion dalam membangun website yang fungsional, responsif, dan user-friendly. Saya juga memiliki minat analisis menggunakan <b class="text-red-500">Machine Learning</b> dan <b class="text-red-500">Aplikasi Android</b>. Jelajahi portofolio saya untuk melihat proyek-proyek yang telah saya kerjakan dapat dengan klik tautan di bawah ini📌.</p>
          <br>
          <div>
            <button type="submit" class="flex w-full justify-center rounded-2xl bg-red-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-md hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
              <a href="/posts">Klik di sini untuk melihat project yang telah saya buat</a>
            </button>
          </div>
          
          <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
            <div class="border-t border-orange-600 pt-2 rounded-xl p-4 bg-gray-50 border-2 ">
              <dt class="font-medium text-purple-800"><i>PHP Hypertext Preprocessor</i></dt>
              <dd class="mt-2 text-sm text-gray-600">PHP adalah bahasa pemrograman yang biasa saya gunakan untuk membuat aplikasi berbasis website.</dd>
            </div>
            <div class="border-t border-orange-600 pt-2  rounded-xl p-4 bg-gray-50 border-2 ">
              <dt class="font-medium text-red-600"><i>Framework Laravel</i></dt>
              <dd class="mt-2 text-sm text-gray-600">Framework pada website yang saya buat salah satunya menggunakan Laravel sebagai framework.</dd>
            </div>
            <div class="border-t border-orange-600 pt-2  rounded-xl p-4 bg-gray-50 border-2 ">
              <dt class="font-medium text-blue-600"><i>Bootstrap / Tailwind CSS</i></dt>
              <dd class="mt-2 text-sm text-gray-600">Untuk desain pada website, saya biasa menggunakan Bootstrap atau Tailwind CSS.</dd>
            </div>
            <div class="border-t border-orange-600 pt-2  rounded-xl p-4 bg-gray-50 border-2 ">
              <dt class="font-medium text-orange-400"><i>MySQL</i></dt>
              <dd class="mt-2 text-sm text-gray-600">Sebagai database pada website yang saya rancang, saya biasa menggunakan MySQL dengan web server Apache atau Nginx.</dd>
            </div>
            <div class="border-t border-orange-600 pt-2  rounded-xl p-4 bg-gray-50 border-2 ">
              <dt class="font-medium text-yellow-600"><i>Java</i></dt>
              <dd class="mt-2 text-sm text-gray-600">Bahasa pemrograman Java pernah saya gunakan dalam pembuatan aplikasi berbasis Android.</dd>
            </div>
            <div class="border-t border-orange-600 pt-2  rounded-xl p-4 bg-gray-50 border-2 ">
              <dt class="font-medium text-green-600"><i>Python</i></dt>
              <dd class="mt-2 text-sm text-gray-600">Bahasa pemrograman Python saya gunakan untuk melakukan Machine Learning dalam klasifikasi opini pengguna.</dd>
            </div>
          </dl>
        </div>
        <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
          <img src="img/cicing.jpg" alt="HTML illustration" class="rounded-xl bg-gray-100 shadow border-2 border-orange-600">
          <img src="img/struktur.jpg" alt="Struktur aplikasi" class="rounded-xl bg-gray-100 shadow border-2 border-orange-600">
          <img src="img/header.jpg" alt="Header website" class="rounded-xl bg-gray-100 shadow border-2 border-orange-600">
          <img src="img/pop.jpg" alt="Python coding" class="rounded-xl bg-gray-100 shadow border-2 border-orange-600">
        </div>
      </div>
    </div>
</x-layout>
