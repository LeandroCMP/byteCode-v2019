<?php
require_once("./PHPMailer/class.phpmailer.php");

	$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
	$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
	$mail->Port = 465;  		// A porta 587 deverá estar aberta em seu servidor
	$mail->Username = 'bytecodesiteenvio@gmail.com';
	$mail->Password = '96162849';
	$mail->SetFrom('bytecodesiteenvio@gmail.com','E-mail ByteCode');
	$mail->Subject = $_POST["assunto"];
	$mail->Body =
                
               "<p style='font-family: Arial; font-size: 16px;'><font style='font-weight: bold;'>Nome: </font>".$_POST["nome"]."</p>
        <p style='font-family: Arial; font-size: 16px;'><font style='font-weight: bold;'>E-mail: </font>".$_POST["e-mail"]."</p>
        <p style='font-family: Arial; font-size: 16px;'><font style='font-weight: bold;'>Celular: </font>".$_POST["celular"]."</p>
        <p style='font-family: Arial; font-size: 16px;'><font style='font-weight: bold;'>Plano: </font>".$_POST["cbPlanos"]."</p>
        <p style='font-family: Arial; font-size: 16px;'><font style='font-weight: bold;'>Mensagem: </font>".$_POST["mensagem"]."</p>";
        $mail->IsHTML(true);
	$mail->AddAddress('suporte@bytecodesoft.com.br');
        
    if($mail->Send()){
        header('Location: index.php?retorno=1');
    }else{  
         header('Location: index.php?retorno=2');    
    }

 


