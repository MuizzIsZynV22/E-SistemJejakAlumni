<?php 

    session_start();

    include '../config/connect.php';
    include '../backend/functions/system.php';
    include '../backend/functions/csrf.php';
    include '../backend/functions/user.php';

    checkCSRFToken();
    
    //@ Daftar admin
    if(isset($_POST['signup_admin'])){

        if(
            isset($_POST['nama_admin']) &&
            isset($_POST['password_admin']) &&
            isset($_POST['password_admin_confirm']) 
        ){

            // validate dan dapatkan user info
            $nama_admin = validateInput($_POST['nama_admin']);
            $password_admin = validateInput($_POST['password_admin']);
            $password_admin_confirm = validateInput($_POST['password_admin_confirm']);

            $password_admin_hash = password_hash($password_admin, PASSWORD_DEFAULT);
            $created_date_admin = date("Y-m-d");
            
            if($password_admin == $password_admin_confirm){

                // check user in database
                $check_user_sql = mysqli_query($connect, "SELECT * FROM admin WHERE nama_admin = '$nama_admin'");
                if(!(mysqli_num_rows($check_user_sql) > 0)){
    
                    // hasilkan user
                    $daftar_admin_sql = mysqli_query($connect, "INSERT INTO admin VALUES (NULL, '$nama_admin' , '$password_admin_hash' , '$created_date_admin' , 1)");
    
                    // set user session
                    $id_admin = mysqli_insert_id($connect);
                    setUser($id_admin, $password_admin, "admin", $secret_key);
    
                    // redirect user
                    log_activity_message("../log/user_activity_log", "User berjaya dihasilkan");
                    alert_message("success", "Alumni telah berdaftar");               
                    header("Location:../alumni/info.php");
                }
                else{
                    // error telah ada dalam database
                    log_activity_message("../log/user_activity_log", "User telah berdaftar");
                    alert_message("error", "Alumni telah berdaftar");               
                    header("Location:../signin.php");
                }
            }
            else{
                // error telah ada dalam database
                log_activity_message("../log/user_activity_log", "Katalaluan tidak sepadan");
                alert_message("error", "Katalaluan tidak sepadan");               
                header("Location:../signin.php");

            }

        }
        else{
            // error tak lengkap data
            log_activity_message("../log/user_activity_log", "Data tidak lengkap");
            alert_message("error", "Data tidak lengkap");
            header("Location:../");
        }
    }

    //@ Log in alumni
    else if(isset($_POST['signin_admin'])){

        if(
            isset($_POST['nama_admin']) &&
            isset($_POST['password_admin'])
        ){

            $nama_admin = validateInput($_POST['nama_admin']);
            $password_admin = validateInput($_POST['password_admin']);

            $check_admin_sql = mysqli_query($connect, "SELECT * FROM admin WHERE nama_admin = '$nama_admin'");
            
            // check adakah user ada dalam database
            if(mysqli_num_rows($check_admin_sql)){

                $check_admin = mysqli_fetch_array($check_admin_sql);

                // pastikan password betul
                if(password_verify($password_admin, $check_admin['password_admin'])){

                    setUser($check_admin['id_admin'], $password_admin, "admin", $secret_key);

                    log_activity_message("../log/user_activity_log", "Berjaya Log Masuk");
                    alert_message("success", "Berjaya Log Masuk");
                    header("Location:../admin/");

                }
                else{

                    log_activity_message("../log/user_activity_log", "Katalaluan Tidak Sepadan");
                    alert_message("error", "Katalaluan Tidak Sepadan");
                    header("Location:../admin/signin.php");
                }
            }
            else{

                log_activity_message("../log/user_activity_log", "Pengguna tidak sah");
                alert_message("error", "Pengguna tidak sah");
                header("Location:../admin/signin.php");
            }

        }
        else{

            log_activity_message("../log/user_activity_log", "Data tidak lengkap");
            alert_message("error", "Data tidak lengkap");
            header("Location:../");
        }
    }

    //@ Kemaskini alumni
    // else if(isset($_POST['kemaskini_alumni'])){

    //     if(
    //         isset($_POST['id_alumni']) &&
    //         isset($_POST['nama_alumni']) &&
    //         isset($_POST['ic_alumni']) &&
    //         isset($_POST['jantina_alumni']) &&
    //         isset($_POST['no_tel_alumni']) &&
    //         isset($_POST['email_alumni']) &&
    //         isset($_POST['id_kursus']) &&
    //         isset($_POST['kohort_alumni']) &&
    //         isset($_POST['alamat_alumni'])
    //     ){
            
    //         $id_alumni = validateInput($_POST['id_alumni']);
    //         $nama_alumni = validateInput($_POST['nama_alumni']);
    //         $ic_alumni = validateInput($_POST['ic_alumni']);
    //         $jantina_alumni = validateInput($_POST['jantina_alumni']);
    //         $no_tel_alumni = validateInput($_POST['no_tel_alumni']);
    //         $email_alumni = validateInput($_POST['email_alumni']);
    //         $id_kursus = validateInput($_POST['id_kursus']);
    //         $kohort_alumni = validateInput($_POST['kohort_alumni']);
    //         $alamat_alumni = validateInput($_POST['alamat_alumni']);

    //         if($id_kursus != 0){

    //             $kemaskini_alumni_sql = mysqli_query($connect, "UPDATE alumni SET 
    //                 nama_alumni = '$nama_alumni',
    //                 ic_alumni = '$ic_alumni',
    //                 jantina_alumni = '$jantina_alumni',
    //                 no_tel_alumni = '$no_tel_alumni',
    //                 email_alumni = '$email_alumni',
    //                 id_kursus = '$id_kursus',
    //                 kohort_alumni = '$kohort_alumni',
    //                 alamat_alumni = '$alamat_alumni'
    //                 WHERE id_alumni = '$id_alumni'
    //             ");

    //             log_activity_message("../log/user_activity_log", "Berjaya kemaskini pelajar");
    //             alert_message("success", "Berjaya kemaskini pelajar ");
    //             header("Location:../alumni/");

    //         }
    //         else{
    //             alert_message("error", "Sila pilih jenis kursus");
    //             log_activity_message("../log/user_activity_log", "Sila pilih jenis kursus");
    //             header("Location:../alumni/");
    //         }

    //     }
    //     else{
    //         log_activity_message("../log/user_activity_log", "Data tidak lengkap");
    //         alert_message("error", "Data tidak lengkap");
    //         header("Location:../alumni/");
    //     }

    // }

    else if(isset($_POST['signout_admin'])){

        session_destroy();
        setcookie('ESisJaUserHash', 2, time() - 3600 , "/");
        header("location:../");
    }
    else{
        // error tak ada token
        log_activity_message("../log/user_activity_log", "Salah Function");
        alert_message("error", "Salah function");
        header("Location:../");
    }

?>