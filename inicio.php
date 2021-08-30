<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo 'iniciamos repositorio <br>';
    function suma(numeros){
        $sum=0;
        for ($i=0; $i <count($numeros) ; $i++) { 
            $sum+=$numeros[$i];
        }
        return
    };
    $nums=array();
    $nums1=[1,2,3,4,5,6,7,8,9];

    for ($i=0; $i<20; $i++){
        $nums[$i]=rand(0,100);
    };

    for ($i=0; $i <20 ; $i++) { 
        echo $nums[$i].',';
      //  $suma+=$nums[$i];
    };
echo 'la suma es = '.suma($nums).'<br>';
echo 'la suma es = '.suma($nums1).'<br>';

    ?>
</body>
</html>