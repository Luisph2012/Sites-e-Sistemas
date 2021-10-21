<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "INSERT INTO marca (nome_marca) VALUES ('".$_POST["nome_marca"]."')";
			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrado com sucesso!');</script>";
				print "<script>location.href='?page=marca_read';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
			break;	

		case 'editar':
			$sql = "UPDATE marca SET nome_marca = '".$_POST["nome_marca"]."' WHERE id_marca = ".$_POST["id_marca"];
			$res = $conn->query($sql) or die($conn->error);
			if($res==true){
				print "<script>alert('Editado com sucesso!');</script>";
				print "<script>location.href='?page=marca_read';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar.</div>";
			}
			break;	

		case 'excluir':
			$sql = "DELETE FROM marca WHERE id_marca = ".$_REQUEST["id_marca"];
			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=marca_read';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
			}
			break;		
		
	}
?>