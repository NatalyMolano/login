<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Login</title>
    <link href="estilo.css" rel="stylesheet" type="text/css">

    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
   
    <link href="sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center">

        <main class="form-signin w-100 m-auto">
      
        <form method="Post">
       
            <img class="mb-4" src="Persona.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 fw-normal">Login</h1>

            <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com"  maxlength="256">
            <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
            <label for="floatingPassword">Contraseña</label>
            </div>
            <button class="btn btn-outline-primary" type="submit" name="submit">Ingresar</button>
           <br><br>
           <?php
            // Definir el nombre de usuario y la contraseña permitidos
            $usuario = "natalymolano304@gmail.com";
            $contrasena = "Nataly1234";
        
            
            // el isset es una funcion para comprobar si el campo esta definido
            if(isset($_POST['submit']))
            {
                //Función que se utiliza para comprobar si una variable está vacía o no.
                if (empty($_POST['password']|| $_POST['email']))
                {
                    echo "<div class='alert alert-danger' role='alert'>
                    ingrese el email y la contraseña
                    </div>";
                }
                
                else if(empty($_POST['email']))
                {
                    echo "<div class='alert alert-danger' role='alert'>
                   ingrese un email
                    </div>";
                }
                else if(empty($_POST['password']))
                {
                    echo "<div class='alert alert-danger' role='alert'>
                   ingrese una contraseña
                    </div>";
                    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) 
                    {
                        echo "<div class='alert alert-danger' role='alert'>
                        Error la ingreso en el campo de contraseña caracteres no validos
                        </div>";
                    } 
                }
                
                
               
                else
                {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    
                        //strlen funcion para obtener la cantidad de caracteres 
                        //!preg_match función que se utiliza para buscar en este caso que almenos revisar si hay el elemnto pedido dentro de la cadena de caracteres
                    if (strlen($password) < 8 || !preg_match("#[0-9]+#", $password) || !preg_match("#[a-zA-Z]+#", $password)) 
                        {
                        echo "<div class='alert alert-danger' role='alert'>
                                La contraseña debe tener al menos 8 caracteres y contener al menos una letra y un número
                                </div>";
                        } 
                        
                    else {
                        if ($email == $usuario && $password == $contrasena) {
                           header("Location: accesoUsuario.php");
                            exit();
                        } else {
                            echo "<div class='alert alert-danger' role='alert'>
                                    El email o la contraseña son incorrectos
                                </div>";
                        }
                    
                    
                    }
                    
                }
            }
            ?>
        </form>
        </main>
        
        

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
		
    
  </body>
</html>