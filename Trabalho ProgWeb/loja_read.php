<h1>Consultar Loja</h1>
<?php
	$sql = "SELECT v.*, c.* FROM loja AS v
    INNER JOIN produto AS c
    ON c.id_produto = v.produto_id_produto"; 

	$res = $conn->query($sql) or die($conn->error);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Loja</th>";
		print "<th>Produto</th>";
        print "<th>Preço</th>";
        print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_loja."</td>";
			print "<td>".$row->nome_loja."</td>";
            print "<td>".$row->nome_produto."</td>";
            print "<td>".$row->preco_loja."</td>";
			print "<td>
						<button class='btn btn-success' onclick=\"location.href='?page=loja_update&id_loja=".$row->id_loja."';\">Editar</button>

						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=loja_save&acao=excluir&id_loja=".$row->id_loja."';}else{false;}\">Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não encontrou resultados</div>";
	}
?>