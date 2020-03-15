<?php
error_reporting(E_ALL);                        
ini_set('displey_errors', 'on');   


    if (isset($_GET['page']))  {  //Agar get zaprosdan xech nima kelamsa yoki get zapros berilmasa index saxifani ozini qaytaramiz!
        $page = $_GET['page'];
    } else {
        $page = 'index';
    }      

    $path = "pages/$page.php";

    if (file_exists($path)) {                   
        $content = file_get_contents($path);

        $reg = '#\{\{title:(.*?)\}\}#';
        if (preg_match($reg, $content, $match)) {
            $title = $match[1];
            $content = trim(preg_replace($reg, '', $content));
        } else {
            $title = '';
        }

        $reg = '#\{\{desc:(.*?)\}\}#';
        if (preg_match($reg, $content, $match)) {
            $desc = $match[1];
            $content = trim(preg_replace($reg, '', $content));
        } else {
            $desc = '';
        }



    } else {
        $content = 'file not found';           
}
            

include 'layout.php';
