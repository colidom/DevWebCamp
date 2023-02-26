<main class="auth">
    <h2 class="auth__header"><?php echo $titulo ?></h2>
    <p class="auth__texto">Recuperar acceso a DevWebcamp</p>

    <form action="" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input type="email" class="formulario__input" placeholder="Tu Email" id="email">
        </div>

        <input type="submit" class="formulario__submit" value="Enviar Instrucciones">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">Ya tienes cuenta? Iniciar sesión</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? Registrarse</a>
    </div>
</main>