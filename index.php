<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
      <?php
        require_once "config.php";

        $sql="SELECT mac FROM rpi_data";

        if ($result=mysqli_query($db,$sql))
         {
         // Return the number of rows in result set
          $rowcount=mysqli_num_rows($result);
          printf("Result set has %d rows.\n",$rowcount);
         // Free result set
         mysqli_free_result($result);
          }

        ?>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>