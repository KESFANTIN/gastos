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
        <h3 class="ligth">Editar - <?php echo $dados['produto']; ?></h3><h5 class="light blue-text"><?php echo $dados['categoria']; ?></h5>

        <form action="php_action/update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">calendar_today</i>
                <input type="date" name="datacompra" id="datacompra" required value="<?php echo $dados['datacompra'] ?>">
                <label for="datacompra">Data da Compra</label>
            </div>

            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">shopping_cart</i>
                <input type="text" name="estabelecimento" id="datacompra" required value="<?php echo $dados['estabelecimento'] ?>">
                <label for="estabelecimento">Estabelecimento</label>
            </div>

            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">redeem</i>
                <input type="text" name="produto" id="produto" required value="<?php echo $dados['produto'] ?>">
                <label for="produto">Produto</label>
            </div>

            <div class="input-field col s12 m6 l4">
            <i class="material-icons prefix">category</i>
                <select name="categoria" id="categoria">
                    <option value="" disabled>Categoria</option>
                    <option value="<?php echo $dados['categoria'] ?>"><?php echo $dados['categoria'] ?></option>
                    <option value="Bazar e Limpeza">Bazar e Limpeza</option>
                    <option value="Mercearia">Mercearia</option>
                    <option value="Bebidas">Bebidas</option>
                    <option value="Carnes">Carnes</option>
                    <option value="Comidas Prontas e Congeladas">Comidas Prontas e Congeladas</option>
                    <option value="Frios, Leites e Derivados">Frios, Leites e Derivados</option>
                    <option value="Frutas, Ovos e Verduras">Frutas, Ovos e Verduras</option>
                    <option value="Higiene Pessoal">Higiene Pessoal</option>
                    <option value="Importados">Importados</option>
                    <option value="Padaria e Sobremesas">Padaria e Sobremesas</option>
                    <option value="Saúde e Beleza">Saúde e Beleza</option>
                    <option value="Sem Categoria">Sem Categoria</option>
                </select>
            </div>

            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">bookmark_border</i>
                <input type="text" name="marca" id="marca" required value="<?php echo $dados['marca'] ?>">
                <label for="marca">Marca</label>
            </div>

            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">playlist_add</i>
                <input type="number" name="quantidade" id="quantidade" required value="<?php echo $dados['quantidade'] ?>">
                <label for="quantidade">Quantidade</label>
            </div>

            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">4k</i>
                <select name="unidade" id="unidade">
                    <option value="" disabled>Categoria</option>
                    <option value="<?php echo $dados['unidade'] ?>"><?php echo $dados['unidade'] ?></option>
                    <option value="un">un</option>
                    <option value="dz">dz</option>
                    <option value="ml">ml</option>
                    <option value="L">L</option>
                    <option value="kg">kg</option>
                    <option value="g">g</option>
                    <option value="Caixa">Caixa</option>
                    <option value="Embalagem">Embalagem</option>
                    <option value="Galão">Galão</option>
                    <option value="Garrafa">Garrafa</option>
                    <option value="Lata">Lata</option>
                    <option value="Pacote">Pacote</option>
                </select>
            </div>

            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">attach_money</i>
                <input type="text" onkeyup="k(this);" name="valor" required id="valor" value="<?php echo $dados['valor'] ?>">
                <label for="valor">Valor</label>
            </div>

            <div class="input-field col s12 m6 l4">
            <i class="material-icons prefix">credit_card</i>
            <select name="pagamento" id="pagamento">
                    <option value="" disabled>Forma de pagamento</option>
                    <option value="<?php echo $dados['pagamento'] ?>"><?php echo $dados['pagamento'] ?></option>
                    <option value="Sodexo">Sodexo</option>
                    <option value="Dinheiro">Dinheiro</option>
                    <option value="Débito">Débito</option>
                    <optgroup label="Crédito">
                        <option value="Crédito 1x">Crédito 1x</option>
                        <option value="Crédito 2x">Crédito 2x</option>
                    </optgroup>
                    </option>
                </select>
            </div>

            <div class="col s12 m8 l12">
                <button type="submit" name="btn-editar" class="btn"><i class="material-icons left">add</i>Atualizar</button>
                <a class="btn blue" href="index.php"><i class="material-icons left">list</i>Lista de Compras</a>
            </div>

        </form>
    
    </div>
</div>


<?php
    // Footer
    include_once 'includes/footer.php';
?>