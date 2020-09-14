<table style="border:1px solid #ccc; width:100%">
<tr>
    <th>Tipo de cachorro quente</th>
    <th>preço </th>
</tr>

<?php 
    while ($linha = mysqli_fetch_array($consulta_cachorroquente)){
        echo '<tr><td>'.$linha['tipo_do_hotdog'].'</td>';
        echo '<td>'.$linha['valor'].'</td></tr>';
    }
    ?>

</table>
 
