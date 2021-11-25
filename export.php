<?php
include 'db.php';
$conn = mysqli_connect($server, $user, $password, $dbname);

if (!$conn) {
    die('Error: ' . mysqli_connect_error());
}

$query = 'SELECT * FROM profile';

$result = mysqli_query($conn,$query);
$output="";
$output.="<table style='1px'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>E-Mail</th>
            <th>Phone</th>
            <th>Postleitzahl</th>
        </tr>";
$count = 1;
        while($row = mysqli_fetch_assoc($result))
        {
            $output.= "<tr>
                        <td>".$count++."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["phone"]."</td>
                        <td>".$row["income"]."</td>
                    </tr>";
        }
        $output.="</table>";

        header('Content-Type: aaplication/xls');
        header('Content-Disposition: attachment; filename=export.xls');

        echo $output;