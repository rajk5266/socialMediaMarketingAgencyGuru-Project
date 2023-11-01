<!DOCTYPE html>
<html lang="en">
<!-- HEADER  -->
<?php include "header.php"; ?>
<!-- HEADER  -->
<body>

<!-- NAVBAR  -->
<?php include "navbar.php"; ?>
<!-- NAVBAR  -->


<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    

    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>' . htmlspecialchars($name) . '</strong> Sit back and relax till we reach you.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}

echo '<script>
setTimeout(function(){
    window.location.href = "index.php";
}, 3000); // 2-second delay
</script>';

?>

<!-- FOOTER  -->
<?php include "footer.php"; ?>
<!-- FOOTER  -->
    
</body>
</html>
