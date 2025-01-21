<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Layanan Bisnis - Bank Syariah Indonesia</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="antialiased">
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
                        {{-- <div class="relative group">
                            <button class="flex items-center text-gray-700 hover:text-blue-900 font-medium">
                                Produk dan Layanan
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                        </div> --}}
                        <a href="/" class="text-gray-700 hover:text-blue-900 font-medium">Dashboard</a>
                        <a href="#" class="text-gray-700 hover:text-blue-900 font-medium">Jam Operasional</a>
                        <a href="#" class="text-gray-700 hover:text-blue-900 font-medium">Layanan Kami</a>
                        <a href="#" class="text-gray-700 hover:text-blue-900 font-medium">Ulasan</a>
                    </div>

                    <!-- Right Menu -->
                    <div class="hidden md:flex items-center space-x-6">
                        <a href="{{ route('login') }}" class="flex items-center space-x-2 bg-emerald-500 hover:bg-emerald-600 text-white px-4 py-2 rounded-lg transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                            </svg>
                            <span>Login</span>
                        </a>
                    </div>
                        {{-- <a href="#" class="bg-emerald-600 text-white px-6 py-2 rounded-lg hover:bg-emerald-700 transition-colors">
                            BSI Mobile
                        </a> --}}
                        {{-- <a href="">
                            <img src="img/logo bewize.png" class="h-8" alt="Login">
                        </a> --}}
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="md:hidden">
                        <button class="text-gray-700 hover:text-blue-900">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Hero Section -->
        <div class="relative h-[300px] overflow-hidden ">
            {{-- tombol kembali --}}
        <a href="/" class="absolute top-4 left-4 z-10 flex items-center text-white hover:text-gray-200 transition-colors">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            <span>Kembali</span>
        </a>
            <div class="absolute inset-0 mx-auto ">
                <img src="img/individu-banner.png" alt="" class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 flex flex-col justify-center px-20 bg-black bg-opacity-40">
                    <h1 class="text-4xl font-bold text-white mb-4">Bisnis</h1>
                    <p class="text-xl text-white">Solusi Layanan Perbankan Lengkap untuk Pribadi</p>
                </div>
            </div>
        </div>

        <!-- Produk Section -->
        <div id="produk" class="py-16">
            <div class="container mx-auto px-4">
                {{-- <h2 class="text-3xl font-bold text-center mb-12">Produk Unggulan</h2> --}}
                
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8">
                    <!-- bewize -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="relative w-full h-50 mb-6 rounded-lg overflow-hidden">
                        <img src="img/bisnis/bewize.jpg" alt="bewize" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/100 to-transparent"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Bewize</h3>
                    <p class="texl-sm p-6 space-y-2 text-gray-600"> Layanan terintegrasi layanan Cash Management, Value Chain, dan Trade Finance* dalam satu "klik"</p>
                </div>

                <!-- Tabungan Bisnis -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="relative w-full h-50 mb-6 rounded-lg overflow-hidden">
                        <img src="img/bisnis/tabungan.png" alt="Tabungan Bisnis" class="w-full h-56 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/100 to-transparent"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Tabungan Bisnis</h3>
                    <p class="space-y-2 text-gray-600 text-sm p-6">
                        Tabungan dalam mata uang rupiah yang ditujukan untuk para wirausahawan.Tabungan ini menawarkan berbagai kemudahan, seperti limit transaksi besar, gratis biaya transfer, dan mutasi rekening yang informatif. 
                    </p>
                </div>

                <!-- Haji & Umrah -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="relative w-full h-50 mb-6 rounded-lg overflow-hidden">
                        <img src="img/bisnis/biaya.jpg" alt="pembiayaan bisnis" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/100 to-transparent"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Pembiayaan Bisnis</h3>
                    <p class="space-y-2 text-gray-600 text-sm p-6">
                        Pembiayaan yang disediakan oleh Bank Syariah Indonesia (BSI) untuk memenuhi kebutuhan modal kerja, investasi, dan konsumtif pelaku usaha mikro, kecil, dan menengah (UMKM).
                    </p>
                </div>

                <!-- Investasi -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="relative w-full h-50 mb-6 rounded-lg overflow-hidden">
                        <img src="img/bisnis/value.png" alt="value" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/100 to-transparent"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Value Chain</h3>
                    <p class="space-y-2 text-gray-600 text-sm p-6">
                        Layanan online dari Bank Syariah Indonesia (BSI) yang memfasilitasi transaksi value chain.Value chain adalah model bisnis yang menggambarkan bagaimana perusahaan menciptakan nilai bagi pelanggannya.
                    </p>
                </div>

                <!-- Pembiayaan -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="relative w-full h-50 mb-6 rounded-lg overflow-hidden">
                        <img src="img/bisnis/trade.jpg" alt="trade" class="w-full h-64 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/100 to-transparent"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Trande Finance</h3>
                    <p class="space-y-2 text-gray-600 text-sm p-6">
                        Layanan yang disediakan oleh Bank Syariah Indonesia (BSI) untuk mendukung transaksi perdagangan.Layanan ini meliputi penerbitan Letter of Credit (LC), Bank Garansi (BG), dan penyelesaian wesel ekspor. 
                    </p>
                </div>
                <!-- Tabungan -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="relative w-full h-50 mb-6 rounded-lg overflow-hidden">
                        <img src="img/bisnis/cash.png" alt="cash" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/100 to-transparent"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Cash Management</h3>
                    <p class="space-y-2 text-gray-600 text-sm p-6">
                        Layanan perbankan online dari Bank Syariah Indonesia (BSI) untuk nasabah non-perorangan. Layanan ini memungkinkan nasabah untuk mengelola keuangan, melakukan transaksi harian, dan mengontrol arus kas
                    </p>
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
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                14040
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                contactus@bankbsi.co.id
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
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