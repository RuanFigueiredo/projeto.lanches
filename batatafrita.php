<table style="border:1px solid #ccc; width:100%">
<tr>
    <th>Tipo de batata</th>
    <th>preço </th>
</tr>

<?php 
    while ($linha = mysqli_fetch_array($consulta_batatafrita)){
        echo '<tr><td>'.$linha['tipo_da_batata'].'</td>';
        echo '<td>'.$linha['valor'].'</td></tr>';
    }
    ?>

</table>


