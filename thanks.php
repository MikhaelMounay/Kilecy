<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Thank You</title>
      <link rel="stylesheet" href="style_thanksPage.css">
      <link rel="shortcut icon" href="pics\folded-hands.ico" type="image/x-icon">
   </head>
   <body>
      <?php
         date_default_timezone_set("Africa/Cairo");
         
         if (isset($_POST["submit_btn"])) {
             $connection = mysqli_connect("127.0.0.1", "root", "");
         
             if (!$connection) {
                 echo "Connection Error !!";
             }
         
             if (!mysqli_select_db($connection, "survey_kilecy")) {
                 echo "Database not selected";
             }
         
             $First_Name = $_POST["first_name"];
             $Last_Name = $_POST["last_name"];
             $Email = $_POST["email"];
             $Tel_number = $_POST["tel_number"];
             $Comments = $_POST["comments"];
         
             $sql = "INSERT INTO survey (time_submitted, first_name, last_name, email, tel_number, comments) VALUES (CURRENT_TIMESTAMP, '$First_Name', '$Last_Name', '$Email', '$Tel_number', '$Comments')";
         
             if (!mysqli_query($connection, $sql)) {
                 echo "Not inserted";
             }
         }
         ?>
      <?php
         echo "<p>Thank you, <span>" . $_POST["first_name"] . "</span> for filling our survey :)</p>";
         ?>
      <br>
      <p id="redirection_p">You will be redirected to the home page in <span id="counter">5</span> seconds</p>
      <script>
         window.onload = function(){
         
         (function(){
         var counter = 5;
         
         setInterval(function() {
         counter--;
         if (counter > -1) {
         counter_span = document.getElementById("counter");
         counter_span.innerHTML = counter;
         } else if (counter == -1) {
         window.location.replace("index.php")
         }
         
         }, 1000);
         
         })();
         
         }
      </script>
   </body>
</html>