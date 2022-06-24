<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Validacion_login</title>
</head>
<body>
<?php
class Login
{
	public function login_user($user,$pass)
	{
		session_start();

		require_once 'conexion.php';

		$db = database::conectar();

		$cont = 0;

		$sql2="SELECT * FROM usuario WHERE username= '$user' AND  password = '$pass'";
		$result2 = $db->query($sql2);

		while ($row2 = $result2->fetch(PDO::FETCH_ASSOC))
		{
			$uusername=stripslashes($row2["username"]);
			$ppasword =stripslashes($row2["password"]);
			

		$cont=$cont+1;
		}
		if ($cont==0)
		{
			print"<script>alert(\"usuario y/o Password incorrectas.\");window.location='Index.html';</script>";
		}

		if ($cont!=0)
		{
			$_SESSION['username']=$uusername;
			$_SESSION['foto_usu']=$ffoto;

			$sql1 ="SELECT fk_rol FROM usuario  WHERE  username= '$uusername'";
			$result1 = $db ->query($sql1);

			while ($row1=$result1->fetch(PDO::FETCH_ASSOC))
			{
				$role= stripcslashes($row1["fk_rol"]);
			}

			if (@$role == null) 
			{
				print"<script>alert(\"El usuario no tiene asignado un rol\");window.location='Index.html';</script>";
			}

			if(@$role == 'Enfermera')
			{
				$_SESSION['active']=1;
				header ('Location: Vistas/index_enferm.php');
			}

			elseif (@$role == 'Doctor')
			{
				$_SESSION['active']=1;
				header ('Location: Vistas/index_Doc.php');
			}

			elseif (@$role == 'Cirujano')
			{
				$_SESSION['active']=1;
				header ('Location: Vistas/index_ciru.php');
			}
		}
	}
}
	$Nuevo =new Login();
	$Nuevo->Login_user($_POST["user"],$_POST["pass"]);
?>
</body>
</html>