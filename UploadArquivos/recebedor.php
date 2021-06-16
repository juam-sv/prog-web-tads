<?php
// salva o nome do arquivo
$nome = $_FILES['arquivo']['name'];

// array com os tipos de arquivos permitidos
$permitidos = ['image/jpeg', 'image/jpg', 'image/png'];

// verifica se o tipo de arquivo esta dentro dos arrays
if (in_array($_FILES['arquivo']['type'], $permitidos)){
    // move arquivo da área temp para a pasta arquivos
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/' . $nome);

    echo '<br><br>' . 'Arquivo salvo com sucesso!';

}else{
    echo '<br><br>' . 'Arquivo não permitido!';
}
















?>