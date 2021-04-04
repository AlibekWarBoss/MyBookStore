<?php
  session_start();
  $count = 0;



  $title = "About";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
?>
<!DOCTYPE html>
<html>

<head>
<title>About</title>
</head>

<body>
  <div class="about-section">
    <h1>About</h1>
    <p>Online book store. Books are once again gaining popularity among people from all over the world. The desire to learn something new and develop more and more noticeably is observed in people of different ages, social affiliation, and occupation. Against the backdrop of such a rapidly developing trend, the creation of your online bookstore company is a pretty attractive idea for organizing your own business or developing an existing one.

Starting an online bookstore requires in-depth knowledge regarding the most effective site organization, methods for promoting it in the digital world, and many other important “chips.” All of this in combination is vital for creating a high-quality internet product that will bring profit to your organization.

</p>

  </div>

</body>
</html>
      <style>
body {
  background-image: url('./img/222.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<?php
