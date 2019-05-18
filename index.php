<?php 
    // Conexão
    include_once 'php_action/db_connect.php';
    // Header
    include_once 'includes/header.php';
    // Mensagem
    include_once 'includes/mensagem.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="ligth">Gastos</h3>
        <br>
        <a href="adicionar.php" class="wave-ligth btn-small green"><i class="material-icons left">add</i>Novo</a>
        <table class="striped">
            <thead>
                <tr>
                    <th>Data da Compra:</th>
                    <th>Hora:</th>
                    <th>Produto:</th>
                    <th>Quantidade:</th>
                    <th>Valor:</th>
                    <th>Ações:</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    $sql = "SELECT * FROM fgastos";
                    $resultado = mysqli_query($connect, $sql);
                    while ($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['datacompra']; ?></td>
                    <td><?php echo $dados['hora']; ?></td>
                    <td><?php echo $dados['produto']; ?></td>
                    <td><?php echo $dados['quantidade']; ?></td>
                    <td>R$ <?php echo $dados['valor']; ?></td>
                    <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating btn-small orange"><i class="material-icons">edit</i></a></td>

                    <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating btn-small red modal-trigger"><i class="material-icons">delete</i></a></td>

                        <!-- Modal Structure -->
                        <div id="modal<?php echo $dados['id']; ?>" class="modal">
                            <div class="modal-content">
                            <h4>Opa!</h4>
                            <p>Tem certeza que deseja excluir este registro?</p>
                            </div>
                            <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>

                            <form action="php_action/delete.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                <button type="submit" name="btn-deletar" class="btn red;"><i class="material-icons">delete</i>Sim</button>
                            </form>

                            </div>
                        </div>

                </tr>
                
                <?php
                    endwhile;
                ?>

            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="wave-ligth btn-small green"><i class="material-icons left">add</i>Novo</a>
    
    </div>
</div>

<?php
    // Footer
    include_once 'includes/footer.php';
?>