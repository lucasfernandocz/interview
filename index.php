<!DOCTYPE html>
<html lang="en">
 
<head>
    <title>Desafio 2 - SENIOR - Conhecimento básico em linguagem:</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
 
<body>
    <div id="wrap">
        <div class="container">
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">Importador de produtos - realiza a importação a partir de um arquivo CSV</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="importador.php" method="post"  enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="filebutton">Selecione o arquivo</label>
                                <div class="col-md-4">
                                    <input type="file" required name="file" id="file" class="input-large">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="singlebutton"></label>
                                <div class="col-md-4">
                                    <button type="submit" id="submit" name="Import" class="btn btn-primary " data-loading-text="Loading...">Importar arquivo</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>