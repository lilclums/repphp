<?php
    /*function sumaDivisores($num){
        $sum=0;
        if (is_numeric($num)) {
            for ($i=1; $i <=$num ; $i++) { 
                if ($num%$i==0) {
                    $sum+=$i;
                }
            }
            return $sum;
        }else{
            throw new Exception('el dato debe ser numerico <br>');
            //return 0;
            
        }
        
        
    }
    
    try{
        echo sumaDivisores('?');
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
    echo 'ultima linea de codigo';*/
?>

<?php
    function sumaDivisores($num){
        $sum=0;
        if (is_numeric($num)) {
            for ($i=0; $i <=$num ; $i++) { 
                if ($num%$i==0) {
                    $sum+=$i;
                }
            }
            return $sum;
        }else{
            throw new Exception('el dato debe ser numerico <br>');
            //return 0;
            
        }
        
        
    }
    
try{
    echo sumaDivisores(10);
}
catch(Exception $e){
    echo $e->getMessage();
}
catch(DivisionByZeroError $a){
    echo $a->getMessage().', revise la division desde 1';
}
echo '<br> ultima linea de codigo';
?>