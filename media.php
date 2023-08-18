<?Php
    $nota1 = 4;
    $nota2 = 8;
    $nota3 = 2;
    $nota4 = 6;

    $media = ($nota1+$nota2+$nota3+$nota4)/4;
    echo "sua média é $media e você está de ";

    if ($media>=7) {
        echo "Aprovado";
    }elseif ($media>=5) {
        echo "Exame";
    }else {
        echo "reprova";
    }


?>
