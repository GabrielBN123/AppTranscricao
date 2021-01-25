<?php
/*
Guias usadas 

DevMedia
inserir imagem
https://www.devmedia.com.br/armazenando-imagens-no-mysql/32104

php.ini

https://www.php.net/manual/pt_BR/mysqli.query.php

https://www.php.net/manual/pt_BR/function.mysqli-connect.php

https://www.php.net/manual/pt_BR/function.mysqli-connect.php

https://www.php.net/manual/pt_BR/mysqli-stmt.execute.php

https://www.w3schools.com/sql/sql_foreignkey.asp

upload de imagem
https://rafaelcouto.com.br/upload-simples-de-imagem-com-php-mysql/

preg_replace
https://www.php.net/manual/pt_BR/function.preg-replace.php

*/


/**
 * 
 * 
//nome do host
$host = 'localhost';
//nome do banco de dados
$nome_base = 'transc_bd';
// nome de usuario
$user = 'root';
// Senha
$password = 'root';

// fazer Conexão ao banco de dados utilizando variaveis acima
$conexao = mysqli_connect("$host", "$user", "$password", "$nome_base");
// escolhendo charset
$charset = mysqli_set_charset($conexao,"utf8");

// Verificar se conexão esta dando certo
if (!$conexao) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
// fim conexão

// query para inserção no values como ? para ser inserido mais abaixo
$query = "INSERT INTO campo (nome_campo, descricao_campo) VALUES (?,?)";

// ainda a pesquisar esta função para melhor explicar
$stmt = mysqli_prepare($conexao, $query);

// para adiciaonar os valores acima como sendo as variaveis $val1 e $val2 que serão inseridos os dados mais abaixo
mysqli_stmt_bind_param($stmt, "ss", $val1, $val2);
// repare que a quantidade de "ss", equivale a quantidade de ? que foi colocado acima, e o mesmo para as variaveis $val1 e $val2

// inserindo os valores das variaveis acima
$val1 = 'teste';
$val2 = 'Teste Inserção';

// após inserir os valores executar, este comando executa a query inserindo os dados
mysqli_stmt_execute($stmt);

// aqui fecha os comando de estatamento
mysqli_stmt_close($stmt);


// fim inserção
 Fazer select 
 $query = "SELECT * FROM campo";

 escrever na tela
 if ($result = mysqli_query($conexao, $query)) {
    while ($row = mysqli_fetch_row($result)) {
        printf("%s (%s,%s)\n", $row[0], $row[1], $row[2]);
    }
    //free result set
    mysqli_free_result($result);
}

// este comando encerra a conexão
mysqli_close($conexao);

 */
?>