<?php $location_index = ".."; include("../components/header.php")?>

<body class="bg-gray-100 font-sans">
    <?php $location_index = ".."; include("../components/alumni/navbar.php")?>

    <?php
        $user_value = decryptUser($_SESSION['ESisJaUserHash'], $secret_key);
        $id_alumni = $user_value['id_user'];

        $alumni_sql = mysqli_query($connect, "SELECT * FROM alumni WHERE id_alumni = '$id_alumni'");
        $alumni = mysqli_fetch_array($alumni_sql);

    ?>
    <!-- Container -->
    <div class="min-h-screen flex items-center justify-center py-10">
        <!-- Form Card -->
        <div class="w-full max-w-md bg-orange-200 p-6 rounded-lg shadow-lg border-2 border-orange-300">
            <!-- Header -->
            <h2 class="text-center text-2xl font-bold text-red-800 mb-6">DAFTAR MAKLUMAT ALUMNI</h2>
            <!-- Form Fields -->
            <form method="post" action="../backend/alumni.php" class="space-y-4">

                <input type="hidden" name="id_alumni" value="<?php echo $alumni['id_alumni']?>">
                <input type="hidden" name="token" value="<?php echo $token?>">
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
                    <label for="nama_alumni" class="w-1/3 text-sm font-semibold text-gray-700">Nama:</label>
                    <input required type="text" id="nama_alumni" name="nama_alumni" value="<?php echo htmlspecialchars($alumni['nama_alumni'])?>" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                </div>

                <div class="flex items-center">
                    <label for="ic_alumni" class="w-1/3 text-sm font-semibold text-gray-700">No. kad pengenalan:</label>
                    <input required type="text" id="ic_alumni" name="ic_alumni" value="<?php if (!is_null($alumni['ic_alumni'])) {echo htmlspecialchars($alumni['ic_alumni']);}?>" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                </div>

                <!-- <div class="flex items-center">
                    <label for="gender" class="w-1/3 text-sm font-semibold text-gray-700">Jantina:</label>
                    <input type="text" id="gender" name="gender" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                </div> -->

                <div class="flex items-center">
                    <label for="jantina_alumni" class="w-1/3 text-sm font-semibold text-gray-700">Jantina:</label>
                    <select name="jantina_alumni" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                        <option value="" <?php echo is_null($alumni['jantina_alumni']) ? 'selected' : ''; ?>>-- pilih jantina anda --</option>
                        <option value="lelaki" <?php echo (isset($alumni['jantina_alumni']) && $alumni['jantina_alumni'] === 'lelaki') ? 'selected' : ''; ?>>Lelaki</option>
                        <option value="perempuan" <?php echo (isset($alumni['jantina_alumni']) && $alumni['jantina_alumni'] === 'perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                    </select>
                </div>

                <div class="flex items-center">
                    <label for="no_tel_alumni" class="w-1/3 text-sm font-semibold text-gray-700">No. Telefon:</label>
                    <input required type="text" id="no_tel_alumni" name="no_tel_alumni" value="<?php if (!is_null($alumni['no_tel_alumni'])) {echo htmlspecialchars($alumni['no_tel_alumni']);}?>" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                </div>

                <div class="flex items-center">
                    <label for="email_alumni" class="w-1/3 text-sm font-semibold text-gray-700">Emel:</label>
                    <input required type="email" id="email_alumni" name="email_alumni" value="<?php if (!is_null($alumni['email_alumni'])) {echo htmlspecialchars($alumni['email_alumni']);}?>" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                </div>

                <!-- <div class="flex items-center">
                    <label for="course" class="w-1/3 text-sm font-semibold text-gray-700">Kursus:</label>
                    <input type="text" id="course" name="course" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                </div> -->

                <div class="flex items-center">
                    <label for="kursus_alumni" class="w-1/3 text-sm font-semibold text-gray-700">Kursus:</label>
                    <select required name="id_kursus" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                        <option value="NULL" <?php echo is_null($alumni['id_kursus']) ? 'selected' : ''; ?>>-- pilih kurus anda --</option>

                        <?php
                            $kursus_alumni_sql = mysqli_query($connect, "SELECT * FROM kursus WHERE status_kursus = 1");

                            while($kursus_alumni = mysqli_fetch_array($kursus_alumni_sql)){
                                ?>
                                <option value="<?php echo $kursus_alumni['id_kursus']?>" <?php echo (isset($alumni['id_kursus']) && $alumni['id_kursus'] === $kursus_alumni['id_kurus']) ? 'selected' : ''; ?>><?php echo htmlspecialchars($kursus_alumni['nama_kursus'])?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>

                <div class="flex items-center">
                    <label for="kohort_alumni" class="w-1/3 text-sm font-semibold text-gray-700">Kohort (Tahun masuk):</label>
                    <input required type="text" id="kohor_alumni" name="kohort_alumni" value="<?php if (!is_null($alumni['kohort_alumni'])) {echo htmlspecialchars($alumni['kohort_alumni']);}?>" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none">
                </div>

                <div class="flex items-center">
                    <label for="alamat_alumni" class="w-1/3 text-sm font-semibold text-gray-700">Alamat rumah:</label>
                    <textarea required id="alamat_alumni" name="alamat_alumni" id="message" rows="4" class="w-2/3 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-red-400 focus:outline-none"><?php if (!is_null($alumni['alamat_alumni'])) {echo htmlspecialchars($alumni['alamat_alumni']);}?></textarea>
                </div>

                <!-- <div class="flex items-center">
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
                </div> -->
                <br>
                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" name="kemaskini_alumni" class="bg-blue-700 text-white px-6 py-2 rounded-lg hover:bg-blue-800">Kemaskini</button>
                    <!-- <a href="./userinfo_bekerja.php" class="bg-blue-700 text-white px-6 py-2 rounded-lg hover:bg-blue-800">Simpan</a> -->
                </div>
            </form>
        </div>
    </div>
    
    <?php $location_index = ".."; include("../components/footer.php")?>

</body>
</html>