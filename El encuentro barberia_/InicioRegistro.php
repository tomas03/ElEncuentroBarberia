<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Encuentro Barberia</title>
</head>

<body class="bodyInReg">
                
    <!--NAV BAR-->
    <section>
        <header>
            <div class="logo">
                <img src="imagens/logo.png" alt="">
            </div>
            <div class="title_nav anim">
                <a href="index.html">
                    <h1>El Encuentro</h1>
                </a>
            </div>
            <div class="nav_bar">
                <a href="cortes.html" alt="" class="a_nav">Cortes</a>
                <a href="productors.html" alt="" class="a_nav">Productos</a>
                <a href="contacto.html" alt="" class="a_nav">Contactanos</a>
            </div>
        </header>
    </section>
    <!--Formulario-->
    <div class="container-all">
        <!--parte de fondo-->
        <div class="back-all">
            <div class="back-log">
                <div class="log-back">
                    <p>ya tienes una cuenta?</p>
                    <button id="btn.login">iniciar sesion</button>
                </div>
            </div>
            <div class="back-reg">
                <div class="reg-back">
                    <p>no tienes una cuenta?</p>
                    <button id="btn.register">registrarse</button>
                </div>
            </div>
        </div>
        <div class="form-log-reg">
            <!--formulario inicio sesion-->
            <div class="form-log">
                <form action="" class="log-form">
                    <h2>Iniciar sesion</h2>
                    <input type="text" name="userName" id="" placeholder="Usuario">
                    <input type="password" name="password" id="" placeholder="Contraseña">
                    <button>Iniciar sesion</button>
                </form>
            </div>
            <!--formulario registro-->
            <div class="form-reg">
            <form action="register_user.php" method="post" class="reg-form">
                <h2>Registrarse</h2>
                <input type="text" name="Nombre" placeholder="Nombre Completo">
                <input type="text" placeholder="Correo" name="mail">
                <input type="password" name="password" placeholder="Contraseña">
                <button type="submit" name="registro">Registrarse</button>
                
            </form>

            </div>
        </div>

    </div>
    <script src="javascript/formulario.js"></script>
    <?php
         include("register.php");
    ?>
</body>

</html>