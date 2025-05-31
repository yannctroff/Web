<?php 
session_start();
include 'helpers.php';

if (!empty($_SESSION['user'])) {
    header("Location: /dashboard.php");
    exit();
}

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    if ($user && $pass) {
        if (verify_user_pass($user, $pass)) {
            $_SESSION['user'] = $user;
            header("Location: /dashboard.php");
            exit();
        } else {
            $message = "Identifiants invalides.";
        }
    } else {
        $message = "Veuillez remplir tous les champs.";
    }
}
include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>NAS - Connexion</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<main class="container">
        <h2>Connexion NAS</h2>
        <?php if ($message): ?>
            <p style="color:red;"><?=htmlspecialchars($message)?></p>
        <?php endif; ?>
        <form method="post" action="">
            <label>Utilisateur: <input type="text" name="username" required></label><br>
            <label>Mot de passe: <input type="password" name="password" required></label><br>
            <button type="submit">Connexion</button>
        </form>
    </main>
    <footer>
        &copy; 2025 YannCTR - NAS personnel
    </footer>
</body>
</html>
