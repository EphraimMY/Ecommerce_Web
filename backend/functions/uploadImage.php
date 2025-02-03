<?php
function uploadImage(array $file): string {
    $targetDir = 'uploads/';
    $targetFile = $targetDir . basename($file['name']);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $extensions = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $extensions)) {
        throw new Exception('Invalid file type');
    }
    // Maximum file size is 1MB
    if ($file['size'] > 1000000) {
        throw new Exception('File is too large');
    }
    if (!move_uploaded_file($file['tmp_name'], $targetFile)) {
        throw new Exception('Failed to upload file');
    }
    return $targetFile;
}