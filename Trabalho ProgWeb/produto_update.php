<h1>Editar Produto</h1>
<?php
	$sql_1 = "SELECT * FROM produto WHERE id_produto = ".$_REQUEST["id_produto"];

	$res_1 = $conn->query($sql_1) or die($conn->error);

	$row_1 = $res_1->fetch_object();

?>
<form action="?page=produto_save" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_produto" value="<?php print $_REQUEST["id_produto"]; ?>">
	<div class="form-group">
		<label>Nome da Marca</label>
		<?php
            $sql = "SELECT * FROM marca";
			$res = $conn->query($sql) or die($conn->error);
			$qtd = $res->num_rows;

			if($qtd>0){
				print "<select name='marca_id_marca' class='form-control'>";	
				print "<option> -= Selecione =- </option>";			
				while($row = $res->fetch_object()){
					if($row->id_marca == $row_1->marca_id_marca){
						print "<option value='".$row->id_marca."' selected>".$row->nome_marca."</option>";
					}else{
						print "<option value='".$row->id_marca."'>".$row->nome_marca."</option>";
					}
				}
				print "</select>";
			}else{
				print "<div class='alert alert-danger'>Nenhum dado encontrado.</div>";
			}
		?>
	</div>
	<div class="form-group">
		<label>Nome do Produto</label>
		<input type="text" name="nome_produto" class="form-control" value="<?php print $row_1->nome_produto; ?>">
	</div>
    <div class="form-group">
        <label>Tipo de Produto</label>
        <input type="text" name="tipo_produto" class="form-control" value="<?php print $row_1->tipo_produto; ?>">
    </div>
    <div class="form-group">
        <label>Ano do Produto</label>
        <input type="number" name="ano_produto" class="form-control" value="<?php print $row_1->ano_produto; ?>">
    </div>
    <div class="form-group">
        <label>Informações do Produto</label>
        <input type="text" name="info_produto" class="form-control" value="<?php print $row_1->info_produto; ?>">
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit">Enviar</button>
    </div>
</form>