

<script type="text/javascript">

   var _gaq = _gaq || [];
   _gaq.push(['_setAccount', 'UA-44985008-1']);
   _gaq.push(['_setDomainName', 'c3concursos.com.br']);
   _gaq.push(['_trackPageview']);

   (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php
// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = $_POST['inputNome'];
$emailremetente    = trim($_POST['inputEmail']);
$emaildestinatario = 'contato@c3concursos.com.br';
    //$emaildestinatario = 'bnojpa@gmail.com';
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

    $envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers); 

    if ($envio) {
      echo "<script>
      alert('Mensagem enviada!');
      location.href='$paginadesucesso';
  </script>";

  exit;
}

?>
