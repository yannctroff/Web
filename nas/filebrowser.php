<?php
session_start();

if (empty($_SESSION['user'])) {
    header("Location: /nas/index.php");
    exit();
}

$user = $_SESSION['user'];
$folder = $_GET['folder'] ?? 'Documents';
$folder = trim($folder, '/'); // Nettoyage

$basePath = "/home/$user";
$currentPath = "$basePath/$folder";

// Sécurisation
$realBasePath = realpath($basePath);
$realCurrentPath = realpath($currentPath);

if (!$realCurrentPath || strpos($realCurrentPath, $realBasePath) !== 0) {
    echo "<p>Accès interdit.</p>";
    exit();
}

// Liste des racines à considérer comme point de départ
$rootDirs = ['Documents', 'Pictures', 'Videos', 'Music'];

include 'includes/header.php';

echo "<h2>Contenu de $folder</h2>";

if (!is_dir($realCurrentPath)) {
    echo "<p>Le dossier n'existe pas.</p>";
    include 'includes/footer.php';
    exit();
}

// Affiche le lien "⬅️ Dossier parent" uniquement si on est dans un sous-dossier d'un des dossiers racines
foreach ($rootDirs as $root) {
    if (preg_match("#^$root/.+#", $folder)) {
        $parentPath = dirname($folder);
        echo '<p><a href="filebrowser.php?folder=' . urlencode($parentPath) . '">⬅️ Dossier parent</a></p>';
        break;
    }
}

$files = scandir($realCurrentPath);

echo "<ul>";
foreach ($files as $file) {
    if ($file === '.' || $file === '..') continue;

    $filePath = "$realCurrentPath/$file";
    $relativePath = ($folder ? "$folder/" : '') . $file;
    $encoded = urlencode($relativePath);

    if (is_dir($filePath)) {
        echo "<li>[DOSSIER ⬇️] <a href=\"filebrowser.php?folder=$encoded\">$file</a></li>";
    } else {
        echo "<li><a href=\"/serve_temp.php?file=$encoded\" target=\"_blank\">$file</a></li>";
    }
}
echo "</ul>";

echo '<p><a href="dashboard.php">Retour au tableau de bord</a></p>';

include 'includes/footer.php';
