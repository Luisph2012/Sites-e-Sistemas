<h1>Cadastrar loja</h1>
<form action="?page=loja_save" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="form-group">
        <label>Produto</label>
        <?php
            $sql = "SELECT * FROM produto";
            $res = $conn->query($sql) or die ($conn->error);
            $qtd = $res->num_rows;

            if($qtd>0){
                print "<select name='produto_id_produto' class='form-control'>";
                print "<option> -++= Selecione =++- </option>";
            while($row = $res->fetch_object()){
                print "<option value='".$row->id_produto."'>".$row->nome_produto."</option>";}
            print "</select>";
            }else{
                print "<div class='alert alert-danger'>Nenhum dado encontrado.</div>";
            }
        ?>
    </div>
    <div class="form-group">
        <label>Nome</label>
        <input type="text" name="nome_loja" class="form-control">
    </div>
    <div class="form-group">
        <label>Preço</label>
        <input type="number" name="preco_loja" class="form-control">
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit">Enviar</button>
    </div>
</form>