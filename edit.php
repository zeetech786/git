<?php include 'db.php' ?>
<?php include 'header.php' ?>
<?php

$id=$_REQUEST['id'];
$query = "SELECT * from profile where id='".$id."'";
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
if(!empty($_POST['sbtn'])){

    $id = $_REQUEST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $querys= "UPDATE profile SET name='$name',email='$email' WHERE id='$id'";
    $result = mysqli_query($conn, $querys) or die ( mysqli_error());

    if($result)
        header('Location: index.php');
}

?>

<div class="container">
    <a href="index.php"><button class='btn btn-secondary mt-3 mb-3'>Zurück zur Übersicht</button></a>
    <h3 class="display-4 text-primary">Edit User</h3>
    <form action="" method="post">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?= $row['name'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
        </div>


        <input type="submit" class="btn btn-success" value="Update" name="sbtn">
    </form>

</div>