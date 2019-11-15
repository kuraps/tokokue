<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM beli WHERE id=$id");
if ($result) {
    echo "<script>alert('Data berhasil dihapus');window.location='struk.php'</script>";
}
// After delete redirect to Home, so that latest user list will be displayed.
