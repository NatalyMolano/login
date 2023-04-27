<?php
// Definir el nombre de usuario y la contraseña permitidos
$usuario = "natalymolano304@gmail.com";
$contrasena = "nataly1234";

// Verificar si se recibieron los datos de email y contraseña por POST
if (isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Verificar si el email y la contraseña son correctas
  if ($email == $usuario && $password == $contrasena) {
    // Si las credenciales son correctas, redireccionar al usuario a accesoUsuario.php
    header("Location: accesoUsuario.php");
    exit();
  } else {
    // Si las credenciales son incorrectas, mostrar un mensaje de error
    echo "El email y/o contraseña son incorrectos.";
  }
}
?>