<x-layout>
    <x-slot name="sentot">{{ $sentot }}</x-slot>
    <section id="section1" class="bg-white">
        <div class="gap-8 items-center rounded-xl py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6 bg-white shadow-lg">
            <img class="w-full dark:hidden mx-auto rounded-xl shadow-2x1" src="img/yaya.jpg" alt="dashboard image">
            <div class="mt-4 md:mt-0 bg-white rounded-xl p-6 shadow-2xl">
                <img src="img/rame.jpeg" alt="Deskripsi Gambar" class="w-full h-70 object-cover mx-auto rounded-xl">
                <h2 class="mt-4 mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Pengalaman Organisasi.</h2>
                <p class="mb-6 font-light text-gray-800 md:text-lg dark:text-gray-800 text-justify">
                    Saya berkesempatan untuk berkontribusi sebagai volunteer dalam acara 
                    <b class="text-red-700">Mudamudi Festival Music</b> dengan bergabung di divisi 
                    <b class="text-red-700">Logistik</b>. Dalam peran ini, saya bertanggung jawab untuk memastikan kelancaran distribusi perlengkapan dan kebutuhan acara, serta mendukung tim dalam menjaga efisiensi operasional. Pengalaman ini memberikan saya kesempatan untuk bekerja dalam tim, meningkatkan keterampilan manajemen logistik, serta belajar bagaimana menangani pengembangan tantangan dalam event berskala besar.
                </p>
                <button onclick="scrollToMagang()" class="inline-flex items-center text-white bg-orange-700 hover:bg-orange-400 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                    Pengalaman Magang
                    <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 14a1 1 0 0 1-.7-.3l-4-4a1 1 0 0 1 1.4-1.4L10 11.6l3.3-3.3a1 1 0 1 1 1.4 1.4l-4 4a1 1 0 0 1-.7.3z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="mt-4 md:mt-0 bg-white rounded-xl p-6 shadow-lg">
                <img src="img/magang_pro.jpg" alt="Deskripsi Gambar" class="w-full h-70 object-cover mx-auto rounded-xl">
                <h2 id="pengalamanMagang" class="mt-4 mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Pengalaman Magang.</h2>
                <p class="mb-6 font-light text-gray-800 md:text-lg dark:text-gray-800 text-justify">
                    Selama tiga bulan magang di 
                    <b class="text-green-800">Badan Kebijakan Pembangunan Kesehatan (BKPK) Kementerian Kesehatan,</b>
                    saya berkesempatan untuk berkontribusi sebagai programmer dalam pengembangan proyek 
                    <b class="text-green-800">Website data mikro.</b>
                    Dalam peran ini, saya dengan teman-teman saya bertanggung jawab untuk membantu pengembangan termasuk debugging, optimalisasi, serta implementasi fitur baru guna mendukung kebutuhan.

                    Selain itu, saya juga mendapatkan pengalaman berharga dalam bekerja dengan tim pengembang serta memahami bagaimana teknologi diterapkan dalam sektor kesehatan untuk mendukung pengambilan keputusan berbasis data. Magang ini memberi saya wawasan yang lebih luas tentang pentingnya sistem informasi dalam dunia kesehatan serta meningkatkan keterampilan saya dalam pengembangan perangkat lunak, pemecahan masalah, dan kolaborasi tim.
                </p>
            </div>
            <img class="w-full dark:hidden mx-auto rounded-xl shadow-2x1" src="img/gang.jpg" alt="dashboard image">
        </div>
    </section>

    <script>
        function scrollToMagang() {
            document.getElementById("pengalamanMagang").scrollIntoView({ behavior: "smooth" });
        }
    </script>
</x-layout>
