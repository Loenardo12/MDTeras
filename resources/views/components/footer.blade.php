<footer class="bg-zinc-900">
    <div class="mx-auto max-w-screen-xl space-y-8 px-4 pt-16 pb-7 sm:px-6 lg:space-y-16 lg:px-8">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-4">
            <div>
                <div class="text-yellow-400 font-poppins flex items-center gap-x-4">
                    <img src="{{ asset('images/' . 'alanxcode.png') }}" alt="" class="h-20 rounded-full" />
                    <h1 class="font-semibold text-3xl">MD.Teras</h1>
                </div>
                <p class="mt-4 max-w-xs text-slate-100">Hidangan berkualitas tinggi dengan pelayanan profesional,
                    terpercaya
                    untuk acara Anda.</p>

                <ul class="mt-8 flex gap-6">
                    <li>
                        <a href="https://facebook.com/alanzagirekber" rel="noreferrer" target="_blank"
                            class="text-yellow-400 transition hover:opacity-75">
                            <span class="sr-only">Facebook</span>

                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="https://instagram.com/alanzagi" rel="noreferrer" target="_blank"
                            class="text-yellow-400 transition hover:opacity-75">
                            <span class="sr-only">Instagram</span>

                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>


                </ul>
            </div>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:col-span-3 lg:grid-cols-4">
                <div>
                    <p class="font-medium text-slate-100 text-2xl font-playfair">Halaman</p>

                    <ul class="mt-4 space-y-1 text-md font-poppins">
                        <li>
                            <a href="{{ route('beranda') }}"
                                class="block py-2 px-3 transition hover:text-yellow-400 {{ $activePage === 'beranda' ? 'text-yellow-400' : 'text-slate-100' }}">
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('layanan') }}"
                                class="block py-2 px-3 transition hover:text-yellow-400 {{ $activePage === 'layanan' ? 'text-yellow-400' : 'text-slate-100' }}">
                                Layanan
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pemesanan') }}"
                                class="block py-2 px-3 transition hover:text-yellow-400 {{ $activePage === 'pemesanan' ? 'text-yellow-400' : 'text-slate-100' }}">
                                Pemesanan
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('kontak') }}"
                                class="block py-2 px-3 transition hover:text-yellow-400 {{ $activePage === 'kontak' ? 'text-yellow-400' : 'text-slate-100' }}">
                                Kontak
                            </a>
                        </li>
                    </ul>


                </div>

                <div>
                    <p class="font-medium text-slate-100 text-2xl font-playfair">Kontak</p>

                    <ul class="mt-6 space-y-4 text-md font-poppins">
                        <li class="flex items-center gap-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 lg:h-16">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" class="text-yellow-400" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                                    class="text-yellow-400" />
                            </svg>
                            <a href="#" target="_blank" class="text-slate-100 transition hover:opacity-75">
                                Jl. Birowo, Kec. Binangun, Kabupaten Blitar, Jawa Timur </a>
                        </li>

                        <li class="flex items-center gap-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z"
                                    class="text-yellow-400" />
                            </svg>

                            <a href="https://wa.me/6285336766719" target="_blank"
                                class="text-slate-100 transition hover:opacity-75"> 6285336766719 </a>
                        </li>
                    </ul>
                </div>

                <div
                    class="bg-slate-100 p-4 rounded-lg mt-4 grid grid-cols-2 gap-4 pr-4 md:col-span-2 lg:col-span-2 lg:mt-0">
                    <div class="col-span-3 space-y-6">
                        <div>
                            <h2 class="text-2xl font-medium text-gray-900 font-playfair">Dapatkan Informasi
                                Terbaru!</h2>

                            <p class="mt-2 text-gray-500 font-poppins pr-8">Masukkan nomor whatsapp anda di bawah untuk
                                berlangganan informasi dan promosi terbaru seputar MD Teras.</p>
                        </div>
                        <div class="col-span-2 lg:col-span-3 lg:flex lg:items-end">
                            <form class="w-full" name="submit-to-google-sheet">
                                <label for="email" class="sr-only"> Nomor </label>

                                <div class="border border-yellow-100 p-2 sm:flex sm:items-center sm:gap-4">
                                    <input type="tel" id="number" name="number" placeholder="08xx xxxx xxxx"
                                        class="w-full p-3 border-none rounded-md focus:border-transparent focus:ring-yellow-400 sm:text-sm"
                                        required />
                                    <button type="submit" id="submit"
                                        class="mt-3 flex items-center justify-center w-full bg-yellow-500 px-6 py-3 text-sm font-bold uppercase tracking-wide text-slate-100 transition-none rounded-md hover:bg-yellow-600 sm:mt-0 sm:w-auto sm:shrink-0">
                                        Kirim
                                    </button>
                                </div>

                                <div id="success-message"
                                    class="hidden items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50"
                                    role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 ~0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div><span class="font-medium">Berhasil!</span> Nomormu telah masuk dalam
                                        daftar berlangganan informasi seputar MD Teras.</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-sm text-slate-100 font-poppins">&copy; 2025. MD Teras. All rights reserved.</p>
        <script>
            const scriptURL =
                "https://script.google.com/macros/s/AKfycbyEoqXt8Q_y60RYTTQ52rwOWSXOH8340oGaHOEtxV7MokuK0MrQmcrqry4c0T4gOeyF/exec";
            const form = document.forms["submit-to-google-sheet"];
            const button = document.getElementById("submit");
            const successMessage = document.getElementById("success-message");

            form.addEventListener("submit", (e) => {
                e.preventDefault(); // Mencegah form dari reload halaman default
                handleSubmit(); // Panggil handleSubmit untuk mengubah status tombol dan mengirim data
            });

            function handleSubmit() {
                // Ubah tombol menjadi status loading
                button.innerHTML = `
    <div class="flex items-center justify-center w-full">
      <svg class="animate-spin h-5 w-5 border-white border-t-transparent border-2 rounded-full" viewBox="0 0 24 24"></svg>
      <span class="ml-2 md:hidden">Loading...</span>
    </div>`;
                button.disabled = true;
                button.classList.add("bg-yellow-400", "cursor-not-allowed");

                // Kirim data ke Google Sheets
                fetch(scriptURL, {
                        method: "POST",
                        body: new FormData(form)
                    })
                    .then((response) => {
                        console.log("Success!", response);

                        // Kembalikan tombol ke status normal
                        button.innerHTML = "Kirim";
                        button.disabled = false;
                        button.classList.remove("bg-yellow-400", "cursor-not-allowed");
                        button.classList.add("bg-yellow-500", "hover:bg-yellow-600");

                        // Tampilkan pesan berhasil
                        successMessage.classList.remove("hidden");
                        successMessage.classList.add("flex")

                        // Sembunyikan pesan berhasil setelah 3 detik
                        setTimeout(() => {
                            successMessage.classList.add("hidden");
                        }, 3000); // 3 detik
                    })
                    .catch((error) => {
                        console.error("Error!", error.message);

                        // Kembalikan tombol ke status normal jika terjadi kesalahan
                        button.innerHTML = "Kirim";
                        button.disabled = false;
                        button.classList.remove("bg-yellow-400", "cursor-not-allowed");
                        button.classList.add("bg-yellow-500", "hover:bg-yellow-600");
                    });
            }
        </script>
    </div>
</footer>
