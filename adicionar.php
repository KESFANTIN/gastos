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
                <input type="date" class="validate" name="datacompra" id="datacompra" required>
                <label for="datacompra">Data da Compra</label>
            </div>

            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">shopping_cart</i>
                <input type="text" class="validate" name="estabelecimento" id="estabelecimento" required>
                <label for="estabelecimento">Estabelecimento*</label>
            </div>

            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">redeem</i>
                <input type="text" class="validate" name="produto" id="produto" required>
                <label for="produto">Produto*</label>
            </div>

            <div class="input-field col s12 m6 l4">
            <i class="material-icons prefix">category</i>
                <select name="categoria" id="categoria">
                    <option value="" disabled>Categoria</option>
                    <option value="Bazar e Limpeza" id="autocomplete-input">Bazar e Limpeza</option>
                    <option value="Mercearia" id="autocomplete-input">Mercearia</option>
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
                <input type="text" class="validate" name="marca" id="marca" required>
                <label for="marca">Marca*</label>
            </div>

            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">playlist_add</i>
                <input type="number" class="validate" name="quantidade" id="quantidade" required>
                <label for="quantidade">Quantidade</label>
            </div>

            <div class="input-field col s12 m6 l4">
            <i class="material-icons prefix">4k</i>
                <select name="unidade" id="unidade">
                    <option value="" disabled>Categoria</option>
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
                <input type="text" class="validate" onkeyup="k(this);" name="valor" id="valor" required>
                <label for="valor">Valor</label>
            </div>

            <div class="input-field col s12 m6 l4">
            <i class="material-icons prefix">credit_card</i>
                <select name="pagamento" id="pagamento">
                    <option value="" disabled>Forma de pagamento</option>
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
                <button type="submit" name="btn-cadastrar" class="btn marg"><i class="material-icons left">add</i>Cadastrar</button>
                <a class="btn orange waves-effect waves-light" href="index.php"><i class="material-icons left">list</i>Lista de Compras</a>
            </div>
        </form>
    
    </div>
</div>


<?php
    // Footer
    include_once 'includes/footer.php';
?>