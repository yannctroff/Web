<?php
session_start();

if (empty($_SESSION['user'])) {
    header("Location: /index.php");
    exit();
}

$user = $_SESSION['user'];

include 'includes/header.php';
?>

<h2 style="text-align: center;">Bienvenue sur ton NAS <?= htmlspecialchars($user) ?> !</h2>

<nav>
    <ul>
        <li><a href="explorer.php?folder=Documents">Documents</a></li>
        <li><a href="explorer.php?folder=Pictures">Images</a></li>
        <li><a href="explorer.php?folder=Videos">Vidéos</a></li>
        <li><a href="explorer.php?folder=Music">Musiques</a></li>
    </ul>
</nav>
<br>

<p><a href="logout.php">Déconnexion</a></p>
<?php
$diskTotal = disk_total_space("/home");
$$folderUsed  = disk_total_space("/home/$USER");
$diskFree = disk_free_space("/home");
$diskUsed = $diskTotal - $diskFree;
$diskUsagePercent = round(($diskUsed / $diskTotal) * 100);

?>

<h2 style="text-align: center;">Utilisation du disque</h2>
<div style="border: 1px solid #ccc; border-radius: 10px; overflow: hidden; width: 100%; max-width: 100%; height: 30px; box-sizing: border-box;">
    <div style="height: 100%; background-color: #4caf50; width: <?= $diskUsagePercent ?>%; text-align: center; color: white; line-height: 30px; box-sizing: border-box;">
        <?= $diskUsagePercent ?>%
    </div>
</div>
<p>Disque utilisé : <?= round($diskUsed / 1073741824, 2) ?> Go sur <?= round($diskTotal / 1073741824, 2) ?> Go (<?= $diskUsagePercent ?>%)</p>
<p>Mon dossier personnel utilise <?= round($folderUsed / 1073741824, 2) ?> Go, soit <?= round(($folderUsed / $diskUsed) * 100, 2) ?>% de l'espace utilisé.</p>

<?php include 'includes/footer.php'; ?>
