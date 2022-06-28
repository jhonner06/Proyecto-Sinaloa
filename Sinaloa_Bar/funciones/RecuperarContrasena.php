<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
</head>
<body>
    <?php
    class Recupera_Contrasena
    {
        public function recuperar($tdoc,$id_usu)
        {
            session_start();
            require_once '../conexion/conexion.php';
            $db = database::conectar();

            $sql2="SELECT * FROM persona WHERE id_persona='$id_usu' AND pk_fk_tdoc='$tdoc'";
            $result2 = $db->query($sql2);

            while ($row1=$result2->fetch(PDO::FETCH_ASSOC))
            {
                $id_user=stripslashes($row1["id_persona"]);
            }
                if(@$id_user == null)
            {
                print "<script>alert(\"Usuario no encontrado\");window.location='../Vistas/recover_pass.php';</script>";
            }

            if(@$id_user != null)
            {
                $sql1="UPDATE persona SET contrasena = 'bar123' WHERE pk_fk_tdoc = '$tdoc' AND id_persona = '$id_usu'";
                $db->query($sql1);
                print "<script>alert(\"Contraseña temporal: bar123\");window.location='../Index.html';</script>";
            }
        }
    }

        $Nuevo =new Recupera_Contrasena();
        $Nuevo->recuperar($_POST["tdoc"],$_POST["id_persona"]);
    ?>
</body>
</html>