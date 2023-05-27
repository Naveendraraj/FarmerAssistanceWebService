<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
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
                    <h3 style="text-align:center;"><strong>SUBSCRIBE</strong></h3>
                </div>
                <div class="panel-body">
                        <!--SUBSCRIBE-->
						<div class="container-fluid" >
							<div class="col-xs-12" style="padding-top:80px;">
								<div class="col-xs-12 col-sm-offset-1 col-sm-10">
									<div class="row">
										<div class="table-responsive" style="background-color:#fff;padding:20px;">	
											<div class="colo-xs-12" >					
											<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
											</div>
												<table id="myTable">
													  <tr class="header">
														<th style="width:20%;">SI.NO</th>
														<th style="width:20%;">Name</th>
														<th style="width:20%;">Email</th>
														<th style="width:20%;">Delete</th>
													  </tr>
													  <tr>
												        <?php
												  		include('db.php');
														$query = mysql_query("SELECT * FROM subscribe_details") or die(mysql_error());
														while ($row = mysql_fetch_array($query)) {
														?>

														<td><?php echo $row['id']; ?></td>
														<td><?php echo $row['name_subscribe']; ?></td>
														<td><?php echo $row['mail_subscribe']; ?></td>
														
										
                                                      <td><a href="subscribe_delete.php?id=<?php echo $row['id']; ?> "><br>
										              <img src="../images/delete.jpg" width="50" height="50" border="0" onClick="return confirm('Do you want to delete this?');" ></a></td>
										              
													  </tr>

										            <?php } ?>
							                      </tr>
												</table>
										</div>
									</div>
								</div>
							</div>
						</div>
				<!--SUBSCRIBE-->
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