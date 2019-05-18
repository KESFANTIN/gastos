<?php 
    // Header
    include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="ligth">Novo Gasto</h3>

        <form action="php_action/create.php" method="POST">
            <div class="input-field col s6">
                <i class="material-icons prefix">calendar_today</i>
                <input type="date" name="dia" id="dia">
                <label for="dia">Data</label>
            </div>

            <div class="input-field col s6">
                <i class="material-icons prefix">access_time</i>
                <input type="time" name="hora" id="hora">
                <label for="hora">Hora</label>
            </div>

            <div class="input-field col s12">
                <i class="material-icons prefix">redeem</i>
                <input type="text" name="produto" id="produto">
                <label for="produto">Produto</label>
            </div>

            <div class="input-field col s6">
                <i class="material-icons prefix">playlist_add</i>
                <input type="number" name="quantidade" id="quantidade">
                <label for="quantidade">Quantidade</label>
            </div>

            <div class="input-field col s6">
                <i class="material-icons prefix">attach_money</i>
                <input type="cuRRENCY" name="valor" id="valor">
                <label for="valor">Valor</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn green"><i class="material-icons left">add</i>Cadastrar</button>
            <a class="btn blue" href="index.php"><i class="material-icons left">list</i>Listar os Gastos</a>
        </form>
    
    </div>
</div>


<?php
    // Footer
    include_once 'includes/footer.php';
?>