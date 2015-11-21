<?php
// Consultar dados
$dados = array();

$pdo = new PDO('mysql:host=localhost;dbname=u350455626_siste', 'u350455626_siste', 'univas35');
$sql = 'SELECT sexo, COUNT(*) as quantidade FROM paciente GROUP BY sexo';
    $stmt = $pdo->query($sql);

    while ($obj = $stmt->fetchObject()) {
        switch ($obj->sexo) {
        case 'M':
            $dados['Homens'] = $obj->quantidade;
            break;
        case 'F':
            $dados['Mulheres'] = $obj->quantidade;
            break;
        }
    }

    echo gerar_grafico_torta($dados, 'Quantidade de Homens/Mulheres');
    exit(0);

    function gerar_grafico_torta($dados, $titulo, $largura = 300, $altura = 100) {

        // Gerando a URL dinamicamente
        $labels = array_keys($dados);
        $valores = array_values($dados);

        // Converter valores para porcentagens
        $soma = array_sum($valores);
        $percentual = array();
        foreach ($valores as $valor) {
            $percentual[] = round($valor * 100 / $soma);
        }

        $grafico = array(
            'cht'  => 'p3',
            'chs'  => $largura.'x'.$altura,
            'chd'  => 't:'.implode(',', $percentual),
            'chl'  => implode('|', $labels)
        );
        $url = 'https://chart.googleapis.com/chart?'.http_build_query($grafico, '', '&');

        // Imprimindo o gráfico
        return sprintf('<img src="%s" width="%d" height="%d" alt="%s" />',
            $url, $largura, $altura, htmlentities($titulo, ENT_COMPAT, 'UTF-8')
        );
    }