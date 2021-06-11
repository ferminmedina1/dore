<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DØR3</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/log.css">
    <link rel="shortcut icon" href="./images/logoicono.png">
    <!--<script type="text/javascript" src="./js/nav.js"></script>!-->
    <script type="text/javascript" src="./js/alert.js"></script>
    <base href="{$base_url}">
</head>

<body>

<header>
    <h1 id="principal"><a href="home" class="titulo">d   o   r   e</a></h1>
</header>

    <article>

        <section class="contenedorform">

            <form class="formulario" action="verifyUser" method="post">
                <div class="itemformulario"> <label> USER: </label> <input type="text" name="input_user" required autocomplete="off"> </div>
                <div class="itemformulario"> <label> PASS: </label> <input type="password" id="contra" name="input_pass" required autocomplete="off"> </div>

                <p id="avisoCaptcha">{$mensaje}</p>
                
                <button type="submit" id="botonEnviar" >log in</button>

            </form>

        </section>

    </article>



{include file="footer.tpl"}
</body>
</html>