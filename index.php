<?php

require_once __DIR__ . '/vendor/autoload.php';

use core\controller\class\Loterias;
use core\controller\class\Controller;
use core\routes\Rotas;
use core\model\Model;


$endereco = new Controller();
$rota = new Rotas($endereco);

$_POST['endSolicitado'] = $rota->scEndereco;

$model = new Model($rota);

$modalidade = new Loterias('megasena');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php include_once (__DIR__ . '/base/pages/head.html'); ?>
<?php include_once (__DIR__ . '/base/pages/body.php'); ?>
<?php include_once (__DIR__ . '/base/pages/footer.html'); ?>

</html>
