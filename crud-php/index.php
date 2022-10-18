<?php
include_once 'php_action/conexao.php';
include_once 'header.php';
include_once 'mensagem.php';

?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Cadastro Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>SobreNome</th>
                    <th>Email</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
            <!--Buscando os dados da tabela atraves do Banco de dados-->
                <?php
                    $sql = "SELECT * FROM clientes";
                    $resultado = mysqli_query($connect, $sql);
                    //se a variavel resultado nao estiver vazia inicia o LOOP
                    if(mysqli_num_rows($resultado) > 0):

                    while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['sobrenome']; ?></td>
                    <td><?php echo $dados['email']; ?></td>
                    <td><?php echo $dados['idade']; ?></td>
                    <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating purple"><i class="material-icons">edit</i></a></td>

                    <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
                    <!-- Modal Structure -->
                        <div id="modal<?php echo $dados['id']; ?>" class="modal">
                            <div class="modal-content">
                            <h4>Seu Registro será Excluido</h4>
                            <p>Tem Certeza?</p>
                            </div>
                            <div class="modal-footer">
                            
                            <!--Criando o BOTAO deletar-->
                            <form action="php_action/deletar.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                <button type="submit" name="btn-deletar" class="btn red">Deletar</button>
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat green">Cancelar</a>
                            </form>
                            </div>
                        </div>
                </tr>
                <?php endwhile;
                else: ?>
                <!--Elementos de traços quando a tabela estiver vazia-->
                <tr>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <?php
                endif;
                ?>


            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar clientes</a>
    </div>
</div>


<?php
include_once 'footer.php';
?>




     