<?php $location_index = ".."; include("../components/header.php")?>

<body class="bg-gray-100 font-sans">
    <?php $location_index = ".."; include("../components/admin/navbar.php")?>
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
        <marquee>Seramai <?php echo $i?> orang alumni telah daftar maklumat mereka di sini</marquee>
    </div>

    <!-- Guest Section -->
    <section class="bg-orange-100 py-8">
        <div class="container mx-auto text-center">
            <div class="bg-orange-300 p-6 rounded-lg inline-block drop-shadow px-40">
                <h2 class="text-xl text-green-800 font-bold">Admin</h2><br>
                <div class="relative inline-flex items-center justify-center w-20 h-20 overflow-hidden bg-green-100 rounded-full dark:bg-green-600">
                    <span class="font-medium text-gray-600 dark:text-gray-300">IZD</span>
                </div>
                <p class="mt-2">Selamat datang Admin.</p>
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
                            $kurus_belajar_sql = mysqli_query($connect, "SELECT * FROM kursus WHERE status_kursus = 1");
                            while($kurus_belajar = mysqli_fetch_array($kurus_belajar_sql)){

                                $id_kursus = $kurus_belajar['id_kursus'];
                                ?>
                                <li>
                                    <?php echo $kurus_belajar['nama_kursus']?>: <?php echo getBilAlumni($id_kursus, 1, $connect)?></li>
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
                            $kurus_belajar_sql = mysqli_query($connect, "SELECT * FROM kursus WHERE status_kursus = 1");
                            while($kurus_belajar = mysqli_fetch_array($kurus_belajar_sql)){

                                $id_kursus = $kurus_belajar['id_kursus'];
                                ?>
                                <li>
                                    <?php echo $kurus_belajar['nama_kursus']?>: <?php echo getBilAlumni($id_kursus, 2, $connect)?></li>
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
                            $kurus_belajar_sql = mysqli_query($connect, "SELECT * FROM kursus WHERE status_kursus = 1");
                            while($kurus_belajar = mysqli_fetch_array($kurus_belajar_sql)){

                                $id_kursus = $kurus_belajar['id_kursus'];
                                ?>
                                <li>
                                    <?php echo $kurus_belajar['nama_kursus']?>: <?php echo getBilAlumni($id_kursus, 3, $connect)?></li>
                                <?php
                            }
                        ?>
                    </ul>
                </div>
                
            </div>

            <div class="text-center mb-6">
                <p class="mt-6">Jumlah: <span class="font-bold text-red-700">25 Orang</span></p>
            </div>

        </div>

        <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-red-800 mb-4">Admin Dashboard</h1>

        <!-- Filters Section -->
        <div class="flex flex-wrap items-center gap-4 mb-6">
            <select id="categoryFilter" class="border border-red-600 rounded px-4 py-2">
                <option value="all">Semua Kategori</option>
                <option value="Bekerja">Bekerja</option>
                <option value="Belajar">Sambung Belajar</option>
                <option value="Usahawan">Usahawan</option>
            </select>

            <select id="courseFilter" class="border border-red-600 rounded px-4 py-2">
                <option value="all">Semua Kursus</option>
                <?php
                    $kursus_sql = mysqli_query($connect, "SELECT * FROM kursus WHERE status_kursus != 0");
                    while($kursus = mysqli_fetch_array($kursus_sql)){
                        ?>
                        <option value="<?php echo $kursus['nama_kursus']?>"><?php echo $kursus['nama_kursus']?></option>
                        <?php
                    }

                ?>
            </select>

            <input id="searchBar" type="text" placeholder="Cari nama atau IC" class="border border-red-600 rounded px-4 py-2 w-full md:w-1/3" />
        </div>

        <!-- Table Section -->
        <div class="overflow-x-auto bg-white rounded shadow">
            <table class="w-full table-auto border-collapse">
                <thead>
                    <tr class="bg-red-400">
                        <th class="border px-4 py-2">Nama</th>
                        <th class="border px-4 py-2">IC</th>
                        <th class="border px-4 py-2">Email</th>
                        <th class="border px-4 py-2">No. Tel</th>
                        <th class="border px-4 py-2">Kategori</th>
                        <th class="border px-4 py-2">Kursus</th>
                        <th class="border px-4 py-2"></th>
                        <th class="border px-4 py-2"></th>
                    </tr>
                </thead>
                <tbody id="alumniTable">
                    <!-- Data will be dynamically injected here -->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        const alumniData = [
            <?php 

                $alumni_sql = mysqli_query($connect, "SELECT * FROM alumni WHERE status_alumni != 0");

                while($alumni = mysqli_fetch_array($alumni_sql)){

                    $id_kursus = $alumni['id_kursus'];
                    $kursus_alumni_sql = mysqli_query($connect, "SELECT * FROM kursus WHERE id_kursus = '$id_kursus'"); 
                    $kursus_alumni = mysqli_fetch_array($kursus_alumni_sql);

                    if($alumni['status_alumni'] == 1){$status = "Bekerja";};
                    if($alumni['status_alumni'] == 2){$status = "Belajar";};
                    if($alumni['status_alumni'] == 3){$status = "Usahawan";};

                    echo '
                        { id_alumni: "'. $alumni['id_alumni'] .'", nama_alumni: "'. $alumni['nama_alumni'] .'", ic_alumni: "'.$alumni['ic_alumni'].'", email_alumni: "'.$alumni['email_alumni'].'", no_tel_alumni: "'.$alumni['no_tel_alumni'].'", kategori: "'.$status.'", kursus: "'.$kursus_alumni['nama_kursus'].'" },
                    '
                    ?>


                    <?php
                }

            ?>
        ];

        const categoryFilter = document.getElementById("categoryFilter");
        const courseFilter = document.getElementById("courseFilter");
        const searchBar = document.getElementById("searchBar");
        const alumniTable = document.getElementById("alumniTable");

        function renderTable(data) {
            alumniTable.innerHTML = "";
            data.forEach(alumni => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td class="border px-4 py-2">${alumni.nama_alumni}</td>
                    <td class="border px-4 py-2">${alumni.ic_alumni}</td>
                    <td class="border px-4 py-2">${alumni.email_alumni}</td>
                    <td class="border px-4 py-2">${alumni.no_tel_alumni}</td>
                    <td class="border px-4 py-2">${alumni.kategori}</td>
                    <td class="border px-4 py-2">${alumni.kursus}</td>
                    <td class="border px-4 py-2"><a href="./info_alumni.php?id_alumni=${alumni.id_alumni}" class="bg-blue-500 text-white px-4 py-1 rounded-lg hover:bg-blue-600">Lihat</a></td>
                    <td class="border px-4 py-2"><a href="./admin_index.php" onclick="deleteAlert()" class="bg-red-500 text-white px-4 py-1 rounded-lg hover:bg-red-600">Padam</a></td>
                `;
                alumniTable.appendChild(row);
            });
        }

        function deleteAlert(){
            alert("Berjaya padam data")
        }

        function filterData() {
            const category = categoryFilter.value;
            const course = courseFilter.value;
            const searchTerm = searchBar.value.toLowerCase();

            const filteredData = alumniData.filter(alumni => {
                const matchesCategory = category === "all" || alumni.kategori === category;
                const matchesCourse = course === "all" || alumni.kursus === course;
                const matchesSearch = alumni.nama_alumni.toLowerCase().includes(searchTerm) || alumni.ic_alumni.includes(searchTerm);
                return matchesCategory && matchesCourse && matchesSearch;
            });

            renderTable(filteredData);
        }

        categoryFilter.addEventListener("change", filterData);
        courseFilter.addEventListener("change", filterData);
        searchBar.addEventListener("input", filterData);

        // Initial render
        renderTable(alumniData);
    </script>
    </section>
    
    <?php $location_index = ".."; include("../components/footer.php")?>

</body>
</html>