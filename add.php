
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
    <script src="bootstrap-datetimepicker.min.js"></script>

    <link href="bootstrap-datetimepicker.min.css" rel="stylesheet">



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
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="add.php">Add Seminar</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <h3 class="text-muted">Add a seminar</h3>
      </div>

      <form role="form" action="addSeminar.php">
        <div class="form-group">
          <label for="speaker1">Speaker</label>
          <input type="text" class="form-control" id="speaker1" placeholder="Speaker name" name = "speaker">
        </div>
        <div class="form-group">
          <label for="department1">Department</label>
          <input type="text" class="form-control" id="department1" placeholder="Department" name = "department">
        </div>
        <div class="form-group">
          <label for="description1">Description</label>
          <textarea class="form-control" rows="2" name = "description"></textarea>
        </div>
        <!-- <div class="form-group"> -->
          <label for="exampleInputFile">Date and Time (24 hour format)</label>
            <!-- <div class='well'> -->
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" name = "date"/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            <!-- </div> -->
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker1').datetimepicker();
                });
            </script>
        <div class="form-group">
          <label for="food1">Food</label>
          <input type="text" class="form-control" id="food1" placeholder="Will there be food?" name = "food">
        </div>
        <div class="form-group">
          <label for="location1">Location</label>
          <input type="text" class="form-control" id="location1" placeholder="Location" name = "location">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>

      <div class="footer">
        <p>&copy; Company 2013</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

  </body>
</html>
