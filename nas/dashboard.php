<?php
session_start();

if (empty($_SESSION['user'])) {
    header("Location: /nas/index.php");
    exit();
}

$user = $_SESSION['user'];

include 'includes/header.php';
?>

<h2>Bienvenue sur ton NAS, <?= htmlspecialchars($user) ?> !</h2>

<nav>
    <ul>
        <li><a href="filebrowser.php?folder=Documents">Documents</a></li>
        <li><a href="filebrowser.php?folder=Pictures">Images</a></li>
        <li><a href="filebrowser.php?folder=Videos">Vidéos</a></li>
        <li><a href="filebrowser.php?folder=Music">Musiques</a></li>
    </ul>
</nav>

<p><a href="logout.php">Déconnexion</a></p>
<p>Ce site est en cours de développement, 
    vous pouvez toutefois consulter vos données 
    actuellement stockés dans votre dossier personnel du VPS</p>
<?php include 'includes/footer.php'; ?>
