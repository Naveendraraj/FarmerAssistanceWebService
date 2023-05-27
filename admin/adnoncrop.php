<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
  
 $(function() {
    $('#cropname').keydown(function(e) {
      if (e.shiftKey || e.ctrlKey || e.altKey) {
        e.preventDefault();
      } else {
        var key = e.keyCode;
        if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
          e.preventDefault();
        }
      }
    });
  });
 
</script>
  <title>Advisable & Non Advasible crops</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/table.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				 Farmer Forum With System Localization
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">			
			
			<ul class="nav navbar-nav navbar-right">
				
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Account
						<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							
							<li class="divider"></li>
							<li><a href="../index.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="container-fluid main-container">
		<div class="col-md-2 sidebar">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="index.php">Subscribe</a></li>
				<li><a href="vegitables.php">Vegitables</a></li>
				<li><a href="grains.php">Grains</a></li>
				<li><a href="flowers.php">Flowers</a></li>
				<li><a href="adnoncrop.php">Advisable crop</a></li>
				<li><a href="nonadcrop.php">Non Advisable crop</a></li>
				<li><a href="precaution.php">Disease And Precaution</a></li>
				<li><a href="selectedcrops.php">Selected Crops</a></li>
				<li><a href="sendingcrops.php">Sending Crops</a></li>
				<li><a href="contactdetails.php">Contact Details</a></li>
			</ul>
		</div>
		<div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 style="text-align:center;"><strong>Advisable Crop</strong></h3>
                </div>
                <div class="panel-body">
				    <div class="col-xs-12" style="padding-bottom:20px;">
							<div class="col-xs-12 col-sm-offset-1 col-sm-10">
								<form style="padding-top:10px;" method="post">
									<div class="col-xs-12" >
									<div class="col-xs-12 col-sm-8 col-sm-offset-2 form-line" style="background-color:#fff;padding:50px;">
										<div class="form-group">
											<label for="number">Advisable Crop</label>
											<input type="text" name="advisablecrop_name" id="cropname" class="form-control"  placeholder="" required>
										</div>
										<div class="form-group">
											<label for="City">Month</label>
											<input type="month" name="advisablecrop_month" class="form-control" id="" placeholder="" required>
										</div>
										<div class="col-xs-12" style="text-align:center;">
										
										<input type="submit" name="advisablecrop_submit" class="btn btn-primary submit">
										<button type="reset" class="btn btn-danger submit">Clear</button>
									</div>
									</div>
								</form>
								<?php
								include 'db.php';
								if(isset($_POST['advisablecrop_submit']))
								{
								$t1=$_POST['advisablecrop_name'];
								$t2=$_POST['advisablecrop_month'];
								
								$query=mysql_query("INSERT INTO advisablecrop_details(name_advisablecrop, month_advisablecrop) 
								VALUES ('$t1', '$t2')");
								          if($query)
								          {
								            echo '<script language="javascript">';
								    echo 'alert("Successfully Submitted");';
								    echo '</script>';
								          }
								}
								?>
							</div>
						</div>
					</div>
            </div>
		</div>
	</div>
	<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>