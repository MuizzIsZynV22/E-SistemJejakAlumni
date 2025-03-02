<?php 

    // include("$location_index/backend/functions/system.php");
    // include("$location_index/backend/functions/user.php");
    // include("$location_index/backend/models/alumni.php");

    $verify = verifySessionAlumni($secret_key, $connect);

    $verify = json_decode($verify, true);
    
    if(!isset($log_location)){
        if($verify['status'] != "success"){
           echo '<script>setTimeout(function() {window.location.href = "'. $location_index.'/"}, 0);</script>';
        } 

        // FIXME betulkan cara taknak bagi show dashboard 
        // alert_message("error", "User Not Logged In");
    }

?>

<nav class="bg-white border-b border-blue-900 dark:bg-white">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="<?php echo $location_index?>/src/img/kvks.png" class="h-10" alt="KVKS Logo" />
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 180 90" width="160" height="40">

        <!-- "e" Letter -->
        <text x="-50" y="60" font-family="Arial, sans-serif" font-size="48" font-weight="bold" fill="#1E40AF">e</text>

        <!-- Dash -->
        <rect x="-15" y="40" width="10" height="5" fill="#F59E0B"/>
        
        <!-- "SisJA" Letters -->
        <text x="0" y="60" font-family="Arial, sans-serif" font-size="48" font-weight="bold" fill="#1E40AF">Sis</text>
        <text x="75" y="60" font-family="Arial, sans-serif" font-size="48" font-weight="bold" fill="#F59E0B">JA</text>
      </svg>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-white md:dark:bg-white dark:border-gray-700">
        <li>
          <a href="<?php echo $location_index?>/alumni/" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-800 md:p-0 dark:text-blue-600 md:dark:hover:text-blue-600 dark:hover:bg-gray-700 dark:hover:underline md:dark:hover:bg-transparent">Utama</a>
          <!-- <a href="./index.php" class="block py-2 px-3 text-white bg-blue-800 rounded md:bg-transparent md:text-blue-800 md:p-0 dark:text-blue-600 md:dark:text-blue-600" aria-current="page">Utama</a> -->
        </li>
        <li>
          <a href="<?php echo $location_index?>/alumni/info.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-800 md:p-0 dark:text-blue-600 md:dark:hover:text-blue-600 dark:hover:bg-gray-700 dark:hover:underline md:dark:hover:bg-transparent">Info</a>
        </li>
        <li>
          <!--TODO tukar -->
          <a href="<?php echo $location_index?>/statistic.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-800 md:p-0 dark:text-blue-600 md:dark:hover:text-blue-600 dark:hover:bg-gray-700 dark:hover:underline md:dark:hover:bg-transparent">Statistik</a>
        </li>
        <li>
          <!-- TODO tukar -->

          <form action="<?php echo $location_index?>/backend/alumni.php" method="post">
            <input type="hidden" name="token" value="<?php echo $token?>">

            <button value="Log Keluar" type="submit" name="signout_alumni" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-800 md:p-0 dark:text-blue-600 md:dark:hover:text-blue-600 dark:hover:bg-gray-700 dark:hover:underline md:dark:hover:bg-transparent">Log Keluar</button>

          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- back button -->
<!-- <button onclick="history.back()" type="button" class="fixed z-10 translate-x-1 -translate-y-14 text-white bg-gray-800 hover:bg-gray-900 font-medium rounded-full text-sm px-4 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 opacity-40 transition-opacity hover:opacity-100">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <polyline points="15 18 9 12 15 6"></polyline>
</svg>
</button> -->
<?php include "$location_index/components/alert.php";?>