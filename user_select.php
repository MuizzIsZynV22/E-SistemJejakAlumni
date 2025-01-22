<?php $location_index = "."; include("./components/header.php")?>

<body class="bg-gray-100 font-sans flex flex-col">
    <?php $location_index = "."; include("./components/navbar.php")?>
    <!-- Section -->
    <section class="py-8 flex-grow">
        <div class="container mx-auto">
            <br>
            <div class="text-center mb-6">
                <h2 class="text-xl font-bold text-red-700">Sila Pilih Status Alumni Anda</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div onclick="window.location.href='./signup_bekerja.php';" style="cursor: pointer;" class="bg-orange-200 border border-red-600 p-6 rounded-lg m-2 shadow-md">
                    <h3 class="text-red-700 font-bold text-lg text-center">Bekerja</h3>
                </div>
                <div onclick="window.location.href='./signup_bekerja.php';" style="cursor: pointer;" class="bg-orange-200 border border-red-600 p-6 rounded-lg m-2 shadow-md">
                    <h3 class="text-red-700 font-bold text-lg text-center">Sambung Belajar</h3>
                </div>
                <div onclick="window.location.href='./signup_bekerja.php';" style="cursor: pointer;" class="bg-orange-200 border border-red-600 p-6 rounded-lg m-2 shadow-md">
                    <h3 class="text-red-700 font-bold text-lg text-center">Usahawan</h3>
                </div>
            </div>
        </div>
    </section>
        
    <?php $location_index = "."; include("./components/footer.php")?>

</body>
</html>