<div class="container">
    <div class="alert alert-info">
        Display with JQUERY Datatables USER CRUD
    </div>
    <button type="button" class="btn btn-primary mb-3">ADD NEW USER</button>

    <a href="export.php"><button class="btn btn-success float-right">Export Data to Exel</button></a>
    <table id="myTable" class="table table-striped  table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>E-Mail</th>
            <th>Phone</th>
            <th>Postleitzahl</th>
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
                        <a href='git/edit.php?id={$row['id']}'><button class='btn btn-secondary' >edit</button></a>
                        <a href='#'><button class='btn btn-danger' >delete</button></a>
                        <a href='#'><button class='btn btn-info'>show</button></a>
                        </td>

                    </tr>";


        }
        ?>
        </tbody>
    </table>
</div>
