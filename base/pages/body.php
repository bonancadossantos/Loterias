<?php
var_dump($_GET);
var_dump($_POST);
$validaEndereco = is_dir(__DIR__ . '/../../core/layout/' . $_POST['endSolicitado']);
if ($validaEndereco) {
    include_once(__DIR__ . '/../../core/layout/' . $_POST['endSolicitado'] . '/index.html');
    echo '<h2>O diretório foi encontrado</h2>';
}else{
    include_once(__DIR__ .'/../../core/layout/erros/endInexistente/index.html');
    echo '<h2>O diretório não foi encontrado</h2>';
}
?>
<link rel="stylesheet" type="text/css" href="/Loterias/base/styles/css/body.css">
<!--<body>
    <header>
        <div class="lotofacil">
            <h1>Lotofácil</h1>
        </div>
    </header>
    <header>
        <div class="quina">
            <h1>Quina</h1>
        </div>
    </header>
</body>-->