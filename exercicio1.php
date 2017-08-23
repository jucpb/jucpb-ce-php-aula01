<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>
			Exercício 1
		</title>
	</head>
  <body>
  <?php
    $a = 10;
    $b = 20;
  ?>
    <h1>
      PHP - Atividade 01
    </h1>
    <p>
      Considerando que A seja igual a 10 e B seja igual a 20, eis os seguintes cálculos:
    </p>
    <table border style="1">
      <tr>
        <td width="250px" font align="center">  
          Operação
        </td>
        <td width= "500px" font align ="center">
          Resultado
        </td>
      </tr>
      <tr>
        <td width="250px" font align="center">
          A+B
        </td>
        <td width= "500px" font align="center">
           <?php
            echo ($a + $b);
           ?>
        </td>
      </tr>
      <tr>
         <td width="250px" font align="center">
             A - B
        </td>
        <td width= "500px" font align="center">
          <?php
            echo ($a - $b);
          ?>
        </td>
      </tr>
      <tr>
        <td width="250px" font align="center">
             A x B
        </td>
        <td width= "500px" font align="center">
          <?php
            echo ($a * $b);
          ?>
        </td>
      </tr>
      <tr>
      <tr>
        <td width="250px" font align="center">
             A / B
        </td>
        <td width= "500px" font align="center">
          <?php
            echo ($a / $b);
          ?>
        </td>
      </tr>
      <tr>
        <td width="250px" font align="center">
             B<sup>
              A
             </sup>
        </td>
        <td width= "500px" font align="center">
          <?php
            echo number_format(pow($b, $a),0,'','.');
          ?>
        </td>
      </tr>
     </table>
  </body>
</html>
  