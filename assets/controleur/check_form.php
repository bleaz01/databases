<?php

// valid inpute user or inpute empty

function valid($type_name){
	if(empty($type_name)){
		return "champ obligatoir";
	}
	else if(!preg_match('`^[a-zA-Z \'\-\.]+$`', htmlspecialchars($type_name))){
		return "name erro, caractére only pleas.";
	}
	else{
		return TRUE;
	}
}

function valid_email($type_email){

	if(empty($type_email)){
		return "champ obligatoir";
	}
	else if(!filter_var($type_email, FILTER_VALIDATE_EMAIL)){
		return "error in mail";
	}
	else{
		return TRUE;
	}
}

function password_valided($type_password){

	if(empty($type_password)){
		return "champ obligatoir";
	}
	else{
		return TRUE;
	}
}

function my_password_verify($password_one, $password_two){

	if(empty($password_two)){
		return "champ obligatoir";
	}
	else if($password_one != $password_two){
		return "erreur password is not same";
	}
	else{
		return TRUE;
	}
}



