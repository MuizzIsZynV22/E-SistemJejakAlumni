<?php $location_index = "."; include("./components/header.php")?>

<body class="bg-gray-100 font-sans">
    <?php $location_index = "."; include("./components/navbar.php")?>
    <!-- Container -->
    <div class="min-h-screen flex items-center justify-center py-10">
        <!-- Form Card -->
        <div class="w-full max-w-md bg-orange-200 p-6 rounded-lg shadow-lg border-2 border-orange-300">
            <!-- Header -->
            <h2 class="text-center text-2xl font-bold text-red-800 mb-6">DAFTAR MAKLUMAT ALUMNI</h2>
            <!-- Form Fields -->
            <form class="space-y-4">
                <!-- Profile Icon with Input -->
                <div class="flex flex-col items-center mb-4">
                    <div class="relative inline-flex items-center justify-center w-28 h-28 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                        <svg class="absolute w-24 h-24 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                        <br>
                    </div>
                    <p class="text-grey-400">Add Image</p>
                    <input type="file" id="profile" name="profile" accept="image/*" class="text-sm text-gray-700 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-purple-100 file:text-purple-700 hover:file:bg-purple-200">
                </div>
                <br>
                <div class="flex items-center">
                    <label for="name" class="w-1/3 text-sm font-semibold text-gray-700">Nama:</label>
                    <input type="text" id="name" name="name" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                </div>

                <div class="flex items-center">
                    <label for="id" class="w-1/3 text-sm font-semibold text-gray-700">No. kad pengenalan:</label>
                    <input type="text" id="id" name="id" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                </div>

                <!-- <div class="flex items-center">
                    <label for="gender" class="w-1/3 text-sm font-semibold text-gray-700">Jantina:</label>
                    <input type="text" id="gender" name="gender" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                </div> -->

                <div class="flex items-center">
                    <label for="kursus" class="w-1/3 text-sm font-semibold text-gray-700">Jantina:</label>
                    <select id="gender" name="gender" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                        <option disabled selected>-- pilih jantina anda --</option>
                        <option value="lelaki">Lelaki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="flex items-center">
                    <label for="phone" class="w-1/3 text-sm font-semibold text-gray-700">No. Telefon:</label>
                    <input type="text" id="phone" name="phone" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                </div>

                <div class="flex items-center">
                    <label for="email" class="w-1/3 text-sm font-semibold text-gray-700">Emel:</label>
                    <input type="email" id="email" name="email" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                </div>

                <!-- <div class="flex items-center">
                    <label for="course" class="w-1/3 text-sm font-semibold text-gray-700">Kursus:</label>
                    <input type="text" id="course" name="course" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                </div> -->

                <div class="flex items-center">
                    <label for="kursus" class="w-1/3 text-sm font-semibold text-gray-700">Kursus:</label>
                    <select id="kursus" name="kursus" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                        <option disabled selected>-- pilih kursus anda --</option>
                        <option value="Kejuruteraan Awam">Kejuruteraan Awam</option>
                        <option value="Kejuruteraan Elektrikal">Kejuruteraan Elektrikal</option>
                        <option value="Kejuruteraan Mekanikal">Kejuruteraan Mekanikal</option>
                        <option value="Perbankan">Perbankan</option>
                        <option value="Teknologi Komputeran">Teknologi Komputeran</option>
                        <option value="Teknologi Animasi">Teknologi Animasi</option>
                        <option value="Pemasaran">Pemasaran</option>
                        <option value="Perakaunan">Perakaunan</option>
                        <option value="Seni Kulinari">Seni Kulinari</option>
                        <option value="Bakeri dan Pastri">Bakeri dan Pastri</option>
                        <option value="SLDN Perabot">SLDN Perabot</option>
                        <option value="Penyediaan dan Pembuatan Makanan">Penyediaan dan Pembuatan Makanan</option>
                    </select>
                </div>

                <div class="flex items-center">
                    <label for="cohort" class="w-1/3 text-sm font-semibold text-gray-700">Kohort (Tahun masuk):</label>
                    <input type="text" id="cohort" name="cohort" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                </div>

                <div class="flex items-center">
                    <label for="address" class="w-1/3 text-sm font-semibold text-gray-700">Alamat rumah:</label>
                    <input type="text" id="address" name="address" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                </div>

                <div class="flex items-center">
                    <label for="job" class="w-1/3 text-sm font-semibold text-gray-700">Pekerjaan semasa:</label>
                    <input type="text" id="job" name="job" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                </div>

                <div class="flex items-center">
                    <label for="salary" class="w-1/3 text-sm font-semibold text-gray-700">Gaji (RM):</label>
                    <input type="text" id="salary" name="salary" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                </div>

                <div class="flex items-center">
                    <label for="work-address" class="w-1/3 text-sm font-semibold text-gray-700">Alamat tempat kerja:</label>
                    <input type="text" id="work-address" name="work-address" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                </div>
                <br>
                <!-- Submit Button -->
                <div class="text-center">
                    <!-- <button type="submit" class="bg-blue-700 text-white px-6 py-2 rounded-lg hover:bg-blue-800">Simpan</button> -->
                    <a href="./userinfo_bekerja.php" class="bg-blue-700 text-white px-6 py-2 rounded-lg hover:bg-blue-800">Simpan</a>
                </div>
            </form>
        </div>
    </div>
    
    <?php $location_index = "."; include("./components/footer.php")?>

</body>
</html>