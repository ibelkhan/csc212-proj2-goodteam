
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png" type="image/png">

    <title>UR Seminars</title>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script src="bootstrap-sortable.js"></script>
    <link href="bootstrap-sortable.css" rel="stylesheet">

    <script src="bootstrap-rowlink.min.js"></script>
    <link href="bootstrap-rowlink.min.css" rel="stylesheet">

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
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="add.php">Add Seminar</a></li>
          <li><a href="map.php">Map</a></li>
        </ul>
        <h3 class="text-muted">Upcoming Seminars</h3>
      </div>

      <div class="jumbotron">
        <div id="background" class="translucent"></div>
        <h1 class = "jumbo-text">UR Seminars</h1>
        <p class="lead jumo-text">Your one-stop location for all upcoming seminars at UR.</p>
        <p><a class="btn btn-lg btn-success" href="add.php">Add a seminar</a></p>
      </div>

      <div class="row marketing">
        <div class="bs-example">
              <table class="table table-hover table-striped sortable" data-provides="rowlink">
                <thead>
                  <tr>
                    <th data-defaultsort="asc" class="date-col">Date</th>
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
                  $db = mysqli_connect("localhost","root","password","project2"); //connects to db
                  $sql = "DELETE FROM seminars WHERE date < now()"; //deletes seminars from db that have already happened
                  $result = $db->query($sql);

                  $sql = "SELECT * FROM seminars ORDER BY date"; //gets all upcoming seminars
                  $result = $db->query($sql);
                  // $rows = $result->fetch_all();
                  // print_r($rows);
                  while($row = $result->fetch_assoc()){ //prints row for each seminar

                    echo "<tr class='rowlink-modal'> ";
                    echo "<td data-dateformat='YYYY-MM-DD'><a data-toggle='modal' href='#myModal' class='rowlink'>" . $row['date'] . "</a></td>";
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

      <script>
      $(document).ready(function(){
        //enables modal onclick for each entry in table
        $('.rowlink-modal').each(function(){
            console.log('in');
         $(this)
           .attr('data-toggle','modal')
           .attr('data-target','#myModal');
        });
      });
      </script>

      <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Seminar Details</h4>
              </div>
              <div class="modal-body">
                <iframe width="500" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=d&amp;source=s_d&amp;saddr=43.125168,-77.629947&amp;daddr=&amp;hl=en&amp;geocode=&amp;sll=43.125186,-77.629794&amp;sspn=0.001456,0.002835&amp;mra=mift&amp;mrsp=0&amp;sz=19&amp;ie=UTF8&amp;t=m&amp;ll=43.125235,-77.629883&amp;spn=0.00137,0.00228&amp;z=18&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?f=d&amp;source=embed&amp;saddr=43.125168,-77.629947&amp;daddr=&amp;hl=en&amp;geocode=&amp;sll=43.125186,-77.629794&amp;sspn=0.001456,0.002835&amp;mra=mift&amp;mrsp=0&amp;sz=19&amp;ie=UTF8&amp;t=m&amp;ll=43.125235,-77.629883&amp;spn=0.00137,0.00228&amp;z=18" style="color:#0000FF;text-align:left">View Larger Map</a></small>              </div>
                <div id="seminar-info">
                <strong>Estimated room capacity:</strong> 100 persons </br>
                <strong>Average subject popularity (1-10):</strong> 8 </br>
                <strong>Speaker prominance rating (1-10):</strong> 4 </br> 
                <strong>Estimated attendance:</strong> 80 </br>

                </br><a href="http://www.google.com/calendar/event?action=TEMPLATE&text=Seminar&dates=20131021T160000Z/20131021T170000Z&details=Dr.%20John%20Sedivy&location=Hutch%20473&trp=false&sprop=UR%20Seminars&sprop=name:mgordon.me%2FURSeminars" target="_blank"><img src="//www.google.com/calendar/images/ext/gc_button2.gif" border=0></a>

                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

      <div class="footer">
        <p>&copy; UR Seminars</p>
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
