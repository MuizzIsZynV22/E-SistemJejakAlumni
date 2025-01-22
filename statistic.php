<?php $location_index = "."; include("./components/header.php")?>

<body class="bg-gray-100 font-sans">
    <?php $location_index = "."; include("./components/navbar.php")?>
    <h1 class="text-2xl font-bold text-center text-red-700 m-6">Statistik Alumni</h1>

    <!-- Chart Container -->
    <div class="py-8 container mx-auto w-2/3">
        <div class="w-full max-w-lg bg-white p-4 rounded shadow mx-auto">
        <!-- Dropdown to select category -->
        <div class="mb-6 mx-auto">
            <label for="category" class="block text-lg font-medium text-gray-700">Pilih category:</label>
            <select id="category" class="mt-2 p-2 rounded border border-gray-300 shadow-sm">
                <option value="bekerja">Bekerja</option>
                <option value="sambung">Sambung Belajar</option>
                <option value="usahawan">Usahawan</option>
            </select>
        </div>
        
            <canvas id="donutChart"></canvas>
        </div>
        
        <script>
            const alumniData = [
                { nama_alumni: "Ahmad Rizal", ic_alumni: "900101-05-1234", email_alumni: "ahmad.rizal@gmail.com", no_tel_alumni: "012-3456789", category: "bekerja", kursus: "Kejuruteraan Awam" },
                { nama_alumni: "Nurul Hidayah", ic_alumni: "920304-08-5678", email_alumni: "nurul.hidayah@gmail.com", no_tel_alumni: "011-9988776", category: "sambung", kursus: "Kejuruteraan Awam" },
                { nama_alumni: "Muhammad Firdaus", ic_alumni: "910206-11-2345", email_alumni: "firdaus.m@gmail.com", no_tel_alumni: "013-5566778", category: "bekerja", kursus: "Kejuruteraan Awam" },
                { nama_alumni: "Siti Aisyah", ic_alumni: "980807-09-1111", email_alumni: "siti.aisyah@gmail.com", no_tel_alumni: "019-4433221", category: "usahawan", kursus: "Kejuruteraan Elektrikal" },
                { nama_alumni: "Ahmad Faiz", ic_alumni: "940102-08-2222", email_alumni: "faiz.ahmad@gmail.com", no_tel_alumni: "012-5566778", category: "bekerja", kursus: "Kejuruteraan Elektrikal" },
                { nama_alumni: "Aminah Zulkifli", ic_alumni: "910506-10-1234", email_alumni: "aminah.zulkifli@gmail.com", no_tel_alumni: "014-1234567", category: "bekerja", kursus: "Kejuruteraan Awam" },
                { nama_alumni: "Faisal Rahman", ic_alumni: "900305-08-5678", email_alumni: "faisal.rahman@yahoo.com", no_tel_alumni: "012-8877654", category: "sambung", kursus: "Kejuruteraan Elektrikal" },
                { nama_alumni: "Hafizah Nor", ic_alumni: "960703-06-7890", email_alumni: "hafizah.nor@gmail.com", no_tel_alumni: "011-2233445", category: "usahawan", kursus: "Perbankan" },
                { nama_alumni: "Arif Shah", ic_alumni: "920604-08-4321", email_alumni: "arif.shah@gmail.com", no_tel_alumni: "019-8877665", category: "bekerja", kursus: "Kejuruteraan Mekanikal" },
                { nama_alumni: "Nurul Ain", ic_alumni: "970805-09-6543", email_alumni: "nurul.ain@yahoo.com", no_tel_alumni: "016-5566778", category: "sambung", kursus: "Teknologi Komputeran" },
                { nama_alumni: "Zainal Abidin", ic_alumni: "930209-07-9876", email_alumni: "zainal.abidin@gmail.com", no_tel_alumni: "017-6655443", category: "usahawan", kursus: "Teknologi Animasi" },
                { nama_alumni: "Husna Afiqah", ic_alumni: "990402-05-1112", email_alumni: "husna.afiqah@gmail.com", no_tel_alumni: "018-4433221", category: "bekerja", kursus: "Pemasaran" },
                { nama_alumni: "Aiman Haziq", ic_alumni: "940307-08-1230", email_alumni: "aiman.haziq@gmail.com", no_tel_alumni: "012-6655778", category: "sambung", kursus: "Perakaunan" },
                { nama_alumni: "Sofia Rahim", ic_alumni: "950106-09-4567", email_alumni: "sofia.rahim@yahoo.com", no_tel_alumni: "016-8899776", category: "usahawan", kursus: "Seni Kulinari" },
                { nama_alumni: "Ridzuan Fakri", ic_alumni: "960701-10-7890", email_alumni: "ridzuan.fakri@gmail.com", no_tel_alumni: "019-4455667", category: "bekerja", kursus: "Bakeri dan Pastri" },
                { nama_alumni: "Azhar Ridzwan", ic_alumni: "910107-12-9876", email_alumni: "azhar.ridzwan@gmail.com", no_tel_alumni: "014-7788991", category: "sambung", kursus: "SLDN Perabot" },
                { nama_alumni: "Fathia Sufia", ic_alumni: "960806-06-6543", email_alumni: "fathia.sufia@yahoo.com", no_tel_alumni: "017-6654321", category: "usahawan", kursus: "Penyediaan dan Pembuatan Makanan" },
                { nama_alumni: "Syafiq Hamdan", ic_alumni: "920307-08-1111", email_alumni: "syafiq.hamdan@gmail.com", no_tel_alumni: "016-3344556", category: "bekerja", kursus: "Kejuruteraan Awam" },
                { nama_alumni: "Nadia Hanim", ic_alumni: "990102-05-2222", email_alumni: "nadia.hanim@gmail.com", no_tel_alumni: "018-9988776", category: "sambung", kursus: "Perbankan" },
                { nama_alumni: "Farhan Hakim", ic_alumni: "950508-10-4444", email_alumni: "farhan.hakim@yahoo.com", no_tel_alumni: "019-7788991", category: "usahawan", kursus: "Teknologi Komputeran" },
                { nama_alumni: "Ruzaini Azhar", ic_alumni: "970603-07-3333", email_alumni: "ruzaini.azhar@gmail.com", no_tel_alumni: "012-3344556", category: "bekerja", kursus: "Teknologi Animasi" },
                { nama_alumni: "Zahira Hanim", ic_alumni: "960401-09-5555", email_alumni: "zahira.hanim@gmail.com", no_tel_alumni: "017-1122334", category: "sambung", kursus: "Pemasaran" },
                { nama_alumni: "Azmi Fakri", ic_alumni: "930605-06-6666", email_alumni: "azmi.fakri@gmail.com", no_tel_alumni: "014-6655778", category: "usahawan", kursus: "Perakaunan" },
                { nama_alumni: "Hidayah Nor", ic_alumni: "910308-08-8888", email_alumni: "hidayah.nor@yahoo.com", no_tel_alumni: "013-4455667", category: "bekerja", kursus: "Seni Kulinari" },
                { nama_alumni: "Kamarul Arifin", ic_alumni: "950209-07-7777", email_alumni: "kamarul.arifin@gmail.com", no_tel_alumni: "016-7788991", category: "sambung", kursus: "Bakeri dan Pastri" }
            ];
            
            const ctx = document.getElementById('donutChart').getContext('2d');
            let chart;
            
            function generateChart(category) {
                const filteredData = alumniData.filter(item => item.category === category);
                
                const courseCount = {};
                filteredData.forEach(item => {
                    courseCount[item.kursus] = (courseCount[item.kursus] || 0) + 1;
                });
                
                const labels = Object.keys(courseCount);
                const data = Object.values(courseCount);
                
                const colors = ["#FF6384", "#36A2EB", "#FFCE56", "#4BC0C0", "#9966FF", "#FF9F40", "#F06344"];
                
                if (chart) {
                    chart.destroy();
                }
                
                chart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels,
                        datasets: [{
                            data,
                            backgroundColor: colors,
                        }],
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                        },
                    },
                });
            }
            
            document.getElementById('category').addEventListener('change', (event) => {
                generateChart(event.target.value);
            });
            
            // Initialize chart with the first category
            generateChart('bekerja');
        </script>
    </div>

    <?php $location_index = "."; include("./components/footer.php")?>

</body>
</html>