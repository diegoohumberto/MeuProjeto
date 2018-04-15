<?php require './_app/Config.inc.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Catraca</title>
        <link rel="shortcut icon" href="./img/ticket-liberado.png">
        <link rel="stylesheet" href="./_cdn/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./_cdn/css/styleIndex.css">
        <link rel="stylesheet" href="./_cdn/css/animate.css">
    </head>
    <body>
        <div class="container">
            <h3 class="titulo">Sistema de catraca</h3>
            <div class="col-md-12">
                <!--Cadastro de Registro-->
                <div class="well well-sm col-md-4">
                    <form action="" method="POST" class="j-form-create-registro">
                        <input type="hidden" name="callback" value="create-registro">
                        <div class=" col-md-12 input-group-sm">
                            <label>Selecione o Aluno</label>
                            <select name="idaluno_clientes" class="form-control">
                                <option selected disabled>SELECIONE</option>
                                <?php
                                $readAlunos = new Read;
                                $readAlunos->ExeRead('alunos_cliente');
                                foreach ($readAlunos->getResult() as $e):
                                    extract($e);
                                    echo "<option value='{$idalunos_cliente}'>{$idalunos_cliente} - {$nome_aluno}</option>";
                                endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6 input-group-sm">
                            <label>Data</label>
                            <input type="date" name="data_registro" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6 input-group-sm">
                            <label>Hora</label>
                            <input type="time" name="hr_entrada_catraca" class="form-control" required>
                        </div>
                        <div class="col-md-12 input-group-sm">
                            <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-log-in"></i> Entrar</button>
                        </div>
                    </form>
                </div>
                <!--Imagem da Catraca-->
                <div class="col-md-4">
                    <div class="catraca">
                        <img class="img-catraca" src="./_cdn/img/logocatraca.jpg">
                    </div>
                    <div class="load">
                        <img src="./_cdn/img/load.gif">
                    </div>

                </div>
                <!--Mensagens de Alerta-->
                <div class="col-md-4 mensagens">
                    <div class="alert alert-danger">
                        <img class="img-bloqueio" src="./img/ticket-bloqueado.png">
                        <a href="#" class="close" data-dismiss="alert" arua-label="close">x</a>
                        <p><b>Aluno com parcelas vencidas, favor efetue o pagamento no caixa para liberar o acesso!</b></p>
                    </div>

                    <div class="alert alert-warning">
                        <img class="img-alerta" src="./img/ticket-alerta.png">
                        <a href="#" class="close" data-dismiss="alert" arua-label="close">x</a>
                        <p><b>Aluno com parcelas pendentes, favor efetue o pagamento para evitar o bloqueio!</b></p>
                    </div>
                    <div class='alert alert-success'>
                        <img class="img-liberado" src="./img/ticket-liberado.png">
                        <a href="#" class="close" data-dismiss="alert" arua-label="close">x</a>
                        <p><b>Aluno com parcelas em dia, bom treino!</b></p>
                    </div>
                </div>
            </div>

            <div style="margin-top: 50px;" class="col-md-12">
                <h3>Histórico</h3>
                <form action="" method="POST" class="">
                    <div class="form-group-sm col-md-3">
                        <input name="" type="text" class="form-control" placeholder="Pesquise pelo Aluno">
                    </div>
                    <div class="form-group-sm col-md-3">
                        <input type="date" name="" class="form-control">
                    </div>
                    <button style="height: 30px;" type="submit" class="btn btn-primary btn-sm">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>  
                </form>
                <div class="tabela-resultado">
                    <table class="table table-striped">
                        <thead class="tabela-titulo">
                            <tr>
                                <th>Aluno</th>
                                <th>Hr. de entrada</th>
                                <th>Hr. de saida</th>
                                <th>Data</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $readRegistros = new Read;
                            $readRegistros->FullRead("SELECT alunos_cliente.nome_aluno, registros_catraca.idregistros_catraca, registros_catraca.hr_entrada_catraca, registros_catraca.hr_saida_catraca, registros_catraca.data_registro " .
                                    "FROM registros_catraca " .
                                    "INNER JOIN alunos_cliente ON registros_catraca.idaluno_clientes = alunos_cliente.idalunos_cliente");
                            foreach ($readRegistros->getResult() as $e):
                                extract($e);
                                echo "<tr id='{$idregistros_catraca}'>" .
                                "<td>{$nome_aluno}</td>" .
                                "<td>{$hr_entrada_catraca}</td>" .
                                "<td>{$hr_saida_catraca}</td>" .
                                "<td>{$data_registro}</td>" .
                                "<td><button type='submit' class='btn btn-xs btn-danger' idregistros_catraca={$idregistros_catraca}><i class='glyphicon glyphicon-log-out'></i> Sair</button></td>" .
                                "</tr>";
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </body>
    <script src="./_cdn/jquery.min.js"></script>
    <script src="./_cdn/bootstrap/js/bootstrap.min.js"></script>
    <script src="./Controllers/controller.catraca.js"></script>
</html>
