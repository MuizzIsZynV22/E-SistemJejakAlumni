<?php $location_index = ".."; include("../components/header.php")?>

<body class="bg-gray-100 font-sans">
    <?php $location_index = ".."; include("../components/alumni/navbar.php")?>
    <!-- Header Section -->
    <header class="bg-red-500 text-white py-4 bg-cover bg-center h-60" style="background-image: url(../src/img/konvo.jpg);">
        <div class="container mx-auto text-center">
            <br><br>
            <h1 class="text-3xl font-bold drop-shadow-md">e-Sistem Jejak Alumni</h1>
            <p class="drop-shadow-md">Mengingati kejayaan anda yang bakal menjadi inspirasi kepada generasi seterusnya</p>
        </div>
    </header>

    <!-- Marquee Section -->
    <div class="bg-blue-600 text-white py-2 text-center">
        <?php 
            $bil_alumni_sql = mysqli_query($connect, "SELECT * FROM alumni WHERE status_alumni = 1 OR status_alumni = 2");

            $i = 0;
            while($bil_alumni = mysqli_fetch_array($bil_alumni_sql)){
                $i++;
            }

        ?>
        <marquee>Seramai <?php echo $i?>  orang alumni telah daftar maklumat mereka di sini</marquee>
    </div>

    <!-- Guest Section -->
    <?php
        $user_value = decryptUser($_SESSION['ESisJaUserHash'], $secret_key);
        $id_alumni = $user_value['id_user'];

        $alumni_sql = mysqli_query($connect, "SELECT * FROM alumni WHERE id_alumni = '$id_alumni'");
        $alumni = mysqli_fetch_array($alumni_sql);

    ?>
    <section class="bg-orange-100 py-8">
        <div class="container mx-auto text-center">
            <div class="bg-orange-300 p-6 rounded-lg inline-block drop-shadow px-40">
                <h2 class="text-xl font-bold"><?php echo htmlspecialchars(ucfirst($alumni['nama_alumni']))?></h2><br>
                <div class="relative inline-flex items-center justify-center w-20 h-20 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                    <img src="./src/img/profile1.jpg" alt="pfp">
                </div>
                <p class="mt-2">Selamat kembali alumni.</p>
                <form action="../backend/alumni.php" method="post">
                    <div class="mt-4">
                        <a href="./info.php" class="bg-blue-500 text-white px-4 py-2 rounded-lg mr-2 hover:bg-blue-600">Periksa</a>
                        <input type="hidden" name="token" value="<?php echo $token?>">
                        <button name="signout_alumni" type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Log Keluar</button>
                    </div>
                </form>
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

                        <?php 
                            $kurus_bekerja_sql = mysqli_query($connect, "SELECT * FROM kursus WHERE status_kursus = 1");
                            while($kurus_bekerja = mysqli_fetch_array($kurus_bekerja_sql)){

                                $id_kursus = $kurus_bekerja['id_kursus'];
                                ?>
                                <li>
                                    <?php echo $kurus_bekerja['nama_kursus']?>: <?php echo getBilAlumni($id_kursus, 1, $connect)?></li>
                                <?php
                            }
                        ?>
                    </ul>
                </div>

                <!-- Category: Sambung Belajar -->
                <div class="bg-orange-200 border border-red-600 p-6 rounded-lg m-2 shadow-md">
                    <h3 class="text-red-700 font-bold text-lg text-center">Sambung Belajar</h3>
                    <ul class="mt-4 list-disc list-inside">
                        <?php 
                            $kurus_bekerja_sql = mysqli_query($connect, "SELECT * FROM kursus WHERE status_kursus = 1");
                            while($kurus_bekerja = mysqli_fetch_array($kurus_bekerja_sql)){

                                $id_kursus = $kurus_bekerja['id_kursus'];
                                ?>
                                <li>
                                    <?php echo $kurus_bekerja['nama_kursus']?>: <?php echo getBilAlumni($id_kursus, 2, $connect)?></li>
                                <?php
                            }
                        ?>
                    </ul>
                </div>

                <!-- Category: Usahawan -->
                <div class="bg-orange-200 border border-red-600 p-6 rounded-lg m-2 shadow-md">
                    <h3 class="text-red-700 font-bold text-lg text-center">Usahawan</h3>
                    <ul class="mt-4 list-disc list-inside">
                        <?php 
                            $kurus_bekerja_sql = mysqli_query($connect, "SELECT * FROM kursus WHERE status_kursus = 1");
                            while($kurus_bekerja = mysqli_fetch_array($kurus_bekerja_sql)){

                                $id_kursus = $kurus_bekerja['id_kursus'];
                                ?>
                                <li>
                                    <?php echo $kurus_bekerja['nama_kursus']?>: <?php echo getBilAlumni($id_kursus, 3, $connect)?></li>
                                <?php
                            }
                        ?>
                    </ul>
                </div>
                
            </div>

            <div class="text-center mb-6">
                <p class="mt-6">Jumlah: <span class="font-bold text-red-700"><?php echo $i?> Orang</span></p>
            </div>

        </div>
    </section>
    
    <?php $location_index = ".."; include("../components/footer.php")?>

</body>
</html>