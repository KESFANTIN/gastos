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

    $qtd = $dados['quantidade'];
    $val = $dados['valor'];

    //$qtd = floatval(str_replace(",", ".", $qtd));
    $val = floatval(str_replace(",", ".", $val));

    $total = $qtd*$val;
?>

<div class="container">
    <div class="row m6 push-m3">
        <h3 class="ligth"><?php echo $dados['produto']; ?></h3><h5 class="light blue-text"><?php echo $dados['categoria']; ?></h5>

        <div class="input-field col s12 m6 l4 ">
            <h5>Data</h5>
            <?php echo date('d/m/Y', strtotime($dados['datacompra'])); ?>
        </div>
        <div class="input-field col s12 m6 l4">
            <h5>Estabelecimento</h5>
            <?php echo $dados['estabelecimento']; ?>
        </div>
        <div class="input-field col s12 m6 l4">
            <h5>Produto</h5>
            <?php echo $dados['produto']; ?>
        </div>

        <div class="input-field col s12 m6 l4">
            <h5>Categoria</h5>
            <?php echo $dados['categoria']; ?>
        </div>

        <div class="input-field col s12 m6 l4">
            <h5>Marca</h5>
            <?php echo $dados['marca']; ?>
        </div>
        <div class="input-field col s12 m6 l4">
            <h5>Quantidade</h5>
            <?php echo $dados['quantidade']; ?>
        </div>

        <div class="input-field col s12 m6 l4">
            <h5>Unidade</h5>
            <?php echo $dados['unidade']; ?>
        </div>

        <div class="input-field col s12 m6 l4">
            <h5>Valor</h5>
            R$ <?php echo $dados['valor']; ?>
        </div>
        <div class="input-field col s12 m6 l4">
            <h5>Total</h5>
            R$ <?php echo $total;?>
        </div>

        <div class="input-field col s12 m6 l4">
            <h5>Forma de Pagamento</h5>
            <?php echo $dados['pagamento']; ?>
        </div>

        <div class="center col top s6 m12 l12">
            <a href="index.php" class="wave-ligth btn-small orange"><i class="material-icons left">arrow_back</i>Voltar</a>
            <a href="editar.php?id=<?php echo $dados['id']; ?>" class="wave-ligth btn-small blue"><i class="material-icons left">edit</i>Editar</a>
            <a href="adicionar.php" class="wave-ligth btn-small"><i class="material-icons left">add</i>Adicionar</a>
            <a href="#modal<?php echo $dados['id']; ?>" class="wave-ligth btn-small modal-trigger red"><i class="material-icons left">delete</i>Excluir</a>

        </div> 
        
        <!-- Modal Structure -->
        <div id="modal<?php echo $dados['id']; ?>" class="modal s6 m6 l12">
            <div class="modal-content center">
            <h4 class="btn-floating pulse red"><i class="large material-icons">add_alert</i></h4>
            <p class="center">Tem certeza que deseja excluir o produto <strong class="red-text"><?php echo $dados['produto']; ?></strong>?</p>
            </div>
            <div class="modal-footer" >

                <form action="php_action/delete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                    <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>

                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                </form>

            </div>
        </div>


    </div>
</div>


<?php
    // Footer
    include_once 'includes/footer.php';
?>