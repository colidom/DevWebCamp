<main class="auth">
    <h2 class="auth__header"><?php echo $titulo ?></h2>
    <p class="auth__texto">Tu cuenta de DevWebCamp</p>
    <?php
    require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <?php
    if (isset($alertas['exito'])) { ?>
        <div class="acciones--centrar">
            <a href="/login" class="acciones__enlace">Iniciar sesión</a>
        </div>
    <?php } ?>


</main>