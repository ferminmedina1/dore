<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DØR3</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="shortcut icon" href="./images/logoicono.png">
    <script type="text/javascript" src="./js/nav.js"></script>
    <base href="{$base_url}">
</head>

<body>

{if (isset($smarty.session.user))} <!--CON ESTO SE VERIFICA QUE NO HAYA UN USUARIO LOGUEADO-->
        {include file="logout.tpl"}

        <a class="adminButton" href="admin">Admin</a>

        <h1>{$smarty.session.user}</h1>
{/if}

<header>
    <h1 id="principal"><a href="home" class="titulo">d   o   r   e</a></h1>
</header>

<nav>
 <a class="itemNav" href="home">Home</a>
 <a class="itemNav" href="history">History</a>
 <a class="itemNav" href="stock" id="seccionActual">Stock</a>
 <a class="itemNav" href="contact">Contact</a>
 <a class="itemNav" href="table">table</a>
</nav>




{include file="footer.tpl"}
</body>
</html>