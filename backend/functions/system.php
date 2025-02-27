<?php

    //@ Alert 
    function alert_message($session_set, $text){
        //* Set alert
        if($session_set == "error"){

            $_SESSION['alert-message'] = $text;
            $_SESSION['alert-error'] = TRUE;
        }
        elseif($session_set == "success"){

            $_SESSION['alert-message'] = $text;
            $_SESSION['alert-success'] = TRUE;
        }
        elseif($session_set == "alert-info"){

            $_SESSION['alert-message'] = $text;
            $_SESSION['alert-info'] = TRUE;
        }
        else{

            $_SESSION['alert-message'] = "Alert Error";
            $_SESSION['alert-error'] = TRUE;
        }

    }

    //@ Validate input
    function validateInput($data) {
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    //@ Log Activity
    function log_activity_message($location, $text){

        //* Set IP
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } 

        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } 

        else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        
        //* Set text
        // $date = date("d/m/Y h:i");
        // $file_content = file_get_contents($location);
        // $text = "($date) ($ip): $text";
        
        //* Log text
        // $text .= "\n$file_content";
        // file_put_contents($location, $text);

    }

    //@ Format 
    function format_text($text) {
        $lines = explode('.', $text);
        $formatted_text = '';
        $indent_level = 0;

        foreach ($lines as $line) {
            $line = trim($line);
            if (strpos($line, '**') === 0) {
                $indent_level = 0;
                $line = str_replace('**', '', $line);
                $formatted_text .= "\n" . str_repeat(' ', $indent_level * 4) . $line . "\n";
            } elseif (strpos($line, ':') !== false) {
                $indent_level = 1;
                list($key, $value) = explode(':', $line, 2);
                $key = trim($key);
                $value = trim($value);
                $formatted_text .= "\n" . str_repeat(' ', $indent_level * 4) . $key . ":\n";
                $formatted_text .= str_repeat(' ', ($indent_level + 1) * 4) . $value . "\n";
            } else {
                $formatted_text .= str_repeat(' ', ($indent_level + 1) * 4) . $line . "\n";
            }
        }

        return $formatted_text;
    }

    function encodeObj($id, $message, $status){

        $output = [
            "id" => $id,
            "message" => $message,
            "status" => $status
        ];
        return json_encode($output);

    }
    function addJson($originalObj, $newObj){
        $originalObj = json_decode($originalObj);
        $newObj = json_decode($newObj);
        $mergedObject = (object) array_merge((array) $originalObj, (array) $newObj);
        return json_encode($mergedObject);
    }

?>