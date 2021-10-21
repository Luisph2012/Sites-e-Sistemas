<h1>Cadastrar Produto</h1>
<form action="?page=produto_save" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="form-group">
        <label>Marca</label>
        <?php
            $sql = "SELECT * FROM marca";
            $res = $conn->query($sql) or die ($conn->error);
            $qtd = $res->num_rows;

            if($qtd>0){
                print "<select name='marca_id_marca' class='form-control'>";
                print "<option> -++= Selecione =++- </option>";
            while($row = $res->fetch_object()){
                print "<option value='".$row->id_marca."'>".$row->nome_marca."</option>";}
            print "</select>";
            }else{
                print "<div class='alert alert-danger'>Nenhum dado encontrado.</div>";
            }
        ?>
    </div>
    <div class="form-group">
        <label>Nome do Produto</label>
        <input type="text" name="nome_produto" class="form-control">
    </div>
    <div class="form-group">
        <label>Tipo de Produto</label>
        <input type="text" name="tipo_produto" class="form-control">
    </div>
    <div class="form-group">
        <label>Ano do Produto</label>
        <input type="number" name="ano_produto" class="form-control">
    </div>
    <div class="form-group">
        <label>Informações do Produto</label>
        <input type="text" name="info_produto" class="form-control">
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit">Enviar</button>
    </div>
</form>