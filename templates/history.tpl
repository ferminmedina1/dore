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

<header>
    <h1 id="principal"><a href="home" class="titulo">d   o   r   e</a></h1>
</header>

<nav>
 <a class="itemNav" href="home">Home</a>
 <a class="itemNav" href="history" id="seccionActual">History</a>
 <a class="itemNav" href="stock">Stock</a>
 <a class="itemNav" href="contact">Contact</a>
 <a class="itemNav" href="table">table</a>
</nav>


<article class="homeContent">
    {include file="sliderHistory.tpl"}

    <section class="introduction">
        <h2 class='textTitle'>Lorem ipsum</h2>

        <p class="text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quidem aut qui molestiae veritatis 
        umque dolor dignissimos doloremque ut saepe cum, itaque unde voluptate. Porro eveniet voluptate nesciunt ab ratione?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quidem aut qui molestiae veritatis cumque dolor dignissimos
         doloremque ut saepe cum, itaque unde voluptate. Porro eveniet voluptate nesciunt ab ratione?</p> 
        <p class="text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quidem aut qui molestiae veritatis 
        umque dolor dignissimos doloremque ut saepe cum, itaque unde voluptate. Porro eveniet voluptate nesciunt ab ratione?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quidem aut qui molestiae veritatis cumque dolor dignissimos
         doloremque ut saepe cum, itaque unde voluptate. Porro eveniet voluptate nesciunt ab ratione?</p> 
        <p class="text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quidem aut qui molestiae veritatis 
        umque dolor dignissimos doloremque ut saepe cum, itaque unde voluptate. Porro eveniet voluptate nesciunt ab ratione?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quidem aut qui molestiae veritatis cumque dolor dignissimos
         doloremque ut saepe cum, itaque unde voluptate. Porro eveniet voluptate nesciunt ab ratione?</p> 
   <section>

</article>



{include file="footer.tpl"}
</body>
</html>