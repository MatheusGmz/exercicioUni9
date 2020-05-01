
<?php $operacao = $_POST["operacao"];
      $valor1 = $_POST["valor1"];
      $valor2 = $_POST["valor2"];
      switch ($operacao)
       {
       	  case "Divisão" : echo $valor1."/".$valor2. " = " .($valor1 / $valor2);
       	         break;
       	  case "Adição" : echo $valor1."+".$valor2. " = " .($valor1 + $valor2);
       	         break;
       	  case "Multiplicação" : echo $valor1."x".$valor2. " = " .($valor1 * $valor2);
       	         break;
       	  case "Subtração" : echo $valor1."-".$valor2. " = " .($valor1 - $valor2);
       	         break;
       }


?>