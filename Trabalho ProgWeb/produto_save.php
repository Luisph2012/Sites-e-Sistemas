<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$marca = $_POST["marca_id_marca"];
            $nome_produto = $_POST["nome_produto"];
            $tipo_produto = $_POST["tipo_produto"];
            $ano_produto = $_POST["ano_produto"];
            $info_produto = $_POST["info_produto"];

			$sql = "INSERT INTO produto (marca_id_marca, nome_produto, tipo_produto, ano_produto, info_produto)
					VALUES ({$marca}, '{$nome_produto}','{$tipo_produto}','{$ano_produto}','{$info_produto}')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrado com sucesso!');</script>";
				print "<script>location.href='?page=produto_read';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
		
		case 'editar':
			$sql = "UPDATE produto SET
						marca_id_marca=".$_POST["marca_id_marca"].",
                        nome_produto='".$_POST["nome_produto"]."',
                        tipo_produto='".$_POST["tipo_produto"]."',
                        ano_produto='".$_POST["ano_produto"]."',
                        info_produto='".$_POST["info_produto"]."'
					WHERE
						id_produto=".$_REQUEST["id_produto"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editado com sucesso!');</script>";
				print "<script>location.href='?page=produto_read';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;

		case 'excluir':
			$sql = "DELETE FROM produto WHERE id_produto=".$_REQUEST["id_produto"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=produto_read';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
			}
		break;
	}
?>