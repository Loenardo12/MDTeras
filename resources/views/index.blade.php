<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        {{-- Start Main --}}
        <main class="h-screen bg-catering font-poppins flex items-center">
            <div class="absolute inset-0 bg-black opacity-40 z-0 h-screen"></div>
            <div class="relative text-slate-100 z-10 flex flex-col items-start pl-4">
                <h2 class="text-xl md:text-3xl">Selamat Datang Di</h2>
                <h1 class="text-3xl font-semibold text-yellow-400 md:text-5xl">MD.Teras</h1>
                <p class="text-md md:text-lg">Menyediakan kebutuhan makanan sejak 2010</p>
            </div>
        </main>
        {{-- End Main --}}

        {{-- Start Section I --}}
        <section class="bg-slate-100 font-poppins">
            <div class="px-10 py-8 text-center space-y-2 lg:pt-14">
                <p class="text-xl font-semibold uppercase">"kualitas menu terbaik <br>dengan harga yang
                    terjangkau."</p>
                <h2 class="text-sm text-yellow-400 font-semibold uppercase">- Owner Kami Alan Zagi -</h2>
                <h1 class="text-4xl font-euphoria">Alan Zagi</h1>
            </div>

            <div class="px-6 grid grid-cols-1 gap-y-6 pb-10 md:grid-cols-3 md:gap-y-0 md:gap-x-6 lg:px-40 lg:pb-20">
                <div class="flex overflow-hidden">
                    <img src="images/cateringbackground.jpg"
                        class="rounded-md object-cover w-full h-full transition-transform duration-300 hover:scale-110"
                        alt="Gambar Catering">
                </div>

                <div class="flex overflow-hidden">
                    <img src="images/cateringbackground.jpg"
                        class="rounded-md object-cover w-full h-full transition-transform duration-300 hover:scale-110"
                        alt="Gambar Catering">
                </div>

                <div class="p-10 bg-slate-100 border border-gray-200 rounded-lg shadow flex flex-col justify-center">
                    <div class="text-center space-y-3 px-5">
                        <h5 class="-mb-5 text-3xl font-euphoria tracking-tight text-gray-900 lg:text-4xl">
                            Mengenal
                        </h5>
                        <h1 class="text-3xl mb-3 font-bold uppercase text-gray-700 lg:text-3xl">kisah kami</h1>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-7 mx-auto">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                        </svg>
                        <p class="text-lg">Kami berkomitmen untuk menyajikan hidangan lezat, sehat, dan berkualitas tinggi
                            dengan layanan profesional untuk setiap kebutuhan Anda.</p>
                    </div>
                </div>
            </div>

        </section>
        {{-- End Section I --}}

        {{-- Start Section II --}}
        <section class="bg-slate-100 font-poppins">
            <div class="relative bg-catering2">
                <div class="absolute inset-0 bg-black opacity-40 z-0"></div>
                <div class="relative p-20 text-slate-100 text-center z-10">
                    <h1 class="font-euphoria text-5xl">Berbagai</h1>
                    <h1 class="text-4xl font-semibold">Menu Favorit</h1>
                </div>
            </div>

            <div class="grid grid-cols-1 py-4 px-4 gap-y-8 pb-10 md:grid-cols-4 md:gap-y-8 md:gap-x-6 md:px-10 md:py-10">
                <div>
                    <div class="overflow-hidden rounded-lg">
                        <img src="images/ayambakarthumbnail.jpg"
                            class="rounded-lg w-full h-[10em] object-cover transition-transform duration-300 hover:scale-110"
                            alt="Catering Photo">
                    </div>
                    <h1 class="text-xl font-semibold pt-2">Ayam Bakar</h1>
                    <p class="text-sm">Ayam / Madu / Kecap</p>
                </div>

                <div>
                    <div class="overflow-hidden rounded-lg">
                        <img src="images/cateringayamgulai.jpg"
                            class="rounded-lg w-full h-[10em] object-cover transition-transform duration-300 hover:scale-110"
                            alt="Catering Photo">
                    </div>
                    <h1 class="text-xl font-semibold pt-2">Ayam Gulai</h1>
                    <p class="text-sm">Ayam / Santan / Rempah</p>
                </div>

                <div>
                    <div class="overflow-hidden rounded-lg">
                        <img src="images/ayamgorengthumbnail.jpg"
                            class="rounded-lg w-full h-[10em] object-cover transition-transform duration-300 hover:scale-110"
                            alt="Catering Photo">
                    </div>
                    <h1 class="text-xl font-semibold pt-2">Ayam Goreng</h1>
                    <p class="text-sm">Ayam / Minyak / Rempah</p>
                </div>

                <div>
                    <div class="overflow-hidden rounded-lg">
                        <img src="images/ayamrendang.jpg"
                            class="rounded-lg w-full h-[10em] object-cover transition-transform duration-300 hover:scale-110"
                            alt="Catering Photo">
                    </div>
                    <h1 class="text-xl font-semibold pt-2">Ayam Rendang</h1>
                    <p class="text-sm">Ayam / Santan / Rempah</p>
                </div>
            </div>

        </section>
        {{-- End Section II --}}

        {{-- Start Section III --}}
        <section class="bg-slate-100 font-poppins">
            <div class="relative bg-catering3">
                <div class="absolute inset-0 bg-black opacity-40 z-0"></div>
                <div class="relative p-20 text-slate-100 text-center z-10">
                    <h1 class="font-euphoria text-5xl">Berbagai</h1>
                    <h1 class="text-4xl font-semibold">Pengalaman Terbaik</h1>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-y-6 py-14 lg:gap-y-4">
                <div class="grid grid-cols-1 p-6 gap-y-6 md:grid-cols-2 md:gap-x-6 lg:px-32">
                    <div class="grid grid-cols-2 gap-4 h-full md:gap-6">
                        <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg" alt="">
                        <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg" alt="">
                        <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg" alt="">
                        <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg" alt="">
                    </div>

                    <div
                        class="p-10 bg-slate-100 border border-gray-200 rounded-lg shadow-md shadow-yellow-500 flex flex-col justify-center h-full">
                        <div class="text-center space-y-3 px-5">
                            <h5 class="-mb-4 text-3xl font-euphoria tracking-tight text-gray-900 lg:text-4xl">
                                Berbagai
                            </h5>
                            <h1 class="text-3xl mb-3 font-bold uppercase text-gray-700">menu kami</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="h-7 mx-auto">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                            </svg>
                            <div class="text-lg space-y-2">
                                <div>Kami berkomitmen untuk menyajikan hidangan lezat, sehat, dan berkualitas
                                    tinggi dengan layanan profesional untuk setiap kebutuhan Anda.</div>
                                <div>
                                    <a href="/pemesanan" class="underline text-yellow-400 font-semibold">Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 p-6 gap-y-6 md:grid-cols-2 md:gap-x-6 lg:px-32">
                    <div
                        class="p-10 bg-slate-100 border border-gray-200 rounded-lg shadow-md shadow-yellow-500 flex flex-col justify-center h-full">
                        <div class="text-center space-y-3 px-5">
                            <h5 class="-mb-4 text-3xl font-euphoria tracking-tight text-gray-900 lg:text-4xl">
                                Kunjungi
                            </h5>
                            <h1 class="text-3xl mb-3 font-bold uppercase text-gray-700">Restoran Kami</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-7 mx-auto">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                            </svg>
                            <ul class="text-lg space-y-2">
                                <li>Jl. Kridasana No. 132, Pasiran, Kec. Singkawang Barat, Kota Singkawang</li>
                                <li>0815-2155-0913 (Whatsapp)</li>
                                <li>
                                    <a href="/kontak" class="text-yellow-400 underline font-semibold">
                                        Lihat Lokasi
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 h-full md:gap-6">
                        <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg"
                            alt="">
                        <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg"
                            alt="">
                        <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg"
                            alt="">
                        <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg"
                            alt="">
                    </div>
                </div>
            </div>


        </section>
        {{-- End Section III --}}
    @endsection
</x-layout>
