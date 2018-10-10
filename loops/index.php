 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Hello World </h1>

    <?php

    $names = array('Thandi', 'Caili', 'Lineo', 'Olwethu', 'Anathi');
    $haircolours = array('black', 'brown', 'blue','ginger', 'purple');
    $ages = array('31', '32', '12', '9', '8');
    $heights = array('170', '150', '145','120', '115');

    $familys = array();
   
   for ($index=0;$index<5;$index++){
       array_push($familys, $names[$index], $haircolours[$index], $ages[$index], $heights[$index]);
   }
   for ($index=0;$index<5;$index++){
    $class = implode(" ", $familys);
   }
   echo $class;
  
    ?>
<br> 

  

</body>
</html>