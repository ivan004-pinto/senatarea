<?php include '../includes/header.php'; ?>  
<div class="form_fondo">     
    <div class="form_registro">         
        <form action="" method="post">             
            <fieldset>                 
               <h2>crea tu cuenta</h2>                
                <div class="campo">                     
                    <label for="identifica">Identificacion</label>                     
                    <input type="text" id="identifica" name="identifica" placeholder="identificacion" required>                 
                </div>                 
                <div class="campo">                     
                    <label for="nombre1">Primer nombre</label>                     
                    <input type="text" id="nombre1" name="nombre1" placeholder="escribe su primer nombre" required>                 
                </div>                 
                <div class="campo">                     
                    <label for="nombre2">Segundo nombre</label>                     
                    <input type="text" id="nombre2" name="nombre2" placeholder="escribe su segundo nombre">                 
                </div>                 
                <div class="campo">                     
                    <label for="apellido1">Primer_apellido</label>                     
                    <input type="text" id="apellido1" name="apellido1" placeholder="escribe su apellido paterno" required>                 
                </div>                 
                <div class="campo">                     
                    <label for="apellido2">Segundo_apellido</label>                     
                    <input type="text" id="apellido2" name="apellido2" placeholder="escribe su apellido materno">                 
                </div>                 
                <div class="campo">                     
                    <label for="fecha_nac">fecha de nacimiento</label>                     
                    <input type="date" id="fecha_nac" name="fecha_nac">                 
                </div>                 
                <div class="campo">                     
                    <label for="celular">Celular</label>                     
                    <input type="text" id="celular" name="celular" placeholder="escribe numero de celular" required>                 
                </div>                 
                <div class="campo">                     
                    <label for="email">Correo</label>                     
                    <input type="email" id="email" name="email" placeholder="example@correo.com" required>                 
                </div>
                <div class="campo">                     
                    <label for="rol">Rol</label>                     
                    <select id="rol" name="rol" required>                         
                        <option value="">Seleccione un rol</option>                         
                        <option value="aprendiz">Aprendiz</option>                         
                        <option value="instructor">Instructor</option>                     
                    </select>                 
                </div>                 
                <div class="campo">                     
                    <label for="contra">Contraseña</label>                     
                    <input type="password" id="contra" name="contra" placeholder="escribe una clave segura" required>                 
                </div>                 
                <div class="campo">                     
                    <input type="submit" value="Crear Cuenta" class="btn">                 
                </div>             
            </fieldset>         
        </form>     
    </div> 
</div>    

<?php 
function capturarDatos() {     
    if ($_SERVER['REQUEST_METHOD'] == "POST"){         
        return $_POST;     
    } 
}  
include '../includes/footer.php'; 
?>