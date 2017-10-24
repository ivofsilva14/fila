<?php
session_start();
require 'vendor/autoload.php';
$controller = new app\controller\Controller();
$pilha = isset($_SESSION['session_pilha'])?$_SESSION['session_pilha']:'';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="robots" content="noindex,nofollow">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <script type="text/javascript" src="src/mvc/view/js/jquery.min.js"></script>
        <script type="text/javascript" src="src/mvc/view/js/fila.js"></script>
        <link href="src/mvc/view/css/style.css" rel="stylesheet" type="text/css" />
        <title>Teste Fila</title>
    </head>
    <body onload="javascript:document.getElementById('txUsuario').focus();">
        <div id="inicial">
            <div>
                <center><img src="src/mvc/view/imagem/logo.png" /></center>
            </div>
            <br/>
            <form method="post">
                <table align="center">
                    <tr>
                        <td><label>Novo Item: </label></td>
                        <td colspan="2" align="left"><input type="text" name="novo_item" id="novo_item" /></td>
                    </tr>
                    <tr>
                        <td><label>Fila: </label></td>
                        <td colspan="2" align="left"><input type="text" name="pilha" id="pilha" readonly="readonly" style="background:#ebebe4;"  value="<?php $controller->exibe_pilha($pilha)?>" /></td>
                    </tr>
                    <tr>
                        <td><input type="button" class="bt_verde" value="Inserir item da Fila" id="inserir" /></td>
                        <td><input type="button" class="bt_vermelho" value="Retirar item da Fila" id="remover" /></td>
                        <td><input type="button" class="bt_azul" value="Exibir Menor" id="menor" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>