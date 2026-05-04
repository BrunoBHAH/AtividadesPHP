<?php

$porta = 1;

while ($porta <= 20) {

    // Regra 2: interromper ao chegar na porta 18
    if ($porta == 18) {
        echo "Varredura interrompida por segurança na porta 18.";
        break;
    }

    // Regra 1: ignorar múltiplos de 5
    if ($porta % 5 == 0) {
        $porta++;
        continue;
    }

    // Impressão padrão
    echo "A verificar porta $porta <br>";

    $porta++;
}

?>