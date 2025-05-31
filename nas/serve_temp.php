<?php
session_start();

if (empty($_SESSION['user'])) {
    header("Location: /index.php");
    exit();
}

$user = $_SESSION['user'];
$fileParam = $_GET['file'] ?? '';

if ($fileParam === '') {
    http_response_code(400);
    echo "Fichier non spécifié.";
    exit();
}

$basePath = "/home/$user";
$fullPath = realpath("$basePath/$fileParam");

if (!$fullPath || strpos($fullPath, $basePath) !== 0 || !file_exists($fullPath)) {
    http_response_code(403);
    echo "Accès interdit.";
    exit();
}

if (is_dir($fullPath)) {
    echo "Ceci est un dossier.";
    exit();
}

$tmpDir = '/var/www/nas/tmp';
$tmpName = uniqid('f_', true) . '_' . basename($fullPath);
$tmpPath = "$tmpDir/$tmpName";

if (!copy($fullPath, $tmpPath)) {
    http_response_code(500);
    echo "Erreur lors de la copie.";
    exit();
}

header("Location: /tmp/" . basename($tmpPath));
exit();
