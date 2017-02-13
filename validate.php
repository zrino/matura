<?php 

		include("Conf.php");
		include("core/Common.php");
		include("core/DB.php");
		$DB = DB::instance();
		$res = $DB->fetchAll("SELECT * FROM kviz");
		dd($res);


		if(isset($_POST["pitanje"]) && $_POST["pitanje"])
		{
			$pitanje = trim("\"".$_POST["pitanje"]."\"");
			$c = count($_POST["odgovori"]);

			for($i = 0; $i < $c; $i++)
			{
				$odgovor = trim("\"".$_POST["odgovor"][$i]."\"");
			}
		}
?>