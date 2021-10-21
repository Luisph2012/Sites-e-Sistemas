<h1>Bem vindo de Comparador de Preços</h1>
<BR><BR><BR>
<h2 style="text-align: center">Lista de Produtos</h2>
<?php
	$sql = "SELECT *
    FROM loja AS l 
        INNER JOIN produto AS p 
    ON p.id_produto = l.produto_id_produto 
        INNER JOIN marca AS m 
    ON m.id_marca = p.marca_id_marca"; 

	$res = $conn->query($sql) or die($conn->error);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Loja</th>";
		print "<th>Marca</th>";
        print "<th>Produto</th>";
        print "<th>Ano</th>";
        print "<th>Informações</th>";
        print "<th>Preço</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_produto."</td>";
			print "<td>".$row->nome_loja."</td>";
            print "<td>".$row->nome_marca."</td>";
            print "<td>".$row->nome_produto."</td>";
            print "<td>".$row->ano_produto."</td>";
            print "<td>".$row->info_produto."</td>";
            print "<td>".$row->preco_loja."</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger' >Não encontrou Produtos</div>";
	}
?>