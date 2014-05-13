<?php

/*
  Uploadify
  Copyright (c) 2012 Reactive Apps, Ronnie Garcia
  Released under the MIT License <http://www.opensource.org/licenses/mit-license.php>
 */

// Define a destination
$targetFolder = '/uploads'; // Relative to the root

$verifyToken = md5('unique_salt' . $_POST['timestamp']);

if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
    $tempFile   = $_FILES['Filedata']['tmp_name'];
    $targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
    $fileParts  = pathinfo($_FILES['Filedata']['name']);
    $tmpFileName = time() . rand(100000, 999999) . '.' .  $fileParts['extension'];
    $targetFile = rtrim($targetPath, '/') . '/' . $tmpFileName;

    // Validate the file type
    $fileTypes = array('jpg', 'jpeg', 'gif', 'png'); // File extensions


    if (in_array($fileParts['extension'], $fileTypes)) {
        move_uploaded_file($tempFile, $targetFile);
        die('/uploads/' . $tmpFileName);
    } else {
        die('err');
    }
}
?>