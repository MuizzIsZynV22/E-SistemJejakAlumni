<?php

function verifySessionAlumni($secret_key, $connect){

    if(isset($_SESSION['ESisJaUserHash']) || isset($_COOKIE['ESisJaUserHash'])){
        
        if(!isset($_SESSION['ESisJaUserHash'])){
            
            $_SESSION['ESisJaUserHash'] = $_COOKIE['ESisJaUserHash'];
        }
        
        $user_value_hash = $_SESSION['ESisJaUserHash'];
        $user_value = decryptUser($user_value_hash, $secret_key);

        $id_user = validateInput($user_value['id_user']);
        $password_user = validateInput($user_value['password_user']);
        $type_user = validateInput($user_value['type']);

        if($type_user != "alumni"){
            return encodeObj("403", "Jenis User Salah", "error");
            exit;
        }

        $user_sql = mysqli_query($connect, "SELECT * FROM alumni WHERE id_alumni = '$id_user'");
        $user = mysqli_fetch_array($user_sql);

        $verify = password_verify($password_user, $user['password_alumni']);
        
        if($verify){

            $status = encodeObj("200", "Berjaya log masuk alumni", "success");
            
            $alumni = [
                "id_alumni" => $user['id_alumni'],
                "email_alumni" => $user['email_alumni'],
                "nama_alumni" => $user['nama_alumni'],
                "katalaluan_alumni" => $password_user
            ];

            $alumni = json_encode($alumni);
            return addJson($status, $alumni);
        }
        else{
            return encodeObj("400", "Katalaluan tidak sepadan", "error");
        }
    }
    else{

        return encodeObj("400", "Pengguna belum Log Masuk", "error");
    }
}

function getBilAlumni($id_kursus, $status, $connect){

    $bil_bekerja_sql = mysqli_query($connect, "SELECT * FROM alumni WHERE id_kursus = '$id_kursus' AND status_alumni = '$status'");

    $bil_bekerja_alumni = mysqli_num_rows($bil_bekerja_sql);
    
    return $bil_bekerja_alumni;

}
?>