<h1 class="text-center">LISTA DE PROCESSADORES</h1>
<?php
    $sql = "SELECT * FROM processadores";
    $res = $conn->query($sql) or die($conn->error);
    $qtd = $res->num_rows;

    if($qtd>0){
        print "<p>Encontrou <b>$qtd</b> Resultados</p>";
        print "<table class='table table-striped table-bordered table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Numero de Serie</th>";
        print "<th>Threads</th>";
        print "<th>Consumo(em Watts)</th>";
        print "</tr>";
        
        while($row = $res->fetch_object()){ 
            print "<tr>";
            print "<td>".$row->id_processadores."</td>";
            print "<td>".$row->nome_processador;
            print "<td>".$row->serial_processaor;
            print "<td>".$row->threads_processador;
            print "<td>".$row->consumo_processador;
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<div class='alert alert-danger'>Nenhum dado foi Encontrado.</div>";
    }
    
?>
