

<?php
// echo "Inicio </br>";
 
         //es patra cambiar las tablas
        $conexion_bd=pg_connect("host=localhost dbname=ventas user=postgres password=admin");
        if($conexion_bd){
            echo "Conexión exitosa con postgres </br>";
        }
        else{
            echo "Error al conectar con postgres BD </br>";
        }

        //return $conexion_bd; 
       
         //es paaara agregar   y resibir los datos
        if(isset($_POST['enviar'])){
         $name1 = $_POST['name'];
         $email = $_POST['email'];
         // query para insertar, despues del into se cambia en base a la tabla 
         //$uc-> registrarUsuarioFormulario($nombre,$apellidoP,$apellidoM,$correo,$contr,$edad);
         $query = "INSERT INTO test1 (name1, email) VALUES (name1, email);";

         

     }






?>



