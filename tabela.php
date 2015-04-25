<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8"/>
<?php

	require ("conecta_banco.php");
	$res = mysql_query("SELECT * FROM livro"); /*Executa o comando SQL, no caso para pegar todos os usuarios do sistema e retorna o valor da consulta em uma variavel ($res)  */
	echo "<table cellpadding='6pt'><tr><td>Título</td><td>Autor</td><td>Editora</td><td>Ano</td><td>Editar</td><td>Excluir</td></tr>";
	
	while($escrever=mysql_fetch_array($res)){
	/*Escreve cada linha da tabela*/
	echo "<tr>
	<td>" . $escrever['titulo_livro'] . "</td>
	<td>" . $escrever['autor_livro'] . "</td>
	<td>" .$escrever['editora_livro'] . "</td>
	<td>".$escrever['ano_livro'] . "</td>
	<td>". "<a href='alterar.php?id=".$escrever['id_livro']."'>Editar</a>". "</td>
	<td>" . "<a href='deletar.php?id=".$escrever['id_livro']."'>Excluir</a>" ."</td>
	</tr>";

	}/*Fim do while*/

	echo "</table>"; /*fecha a tabela apos termino de impressão das linhas*/

?>
</html>