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

    $familymember1 = array();
    $familymember2 = array();
    $familymember3 = array();
    $familymember4 = array();
    $familymember5 = array();

    $familys = array($familymember1, $familymember2, $familymember3, $familymember4, $familymember5);
   // $familys = array(array(array(array(array()))));

   for ($index=0;$index<=5;$index++){
       array_push($familys[$index], $names[$index], $haircolours[$index], $ages[$index], $heights[$index]);
      // var_dump($familys);

      for ($index=0;$index<=5;$index++){
        $class = implode(" ", $familys[$index]);
        //echo "\n\n" .$class; 
      }
      //$class = implode($familymember[$index]);
      echo "\n\n" .$class;
   }
    //array_unshift($familys, $names[0], $haircolours[0], $ages[0], $heights[0]);
    // var_dump($familys);
    ?>
</body>
</html>