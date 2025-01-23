<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layanan Kartu - Bank Syariah Indonesia</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="antialiased">
    <!-- Navbar -->
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <img src="img/logo.png" class="h-12" alt="BSI Logo">
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-gray-700 hover:text-blue-900 font-medium">Dashboard</a>
                    <a href="/#jam-operasional" class="text-gray-700 hover:text-blue-900 font-medium">Jam Operasional</a>
                    <a href="/#layanan" class="text-gray-700 hover:text-blue-900 font-medium">Layanan Kami</a>
                    <a href="/#ulasan" class="text-gray-700 hover:text-blue-900 font-medium">Ulasan</a>
                </div>

                <!-- Right Menu - Desktop -->
                <div class="hidden md:flex items-center space-x-4">
                    @if (Auth::guard('admin')->check())
                    <span class="text-gray-700">Admin Panel</span>
                    <form method="POST" action="{{ route('admin.logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md">
                            Logout
                        </button>
                    </form>
                    @elseif (Auth::check())
                    <span class="text-gray-700">Welcome, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md">
                            Logout
                        </button>
                    </form>
                    @else
                    <a href="{{ route('register') }}"
                        class="hidden md:flex items-center space-x-2 border-2 border-emerald-500 text-emerald-500 hover:bg-emerald-50 px-6 py-2 rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                        <span>Register</span>
                    </a>
                    <a href="{{ route('login') }}"
                        class="hidden md:flex items-center space-x-2 bg-emerald-500 hover:bg-emerald-600 text-white px-6 py-2 rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                        <span>Login</span>
                    </a>
                    @endif
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button onclick="toggleMobileMenu()" class="text-gray-700 hover:text-blue-900">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden pb-4">
                <div class="flex flex-col space-y-4">
                    <a href="/" class="text-gray-700 hover:text-blue-900 font-medium">Dashboard</a>
                    <a href="/#jam-operasional" class="text-gray-700 hover:text-blue-900 font-medium">Jam
                        Operasional</a>
                    <a href="/#layanan" class="text-gray-700 hover:text-blue-900 font-medium">Layanan Kami</a>
                    <a href="/#ulasan" class="text-gray-700 hover:text-blue-900 font-medium">Ulasan</a>

                    @if (Auth::guard('admin')->check())
                    <span class="text-gray-700">Admin Panel</span>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md">
                            Logout
                        </button>
                    </form>
                    @elseif (Auth::check())
                    <span class="text-gray-700">Welcome, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md">
                            Logout
                        </button>
                    </form>
                    @else
                    <a href="{{ route('register') }}"
                        class="flex items-center space-x-2 border-2 border-emerald-500 text-emerald-500 hover:bg-emerald-50 px-6 py-2 rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                        <span>Register</span>
                    </a>
                    <a href="{{ route('login') }}"
                        class="flex items-center space-x-2 bg-emerald-500 hover:bg-emerald-600 text-white px-6 py-2 rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                        <span>Login</span>
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Add JavaScript for mobile menu toggle -->
    <script>
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('hidden');
        }

    </script>
    <!-- Hero Section -->
    <div class="relative h-[300px] overflow-hidden ">
        {{-- tombol kembali --}}
        <a href="/"
            class="absolute top-4 left-4 z-10 flex items-center text-white hover:text-gray-200 transition-colors">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            <span>Kembali</span>
        </a>
        <div class="absolute inset-0 mx-auto ">
            <img src="img/kartu-banner.png" alt="" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 flex flex-col justify-center px-20 bg-black bg-opacity-40">
                <h1 class="text-4xl font-bold text-white mb-4">Kartu</h1>
                <p class="text-xl text-white">Kemudahan Transaksi Non Tunai Sesuai dengan Prinsip Syariah</p>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Manajemen Kartu -->
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 mb-6">
                        <svg class="w-full h-full text-emerald-500" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Manajemen Kartu</h3>
                    <p class="text-gray-600">Layanan manajemen kartu Bank Syariah Indonesia</p>
                </div>

                <!-- Tarif Layanan BSI Tabungan -->
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 mb-6">
                        <svg class="w-full h-full text-emerald-500" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">TARIF LAYANAN BSI TABUNGAN</h3>
                    <p class="text-gray-600">INFO TARIF LAYANAN</p>
                    {{-- <a href="#" class="text-emerald-500 hover:text-emerald-600 mt-4 inline-block">Lihat Detail</a> --}}
                </div>

                <!-- Tarif Safe Deposit & Reksadana -->
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 mb-6">
                        <svg class="w-full h-full text-emerald-500" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">TARIF SAFE DEPOSIT & REKSADANA</h3>
                    <p class="text-gray-600">INFORMASI TARIF LAYANAN BANK BSI</p>
                </div>

                <!-- Tarif Layanan -->
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 mb-6">
                        <svg class="w-full h-full text-emerald-500" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">TARIF LAYANAN</h3>
                    <p class="text-gray-600">INFORMASI TARIF LAYANAN BANK BSI</p>
                </div>

                <!-- BSI Hasanah Card -->
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 mb-6">
                        <svg class="w-full h-full text-emerald-500" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">BSI Hasanah Card</h3>
                    <p class="text-gray-600">Partner Transaksi Hijrah Hasanah</p>
                </div>

                <!-- BSI Tabungan Easy Wadiah -->
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 mb-6">
                        <svg class="w-full h-full text-emerald-500" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">BSI Tabungan Easy Wadiah</h3>
                    <p class="text-gray-600">Menjaga Harta Anda Tetap Murni</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#48a39e] text-white">
        <!-- Main Footer -->
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo dan Alamat -->
                <div class="space-y-4">
                    <img src="/img/logo-dark.png" alt="BSI Logo" class="h-12">
                    <p class="text-sm">
                        PT Bank Syariah Indonesia Tbk <br>
                        Gedung BSI <br>
                        Jl. Jend. Sudirman Kav. 50-51 <br>
                        Jakarta Pusat
                    </p>
                </div>

                <!-- Layanan -->
                <div>
                    <h4 class="font-semibold text-lg mb-4">Layanan BSI</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-gray-200">BSI Mobile</a></li>
                        <li><a href="#" class="hover:text-gray-200">Internet Banking</a></li>
                        <li><a href="#" class="hover:text-gray-200">BSI Card</a></li>
                        <li><a href="#" class="hover:text-gray-200">Pembiayaan</a></li>
                        <li><a href="#" class="hover:text-gray-200">Tabungan</a></li>
                    </ul>
                </div>

                <!-- Tentang Kami -->
                <div>
                    <h4 class="font-semibold text-lg mb-4">Tentang Kami</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-gray-200">Profil Perusahaan</a></li>
                        <li><a href="#" class="hover:text-gray-200">Visi & Misi</a></li>
                        <li><a href="#" class="hover:text-gray-200">Karir</a></li>
                        <li><a href="#" class="hover:text-gray-200">Berita</a></li>
                        <li><a href="#" class="hover:text-gray-200">Investor Relations</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="font-semibold text-lg mb-4">Hubungi Kami</h4>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            14040
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            contactus@bankbsi.co.id
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Temukan Kantor BSI
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-white/10">
            <div class="container mx-auto px-4 py-4">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="text-sm">
                        © 2024 PT Bank Syariah Indonesia Tbk. All rights reserved.
                    </div>
                    <div class="flex gap-6">
                        <a href="#" class="hover:text-gray-200">Syarat & Ketentuan</a>
                        <a href="#" class="hover:text-gray-200">Kebijakan Privasi</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
