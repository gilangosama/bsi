<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bank Syariah Indonesia</title>
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
                        <a href="#" class="text-gray-700 hover:text-blue-900 font-medium">Dashboard</a>
                        <a href="#" class="text-gray-700 hover:text-blue-900 font-medium">Jam Operasional</a>
                        <a href="#" class="text-gray-700 hover:text-blue-900 font-medium">Layanan Kami</a>
                        <a href="#" class="text-gray-700 hover:text-blue-900 font-medium">Ulasan</a>
                    </div>

                    <!-- Right Menu -->
                    <div class="hidden md:flex items-center space-x-6">
                        <div class="hidden md:flex items-center space-x-4">
                            <a href="{{ route('register') }}" class="flex items-center space-x-2 text-emerald-600 hover:text-emerald-700 px-4 py-2 rounded-lg border-2 border-emerald-500 hover:border-emerald-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                                </svg>
                                <span>Register</span>
                            </a>
                            
                            <a href="{{ route('login') }}" class="flex items-center space-x-2 bg-emerald-500 hover:bg-emerald-600 text-white px-4 py-2 rounded-lg transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                                </svg>
                                <span>Login</span>
                            </a>
                        </div>
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

        <!-- Hero Carousel -->
        <div class="relative" x-data="{ activeSlide: 1 }" x-init="setInterval(() => { activeSlide = activeSlide === 3 ? 1 : activeSlide + 1 }, 5000)">
            <div class="relative h-[500px] overflow-hidden">
                <!-- Slide 1 -->
                <div class="absolute inset-0 transition-opacity duration-500" 
                     x-show="activeSlide === 1"
                     style="height: 100%; width: 100%">
                    <img src="img/carosel5.jpg" class="w-full h-full object-cover object-center" alt="Banner 1">
                    <div class="absolute inset-0 flex flex-col justify-center px-20 ">
                        <h1 class="text-4xl font-bold text-[#48a39e]">Selamat Datang di Bank BSI!</h1>
                        <p class="text-xl max-w-2xl text-[#48a39e] mt-4">Nikmati berbagai layanan perbankan terbaik kami yang dirancang khusus untuk memenuhi kebutuhan finansial Anda</p>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="absolute inset-0 transition-opacity duration-500" 
                     x-show="activeSlide === 2">
                    <img src="img/carosel4.jpg" class="w-full h-full object-cover" alt="Banner 2">
                </div>
                <!-- Slide 3 -->
                <div class="absolute inset-0 transition-opacity duration-500" 
                     x-show="activeSlide === 3"
                     style="height: 100%; width: 100%">
                    <img src="img/carosel2.jpg" class="w-full h-full object-cover object-center" alt="Banner 3">
                    <div class="absolute inset-0 flex flex-col justify-center px-20">
                        <h1 class="text-4xl font-bold text-white">Informasi Nasabah</h1>
                        <p class="text-xl max-w-2xl text-white mt-4">Jadwal Weekend Banking BSI Periode Januari 2025</p>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <button class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/30 hover:bg-white/50 rounded-full p-2"
                        @click="activeSlide = activeSlide === 1 ? 3 : activeSlide - 1">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/30 hover:bg-white/50 rounded-full p-2"
                        @click="activeSlide = activeSlide === 3 ? 1 : activeSlide + 1">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <!-- Carousel Indicators -->
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
                    <button class="w-3 h-3 rounded-full transition-colors duration-300"
                            :class="activeSlide === 1 ? 'bg-white' : 'bg-white/50'"
                            @click="activeSlide = 1"></button>
                    <button class="w-3 h-3 rounded-full transition-colors duration-300"
                            :class="activeSlide === 2 ? 'bg-white' : 'bg-white/50'"
                            @click="activeSlide = 2"></button>
                    <button class="w-3 h-3 rounded-full transition-colors duration-300"
                            :class="activeSlide === 3 ? 'bg-white' : 'bg-white/50'"
                            @click="activeSlide = 3"></button>
                </div>
            </div>
        </div>

        <!-- Welcome Section setelah carousel utama -->
        <div class="bg-gradient-to-b from-emerald-50 to-white py-12">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-3xl font-semibold text-gray-800 mb-2">Assalamu'alaikum Warahmatullahi Wabarakatuh</h1>
                <p class="text-xl text-gray-600 mb-8">Jadikan pengalaman Kamu lebih baik hari ini</p>
                
                <!-- Search/Help Section -->
                <div class="max-w-3xl mx-auto flex gap-4 mb-16">
                    <select class="flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                        <option value="" selected disabled>BANTU SAYA UNTUK</option>
                        <option value="1">Membuka Rekening</option>
                        <option value="2">Mengajukan Pembiayaan</option>
                        <option value="3">Layanan Digital</option>
                    </select>
                    <button class="px-8 py-3 bg-yellow-500 hover:bg-yellow-600 text-white font-medium rounded-lg transition-colors">
                        TAMPILKAN
                    </button>
                </div>

                <!-- Service Categories -->
                <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                    <!-- Individu -->
                    <div onclick="window.location.href='/individu'" class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow cursor-pointer">
                        <div class="w-16 h-16 mx-auto mb-4 text-emerald-500">
                            <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Individu</h3>
                        <p class="text-sm text-gray-600">Solusi Layanan Perbankan Lengkap untuk Kebutuhan Pribadi Anda</p>
                    </div>

                    <!-- Bisnis -->
                    <div onclick="window.location.href='/bisnis'" class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow cursor-pointer">
                        <div class="w-16 h-16 mx-auto mb-4 text-emerald-500">
                            <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Bisnis</h3>
                        <p class="text-sm text-gray-600">Solusi Keuangan Syariah yang Kompetitif untuk...</p>
                    </div>

                    <!-- Kartu -->
                    <div onclick="window.location.href='/kartu'" class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow cursor-pointer">
                        <div class="w-16 h-16 mx-auto mb-4 text-emerald-500">
                            <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Kartu</h3>
                        <p class="text-sm text-gray-600">Kemudahan Transaksi Non Tunai Sesuai dengan...</p>
                    </div>

                    <!-- Digital Banking -->
                    <div onclick="window.location.href='/digital'" class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow cursor-pointer">
                        <div class="w-16 h-16 mx-auto mb-4 text-emerald-500">
                            <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Digital Banking</h3>
                        <p class="text-sm text-gray-600">Kebutuhan Digitalisasi Transaksi Sesuai dengan...</p>
                    </div>

                    <!-- Info Biaya -->
                    <div onclick="window.location.href='/tarif'" class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow cursor-pointer">
                        <div class="w-16 h-16 mx-auto mb-4 text-emerald-500">
                            <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Info Biaya Layanan Bank</h3>
                        <p class="text-sm text-gray-600">Informasi tarif dan biaya layanan bank terkini</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="fixed right-6 top-1/2 transform -translate-y-1/2 z-50 space-y-4">
            <button class="w-12 h-12 bg-yellow-500 hover:bg-blue-900 rounded-full flex items-center justify-center text-white shadow-lg transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </button>
            <button class="w-12 h-12 bg-yellow-500 hover:bg-blue-900 rounded-full flex items-center justify-center text-white shadow-lg transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
            </button>
            <button class="w-12 h-12 bg-yellow-500 hover:bg-blue-900 rounded-full flex items-center justify-center text-white shadow-lg transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
            </button>
            <button class="w-12 h-12 bg-yellow-500 hover:bg-blue-900 rounded-full flex items-center justify-center text-white shadow-lg transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
            </button>
        </div>
    </div>

        <!-- Jadwal Operasional -->
        <div class="bg-gray-50 py-8">
            <div class="container mx-auto px-4">
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-3 text-center">Info Jadwal Operasional</h2>
            
            <!-- Salam -->
            <p class="text-gray-600 italic mb-6 text-center">Assalamu'alaikum Warahmatullahi Wabarakatuh,</p>

                    <!-- Calendar Container -->
                    <div class="bg-[#48a39e] rounded-xl p-6 w-[600px] mx-auto">
                        <h3 id="monthYear" class="text-xl font-bold mb-4 text-white text-center"></h3>
                        
                        <!-- Calendar Grid -->
                        <div id="calendar" class="grid grid-cols-7 gap-1">
                            <!-- Hari-hari akan di-generate oleh JavaScript -->
                        </div>

                        <!-- Keterangan -->
                        <div class="mt-6 flex items-center justify-between text-white border-t border-white/20 pt-4">
                            <div class="flex items-center gap-8">
                                <div class="flex items-center gap-2">
                                    <div class="w-4 h-4 bg-[#8B9D83] rounded"></div>
                                    <span>Beroperasi</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-4 h-4 bg-red-500 rounded"></div>
                                    <span>Tidak Beroperasi</span>
                                </div>
                            </div>
                            <div>
                                <p class="font-medium">Jam Operasional</p>
                                <p>08.00 - 14.00 WIB</p>
                            </div>
                        </div>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const calendar = document.getElementById('calendar');
    const monthYear = document.getElementById('monthYear');
    const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    
    // Tambahkan header hari
    days.forEach(day => {
        const dayElement = document.createElement('div');
        dayElement.className = 'text-center font-semibold text-white py-2';
        dayElement.textContent = day;
        calendar.appendChild(dayElement);
    });

    // Ambil data kalender dari server
    fetch('/operational-schedule')
        .then(response => response.json())
        .then(data => {
            // Set bulan dan tahun
            monthYear.textContent = `${data.month} ${data.year}`;
            
            // Tambahkan sel kosong untuk hari-hari sebelum tanggal 1
            for (let i = 0; i < data.startingDay; i++) {
                const emptyDay = document.createElement('div');
                emptyDay.className = 'aspect-square p-1';
                calendar.appendChild(emptyDay);
            }
            
            // Tambahkan tanggal-tanggal
            for (let i = 1; i <= data.daysInMonth; i++) {
                const dayElement = document.createElement('div');
                dayElement.className = 'aspect-square p-1';
                
                const dayContent = document.createElement('div');
                dayContent.className = `w-full h-full rounded flex items-center justify-center ${
                    data.holidays.includes(i) ? 'bg-red-500' : 'bg-[#8B9D83]'
                } text-white`;
                dayContent.textContent = i;
                
                dayElement.appendChild(dayContent);
                calendar.appendChild(dayElement);
            }
        })
        .catch(error => {
            console.error('Error fetching calendar data:', error);
            monthYear.textContent = 'Error loading calendar';
        });
});
</script>
