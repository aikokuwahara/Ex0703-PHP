<?php	
	
    $n1 = $_POST['$n1'];
    $n2 = $_POST['$n2']; 
    $n3 = $_POST['$n3'];
    $n4 = $_POST['$n4'];
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    
    if ($media > 5) {
        echo "Aprovado. Sua média é: " .$media;
    }
    
    else {
        echo "Reprovado. Sua média é: " .$media;
    }
	 
    
	
			
?>