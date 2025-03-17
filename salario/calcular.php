<?php	
	
    $sal = $_POST['$sal'];
    $fil = $_POST['$fil']; 
    
    if ($sal <= 800) {

        if ($fil > 1) {

            $nsal = $sal + ($sal*0.30) + ($fil*90);
    
        echo "O novo salário é: " .$nsal;

        }
        
        else {

            $sal = $sal*1.30;
            echo "O novo salário é: " .$sal;

        }
    }
    
    else {

        $sal = $sal + ($fil*90);
        echo "O novo salário é: " .$sal;
        
    }

	 
    
	
			
?>