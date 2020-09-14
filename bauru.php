<table style="border:1px solid #ccc; width:100%">
<tr>
    <th>Tipo de bauru</th>
    <th> Preço </th> 
</tr>

<?php 
    while ($linha = mysqli_fetch_array($consulta_bauru)){
        echo '<tr><td>'.$linha['nomebauru'].'</td>';
        echo '<td>'.$linha['valor'].'</td></tr>';
    }
    ?>

</table>
 
   
