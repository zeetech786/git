
<?php include 'db.php' ?>
<?php include 'header.php' ?>
<?php

$id=$_REQUEST['id'];
$query = "SELECT * from profile where id='".$id."'";
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);


?>

<div class="container">
    <a href="/../index.php"><button class='btn btn-secondary mt-3 mb-3'>Zurück zur Übersicht</button></a>
<form>
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" value="<?php echo $row['name']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" value="<?php echo $row['email']; ?>">
    </div>

    <button type="submit" class="btn btn-success">Update</button>
</form>

</div>