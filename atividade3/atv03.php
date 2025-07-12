<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $media = ($nota1 + $nota2 + $nota3) / 3;

    if ($media >= 7) {
        echo "Média: $media. O aluno está aprovado!";
    } elseif ($media >= 5 && $media < 7) {
        echo "Média: $media. O aluno está em recuperação.";
    } else {
        echo "Média: $media. O aluno está reprovado.";
    }
}
?>
