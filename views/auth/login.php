<main class="auth">
    <h2 class="auth__header"><?php echo $titulo ?></h2>
    <p class="auth__texto">Inicia sesión en DevWebcamp</p>

    <form action="" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input type="email" class="formulario__input" placeholder="Tu Email" id="email">
        </div>
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Contraseña</label>
            <input type="password" class="formulario__input" placeholder="Tu Contraseña" id="password">
        </div>

        <input type="submit" class="formulario__submit" value="Iniciar Sesión">
    </form>

    <div class="acciones">
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? Registrarse</a>
        <a href="/olvide" class="acciones__enlace">¿Olivaste tu contraseña? Recuperarla</a>
    </div>
</main>