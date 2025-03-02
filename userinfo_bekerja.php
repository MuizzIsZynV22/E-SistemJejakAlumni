<?php $location_index = "."; include("./components/header.php")?>

<body class="bg-gray-100 font-sans">
    <?php $location_index = "."; include("./components/navbar.php")?>
    <!-- Container -->
    <div class="min-h-screen flex items-center justify-center py-10">
        <!-- Data Card -->
        <div class="w-full max-w-md bg-orange-200 p-6 rounded-lg shadow-lg border-2 border-orange-300">
            <!-- Header -->
            <h2 class="text-center text-2xl font-bold text-red-800 mb-6">MAKLUMAT ALUMNI</h2>
            <!-- Profile Section -->
            <div class="flex flex-col items-center mb-4">
                <div class="w-24 h-24 rounded-full bg-gray-300 flex items-center justify-center mb-2">
                    <img src="./src/img/profile1.jpg" alt="PFP" class="w-full h-full object-cover rounded-full text-center">
                </div>
            </div>
            <!-- Data Fields -->
            <div class="space-y-4">
                <div class="flex items-center">
                    <label class="w-1/3 text-sm font-semibold text-gray-700">Nama:</label>
                    <span class="w-2/3 text-sm text-gray-800">Arif Shah</span>
                </div>

                <div class="flex items-center">
                    <label class="w-1/3 text-sm font-semibold text-gray-700">No. kad pengenalan:</label>
                    <span class="w-2/3 text-sm text-gray-800">920604-08-4321</span>
                </div>

                <div class="flex items-center">
                    <label class="w-1/3 text-sm font-semibold text-gray-700">Jantina:</label>
                    <span class="w-2/3 text-sm text-gray-800">Lelaki</span>
                </div>

                <div class="flex items-center">
                    <label class="w-1/3 text-sm font-semibold text-gray-700">No. Telefon:</label>
                    <span class="w-2/3 text-sm text-gray-800">019-8877665</span>
                </div>

                <div class="flex items-center">
                    <label class="w-1/3 text-sm font-semibold text-gray-700">Emel:</label>
                    <span class="w-2/3 text-sm text-gray-800">arif.shah@gmail.com</span>
                </div>

                <div class="flex items-center">
                    <label class="w-1/3 text-sm font-semibold text-gray-700">Kursus:</label>
                    <span class="w-2/3 text-sm text-gray-800">Kejuruteraan Mekanikal</span>
                </div>

                <div class="flex items-center">
                    <label class="w-1/3 text-sm font-semibold text-gray-700">Kohort (Tahun masuk):</label>
                    <span class="w-2/3 text-sm text-gray-800">2018</span>
                </div>

                <div class="flex items-center">
                    <label class="w-1/3 text-sm font-semibold text-gray-700">Alamat rumah:</label>
                    <span class="w-2/3 text-sm text-gray-800">22, Jalan Mawar, Kuala Lumpur</span>
                </div>

                <div class="flex items-center">
                    <label class="w-1/3 text-sm font-semibold text-gray-700">Pekerjaan semasa:</label>
                    <span class="w-2/3 text-sm text-gray-800">Jurutera</span>
                </div>

                <div class="flex items-center">
                    <label class="w-1/3 text-sm font-semibold text-gray-700">Gaji:</label>
                    <span class="w-2/3 text-sm text-gray-800">RM 4000</span>
                </div>

                <div class="flex items-center">
                    <label class="w-1/3 text-sm font-semibold text-gray-700">Alamat tempat kerja:</label>
                    <span class="w-2/3 text-sm text-gray-800">11, Jalan Teknologi, Cyberjaya</span>
                </div>

                <!-- Edit Button -->
                <div class="text-center">
                    <!-- <button type="submit" class="bg-blue-700 text-white px-6 py-2 rounded-lg hover:bg-blue-800">Simpan</button> -->
                    <a href="./signup_bekerja.php" class="bg-blue-700 text-white px-6 py-2 rounded-lg hover:bg-blue-800">Edit</a>
                </div>                
            </div>
        </div>
    </div>
    
    <?php $location_index = "."; include("./components/footer.php")?>

</body>
</html>