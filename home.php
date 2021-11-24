<!DOCTYPE html>
<html lang="en">
<head>
    <title>Integrate datatable - Coding Birds Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"></script>
    <link   rel="icon" href="https://codingbirdsonline.com/wp-content/uploads/2019/12/cropped-coding-birds-favicon-2-1-192x192.png" type="image/x-icon">
    <style> #thead>tr>th{ color: white; } </style>
</head>
<body>
<div class="container">
    <table id="exampleTable" class="table table-striped table-bordered" style="width: 70%">
        <thead id="thead">
        <tr style="background-color: #1573ff">
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php
        include 'db.php';
        $count = 1;
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>
                        <td>".$count++."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["phone"]."</td>
                        <td>".$row["income"]."</td>
                        <td>
                        <a href='edit.php?id={$row['id']}'><button class='btn btn-secondary' >edit</button></a>
                        <a href='http://www.google.de'><button class='btn btn-danger' >delete</button></a>
                        <a href='http://www.google.de'><button class='btn btn-info'>show</button></a>
                        </td>
                        
                    </tr>";


        }
        ?>

        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#exampleTable').DataTable();
    } );
</script>

</body>
</html>
