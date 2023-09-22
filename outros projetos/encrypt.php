<?php
/*
 * método simples para criptografar ou descriptografar uma string de texto simples
 * o vetor de inicialização (IV) deve ser o mesmo ao criptografar e descriptografar
 *
 * @param string $ action: pode ser 'criptografar' ou 'descriptografar'
 * @param string $ string: string para criptografar ou descriptografar
 *
 * @return string
 * /
função encrypt_d*/
function encrypt_decrypt($action, $string) {
    $output = false;

    $encrypt_method = "AES-256-CBC";
    $secret_key = '1234';
    $secret_iv = 'ewt';

    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - método encrypt  AES-256-CBC espera 16 bytes - senão você receberá um aviso
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if ( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if( $action == 'decrypt' ) {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}

$plain_txt = "This is my plain text";
echo "Plain Text =" .$plain_txt. "\n<br>";

$encrypted_txt = encrypt_decrypt('encrypt', $plain_txt);
echo "Encrypted Text = " .$encrypted_txt. "\n<br>";

$decrypted_txt = encrypt_decrypt('decrypt', $encrypted_txt);
echo "Decrypted Text =" .$decrypted_txt. "\n<br>";

if ( $plain_txt === $decrypted_txt ) echo "SUCCESS";
else echo "FAILED";

echo "\n";

?>