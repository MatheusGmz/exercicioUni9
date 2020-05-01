
<!DOCTYPE html>
<html>
<body>
     <form action="action.php" method = "POST">
          <p>Qual operação deseja realizar?</p>
                 <select name = "operacao">
                 	<option> Subtração </option>
                 	<option> Divisão </option>
                 	<option> Adição </option>
                 	<option> Multiplicação </option>
                 </select>
           <p>Digite o primeiro valor: <input type="text" name = "valor1">
           <p>Digite o segundo valor: <input type="text" name = "valor2">

          <p><input type="submit" value="É essa!"/><p/>
     </form>
</body>
</html>