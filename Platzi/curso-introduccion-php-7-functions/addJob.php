<?php
// var_dump($_GET);
// var_dump($_POST);

use App\Models\{Job, Proyect};


if (!empty($_POST)) {

  $job = new Job();
  $proyect = new Proyect();

  $proyect->title = $_POST['titleProyect'];
  $proyect->description = $_POST['descriptionProyect'];

  $job->title = $_POST['title'];
  $job->description = $_POST['description'];

  $job->save();
  $proyect->save();
}
var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <title>Add Job</title>

</head>

<body>
  <h1>Add job</h1>
  <form action="addJob.php" method="post">

    <label for="">Title:</label>
    <input type="text" placeholder="Title" name="title">
    <br>

    <label for="">Description:</label>
    <input type="text" placeholder="Description" name="description">
    <br />
    <br />

    <h2>Add Proyect</h2>
    <label for="">Title:</label>
    <input type="text" placeholder="Title" name="titleProyect">
    <br>
    <label for="">Description:</label>
    <input type="text" placeholder="Description" name="descriptionProyect">

    <button type="submit">Save</button>

  </form>
  <hr />





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>


</html>