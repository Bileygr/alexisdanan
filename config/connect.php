<?php
class Connect{
	public function connection(){
		$settings = parse_ini_file("settings.ini", true);
		$host = $settings["database"]["host"];
		$port = $settings["database"]["port"];
		$db = $settings["database"]["db"];
		$user = $settings["database"]["user"];
		$password = $settings["database"]["password"];

		try{
			$db = new PDO("mysql:host=".$host.";port=".$port.";dbname=".$db.";charset=utf8", $user, $password);
		}catch(Exception $e){
			echo "Échec lors de la connexion: ".$e->getMessage();
		}
		
		return $db;
	}
}
?>