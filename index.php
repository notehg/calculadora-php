<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Felipe Soares" >
    <meta name="description" content="Calculadora soma simples em php">
    <meta name="keywords" content="calculadora, soma, php">
    <link rel="stylesheet" href="style.css">
    <title>cauculadora php</title>
</head>
<body>

<h3>cauculadora</h3>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">Calculadora 4 operações</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">Calculadora</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Nós</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Bem vindo a calculadora soma</h1>
                <p class="lead">Este aplicativo WEB foi construido utilizando php e html</p>
                <a class="btn btn-lg btn-light" href="#about">Vamos lá</a>
            </div>
        </header>
        <!-- About section-->
        <section id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Calculadora php</h2>
                        <p class="lead">Entre com dois valores e clique no botão correspondente para calcular:</p>
                            <div class="form-group">
                            <form action="index.php" method="post">
                             Numero 1: <input type="text" name="n1" value="0"><br>
                             Numero 2: <input type="text" name="n2" value="0"><br>
                               <input type="submit" value="Somar" ><br>
                               </form>
                               <?php 
                               $n1=$_POST["n1"];
                               $n2=$_POST["n2"];
                               echo "Numero 1:" . $n1 . "<br>";
                             echo "Numero 2:" . $n2 . "<br>";
                             $soma=$n1 + $n2;
    
                             echo "Soma: " . $soma . "<br>";
         ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
        <section class="bg-light" id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Sobre esta calculadora</h2>
                        <p class="lead">Este aplicativo WEB foi construido utilizando php e html</p>
                        <p><a class="btn btn-primary" href="https://github.com/profedney/calcresponsive">Código desta Calculadora no Github</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact section-->
        <section id="contact">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Quem Sou?</h2>
                        <p class="lead">Sou aluno de informática Felpe soares silva</p>
                        <div >
                            <h2 class="mb-4">Dá um Fork nos meus repositórios</h2>
                            <a class="btn btn-xl btn-light me-4" href="https://notehg.github.io/noteng.github.oi/">felipe soares</a>
                            <a class="btn btn-xl btn-success" href="https://notehg.github.io/noteng.github.oi/">felipe</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            
            <div class="container px-4"><p class="m-0 text-center text-white">Copyleft &copy; A cópia e reprodução desse APP WEB é incentivada livremente</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>







</form>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</body>
</html>