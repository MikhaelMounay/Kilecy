<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
    <link rel="shortcut icon" href="pics\Logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="style_about.css">
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="style_article.css">
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="about fade-in">

    <nav role='navigation' id="nav">
        <a data-page="home" class="active" href="index.php">Home</a>
        <a data-page="solution" class="" href="solution.php">Solution</a>
        <a data-page="survey" class="" href="survey.php">Survey</a>
        <a data-page="about" class="" href="about.php">About</a>
    </nav>

    <div id="title_div_about">
        <img src="pics\Logo.png" alt="Kilecy" style="background: rgba(255, 255, 255, 0.5); float: none; border-radius: 15px; margin: 20px;">
    </div>
 
    <script>
        window.scrollBy(0, 1);
        window.scrollBy(0, -1);
    </script>
    <div class="container">
  <h2>Card Image</h2>
  <p>Image at the top (card-img-top):</p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
  <br>
  
  <p>Image at the bottom (card-img-bottom):</p>
  <div class="card" style="width:400px">
    <div class="card-body">
      <h4 class="card-title">Jane Doe</h4>
      <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
    <img class="card-img-bottom" src="img_avatar6.png" alt="Card image" style="width:100%">
  </div>
</div>

</body>

</html>