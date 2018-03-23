<?php require './_app/Config.inc.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Catraca</title>
        <link rel="stylesheet" href="./_cdn/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./_cdn/css/styleIndex.css">
    </head>
    <body>
        <div class="container">
            <h3>Sistema de catraca</h3>
            <div class="col-md-12">
                <div class="col-md-4">
                    <form>
                        <div class=" col-md-12 input-group-sm">
                            <label>Selecione o Aluno</label>
                            <select class="form-control">
                                <option>SELECIONE</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 input-group-sm">
                            <label>Data</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="form-group col-md-6 input-group-sm">
                            <label>Hora</label>
                            <input type="time" class="form-control">
                        </div>
                        <div class="col-md-12 input-group-sm">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div style=" width: 300px; height: 200px;">
                        <img style="width: 250px; height: 300px; margin-left: 25px;" src="./_cdn/img/logocatraca.jpg">
                    </div>
                    <div class="load">
                        <img style="width: 50px; height: 50px; margin-top: 50px; margin-left: 130px;" src="./_cdn/img/load.gif">
                    </div>

                </div>
                <div class="col-md-4 alertas">
                    <div class="alert alert-danger">
                        Aluno com parcelas vencidas, favor efetue o pagamento no caixa para liberar o acesso!
                    </div>
                    <div class="alert alert-warning">
                        Aluno com parcelas pendentes, favor efetue o pagamento para evitar o bloqueio!
                    </div>
                    <div class="alert alert-success">
                        Aluno com parcelas em dia, bom treino!
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h3>Histórico</h3>
                <form>
                    <div class="form-group-sm col-md-3">
                        <input type="date" name="" class="form-control">
                    </div>
                    <button style="height: 30px;" type="submit" class="btn btn-primary btn-sm">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>  
                </form>
                <div class="">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Aluno</th>
                                <th>Hr. de entrada</th>
                                <th>Hr. de saida</th>
                                <th>Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Diego Humberto</td>
                                <td>10:00</td>
                                <td>12:00</td>
                                <td>23/03/2018</td>
                            </tr>
                            <tr>
                                <td>João da Silva</td>
                                <td>11:00</td>
                                <td>15:00</td>
                                <td>23/03/2018</td>
                            </tr>
                            <tr>
                                <td>Matheus Lima</td>
                                <td>11:40</td>
                                <td>12:50</td>
                                <td>23/03/2018</td>
                            </tr>
                            <tr>
                                <td>Renato da Silva</td>
                                <td>12:10</td>
                                <td>18:00</td>
                                <td>23/03/2018</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </body>
    <script src="./_cdn/bootstrap/js/bootstrap.min.js"></script>
</html>
