<x-layout>
    <x-slot name="sentot">{{ $sentot }}</x-slot>
    <div class="relative isolate px-6 py-24 sm:py-32 lg:px-8 rounded-3xl bg-gradient-to-r from-white/60 via-blue-100/60 to-white/60 backdrop-blur-lg">
      <div class="mx-auto max-w-4xl text-center">
        <h2 class="text-base/7 font-semibold text-indigo-600">Contact</h2>
        <p class="mt-2 text-5xl font-semibold tracking-tight text-gray-900 sm:text-6xl">Social Media</p>
      </div>
      <p class="mx-auto mt-6 max-w-2xl text-center text-lg font-medium text-gray-600 sm:text-xl/8">
        Berikut adalah akun sosial media saya yang dapat dihubungi untuk berbagai keperluan.
      </p>
      
      <!-- Container Grid -->
      <div class="mx-auto mt-16 grid max-w-7xl grid-cols-1 gap-6 sm:mt-20 sm:grid-cols-4">
        
        <!-- Kotak 1: Instagram -->
        <div class="relative flex flex-col h-full rounded-3xl bg-gray-900 p-4 ring-1 shadow-lg ring-gray-900/10">
          <div class="mb-4">
            <img src="img/instagram.jpg" alt="Instagram" class="mx-auto h-24 object-cover rounded-full">
          </div>
          <h3 class="text-base font-semibold text-center text-indigo-400">Instagram</h3>
          <p class="mt-4 text-gray-300">Berikut platform media sosial Instagram saya yang dapat ditemukan dengan mengklik tautan di bawah ini.</p>
          <ul role="list" class="mt-4 flex-grow space-y-3 text-sm text-gray-300">
            <li class="flex gap-x-3">
              <svg class="h-5 w-5 flex-none text-indigo-400" fill="currentColor" aria-hidden="true">
                <path d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"/>
              </svg>
              Mengikuti perkembangan tren.
            </li>
            <li class="flex gap-x-3">
              <svg class="h-5 w-5 flex-none text-indigo-400" fill="currentColor" aria-hidden="true">
                <path d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"/>
              </svg>
              Update kegiatan sosial.
            </li>
          </ul>
          <a href="https://www.instagram.com/budi_gti" class="mt-6 block rounded-md bg-indigo-500 px-3 py-2 text-center text-sm font-semibold text-white shadow hover:bg-indigo-400">
            Hubungi
          </a>
        </div>

        <!-- Kotak 2: Facebook -->
        <div class="relative flex flex-col h-full rounded-3xl bg-gray-900 p-4 ring-1 shadow-lg ring-gray-900/10">
          <div class="mb-4">
            <img src="img/facebook.jpg" alt="Facebook" class="mx-auto h-24 object-cover rounded-full">
          </div>
          <h3 class="text-base font-semibold text-center text-indigo-400">Facebook</h3>
          <p class="mt-4 text-gray-300">Platform media sosial Facebook saya dapat ditemukan dengan mengklik tautan di bawah ini.</p>
          <ul role="list" class="mt-4 flex-grow space-y-3 text-sm text-gray-300">
            <li class="flex gap-x-3">
              <svg class="h-5 w-5 flex-none text-indigo-400" fill="currentColor" aria-hidden="true">
                <path d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"/>
              </svg>
              Berinteraksi dengan komunitas IT.
            </li>
          </ul>
          <a href="https://www.facebook.com/hikara.kaito" class="mt-6 block rounded-md bg-indigo-500 px-3 py-2 text-center text-sm font-semibold text-white shadow hover:bg-indigo-400">
            Hubungi
          </a>
        </div>

        <!-- Kotak 3: LinkedIn -->
        <div class="relative flex flex-col h-full rounded-3xl bg-gray-900 p-4 ring-1 shadow-lg ring-gray-900/10">
          <div class="mb-4">
            <img src="img/linked.jpg" alt="LinkedIn" class="mx-auto h-24 object-cover rounded-full">
          </div>
          <h3 class="text-base font-semibold text-center text-indigo-400">LinkedIn</h3>
          <p class="mt-4 text-gray-300">Berikut profile LinkedIn saya yang dapat dihubungi melalui tautan di bawah ini.</p>
          <ul role="list" class="mt-4 flex-grow space-y-3 text-sm text-gray-300">
            <li class="flex gap-x-3">
              <svg class="h-5 w-5 flex-none text-indigo-400" fill="currentColor" aria-hidden="true">
                <path d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"/>
              </svg>
              Melamar pekerjaan lebih efisien.
            </li>
          </ul>
          <!-- Untuk LinkedIn, tautan masih kosong -->
          <a href="https://www.linkedin.com/in/budi-utomo-a754b4169/" class="mt-6 block rounded-md bg-indigo-500 px-3 py-2 text-center text-sm font-semibold text-white shadow hover:bg-indigo-400">
            Hubungi
          </a>
        </div>

        <!-- Kotak 4: Discord -->
        <div class="relative flex flex-col h-full rounded-3xl bg-gray-900 p-4 ring-1 shadow-lg ring-gray-900/10">
          <div class="mb-4">
            <img src="img/disscord.jpg" alt="Discord" class="mx-auto h-24 object-cover rounded-full">
          </div>
          <h3 class="text-base font-semibold text-center text-indigo-400">Discord</h3>
          <p class="mt-4 text-gray-300">Dapat menghubungi saya melalui Discord dengan mengklik tautan di bawah ini.</p>
          <ul role="list" class="mt-4 flex-grow space-y-3 text-sm text-gray-300">
            <li class="flex gap-x-3">
              <svg class="h-5 w-5 flex-none text-indigo-400" fill="currentColor" aria-hidden="true">
                <path d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"/>
              </svg>
              Interaksi aktif dan fast response.
            </li>
          </ul>
          <a href="https://discord.com/users/budi2644" class="mt-6 block rounded-md bg-indigo-500 px-3 py-2 text-center text-sm font-semibold text-white shadow hover:bg-indigo-400">
            Hubungi
          </a>
        </div>

      </div>
    </div>
</x-layout>
