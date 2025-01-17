<?php
	session_start();
	if(!$_SESSION["loggedin"]) {
		header("Location:index.php");
	}
	if ( !has_access("amxadmins_view") ) {
		header("Location:index.php");
		exit;
	}

	$admin_site="wa";
	$title2 ="_TITLEWEBADMIN";
	
	if(isset($_POST["uid"])) {
		$uid=(int)$_POST["uid"];
	} else {
		$uid="";
	}
	//Levels holen
	$levels=array();
	$query = mysql_query("SELECT `level` FROM `".$config->db_prefix."_levels` ORDER BY `level`") or die (mysql_error());
	while($result = mysql_fetch_object($query)) {
		$level=array($result->level=>$result->level);
		$levels[]=$result->level;
	}
	
	function checkAdmin($nickname, $email) {
		global $config;
		$query = mysql_query("SELECT * FROM `".$config->db_prefix."_webadmins` WHERE username='".$nickname."' OR email='".$email."'") or die (mysql_error());
		if(mysql_num_rows($query)) {
			return true;
		}
		return false;
	}
	
	if(isset($_POST["save"]) || isset($_POST["new"])) {
		if ( !has_access("amxadmins_view") ) {
			header("Location:index.php");
			exit;
		}
		$name=sql_safe($_POST["name"]);
		if(!validate_value($name,"name",$error,4,31,"USERNAME")) $user_msg[]=$error;
		$email=sql_safe($_POST["email"]);
		if(!validate_value($email,"email",$error)) $user_msg[]=$error;
	}
	//change pw
	if(isset($_POST["setnewpw"])) {
		if ( !has_access("amxadmins_view") ) {
			header("Location:index.php");
			exit;
		}
		$newpw=$_POST["newpw"];
		if(!validate_value($newpw,"name",$error,4,31,"PASSWORD")) $user_msg[]=$error;
		#if($newpw != $_POST["newpw"]) $user_msg="_PASSWORDNOTVALID";
		
		if(!$user_msg) {
			#echo "pw ".$newpw." wird gesetzt.";
			$query = mysql_query("UPDATE `".$config->db_prefix."_webadmins` SET 
						`password`='".md5($newpw)."'
						WHERE `id`=".$uid." LIMIT 1") or $user_msg="_PASSWORDCHANGEDFAILED";
			if(!$user_msg) {
				log_to_db("Webadmin config","Edited user: ".html_safe($_POST["name"])." (id: ".$uid.") changed password");
				$user_msg[]="_PASSWORDCHANGED";
				//try to send an email to the user
					$to = $_POST["email"];
					$subject = 'AMXBans: Your login has changed';
					$msg = 'Your Account has been changed from: '.$_SESSION["uname"].chr(10).chr(10).'Your username: '.$_POST["name"].chr(10).'Your new Password: '.$newpw;
					$header = 'From: '.$_SESSION["email"] . "\r\n" .
								'X-Mailer: PHP/' . phpversion();
					if(mail($to, $subject, $msg, $header)) $user_msg[]="_EMAILSENT";
					
				//if the own pw changed, logout
				if($_SESSION["uname"]==$_POST["name"]) {
					header("Location: logout.php");
				}
			}
		}
	}
	//Webadmin save
	if(isset($_POST["save"])) {
		if ( !has_access("amxadmins_view") ) {
			header("Location:index.php");
			exit;
		}
		if(!$user_msg) {
			$query = mysql_query("UPDATE `".$config->db_prefix."_webadmins` SET 
						`username`='".$name."',
						`level`='".(int)$_POST["level"]."',
						`email`='".$email."',
						`logcode`='' 
						WHERE `id`=".$uid." LIMIT 1") or die (mysql_error());
			$user_msg[]='_WADMINSAVED';
			log_to_db("Webadmin config","Edited user: ".html_safe($_POST["name"])." (id: ".$uid.")");
		}
	}
	//Webadmin delete
	if(isset($_POST["del"])) {
		if ( !has_access("amxadmins_view") ) {
			header("Location:index.php");
			exit;
		}
		$query = mysql_query("DELETE FROM `".$config->db_prefix."_webadmins` WHERE `id`=".$uid." LIMIT 1") or die (mysql_error());
		$user_msg[]='_WADMINDELETED';
		log_to_db("Webadmin config","Deleted user: ".html_safe($_POST["name"]));
	}
	//Webadmin add
	if(isset($_POST["new"])) {
		$pw=$_POST["pw"];
		if(!validate_value($pw,"name",$error,4,31,"PASSWORD")) $user_msg[]=$error;
		$pw2=sql_safe($_POST["pw2"]);
		$level=(int)$_POST["level"];
		
		$input=array("name"=>$name,"level"=>$level,"email"=>$email);
		$smarty->assign("input",$input);
		
		//Are passwords the same?
		if($pw !== $pw2) {
			$user_msg[]="_PASSWORDNOTMATCH";
		}
		if(checkAdmin($name, $email)) {
			$user_msg[]="_WADMINADDEDFAILED";
		}
		if(!$user_msg) {
			//save webadmin to db
			$query = mysql_query("INSERT INTO `".$config->db_prefix."_webadmins` 
						(`username`,`password`,`level`,`email`) 
						VALUES 
						('".$name."','".md5($pw)."','".$level."','".$email."')
						") or $user_msg[]='_WADMINADDEDFAILED';#die (mysql_error());
			if(!$user_msg) {
				$user_msg[]='_WADMINADDED';
				log_to_db("User Level config","Added user: ".html_safe($_POST["name"])." (level ".$level.")");
			}
		}
	}
	//Webadmins holen
	$users=sql_get_webadmins();
	
	$smarty->assign("users",$users);
	$smarty->assign("levels",$levels);
	
?>