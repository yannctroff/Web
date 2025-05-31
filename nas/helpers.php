<?php
// Fonction sécurise un chemin pour éviter remontée hors dossier parent
function safe_path($base, $path) {
    $realBase = realpath($base);
    $realUserPath = realpath($base . '/' . $path);

    if ($realUserPath === false || strpos($realUserPath, $realBase) !== 0) {
        return false; // tentative de sortie du dossier racine
    }
    return $realUserPath;
}

// Vérifie si utilisateur connecté
function check_auth() {
    if (empty($_SESSION['user'])) {
        header("Location: /index.php");
        exit();
    }
}

// Retourne les chemins dossiers user
function user_dirs($user) {
    return [
        'Documents' => "/home/$user/Documents",
        'Pictures'    => "/home/$user/Pictures",
        'Vidéos'    => "/home/$user/Vidéos",
        'Music'  => "/home/$user/Music",
    ];
}

// Vérifie utilisateur/mot de passe en lançant la commande su
function verify_user_pass($user, $pass) {
    $user = escapeshellarg($user);
    $pass = escapeshellarg($pass);

    $cmd = "echo $pass | su -c 'exit' $user 2>/dev/null";

    exec($cmd, $output, $return_var);

    return $return_var === 0;
}
?>
