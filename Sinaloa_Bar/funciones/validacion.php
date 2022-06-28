<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Validacion_login</title>
</head>
<body>
<?php
class bar
{
	public function login_user($user,$pass)
	{
		session_start();

		require_once '../conexion/conexion.php';

		$db = database::conectar();

		$cont = 0;

		$sql2="SELECT * FROM persona WHERE id_persona= '$user' AND  contrasena = '$pass'";
		$result2 = $db->query($sql2);

		while ($row2 = $result2->fetch(PDO::FETCH_ASSOC))
		{
			$uusername=stripslashes($row2["id_persona"]);
			$ppasword =stripslashes($row2["contrasena"]);
			

		$cont=$cont+1;
		}
		if ($cont==0)
		{
			print"<script>alert(\"usuario y/o Password incorrectas.\");window.location='../Index.html';</script>";
		}

		if ($cont!=0)
		{
			$_SESSION['id_persona']=$uusername;

			$sql1="SELECT fk_rol FROM persona WHERE id_persona= '$user' AND  contrasena = '$pass'";
			$result1 = $db->query($sql1);

			while ($row1=$result1->fetch(PDO::FETCH_ASSOC))
			{
				$role= stripcslashes($row1["fk_rol"]);
			}

			if (@$role == null) 
			{
				print"<script>alert(\"El usuario no tiene asignado un rol\");window.location='../Index.html';</script>";
			}

			if(@$role == 1)
			{
				$_SESSION['active']=1;
				header('Location: ../Vistas/Administrador/consultar.html');
			}

			elseif (@$role == 2)
			{
				$_SESSION['active']=1;
				header('Location: ../Vistas/Encargado_barra/consultar.html');
			}

		}
	}
}
	$Nuevo =new bar();
	$Nuevo->Login_user($_POST["user"],$_POST["pass"]);
?>
</body>
</html>