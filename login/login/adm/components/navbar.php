<?php 
session_start();

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">


          <a class="nav-link active dropdown-toggle"  href="#">ver usuarios</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">adicionar usuarios</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">ver agendados</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">adicionar serviços</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <?php  if(isset($_SESSION['tipo'])){
          echo '
          <li class="nav-item">
          <a class="nav-link href="#">Agendamentos</a>
          </li>
          ';
        }
        
        
        ?>

        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>

     <?php 
      if(isset($_SESSION['Tipo'])) {
        echo "
        <div class='d-flex'>
        <a class='btn btn-outline-success" type="submit' href='../login/logout.php'>sair</a> </div>";
      }else{
echo"<div class'btn btn-outline-success" type="submit' href='../clientes/clientes.php'>sair</a> </div>";

      }
      
      ?>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Sair</button>
      </form>
    </div>
  </div>
</nav>

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://attualizecontabil.com.br/wp-content/uploads/2020/11/Imagens-blog-19.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://img.quizur.com/f/img632718c0c71032.18704570.jpeg?lastEdited=1663506648" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://resumodasnovelas.online/wp-content/uploads/2018/07/Novela-Carrossel-SBT-2018.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>