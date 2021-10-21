<h1>Consultar Marcas Cadastradas</h1>
<?php
	$sql = "SELECT * FROM marca";
	$res = $conn->query($sql) or die($conn->error);
	$qtd = $res->num_rows;

	if($qtd>0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)";
		print "<table class='table table-striped table-bordered table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome da Marca</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_marca."</td>";
			print "<td>".$row->nome_marca."</td>";
			print "<td>
						<button class='btn btn-success' onclick=\"location.href='?page=marca_update&id_marca=".$row->id_marca."';\">Editar</button>

						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=marca_save&acao=excluir&id_marca=".$row->id_marca."';}else{false;}\">Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Nenhum dado encontrado.</div>";
	}

?>