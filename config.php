<?php
// Caminho do banco SQLite (ficará na pasta data/)
define('DB_PATH', __DIR__ . '/data/app.sqlite');

// Nome/identidade do site
define('APP_NAME', 'Recrutamento - OAB Revoada/RJ');

// Inicia sessão com configurações seguras
function start_secure_session() {
    if (session_status() === PHP_SESSION_NONE) {
        $secure = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on';
        session_set_cookie_params([
            'lifetime' => 0,
            'path' => '/',
            'domain' => '',
            'secure' => $secure,
            'httponly' => true,
            'samesite' => 'Lax',
        ]);
        session_start();
    }
}
?>