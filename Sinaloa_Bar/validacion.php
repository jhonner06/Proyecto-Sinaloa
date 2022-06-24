<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Validacion_login</title>
</head>
<body>
<?php
<<<<<<< HEAD
class bar
=======
class Login
>>>>>>> dfafa118dd1b15294127ccbe6204624ce925b1d4
{
	public function login_user($user,$pass)
	{
		session_start();

		require_once 'conexion.php';

		$db = database::conectar();

		$cont = 0;

<<<<<<< HEAD
		$sql2="SELECT * FROM persona WHERE id_persona= '$user' AND  contrasena = '$pass'";
=======
		$sql2="SELECT * FROM usuario WHERE username= '$user' AND  password = '$pass'";
>>>>>>> dfafa118dd1b15294127ccbe6204624ce925b1d4
		$result2 = $db->query($sql2);

		while ($row2 = $result2->fetch(PDO::FETCH_ASSOC))
		{
<<<<<<< HEAD
			$uusername=stripslashes($row2["id_persona"]);
			$ppasword =stripslashes($row2["contrasena"]);
=======
			$uusername=stripslashes($row2["username"]);
			$ppasword =stripslashes($row2["password"]);
>>>>>>> dfafa118dd1b15294127ccbe6204624ce925b1d4
			

		$cont=$cont+1;
		}
		if ($cont==0)
		{
			print"<script>alert(\"usuario y/o Password incorrectas.\");window.location='Index.html';</script>";
		}

		if ($cont!=0)
		{
<<<<<<< HEAD
			$_SESSION['id_persona']=$uusername;

			$sql1="SELECT fk_rol FROM persona WHERE id_persona= '$user' AND  contrasena = '$pass'";
			$result1 = $db->query($sql1);
=======
			$_SESSION['username']=$uusername;
			$_SESSION['foto_usu']=$ffoto;

			$sql1 ="SELECT fk_rol FROM usuario  WHERE  username= '$uusername'";
			$result1 = $db ->query($sql1);
>>>>>>> dfafa118dd1b15294127ccbe6204624ce925b1d4

			while ($row1=$result1->fetch(PDO::FETCH_ASSOC))
			{
				$role= stripcslashes($row1["fk_rol"]);
			}

			if (@$role == null) 
			{
				print"<script>alert(\"El usuario no tiene asignado un rol\");window.location='Index.html';</script>";
			}

<<<<<<< HEAD
			if(@$role == 1)
			{
				$_SESSION['active']=1;
				header('Location: consultar.html');
			}

			elseif (@$role == 2)
			{
				$_SESSION['active']=1;
				header('Location: Vistas/index_Doc.php');
			}

		}
	}
}
	$Nuevo =new bar();
=======
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
>>>>>>> dfafa118dd1b15294127ccbe6204624ce925b1d4
	$Nuevo->Login_user($_POST["user"],$_POST["pass"]);
?>
</body>
</html>