
<?php $resposta = $_POST["resposta"];
  echo "Você selecionou: ". $resposta .".</br>";
  if ($resposta == "Google Meets")
  {
  	echo "Acertou!! Desde a epidemia, estamos utilizando o google meets para apresentar as aulas.";
  }
  else
  {
  	echo "Errado! A resposta certa era Google Meets.";
  }

?>