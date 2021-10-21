<h1 class="text-center">Cadastrar Processador</h1>
<form action="?page=processadores-salvar" method="POST">
    <input type="hidden" name='acao' value="cadastrar">
    <div class="form-group">
        <label class="text-center">Nome</label>
        <input type="text" name="nome_processador" class="form-control">
    </div>
    <div class="form-group">
        <label class="text-center">Serial</label>
        <input type="text" name="serial_processaor" class="form-control">
    </div>
    <div class="form-group">
        <label class="text-center">Quantidades de Threads</label>
        <input type="text" name="threads_processador" class="form-control">
    </div>
    <div class="form-group">
        <label class="text-center">Consumo em Watts</label>
        <input type="text" name="consumo_processador" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>