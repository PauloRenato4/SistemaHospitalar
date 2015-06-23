<?php
// Consultar dados
$dados = array();

$pdo = new PDO('mysql:host=localhost;dbname=u350455626_siste', 'u350455626_siste', 'univas35');
$sql = 'SELECT estado, COUNT(*) as quantidade FROM paciente GROUP BY estado';
$stmt = $pdo->query($sql);

while ($obj = $stmt->fetchObject()) {
    switch ($obj->estado) {
    case 'AC':
        $dados['AC'] = $obj->quantidade;
        break;
    case 'AL':
        $dados['AL'] = $obj->quantidade;
        break;
        case 'AM':
        $dados['AM'] = $obj->quantidade;
        break; 
        case 'AP':
        $dados['AM'] = $obj->quantidade;
        break;
        case 'BA':
        $dados['BA'] = $obj->quantidade;
        break;
        case 'CE':
        $dados['CE'] = $obj->quantidade;
        break;
        case 'DF':
        $dados['DI'] = $obj->quantidade;
        break;
        case 'ES':
        $dados['ESP'] = $obj->quantidade;
        break;
        case 'GO':
        $dados['GO'] = $obj->quantidade;
        break;
        case 'MA':
        $dados['MA'] = $obj->quantidade;
        break;
        case 'MT':
        $dados['MT'] = $obj->quantidade;
        break;
        case 'MS':
        $dados['MS'] = $obj->quantidade;
        break;
        case 'MG':
        $dados['MG'] = $obj->quantidade;
        break;
        case 'PA':
        $dados['PA'] = $obj->quantidade;
        break;
        case 'PB':
        $dados['PB'] = $obj->quantidade;
        break;
        case 'PI':
        $dados['PI'] = $obj->quantidade;
        break;
        case 'RJ':
        $dados['RJ'] = $obj->quantidade;
        break;
        case 'RN':
        $dados['RN'] = $obj->quantidade;
        break;
        case 'RO':
        $dados['RO'] = $obj->quantidade;
        break;
        case 'SC':
        $dados['SC'] = $obj->quantidade;
        break;
        case 'SE':
        $dados['SE'] = $obj->quantidade;
        break;
        case 'SP':
        $dados['SP'] = $obj->quantidade;
        break;
        case 'TO':
        $dados['TO'] = $obj->quantidade;
        break;
        
    
           }
}

echo gerar_grafico_torta($dados, 'Quantidade de Homens/Mulheres');
exit(0);

/**
 * Imprime um grafico de torta
 * @param array[string => int] $dados: Dados do Grafico
 * @param string $titulo: Titulo do grafico
 * @param int $largura: Largura do grafico
 * @param int $altura: Altura do grafico
 * @return string Tag IMG com o caminho para o grafico
 */
function gerar_grafico_torta($dados, $titulo, $largura = 400, $altura = 200) {

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