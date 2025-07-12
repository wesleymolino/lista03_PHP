<?php
$estrela = $_POST['estrela'];

if ($estrela == 5) {
    echo "Excelente";
} elseif ($estrela == 4) {
    echo "Muito bom";
} elseif ($estrela == 3) {
    echo "Bom";
} elseif ($estrela == 2) {
    echo "Regular";
} elseif ($estrela == 1) {
    echo "Ruim";
} else {
    echo "Avaliação inválida.";
}
?>
