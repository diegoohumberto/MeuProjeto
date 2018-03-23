
<html>
    <head>
        <meta charset="UTF-8">
        <title>Catraca</title>
        <link rel="stylesheet" href="./_cdn/bootstrap/css/bootstrap.min.css"
    </head>
    <body>
        <div class="container">
            <h3>Sistema de catraca</h3>
            <div class="col-md-12">
                <div class="col-md-4">
                    <form class="form-group">
                        <div class="col-md-12">
                            <label>Selecione o Aluno</label>
                            <select class="form-control">
                                <option>SELECIONE</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Data</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Hora</label>
                            <input type="time" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div style=" width: 300px; height: 300px;">
                        <img style="width: 250px; height: 300px; margin-left: 25px;" src="./img/logo catraca.jpg">
                    </div>
                    <img style="width: 50px; height: 50px; margin-top: 50px; margin-left: 130px;" src="./img/load.gif">
                </div>
                <div class="col-md-4">
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
        </div>

    </body>
    <script src="./_cdn/bootstrap/js/bootstrap.min.js"></script>
</html>
