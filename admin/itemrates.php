<?php
	include 'db.php';
	if(isset($_POST['item_submit']))
{
	$t1=$_POST['item_type'];
	$t2=$_POST['item_name'];
	$t3=$_POST['item_marketcost'];
	$t4=$_POST['item_fixedcost'];
	$path=" ";
	if($_FILES['file']['size']>1)
{
					
	$file_name =$_FILES['file']['name'];
	$file_size =$_FILES['file']['size'];
	$file_tmp =$_FILES['file']['tmp_name'];
	$file_type=$_FILES['file']['type'];	
	if($file_size < 25097152)
{
	$km="";
	$desired_dir="../vegitables";
	$random_digit=rand(0,99);			
	$newfile_name=$random_digit.$file_name;	  
	if(empty($errors)==true)
{
	if(is_dir($desired_dir)==false)
{
	mkdir("$desired_dir", 0700);		
}
	if(is_dir("$desired_dir/".$newfile_name)==false)
{
	move_uploaded_file($file_tmp,"$desired_dir/".$newfile_name);
	$kk="$desired_dir/".$newfile_name;	
	$path="images/".$newfile_name;
}				
}
}	
}

switch($item_type)
{
	case 'Vegitables':
	$query=mysql_query("INSERT INTO vegitable_details(type_item, name_item, marketcost_item, fixedcost_item, image) VALUES ('$t1', '$t2', '$t3', '$t4', '$path')");
	 if($query)
{
	echo '<script language="javascript">';
	echo 'alert("Successfully Submitted");';
	echo '</script>';
}
else
{
echo "<font color=red>Invalid login Try Again</font>";
}

break;
case 'Grains':
$query=mysql_query("INSERT INTO grains_details(type_item, name_item, marketcost_item, fixedcost_item, image) VALUES ('$t1', '$t2', '$t3', '$t4', '$path')");
 if($query)
{
echo '<script language="javascript">';
echo 'alert("Successfully Submitted");';
echo '</script>';
}
else
{
echo "<font color=red>Invalid login Try Again</font>";
}
break;
case 'Flowers':
$query=mysql_query("INSERT INTO flowers_details(type_item, name_item, marketcost_item, fixedcost_item, image) VALUES ('$t1', '$t2', '$t3', '$t4', '$path')");
 if($query)
{
echo '<script language="javascript">';
echo 'alert("Successfully Submitted");';
echo '</script>';
}
else
{
echo "<font color=red>Invalid login Try Again</font>";
}
break;
case 'Others':
$query=mysql_query("INSERT INTO itemrates_details(type_item, name_item, marketcost_item, fixedcost_item, image) VALUES ('$t1', '$t2', '$t3', '$t4', '$path')");
 if($query)
{
echo '<script language="javascript">';
echo 'alert("Successfully Submitted");';
echo '</script>';
}

break;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
  function isNumberKey(evt){  <!--Function to accept only numeric values-->
    //var e = evt || window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode != 46 && charCode > 31 
  && (charCode < 48 || charCode > 57 || charCode > 59))
        return false;
        return true;

  }
 $(function() {
    $('#itemname').keydown(function(e) {
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
  <title>Item rates</title>
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
                    <h3 style="text-align:center;"><strong>ITEM RATES</strong></h3>
                </div>
                <div class="panel-body">
				    <div class="col-xs-12" style="padding-bottom:20px;">
							<div class="col-xs-12 col-sm-offset-1 col-sm-10">
								<form style="padding-top:10px;" method="post" enctype="multipart/form-data">
									<div class="col-xs-12" >
									<div class="col-xs-12 col-sm-8 col-sm-offset-2 form-line" style="background-color:#fff;padding:50px;">
										<div class="form-group">
											<label for="Contact">Item Type</label>
											<input type="text" name="item_type" class="form-control" value="Vegitables" placeholder="" readonly>
										</div>
										<div class="form-group">
											<div class="input-group" style="height:30px;">

												<span class="input-group-btn">
													<button id="fake-file-button-browse" type="button" class="btn btn-default">
														<span class="glyphicon glyphicon-file"></span>
													</button>
												</span>
												<input type="file" name="file" id="files-input-upload" style="display:none">
												<input type="text" id="fake-file-input-name" disabled="disabled" placeholder="File not selected" class="form-control">
												<span class="input-group-btn">
													<button type="button" class="btn btn-default" disabled="disabled" id="fake-file-button-upload">
														<span class="glyphicon glyphicon-upload"></span>
													</button>
												</span>
											</div>
										</div>
										<div class="form-group">
											<label for="Contact">Item Name</label>
											<input type="text" name="item_name" class="form-control" id="itemname" placeholder="" required>
										</div>
										<div class="form-group">
											<label for="Contact">Market cost</label>
											<input type="numeric" name="item_marketcost" onkeypress="return isNumberKey(event)" class="form-control" id="" placeholder="" required>
										</div>
										<div class="form-group">
											<label for="Contact">Fixed cost</label>
											<input type="numeric" name="item_fixedcost" onkeypress="return isNumberKey(event)" class="form-control" id="" placeholder="" required>
										</div>
										<div class="col-xs-12" style="text-align:center;">
										
										<input type="submit" name="item_submit" value="Submit" class="btn btn-primary submit">
										<button type="reset" class="btn btn-danger submit">Clear</button>
									</div>
									</div>
								</form>
								
							</div>
						</div>
					</div>
					<!--item rates-->
						<div class="container-fluid" >
							<div class="col-xs-12" style="padding-top:10px;">
								<div class="col-xs-12 col-sm-offset-1 col-sm-10">
									<div class="row">
										<div class="table-responsive" style="background-color:#fff;padding:20px;">	
											<div class="colo-xs-12" >					
											<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
											</div>
												<table id="myTable">
												  <tr class="header">
													<th style="width:20%;">SI.NO</th>
													<th style="width:20%;">Item Type</th>
													<th style="width:20%;">Image</th>
													<th style="width:20%;">Item Name</th>
													<th style="width:20%;">Market cost</th>
													<th style="width:20%;">Fixed cost</th>
												  </tr>
												  <tr>
													<td>1</td>
													<td>123456</td>
													<td>123456</td>
													<td>123456</td>
													<td>123456</td>
													<td>123456</td>
												  </tr>
												  <tr>
													<td>2</td>
													<td>123456</td>
													<td>123456</td>
													<td>123456</td>
													<td>123456</td>
													<td>123456</td>
												  </tr>
												  <tr>
													<td>3</td>
													<td>123456</td>
													<td>123456</td>
													<td>123456</td>
													<td>123456</td>
													<td>123456</td>
												  </tr>
												 <tr>
													<td>4</td>
													<td>123456</td>
													<td>123456</td>
													<td>123456</td>
													<td>123456</td>
													<td>123456</td>
												  </tr>
												</table>
										</div>
									</div>
								</div>
							</div>
						</div>
				<!--item rates-->
            </div>
		</div>
	</div>
<script type="text/javascript">
// Fake file upload
document.getElementById('fake-file-button-browse').addEventListener('click', function() {
	document.getElementById('files-input-upload').click();
});

document.getElementById('files-input-upload').addEventListener('change', function() {
	document.getElementById('fake-file-input-name').value = this.value;
	
	document.getElementById('fake-file-button-upload').removeAttribute('disabled');
});
</script>
</body>
</html>