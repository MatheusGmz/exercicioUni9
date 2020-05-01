
Olá, <?php echo $_POST["nome"];?>! </br>

<?php 

  $nota1 = $_POST["nota1"];
  $nota2 = $_POST["nota2"]; 
  $nota3 = $_POST["nota3"];

  $media = ($nota1+$nota2+$nota3) /3;

  echo "Sua média é: ". $media."</br>";
  if ($media >= 6)
  {
  	echo "Você foi aprovado!";
  }
  else
  {
  	echo "Você não foi aprovado.";
  }

?>