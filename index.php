<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-4">
        <?php
            $passwordFile = 'pass.php';
            $loggedIn = false;

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $password = $_POST['password'];

                // Verificar la contraseña
                if (file_exists($passwordFile) && trim(file_get_contents($passwordFile)) === $password) {
                    $loggedIn = true;
                } else {
                    echo '<div class="alert alert-danger" role="alert">Contraseña incorrecta</div>';
                }
            }
        ?>

        <?php if ($loggedIn): ?>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                    <span class="navbar-brand">Bienvenido</span>
                    <div class="navbar-nav">
                        <a class="nav-link" href="#">Admin</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link btn btn-danger" href="<?php echo $_SERVER['PHP_SELF']; ?>">Salir</a>
                    </div>
                </div>
            </nav>
            <div class="mt-4">
                <h1>Hola</h1>
                <!DOCTYPE html>


            </div>
        <?php else: ?>
            <h1>Login</h1>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
        <?php endif; ?>
    </div>

</body>
</html>
