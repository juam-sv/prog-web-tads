
<!--
USAR POST PARA ENVIAR ARQUIVOS
ENCTYPE - DEFINE COMO O FORM AGREGA O CONTEUDO PARA ENVIAR ARQUIVO
USAR INPUT TYPE FILE - ENVIA O ARQUIVO E SEUS DADOS PARA O
SUPERGLOBAL $_FILES
-->

<form method="POST" action="recebedor.php" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <input type="submit" value="Enviar">
</form>