<table style="border:1px solid #ccc; width:100%">
<tr>
    <th>Tipo de pastel</th>
    <th>Preço </th>
</tr>

<?php 
    while ($linha = mysqli_fetch_array($consulta_pastel)){
        echo '<tr><td>'.$linha['sabor_do_pastel'].'</td>';
        echo '<td>'.$linha['valor'].'</td></tr>';
    }
    ?>

</table>
 
   
