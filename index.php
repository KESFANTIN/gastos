<?php 
    // Header
    include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="ligth">Gastos</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Data:</th>
                    <th>Hora:</th>
                    <th>Produto:</th>
                    <th>Quantidade:</th>
                    <th>Valor:</th>
                    <th>Ações:</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>17/05/2019</td>
                    <td>10:00</td>
                    <td>Café</td>
                    <td>2</td>
                    <td>R$ 0,50</td>
                    <td><a href="" class="btn-floating btn-small orange"><i class="material-icons">edit</i></a></td>
                    <td><a href="" class="btn-floating btn-small red"><i class="material-icons">delete</i></a></td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="wave-ligth btn-small green"><i class="material-icons left">add</i>Adicionar gasto</a>
        <a href="" class="wave-ligth btn-small orange"><i class="material-icons left">list</i>Listar gastos</a>
    
    </div>
</div>

<?php
    // Footer
    include_once 'includes/footer.php';
?>