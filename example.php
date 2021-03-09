<?php

error_reporting(0);
include("rpc.php");

$kpc = new Keva();

$kpc->username=$krpcuser;
$kpc->password=$krpcpass;
$kpc->host=$krpchost;
$kpc->port=$krpcport;

$rpc = new Raven();

$rpc->username=$rrpcuser;
$rpc->password=$rrpcpass;
$rpc->host=$rrpchost;
$rpc->port=$rrpcport;

$_REQ = array_merge($_GET, $_POST);//iotstat





$asset="Nj9disgVJTv9Eh1rUjpxtX79WbD6LrhV3q";


	

		$asset=trim($asset);

		$gstat=$_REQ["group"];


		$gshow=$kpc->keva_group_show($asset);
		 
	

		 $info= $kpc->keva_filter($asset,"",360000);

		 
		
		
		$error = $kpc->error;

			if($error != "") 
		
				{
	
					echo "<p>&nbsp;&nbsp;Error ADDRESS</p>";
					exit;
				}

		



		$arr=array();
		$arrb=array();
		$totalass=array();
			$combine="";

		foreach($info as $x_value=>$x)

			{
			
			extract($x);

			

			$arr["heightx"]=$height;
			$arr["key"]=$key;
			$arr["adds"]=$address;
			$arr["value"]=$value;
			$arr["txx"]=$txid;
			

			$gettime= $kpc->getrawtransaction($txid,1);

			$arr["ctime"]=$gettime['time'];

			$arr["gnamespace"]=$namespace;

						
			If($key=="ID"){$title=$value;}

			if($namespace==$asset){$arr["gname"]=$title;}
			
			

			array_push($totalass,$arr);

			If($key=="ID"){$title=$value;}

			
			
	
			}


			arsort($totalass);

			$listasset=$totalass;




						



foreach ($listasset as $k=>$v) 

			{
			
			extract($v);



		

	

		echo $key."<br><br>".$value."<br><br>";

			}




?>

