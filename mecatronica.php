<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/estilos.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <title>UTTv</title>
</head>
<body id="fondo">
<?php
   include 'Database.php';
   $connection = new Database();
   $connection->ConnectDatabase(); 
?>
    <header id="base">
        <div class="letf_area">
          <div class="container" id="menu">
            <div class="row g-2">
               <center> 
                <div class="col-12" id="cubo">
                <a style="text-decoration:none" href="./index.php">
                    <center><img src="./imagenes/Logo.png" id="logo" alt="logo"></center>
                </a>
                </div>
            </center>
            </div>
            <div class="row g-2">
                <div class="col-12">
                   <center><h3 id="categorias">Categorias</h3></center>
                </div>
            </div>
            <p></p>
            <div class="row g-2">
                <div class="col-12">
                    <button type="button" id="boton" class="btn">Mecatronica</button>
                </div>
            </div>
            <p></p>
            <div class="row g-2">
                <div class="col-12">
                <a style="text-decoration:none" href="./tics.php">
                    <button type="button" id="boton" class="btn">Tics</button>
                </a>
                </div>
            </div>
            <p></p>
            <div class="row">
                <div class="col-12">
                   <div class="wrapper">
                   <?php
                            session_start();
                            if (isset($_SESSION["Name"])) 
                            {
                              echo "<a href='./CloseSession.php'>";
                            }else
                            {
                              echo "<a href='./Login.php'>";
                            }
                              ?>
                       
                        <div class="button">
                        <?php
                            if (isset($_SESSION["Name"])) 
                            {
                              echo "<div class='icon'><img src='./imagenes/logout.png' id='logout' alt=' logout'width='80' height='80' ></div>";
                            }else
                            {
                              echo "<div class='icon'><i class='fa fa-user-plus fa-2x'></i></div>";
                            }
                              ?>
                            
                           
                          <?php
                            if (isset($_SESSION["Name"])) 
                            {
                              echo "<span>&nbsp;&nbsp;&nbsp;".$_SESSION["Name"]."</span>";
                            }else
                            {
                              echo "<span>Iniciar Sesion</span>";
                            }
                            $connection->DisconnectDatabase();
                              ?>
                            
                        </div>
                       </a>
                   </div>
                </div>
            </div>
          </div>
          <div class="container" id="busqueda" style="text-align: center;">
            <input type="text" id="buscar" placeholder="Buscar...">
            <button class="btn" type="submit">
                <i class="fa fa-search fa-2x" id="prueba"></i>
            </button>
           
            <p style="text-align: center;" class="videossss">MECATRONICA</p>
            <br>
            <div class="videossss">
    <table class="default" style="text-align: center;">
      <tr>
          <td class="separation">
          <a style="text-decoration:none;color:white;" href="./vistameca1.php">
              Curso basico de arduino
              <img src="./imagenes/captura5.png" width="220" height="120">
              <p>Curso de 71 capitulos....</p>
              </a>
            </td>
          <td class="separation">
          <a style="text-decoration:none;color:white;" href="./vistameca2.php">
              Curso basico de  PLC
              <img src="./imagenes/captura9.png" width="220" height="120"><p>Curso de 24 capitulos....</p>
              </a>
            </td>
            
          <td class="separation"> 
          <a style="text-decoration:none;color:white;" href="./vistameca3.php">
              Electricidad y Magnetismo
              <img src="./imagenes/captura10.png" width="220" height="120"><p>Curso de 87 capitulos....</p>
              </a>
            </td>
              
            <td class="separation"> 
            <a style="text-decoration:none;color:white;" href="./vistameca4.php">
                Curso basico de Calculo Diferencial
                <img src="./imagenes/captura11.png" width="220" height="120">
                <p>Curso de 3 capitulos....</p>
                </a>
              </td>

      </tr>
      <tr>
        <td>
        <a style="text-decoration:none;color:white;" href="./vistameca5.php">
          Curso de Sensores y Actuadores
          <img src="./imagenes/captura12.png" width="220" height="120"><p>Curso de 1 capitulo....</p>
          </a>
        </td>
        <td>
        <a style="text-decoration:none;color:white;" href="./vistameca6.php">
          Curso de Sistemas Mecatronicos
          <img src="./imagenes/captura13.png" width="220" height="120"><p>Curso de 6 capitulos....</p>
          </a>
        </td>
        <td>
        <a style="text-decoration:none;color:white;" href="./vistameca7.php">
          Curso basico de Robotica
          <img src="./imagenes/captura14.png" width="220" height="120"><p>Curso de 4 capitulos....</p>
          </a>
        </td>
        <td>
        <a style="text-decoration:none;color:white;" href="./vistameca8.php">
            Curso basico de Termodinamica
            <img src="./imagenes/captura14.png" width="220" height="120"><p>Curso de 3 clases....</p>
            </a>
          </td>
      </tr>
    </table>    
  </div>
          </div>
        </div>
    </header>

    <br>
<br>
<br>
<br>
<br>
<br>
<footer class="bg-dark text-white pt-5 pb-4">
    <div class="row align-items-center">

      <div class="col-md-7 col-lg-8">
        <p> 
          <a href="#" style="text-decoration: none;">
            <strong class="text-warning"></strong>
          </a></p>
        
      </div>

      <div class="col-md-5 col-lg-4">
        <div class="text-center text-md-right">

          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-whatsapp"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
            </li>
          </ul>
          
        </div>
        
      </div>
      
    </div>
    
  
</footer>
</body>
</html>