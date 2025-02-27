<?php $location_index = ".."; include("../components/header.php")?>

<body class="bg-gray-100 font-sans">
    <?php $location_index = ".."; include("../components/navbar.php")?>
    <!-- Login Section -->
    <section class="flex flex-col md:flex-row p-2 items-center justify-center min-h-screen bg-gray-100">
        <!-- Image Section -->
        <div class="hidden md:flex md:w-1/3 justify-center m-2 p-2 relative">
            <img src="../src/img/KVKS_Gate1.jpeg" alt="Kolej Vokasional" class="rounded-lg shadow-lg">
            <h2 class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-6 text-blue-900 font-bold text-3xl whitespace-nowrap">
                e-Sistem Jejak Alumni
            </h2>
            <p class="absolute top-1/4 left-1/2 -translate-x-1/2 translate-y-6 text-blue-500 font-bold text-sm drop-shadow-lg">
                Mengingati kejayaan anda yang bakal menjadi inspirasi kepada generasi seterusnya
            </p>
        </div>

        <!-- Login Form Section -->
        <div class="md:w-2/3 bg-orange-100 p-8 rounded-lg shadow-lg m-4">
            <h2 class="text-center text-2xl font-bold text-green-500 mb-6">Daftar Admin
                <br><br>
                <div class="relative inline-flex items-center justify-center w-28 h-28 overflow-hidden bg-green-100 rounded-full dark:bg-green-600">
                    <svg class="absolute w-24 h-24 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                </div>
            </h2>
            <form method="post" action="../backend/admin.php" class="space-y-4">
                <input type="hidden" name="token" value="<?php echo $token?>">
                <div>
                    <label for="nama_admin" class="block text-gray-700 font-semibold">Nama Admin</label>
                    <input type="text" id="nama_admin" name="nama_admin" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                </div>
                <div>
                    <label for="password_admin" class="block text-gray-700 font-semibold">Kata Laluan</label>
                    <input type="password" id="password_admin" name="password_admin" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                </div>
                <div>
                    <label for="password_admin_confirm" class="block text-gray-700 font-semibold">Sahkan Kata Laluan</label>
                    <input type="password" id="password_admin_confirm" name="password_admin_confirm" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                </div>

                <br><br>

                <div class="text-center">
                    <button name="signup_admin" type="submit" class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600">Log Masuk</button>
                    <!-- <a href="./admin_index.php" class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600">Log Masuk</a> -->
                </div>
            </form>
        </div>
    </section>
    
    <?php $location_index = ".."; include("../components/footer.php")?>

</body>
</html>