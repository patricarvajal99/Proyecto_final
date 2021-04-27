<?php
session_start();
var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<head>
    <title>Proyecto Final 2 Daw</title>
    <link rel="stylesheet" href="scss/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!--Barra de navegación-->

    <nav>

        <div class="logo" >

            <a title="" href="index.php"><img src="media/imagenes/image.png" style="width:76%;"/></a>

        </div>
        <a class="botonmenu" data-id="1">
            <p>JUEGOS</p>
        </a>
        <a class="botonmenu" data-i="2">
            <p>CONSOLAS</p>
        </a>
        <a class="botonmenu" data-i="4">
            <p>MERCHANDISING</p>
        </a>

        <a class="botonmenu" href="formulario.php"><span class="fa fa-sign-in"></span> Login</a>


    </nav>
    <!--SLIDER IMG-->

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img src="media/imagenes/img1.png" style="width:100%">

        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="media/imagenes/img2.png" style="width:100%">

        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="media/imagenes/img3.png" style="width:100%">

        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="media/imagenes/img4.png" style="width:100%">

        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>

    <!--contenido-->
    <div class="nombres" data-id="1">
        <h2>Juegos PS4</h2>

        <div class="contenedorcartas">


            <div class="card">
                <img src="media/imagenes/juego1.png" alt="Denim Jeans" style="width:100%">
                <h1>Final Fantasy XV</h1>
                <p class="price">19.99€</p>
                <p><button>Comprar</button></p>
            </div>

            <div class="card">
                <img src="media/imagenes/juego2.png" alt="Denim Jeans" style="width:100%">
                <h1>Final Fantasy VII</h1>
                <p class="price">49.99€</p>

                <p><button>Comprar</button></p>
            </div>

            <div class="card">
                <img src="media/imagenes/juego3.png" alt="Denim Jeans" style="width:87%">
                <h1>Red Dead Redemption 2</h1>
                <p class="price">59.99€</p>

                <p><button>Comprar</button></p>
            </div>

            <div class="card">
                <img src="media/imagenes/juego4.png" alt="Denim Jeans" style="width:100%">
                <h1>Kingdom Hearts 3</h1>
                <p class="price">10.99€</p>

                <p><button>Comprar</button></p>
            </div>


        </div>
    </div>

    <div class="nombres">
        <h2>Juegos XBOX</h2>
        <div class="contenedorcartas">


            <div class="card">
                <img src="media/imagenes/juego5.png" alt="Denim Jeans" style="width:74%">
                <h1>GTA 5</h1>
                <p class="price">9.99€</p>
                <p><button>Comprar</button></p>
            </div>

            <div class="card">
                <img src="media/imagenes/juego6.png" alt="Denim Jeans" style="width:89%">
                <h1>COD Modern Warfare</h1>
                <p class="price">49.99€</p>

                <p><button>Comprar</button></p>
            </div>

            <div class="card">
                <img src="media/imagenes/juego7.png" alt="Denim Jeans" style="width:100%">
                <h1>COD WWII</h1>
                <p class="price">39.99€</p>

                <p><button>Comprar</button></p>
            </div>

            <div class="card">
                <img src="media/imagenes/juego8.png" alt="Denim Jeans" style="width: 80%">
                <h1>Crash Bandicoot 4</h1>
                <p class="price">69.99€</p>

                <p><button>Comprar</button></p>
            </div>

        </div>
    </div>

    <div class="nombres">
        <h2>Juegos SWITCH</h2>
        <div class="contenedorcartas">


            <div class="card">
                <img src="media/imagenes/juego9.jpg" alt="Denim Jeans" style="width:56%">
                <h1>Xenoblade Chronicles 2</h1>
                <p class="price">69.99€</p>
                <p><button>Comprar</button></p>
            </div>

            <div class="card">
                <img src="media/imagenes/juego10.png" alt="Denim Jeans" style="width:78%">
                <h1>The legend of zelda:Links Awakins</h1>
                <p class="price">49.99€</p>

                <p><button>Comprar</button></p>
            </div>

            <div class="card">
                <img src="media/imagenes/juego11.png" alt="Denim Jeans" style="width:100%">
                <h1>Bayonetta 1 + 2</h1>
                <p class="price"><?php echo $price ?></p>

                <p><button>Comprar</button></p>
            </div>

            <div class="card">
                <img src="media/imagenes/juego12.jpg" alt="Denim Jeans" style="width: 47%">
                <h1>The legend of zelda:Breath of the wild</h1>
                <p class="price">69.99€</p>

                <p><button>Comprar</button></p>
            </div>

        </div>
    </div>







    <!--FOOTER FINAL-->

    <footer>
        <div class="contenedores">
            <div class="parte1">

            </div>
            <div class="parte2">
                <div class="shared-panel">
                    <span>Siguenos:</span><br>
                    <a target="_blank" class="fa fa-facebook-square" title="Facebook"
                        href="https://www.facebook.com/"></a>
                    <a target="_blank" class="fa fa-twitter" title="Twitter" href="https://twitter.com/"></a>
                    <a target="_blank" class="fa fa-instagram" title="Instagram" href="https://www.instagram.com/"></a>
                    <a target="_blank" class="fa fa-telegram" id="sml" title="Email"
                        href="https://mail.google.com/"></a>
                </div>
            </div>
        </div>
        <div class="contenedor">
            <div class="copy">
                <a>Copyright&copy; 2021 - creado por Patricia Carvajal - Todos los derechos reservados</a>
            </div>
        </div>

    </footer>
    <!--JS DEL SLIDER-->
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 10000); // Change image every 2 seconds
        }



    </script>

</body>

</html>