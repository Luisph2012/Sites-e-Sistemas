<h1>Editar loja</h1>
<?php
	$sql_1 = "SELECT * FROM loja WHERE id_loja = ".$_REQUEST["id_loja"];

	$res_1 = $conn->query($sql_1) or die($conn->error);

	$row_1 = $res_1->fetch_object();

?>
<form action="?page=loja_save" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_loja" value="<?php print $_REQUEST["id_loja"]; ?>">
	<div class="form-group">
		<label>Nome da produto</label>
		<?php
            $sql = "SELECT * FROM produto";
			$res = $conn->query($sql) or die($conn->error);
			$qtd = $res->num_rows;

			if($qtd>0){
				print "<select name='produto_id_produto' class='form-control'>";	
				print "<option> -= Selecione =- </option>";			
				while($row = $res->fetch_object()){
					if($row->id_produto == $row_1->produto_id_produto){
						print "<option value='".$row->id_produto."' selected>".$row->nome_produto."</option>";
					}else{
						print "<option value='".$row->id_produto."'>".$row->nome_produto."</option>";
					}
				}
				print "</select>";
			}else{
				print "<div class='alert alert-danger'>Nenhum dado encontrado.</div>";
			}
		?>
    </div>
    <div class="form-group">
        <label>Nome</label>
        <input type="text" name="nome_loja" class="form-control" value="<?php print $row_1->nome_loja; ?>">
    </div>
    <div class="form-group">
        <label>Preço</label>
        <input type="number" name="preco_loja" class="form-control" value="<?php print $row_1->preco_loja; ?>">
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit">Enviar</button>
    </div>
</form>