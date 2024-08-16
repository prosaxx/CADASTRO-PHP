<!doctype html>
<html lang="en">
<head>
    <title>CADASTRO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" 
    
  

</head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- <a class="navbar-brand" href="#">CADASTRO</a> -->
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> -->
    <!-- <span class="navbar-toggler-icon"></span> -->
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=novo">NOVO USUÁRIO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=listar">LISTAR USUÁRIO</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col mt-5">
        <?php
        include("config.php");
            switch(@$_REQUEST["page"]){
              case "novo":
                include("novo-usuario.php");
              break;
              case "listar":
                include("listar-usuario.php");
              break;
              case "salvar";
                include("salvar-usuario.php");
                break;
                case "editar";
                include("editar-usuario.php");
                break;
              default:
                print "<h1>Cadastro de Cliente.</h1>";  
    }
?>
        </div>
    </div>
</div>
    
    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>