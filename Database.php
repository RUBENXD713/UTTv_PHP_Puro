<?php 
class Database
{

	private $PDOlocal;
	private $User = "root";
	private $Password = "UTTv2021#.";
	private $Host = "mysql:host=127.0.0.1; dbname=UTTv2";

	function ConnectDatabase ()
	{
		try
		{
			$this->PDOlocal= new PDO($this->Host, $this->User, $this->Password);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	
	}

	function DisconnectDatabase ()
	{
		try
		{
			$this->PDOlocal = null;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}

	}

	function verifyLogin($email,$password)
	{
		try 
		{
			$pass=0;
			$query="SELECT * FROM users WHERE email ='$email'";
			$consulta=$this->PDOlocal->query($query);
			$result = $this->PDOlocal ->query($query);
			while ($registers=$consulta->fetch(PDO::FETCH_ASSOC))//Fetch Retorna valores true o false 
			{
				if (password_verify($password, $registers['password'])) 
				{
					$pass=1;
					$Renglon=$result-> fetch(PDO::FETCH_NUM); 
					session_start();
					$_SESSION["Name"]=$Renglon[1];
					$_SESSION["Email"]= $Renglon[2];
					$_SESSION["Id"]= $Renglon[0];
					$ID=$_SESSION["ID"];
				}
			}
			if ($pass>0) 
			{
				echo "<div class='Alert alert-success'>";
				echo "<h2 aling='center'>Bienvenid@ ".$_SESSION["Name"]."</h2>";
				echo "</div>";
				header("location: ./index.php");
			}
			else
			{
				echo "<div class='Alert alert-danger'>";
				echo "<h2 aling='center'>Usuario o Password Incorrecto..</h2>";
				echo "</div>";
				header("location:./index.php");
			}
		} 
		catch (PDOException $e) 
		{
			echo $e-> getMessage();
		}
	
	}

	function CloseSession()
	{
		session_start();
		session_destroy();
		echo "<div class='Alert alert-success'>";
		echo "<h2 aling='center'>Hasta Luego</h2>";
		echo "</div>";
		header("location:./index.php");
	}
	function RunSQL($SQL)
	{
		try 
		{
			$this->PDOlocal->query($SQL);
		} 
		catch (PDOException $e) 
		{
			echo $e-> getMessage();
		}

		return $this->PDOlocal->lastInsertId();
	}

	function RunSQLDelete($SQL)
	{
		try
		{
			$this->PDOlocal ->query($SQL);
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
		}

	}

	function RunSQLUser($cadenaSQL)
	{
		try
		{
			$resultado = $this->PDOlocal ->query($cadenaSQL);
			$renglon = $resultado-> fetchALL(PDO::FETCH_OBJ); //crea arreglos llamando sus columnas con el nombe de la tabla consultada y recuperada

			return $renglon;
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
		}

	}


	function ejecutarSQL($SQL)
	{
		try
		{
		 $this->PDOlocal->query($SQL);
			
		} 

		catch (PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	function seleccionar($cadenaSQL)
	{
		try 
		{
			$resultado=$this->PDOlocal->query($cadenaSQL);
			$renglon=$resultado->fetchALL(PDO::FETCH_OBJ);
			
			return$renglon;
			
		} catch (PDOException $e) 
		{
			echo $e->getMessage();			
		}
	}



}

?>