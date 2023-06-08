<?php
$inicio = 10;
$fim = 500;
$soma = 0;

for ($i = $inicio; $i <= $fim; $i++) {
  if ($i % 2 == 0) {
    $soma += $i;
  }
}

echo "Sua soma de nº pares de $inicio a $fim é: " . $soma;
?>