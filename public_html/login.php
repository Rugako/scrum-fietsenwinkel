<?php
include('includes.php');
$database = new Database();
?>
<table border="2";>
    <tr>
        <td><b>Id  </b></td>
        <td><b>Voornaam  </b></td>
        <td><b>Achternaam  </b></td>
        <td><b>Email  </b></td>
    </tr>
    <?php
    $query= "SELECT * FROM user";
    $result= mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($result)){
        ?> <tr>
        <td><?php echo $row["ID"]?></td>
        <td><?php echo $row["vnaam"]?></td>
        <td><?php echo  $row["anaam"]?></td>
        <td><?php echo $row["email"]?></td>
        </tr><?php }?>
</table>
