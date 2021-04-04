<?php
  session_start();
  $count = 0;



  $title = "Index";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
?>
      <p style="color: #ffffff" class="lead text-center text-muted">Latest books</p>
      <div class="row">
        <?php foreach($row as $book) { ?>
      	<div class="col-md-3">
      		<a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
           <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
          </a>
      	</div>
        <?php } ?>
      </div>
      <style>
body {
  background-image: url('./img/123.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>
