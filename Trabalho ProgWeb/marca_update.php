<h1>Editar Concessionária</h1>
<?php
	$sql = "SELECT * FROM marca WHERE id_marca=".$_GET["id_marca"];

	$res = $conn->query($sql) or die($conn->error);

	$row = $res->fetch_object();
?>
<form action="?page=marca_save" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_marca" value="<?php print $row->id_marca; ?>">
	<div class="form-group">
		<label>Nome das Marcas</label>
		<input type="text" name="nome_marca" value="<?php print $row->nome_marca; ?>" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>