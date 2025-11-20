<?php 
$nota = 7.5;
if($nota >= 9) {
    echo "aprovado com excelencia";
}elseif ($nota >= 7) {
    echo "aprovado";
}elseif ($nota >= 5) {
    echo "recuperacao";
}else{
    echo "reprovado";
}

?>