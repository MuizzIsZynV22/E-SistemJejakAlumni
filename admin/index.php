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
        <marquee>Seramai 25 orang alumni telah daftar maklumat mereka di sini</marquee>
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
                <p class="mt-6">Jumlah: <span class="font-bold text-red-700">25 Orang</span></p>
            </div>

        </div>

        <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-red-800 mb-4">Admin Dashboard</h1>

        <!-- Filters Section -->
        <div class="flex flex-wrap items-center gap-4 mb-6">
            <select id="categoryFilter" class="border border-red-600 rounded px-4 py-2">
                <option value="all">Semua Kategori</option>
                <option value="bekerja">Bekerja</option>
                <option value="sambung">Sambung Belajar</option>
                <option value="usahawan">Usahawan</option>
            </select>

            <select id="courseFilter" class="border border-red-600 rounded px-4 py-2">
                <option value="all">Semua Kursus</option>
                <option value="Kejuruteraan Awam">Kejuruteraan Awam</option>
                <option value="Kejuruteraan Elektrikal">Kejuruteraan Elektrikal</option>
                <option value="Kejuruteraan Mekanikal">Kejuruteraan Mekanikal</option>
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
            { nama_alumni: "Ahmad Rizal", ic_alumni: "900101-05-1234", email_alumni: "ahmad.rizal@gmail.com", no_tel_alumni: "012-3456789", kategori: "bekerja", kursus: "Kejuruteraan Awam" },
            { nama_alumni: "Nurul Hidayah", ic_alumni: "920304-08-5678", email_alumni: "nurul.hidayah@gmail.com", no_tel_alumni: "011-9988776", kategori: "sambung", kursus: "Kejuruteraan Awam" },
            { nama_alumni: "Muhammad Firdaus", ic_alumni: "910206-11-2345", email_alumni: "firdaus.m@gmail.com", no_tel_alumni: "013-5566778", kategori: "bekerja", kursus: "Kejuruteraan Awam" },
            { nama_alumni: "Siti Aisyah", ic_alumni: "980807-09-1111", email_alumni: "siti.aisyah@gmail.com", no_tel_alumni: "019-4433221", kategori: "usahawan", kursus: "Kejuruteraan Elektrikal" },
            { nama_alumni: "Ahmad Faiz", ic_alumni: "940102-08-2222", email_alumni: "faiz.ahmad@gmail.com", no_tel_alumni: "012-5566778", kategori: "bekerja", kursus: "Kejuruteraan Elektrikal" },
            { nama_alumni: "Aminah Zulkifli", ic_alumni: "910506-10-1234", email_alumni: "aminah.zulkifli@gmail.com", no_tel_alumni: "014-1234567", kategori: "bekerja", kursus: "Kejuruteraan Awam" },
            { nama_alumni: "Faisal Rahman", ic_alumni: "900305-08-5678", email_alumni: "faisal.rahman@yahoo.com", no_tel_alumni: "012-8877654", kategori: "sambung", kursus: "Kejuruteraan Elektrikal" },
            { nama_alumni: "Hafizah Nor", ic_alumni: "960703-06-7890", email_alumni: "hafizah.nor@gmail.com", no_tel_alumni: "011-2233445", kategori: "usahawan", kursus: "Perbankan" },
            { nama_alumni: "Arif Shah", ic_alumni: "920604-08-4321", email_alumni: "arif.shah@gmail.com", no_tel_alumni: "019-8877665", kategori: "bekerja", kursus: "Kejuruteraan Mekanikal" },
            { nama_alumni: "Nurul Ain", ic_alumni: "970805-09-6543", email_alumni: "nurul.ain@yahoo.com", no_tel_alumni: "016-5566778", kategori: "sambung", kursus: "Teknologi Komputeran" },
            { nama_alumni: "Zainal Abidin", ic_alumni: "930209-07-9876", email_alumni: "zainal.abidin@gmail.com", no_tel_alumni: "017-6655443", kategori: "usahawan", kursus: "Teknologi Animasi" },
            { nama_alumni: "Husna Afiqah", ic_alumni: "990402-05-1112", email_alumni: "husna.afiqah@gmail.com", no_tel_alumni: "018-4433221", kategori: "bekerja", kursus: "Pemasaran" },
            { nama_alumni: "Aiman Haziq", ic_alumni: "940307-08-1230", email_alumni: "aiman.haziq@gmail.com", no_tel_alumni: "012-6655778", kategori: "sambung", kursus: "Perakaunan" },
            { nama_alumni: "Sofia Rahim", ic_alumni: "950106-09-4567", email_alumni: "sofia.rahim@yahoo.com", no_tel_alumni: "016-8899776", kategori: "usahawan", kursus: "Seni Kulinari" },
            { nama_alumni: "Ridzuan Fakri", ic_alumni: "960701-10-7890", email_alumni: "ridzuan.fakri@gmail.com", no_tel_alumni: "019-4455667", kategori: "bekerja", kursus: "Bakeri dan Pastri" },
            { nama_alumni: "Azhar Ridzwan", ic_alumni: "910107-12-9876", email_alumni: "azhar.ridzwan@gmail.com", no_tel_alumni: "014-7788991", kategori: "sambung", kursus: "SLDN Perabot" },
            { nama_alumni: "Fathia Sufia", ic_alumni: "960806-06-6543", email_alumni: "fathia.sufia@yahoo.com", no_tel_alumni: "017-6654321", kategori: "usahawan", kursus: "Penyediaan dan Pembuatan Makanan" },
            { nama_alumni: "Syafiq Hamdan", ic_alumni: "920307-08-1111", email_alumni: "syafiq.hamdan@gmail.com", no_tel_alumni: "016-3344556", kategori: "bekerja", kursus: "Kejuruteraan Awam" },
            { nama_alumni: "Nadia Hanim", ic_alumni: "990102-05-2222", email_alumni: "nadia.hanim@gmail.com", no_tel_alumni: "018-9988776", kategori: "sambung", kursus: "Perbankan" },
            { nama_alumni: "Farhan Hakim", ic_alumni: "950508-10-4444", email_alumni: "farhan.hakim@yahoo.com", no_tel_alumni: "019-7788991", kategori: "usahawan", kursus: "Teknologi Komputeran" },
            { nama_alumni: "Ruzaini Azhar", ic_alumni: "970603-07-3333", email_alumni: "ruzaini.azhar@gmail.com", no_tel_alumni: "012-3344556", kategori: "bekerja", kursus: "Teknologi Animasi" },
            { nama_alumni: "Zahira Hanim", ic_alumni: "960401-09-5555", email_alumni: "zahira.hanim@gmail.com", no_tel_alumni: "017-1122334", kategori: "sambung", kursus: "Pemasaran" },
            { nama_alumni: "Azmi Fakri", ic_alumni: "930605-06-6666", email_alumni: "azmi.fakri@gmail.com", no_tel_alumni: "014-6655778", kategori: "usahawan", kursus: "Perakaunan" },
            { nama_alumni: "Hidayah Nor", ic_alumni: "910308-08-8888", email_alumni: "hidayah.nor@yahoo.com", no_tel_alumni: "013-4455667", kategori: "bekerja", kursus: "Seni Kulinari" },
            { nama_alumni: "Kamarul Arifin", ic_alumni: "950209-07-7777", email_alumni: "kamarul.arifin@gmail.com", no_tel_alumni: "016-7788991", kategori: "sambung", kursus: "Bakeri dan Pastri" }
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
                    <td class="border px-4 py-2"><a href="./userinfo_bekerja.php" class="bg-blue-500 text-white px-4 py-1 rounded-lg hover:bg-blue-600">Lihat</a></td>
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
    
    <?php $location_index = "."; include("./components/footer.php")?>

</body>
</html>