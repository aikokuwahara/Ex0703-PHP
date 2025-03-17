<?php	
	
    $al = $_POST['$al'];
    $ps = $_POST['$ps']; 
    $imc = $ps / ($al*$al);
    
    if ($imc <= 18.5) 
    {
    echo "Você está abaixo do peso!";
    }
    else if ($imc > 18.5 && 24.9) 
    {
    echo "Você está com o peso ideal!";
    }
    else if ($imc > 25 && 29.9) 
    {
    echo "Você está sobrepeso!";
    }
    else if ($imc > 30 && 34.9) 
    {
    echo "Você está com obesidade grau I!";
    }
    else if ($imc > 35 && 39.9) 
    {
    echo "Você está com obesidade grau II!";
    }
    else if ($imc > 40) 
    {
    echo "Você está com obesidade grau III!";
    }
?>