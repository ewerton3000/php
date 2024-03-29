<?php

require_once("vendor/autoload.php");
require_once("vendor/phpmailer/phpmailer/class.phpmailer.php");

use Rain\Tpl;

// config
$config = array(

    "tpl_dir"       => "tpl/",//Direcionando a pasta de configuração dos templates
    "cache_dir"     => "cache/"
);

Tpl::configure( $config );



// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign( "name", "Hcode" );
$tpl->assign( "version", PHP_VERSION );

// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// draw the template

//Encaminhado o nome do arquivo html( ele só procura os arquivos html) e não precisa dizer o nome completo exemplo:execute.html = execute

//Puxando a variavel $tpl do index.php para o $html 
//Usandi o true para mostra a execução na tela!
$html=$tpl->draw("index",true);


 
//Import PHPMailer classes into the global namespace
//use PHPMailer\PHPMailer\PHPMailer;
// VEJA QUE O NAMESPACE FOI COMENTADO
 
//Create a new PHPMailer instance
$mail = new PHPMailer;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Use `$mail->Host = gethostbyname('smtp.gmail.com');`
//if your network does not support SMTP over IPv6,
//though this may cause issues with TLS

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'ewt700@gmail.com';

//Password to use for SMTP authentication
$mail->Password = 96387261;

//Set who the message is to be sent from
$mail->setFrom('ewt700@gmail.com', 'De Min mesmo');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('ewt700@gmail.com', 'Curso de php 7');

//Set the subject line
$mail->Subject = 'Testando a classe PHPMailer com gmail.';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body

//Gerando uma variavel para a mensaem em html
$mail->msgHTML($html);

//Replace the plain text body with one created manually
$mail->AltBody = 'Ocorreu um erro no envio da mensagem';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}
?>