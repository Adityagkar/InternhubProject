<!DOCTYPE html>
<html lang="en">

  <head>
    <?php
   require_once("db.php");
   $select_query="SELECT * FROM `jobs` WHERE 1";
   $result=mysqli_query($conn,$select_query) or die(mysqli_error($con));
   $row=mysqli_fetch_array($result);
    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Internhub-Your Internship Companion</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#flip").click(function(){
            $("#panel").slideDown("slow");
        });
    });
    </script>

    <style>
    #panel, #flip {
        padding: 5px;
        text-align: center;
        background-color: #e5eecc;
        border: solid 1px #c3c3c3;
    }

    #panel {
        padding: 50px;
        display: none;
    }
    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">HOME</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Register

              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add.html">Add Internship</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="browse.html">Browse Internship<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="ww">
        <div class="container">
        <div class="row">
          <div class="col-lg-12 col-lg-offset-2 centered">
            <img src="logo3.png" width="100%" alt="logo" align="center">

                    </div><!-- /col-lg-8 -->
                    <div class="col-lg-4 col-lg-offset-2 centered"><br>
                      </div>
        </div><!-- /row -->

        </div> <!-- /container -->
    </div><!-- /ww -->
<div class="container">
  <br>

</div>

<!-- Browse section-->
<div id="search_area" class="container">
      		<form class="horizaontal" method="post" action="#">
      			<input id="keywords" type="text" placeholder="Enter Keywords.."  style="width:50% ;height:20%">

      <!-- Select -->
      <select name="state_list" style="width:20%;height:5%">
      <option value="">Select State</option>
      <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
      <option value="Andhra Pradesh">Andhra Pradesh</option>
      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
      <option value="Assam">Assam</option>
      <option value="Bihar">Bihar</option>
      <option value="Chandigarh">Chandigarh</option>
      <option value="Chhattisgarh">Chhattisgarh</option>
      <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
      <option value="Daman and Diu">Daman and Diu</option>
      <option value="Delhi">Delhi</option>
      <option value="Goa">Goa</option>
      <option value="Gujarat">Gujarat</option>
      <option value="Haryana">Haryana</option>
      <option value="Himachal Pradesh">Himachal Pradesh</option>
      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
      <option value="Jharkhand">Jharkhand</option>
      <option value="Karnataka">Karnataka</option>
      <option value="Kerala">Kerala</option>
      <option value="Lakshadweep">Lakshadweep</option>
      <option value="Madhya Pradesh">Madhya Pradesh</option>
      <option value="Maharashtra">Maharashtra</option>
      <option value="Manipur">Manipur</option>
      <option value="Meghalaya">Meghalaya</option>
      <option value="Mizoram">Mizoram</option>
      <option value="Nagaland">Nagaland</option>
      <option value="Orissa">Orissa</option>
      <option value="Pondicherry">Pondicherry</option>
      <option value="Punjab">Punjab</option>
      <option value="Rajasthan">Rajasthan</option>
      <option value="Sikkim">Sikkim</option>
      <option value="Tamil Nadu">Tamil Nadu</option>
      <option value="Tripura">Tripura</option>
      <option value="Uttaranchal">Uttaranchal</option>
      <option value="Uttar Pradesh">Uttar Pradesh</option>
      <option value="West Bengal">West Bengal</option>
      </select>
      <select id="category" style="width:20%;height:5%">
      <option value="">Category</option>
      <option value="0">Computer Science</option>
      <option value="1">Design</option>
      <option value="2">Engineering</option>
      <option value="3">Content Writing</option>
      <option value="4">Management</option>
      <option value="5">Medical</option>
      <option value="6">Data Entry</option>

      </select>
      <button type="submit" style="">SUBMIT</form>
      	</div>


      <div class="container">

      		<ul id="listing">
      	</ul>

        <div class="table-responsive">
        <table class="table table-striped">
            <th><h3>Company</h3></th>
            <th><h3>Position</h3></th>
            <th><h3>Post Date</h3></th>
            <th><h3>Apply</h3></th>

            <?php
            echo "<h2 style='color:green'> Search Results Matching :" . "</h2><br> ";


            while ($row = mysqli_fetch_array($result)) {
                //$query2 = mysqli_query($db1, "select * from employer where eid = '$row[eid]'");
                //$r2 = mysqli_fetch_array($query2)
                echo " <tr> ";
                echo "<td><b>" . $row['org_name'] . "</b></td>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . "</td>";
                echo "</tr>";
            }

            ?>
        </table>
         </div>




<br>
<br>
<footer class="containerk">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Internhub 2017</p>
  </div>
  <!-- /.container -->
</footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
