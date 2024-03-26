<?php 
//Dados para conexão do banco
$servidor = "localhost";
$user = "root";
$senha = "root";
$banco = "bd_sistema";

//conectando no banco de dados utilizando a função mysqli
$conexao = new mysqli($servidor, $user, $senha, $banco);

//Dados para criar a tabela
/*$table = "create table aluno (
    rm_aluno int auto_increment primary key,
    nm_aluno varchar(100),
    email varchar(100),
    celular char(11)
)";*/

//Dados para inserir os dados
$insert = "INSERT INTO aluno VALUES (NULL,'Jose roberto','jose.carlos@gmail.com','11954587584')";

//inserindo os dados no banco de dados utilizando a função mysqli
$query = mysqli_query($conexao, $insert);


?>