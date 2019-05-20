<?php 
    // Header
    include_once 'includes/header.php';
?>

<div class="container">
    <div class="row s6 push-m3">
        <h3 class="ligth">Novo Cadastro</h3>

        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">calendar_today</i>
                <input type="date" name="datacompra" id="datacompra" required>
                <label for="datacompra">Data da Compra</label>
            </div>

            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">shopping_cart</i>
                <input type="text" name="estabelecimento" id="estabelecimento" required>
                <label for="estabelecimento">Estabelecimento*</label>
            </div>

            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">redeem</i>
                <input type="text" name="produto" id="produto" required>
                <label for="produto">Produto*</label>
            </div>

            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">bookmark_border</i>
                <input type="text" name="marca" id="marca" required>
                <label for="marca">Marca*</label>
            </div>

            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">playlist_add</i>
                <input type="number" name="quantidade" id="quantidade" required>
                <label for="quantidade">Quantidade</label>
            </div>

            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">attach_money</i>
                <input type="text" onkeyup="k(this);" name="valor" id="valor" required>
                <label for="valor">Valor</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn"><i class="material-icons left">add</i>Cadastrar</button>
            <a class="btn blue" href="index.php"><i class="material-icons left">list</i>Listar os Gastos</a>
        </form>
    
    </div>
</div>


<?php
    // Footer
    include_once 'includes/footer.php';
?>