

<form method="POST" action="index.php">
    <label>
        Novo Nome:
        <br>
        <input type="text" name="nome">
    </label>
    <input type="submit" value="Adicionar"
</form>

<?php
    // recebendo o campo nome do form
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

    // recebendo as linhas do arquivo
    $texto = file_get_contents('listanomes.txt');

    //se houver nome, incluir no arquivo

    if ($nome) {
        $texto .= "\n" . $nome;
        file_put_contents('listanomes.txt', $texto);
    }

    // ler as linhas do arquivo e criar um array
    $texto = file_get_contents('listanomes.txt');
    $linhas = explode("\n", $texto);

    echo "<h2>" . "Lista de nomes" . "</h2>";
?>

<ul>
    <?php
        foreach ($linhas as $linha) {
            echo "<li>" . $linha . "</li>";
        }

        /** */
        //impri os elementos array
        //for ($i=0; $i < count($linhas); $i++) { 
        //    # code...
        //    echo "<li>" . $linhas[$i] . "</li>";
        //}
        //**/
    ?>
</ul>














