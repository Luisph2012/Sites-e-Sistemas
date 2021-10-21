<h1>Consultar Vendedor</h1>
<?php
	$sql = "SELECT v.*, c.* FROM produto AS v
			INNER JOIN marca AS c
			ON c.id_marca = v.marca_id_marca"; 

	$res = $conn->query($sql) or die($conn->error);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Produto</th>";
		print "<th>Marca</th>";
        print "<th>Tipo de Peça</th>";
        print "<th>Ano</th>";
        print "<th>Informações</th>";
        print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_produto."</td>";
			print "<td>".$row->nome_produto."</td>";
            print "<td>".$row->nome_marca."</td>";
            print "<td>".$row->tipo_produto."</td>";
            print "<td>".$row->ano_produto."</td>";
            print "<td>".$row->info_produto."</td>";
			print "<td>
						<button class='btn btn-success' onclick=\"location.href='?page=produto_update&id_produto=".$row->id_produto."';\">Editar</button>

						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=produto_save&acao=excluir&id_produto=".$row->id_produto."';}else{false;}\">Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não encontrou resultados</div>";
	}
?>