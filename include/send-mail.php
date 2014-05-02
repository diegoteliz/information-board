<?php 
$reason		= $_POST[ 'reason' ];
$name		= $_POST[ 'name' ];
$email		= $_POST[ 'email' ];
$phone		= $_POST[ 'phone' ];
$title		= $_POST[ 'title' ];
$language	= $_POST[ 'language' ];
$msg		= $_POST[ 'message' ];

function send_mail() {
	$reason		= $_POST[ 'reason' ];
	$name		= $_POST[ 'name' ];
	$email		= $_POST[ 'email' ];
	$phone		= $_POST[ 'phone' ];
	$title		= $_POST[ 'title' ];
	$language	= $_POST[ 'language' ];
	$msg		= $_POST[ 'message' ];

	$to			= 'diego_viper_007@hotmail.com';

	$subject	= "E-mail do Vitrio";

	$message 	 = "<strong>Você recebeu um e-mail do site do Vitrio</strong><br /><br />";
	$message 	.= "<strong>Tipo de contato: </strong>".$reason."<br />";
	$message 	.= "<strong>Nome: </strong>".$name."<br />";
	$message 	.= "<strong>E-mail: </strong>".$email."<br />";
	$message 	.= "<strong>Telefone: </strong>".$phone."<br />";
	$message 	.= "<strong>Empresa/Cargo: </strong>".$title."<br />";
	$message 	.= "<strong>Idioma: </strong>".$language."<br />";
	$message 	.= "<strong>Mensagem: </strong>".$msg;
	
	$headers	 = "From:".$name."<".$email.">";
	$headers 	 = "From:".$name." <".$email.">"."\r\n";
	$headers 	.= "Reply-To:".$name." <".$email.">"."\r\n";
	$headers 	.= "Return-path:".$name." <".$email.">"."\r\n";
	$headers 	.= "Content-Type: text/html";
	

	mail( $to , $subject , $message , $headers );
}

if ( ( $reason != null ) && ( $name != null ) && ( $email != null ) && ( $phone != null ) && ( $title != null ) && ( $msg != null ) ) {
	send_mail();
	echo 1;
} else {
	echo 0;
}


?>