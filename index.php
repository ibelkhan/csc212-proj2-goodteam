
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>UR Seminars</title>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <!-- Bootstrap core CSS -->
    <!-- <link href="bootstrap.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="add.php">Add Seminar</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <h3 class="text-muted">Upcoming Seminars</h3>
      </div>

      <div class="jumbotron">
        <h1>UR Seminars</h1>
        <p class="lead">Your one-stop location for all upcoming seminars at UR.</p>
        <p><a class="btn btn-lg btn-success" href="add.php">Add a seminar</a></p>
      </div>

      <div class="row marketing">
        <div class="bs-example">
              <table class="table table-hover table-striped">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Speaker</th>
                    <th>Department</th>
                    <th>Description</th>
                    <th>Food</th>
                    <th>Location</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $db = mysqli_connect("localhost","root","password","project2");
                  $sql = "DELETE * FROM seminars WHERE date < now()";
                  $result = $db->query($sql);

                  $sql = "SELECT * FROM seminars ORDER BY date";
                  $result = $db->query($sql);
                  // $rows = $result->fetch_all();
                  // print_r($rows);
                  while($row = $result->fetch_assoc()){

                    echo "<tr>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "<td>" . $row['time'] . "</td>";
                    echo "<td>" . $row['speaker'] . "</td>";
                    echo "<td>" . $row['department'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td>" . $row['food'] . "</td>";
                    echo "<td>" . $row['location'] . "</td>";
                    echo "</tr>";
                  }

                ?>
                </tbody>
              </table>
            </div><!-- /example -->
      </div>

      <div class="footer">
        <p>&copy; Company 2013</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  </body>
</html>