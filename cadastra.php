<?php
	
	require ("conecta_banco.php");
	
	$titulo_livro = $_POST['nTitulo'];
	$autor_livro = $_POST['nAutor'];
	$editora_livro = $_POST['nEditora'];
	$ano_livro = $_POST['nAno'];
	
	$sql = "SELECT * FROM livro";
	$limite = mysql_query("$sql");
	
	$sqlinsert = "INSERT INTO livro (id_livro, titulo_livro, autor_livro, editora_livro, ano_livro) VALUES('', '$titulo_livro', '$autor_livro', 
	'$editora_livro', '$ano_livro')";
	
	//mysql_query -- Realiza uma query MySQL, executa o comando da variável
	//o comando die serve para caso aconteça algum erro (Mostra uma mensagem e termina o script atual)
	mysql_query($sqlinsert) or die("Não foi possível realizar o cadastro.");
	
	echo"
	<script type='text/javascript'>
	alert('Livro cadastrado com sucesso!');
	location='index.html';
	</script>
	";
?>