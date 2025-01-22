<?php $location_index = "."; include("./components/header.php")?>

<body class="bg-gray-100 font-sans">
    <?php $location_index = "."; include("./components/navbar.php")?>
    <!-- Header Section -->
    <header class="bg-red-500 text-white py-4 bg-cover bg-center h-60" style="background-image: url(./src/img/konvo.jpg);">
        <div class="container mx-auto text-center">
            <br><br>
            <h1 class="text-3xl font-bold drop-shadow-md">e-Sistem Jejak Alumni</h1>
            <p class="drop-shadow-md">Mengingati kejayaan anda yang bakal menjadi inspirasi kepada generasi seterusnya</p>
        </div>
    </header>

    <!-- Marquee Section -->
    <div class="bg-blue-600 text-white py-2 text-center">
        <marquee>Seramai 312 orang alumni telah daftar maklumat mereka di sini</marquee>
    </div>

    <!-- Guest Section -->
    <section class="bg-orange-100 py-8">
        <div class="container mx-auto text-center">
            <div class="bg-orange-300 p-6 rounded-lg inline-block drop-shadow px-40">
                <h2 class="text-xl font-bold">Tetamu</h2><br>
                <div class="relative inline-flex items-center justify-center w-20 h-20 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                    <span class="font-medium text-gray-600 dark:text-gray-300">GUEST</span>
                </div>
                <p class="mt-2">Adakah anda alumni? Sila pilih log masuk untuk lihat maklumat anda.<br> Klik daftar untuk daftar maklumat anda pada sistem</p>
                <div class="mt-4">
                    <a href="./signin.php" class="bg-orange-500 text-white px-4 py-2 rounded-lg mr-2 hover:bg-orange-600">Log Masuk</a>
                    <a href="./signup.php" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Daftar</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Alumni Statistics Section -->
    <section class="py-8">
        <div class="container mx-auto">
            <div class="text-center mb-6">
                <h2 class="text-xl font-bold">Bilangan Alumni Yang Telah Berdaftar Mengikut Kategori</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Category: Bekerja -->
                <div class="bg-orange-200 border border-red-600 p-6 rounded-lg m-2 shadow-md">
                    <h3 class="text-red-700 font-bold text-lg text-center">Bekerja</h3>
                    <ul class="mt-4 list-disc list-inside">
                        <li>Kejuruteraan Awam: 1</li>
                        <li>Kejuruteraan Elektrikal: 1</li>
                        <li>Kejuruteraan Mekanikal: 8</li>
                        <li>Perbankan: 4</li>
                        <li>Teknologi Komputeran: 2</li>
                        <li>Teknologi Animasi: 1</li>
                        <li>Pemasaran: 4</li>
                        <li>Perakaunan: 6</li>
                        <li>Seni Kulinari: 7</li>
                        <li>Bakeri dan Pastri: 2</li>
                        <li>SLDN Perabot: 2</li>
                        <li>Penyediaan dan Pembuatan Makanan: 2</li>
                    </ul>
                </div>

                <!-- Category: Sambung Belajar -->
                <div class="bg-orange-200 border border-red-600 p-6 rounded-lg m-2 shadow-md">
                    <h3 class="text-red-700 font-bold text-lg text-center">Sambung Belajar</h3>
                    <ul class="mt-4 list-disc list-inside">
                        <li>Kejuruteraan Awam: 1</li>
                        <li>Kejuruteraan Elektrikal: 1</li>
                        <li>Kejuruteraan Mekanikal: 8</li>
                        <li>Perbankan: 4</li>
                        <li>Teknologi Komputeran: 2</li>
                        <li>Teknologi Animasi: 1</li>
                        <li>Pemasaran: 4</li>
                        <li>Perakaunan: 6</li>
                        <li>Seni Kulinari: 7</li>
                        <li>Bakeri dan Pastri: 2</li>
                        <li>SLDN Perabot: 2</li>
                        <li>Penyediaan dan Pembuatan Makanan: 2</li>
                    </ul>
                </div>

                <!-- Category: Usahawan -->
                <div class="bg-orange-200 border border-red-600 p-6 rounded-lg m-2 shadow-md">
                    <h3 class="text-red-700 font-bold text-lg text-center">Usahawan</h3>
                    <ul class="mt-4 list-disc list-inside">
                        <li>Kejuruteraan Awam: 1</li>
                        <li>Kejuruteraan Elektrikal: 1</li>
                        <li>Kejuruteraan Mekanikal: 8</li>
                        <li>Perbankan: 4</li>
                        <li>Teknologi Komputeran: 2</li>
                        <li>Teknologi Animasi: 1</li>
                        <li>Pemasaran: 4</li>
                        <li>Perakaunan: 6</li>
                        <li>Seni Kulinari: 7</li>
                        <li>Bakeri dan Pastri: 2</li>
                        <li>SLDN Perabot: 2</li>
                        <li>Penyediaan dan Pembuatan Makanan: 2</li>
                    </ul>
                </div>
                
            </div>

            <div class="text-center mb-6">
                <p class="mt-6">Jumlah: <span class="font-bold text-red-700">312 Orang</span></p>
            </div>

        </div>
    </section>
    
    <?php $location_index = "."; include("./components/footer.php")?>

</body>
</html>