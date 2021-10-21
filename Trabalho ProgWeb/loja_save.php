<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$produto = $_POST["produto_id_produto"];
            $nome_loja = $_POST["nome_loja"];
            $preco_loja = $_POST["preco_loja"];

			$sql = "INSERT INTO loja (produto_id_produto, nome_loja, preco_loja)
					VALUES ({$produto}, '{$nome_loja}','{$preco_loja}')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrado com sucesso!');</script>";
				print "<script>location.href='?page=loja_read';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
		
		case 'editar':
			$sql = "UPDATE loja SET
						produto_id_produto=".$_POST["produto_id_produto"].",
                        nome_loja='".$_POST["nome_loja"]."',
                        preco_loja='".$_POST["preco_loja"]."'
					WHERE
						id_loja=".$_REQUEST["id_loja"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editado com sucesso!');</script>";
				print "<script>location.href='?page=loja_read';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;

		case 'excluir':
			$sql = "DELETE FROM loja WHERE id_loja=".$_REQUEST["id_loja"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=loja_read';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
			}
		break;
	}
?>