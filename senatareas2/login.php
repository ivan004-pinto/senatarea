<?php
include './includes/header.php';
?>

<div class="senaimg">
        <img src="" alt="">
    

<div class="login">
    
    <div class="iniciar">
        <form action="" method="post">
            <fieldset class="session">
                <legend>Iniciar session</legend>
                <label for="usu" >Usuario</label>
                <input type="text" placeholder="Example@correo.com" id="usu" required name="email">
                <label for="pass">Contraseña</label>
                <input type="password" name="password" id="pass" placeholder="valide su usuario" required>
                <button type="submit">Iniciar seccion</button>
            </fieldset>
        </form>
    </div>
</div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['email'];
    $password = $_POST['password'];
    session_start();
    try {
        require './includes/conexion_bd.php';
        $sql = "SELECT email, contra, rol FROM usuarios WHERE email = '$correo' ";
        $consulta = mysqli_query($coneccion, $sql);
        $result = mysqli_fetch_assoc($consulta);

        if ($_POST['password'] == $result['contra']) {
            $_SESSION['nombre'] = $result['nombre'];
            $_SESSION['rol'] = $result['rol'];
            header('location: panel_principal.php');
        } else {
            echo ('Usuario Y/O contraseña incorrectos');
        }
    } catch (\Throwable $th) {
        echo ($th);
    }
}

?>

<?php
include './includes/footer.php';
?>