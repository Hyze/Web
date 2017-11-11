<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10/11/17
 * Time: 22:07
 */

// cette fonction permet de refaire un tableau propre avec les images recup
function refactoreArray(&$file_post) {

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}

if(isset($_FILES['file']))
{

    $file_ary = refactoreArray($_FILES['file']);

    foreach ($file_ary as $file) {

        print("File Name: ". $file['name']);
        //print("File Type: ". $file['type']);
        //print("File Size: ". $file['size']);
        print("File temp position : " . $file['tmp_name']);
    }
}





?>