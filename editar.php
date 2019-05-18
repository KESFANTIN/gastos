<?php
    //Conexão
    include_once 'php_action/db_connect.php';
    // Header
    include_once 'includes/header.php';
    // Select
    if(isset($_GET['id'])):
        $id = mysqli_escape_string($connect, $_GET['id']);
        $sql = "SELECT * FROM  fgastos WHERE id = '$id'";    
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);
    endif;
?>

<div class="container">
    <div class="row m6 push-m3">
        <h3 class="ligth">Editar Gasto</h3>

        <form action="php_action/update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
            <div class="input-field col s6">
                <i class="material-icons prefix">calendar_today</i>
                <input type="date" name="datacompra" id="datacompra" required value="<?php echo $dados['datacompra'] ?>">
                <label for="datacompra">Data da Compra</label>
            </div>

            <div class="input-field col s6">
                <i class="material-icons prefix">access_time</i>
                <input type="time" name="hora" id="hora" required value="<?php echo $dados['hora'] ?>">
                <label for="hora">Hora</label>
            </div>

            <div class="input-field col s12">
                <i class="material-icons prefix">redeem</i>
                <input type="text" name="produto" id="produto" required value="<?php echo $dados['produto'] ?>">
                <label for="produto">Produto</label>
            </div>

            <div class="input-field col s6">
                <i class="material-icons prefix">playlist_add</i>
                <input type="number" name="quantidade" id="quantidade" required value="<?php echo $dados['quantidade'] ?>">
                <label for="quantidade">Quantidade</label>
            </div>

            <div class="input-field col s6">
                <i class="material-icons prefix">attach_money</i>
                <input type="text" onkeyup="k(this);" name="valor" required id="valor" value="<?php echo $dados['valor'] ?>">
                <label for="valor">Valor</label>
            </div>

            <button type="submit" name="btn-editar" class="btn green"><i class="material-icons left">add</i>Atualizar</button>
            <a class="btn blue" href="index.php"><i class="material-icons left">list</i>Listar os Gastos</a>
        </form>
    
    </div>
</div>


<?php
    // Footer
    include_once 'includes/footer.php';
?>