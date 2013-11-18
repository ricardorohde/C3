<?php
// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = $_POST['inputNome'];
$emailremetente    = trim($_POST['inputEmail']);
$emaildestinatario = 'contato@c3concursos.com.br';
$enderecodestinatario   = $_POST['inputEndereco'];
$estadocodestinatario   = $_POST['inputEstado'];
$cidadedestinatario = $_POST['inputCidade'];
$cepdestinatario    = $_POST['inputCEP'];
$telefone          = $_POST['inputTelefones'];
$assunto          = $_POST['inputAssunto'];
$mensagem          = $_POST['inputMensagem'];
$paginadesucesso    =$_POST['inputSucesso'];

/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>'.$assunto.'</P>
<p><b>Nome:</b> '.$nomeremetente.'</p>
<p><b>E-Mail:</b> '.$emailremetente.'</p>
<p><b>Endereço:</b> '.$enderecodestinatario.'</p>
<p><b>Estado:</b> '.$estadocodestinatario.' - <b>Cidade:</b> '.$cidadedestinatario.'</p>
<p><b>CEP:</b> '.$cepdestinatario.'</p>
<p><b>Telefone:</b> '.$telefone.'</p>
<p><b>Mensagem:</b> '.$mensagem.'</p>
<hr>';


// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emaildestinatario\r\n"; // remetente
$headers .= 'Cc: julio@indec.com.br' . "\r\n";
$headers .= 'Bcc: clientes@lvdesign.com.br' . "\r\n";
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path

session_start();
if ($_POST["palavra"] == $_SESSION["palavra"]){

	$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers); 
}else{
	echo "<script>
	alert('Você digitou o código errado. Tente novamente.');
	window.history.back(-1);
</script>";
}

if ($envio) {
	echo "<script>
	alert('Mensagem enviada!');
	location.href='$paginadesucesso';
</script>";

exit;
}

?>