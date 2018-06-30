<?php
include_once 'includes/crepetable.inc.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../../../favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Dashboard</title>
	<link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
  	<nav class="navbar navbar-dark fixed-top py-0 bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-2.5 mr-0 py-0" href="#"><img src="img/logo.jpg"; height=50px; top=0px; bottom=0px; width=236; padding=none;></a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md- 2.5 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="home.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item dropdown">
				<div class="accordion" id="accordionExample">
					<div class="card">
						<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
							Forms
							</button>
						</h5>
						</div>

						<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" aria="false" aria-expanded="false">
						<div class="card-body">
							<ul class="list-group list-group-flush">
								<li class="nav-item">
									<a class="nav-link" href="CrepeProductionForm.php">
									Crepe Production Form
									<a/>
								</li>	
								<li class="nav-item">
									<a class="nav-link" href="CrepeProductionForm.php">
									Cuffing / CFK Production Form
									<a/>
								</li>	
								<li class="nav-item">
									<a class="nav-link" href="CrepeProductionForm.php">
									Components Production Form
									<a/>
								</li>	
								<li class="nav-item">
									<a class="nav-link" href="CrepeProductionForm.php">
									Polytype Production Form
									<a/>
								</li>	
								<li class="nav-item">
									<a class="nav-link" href="CrepeProductionForm.php">
									Slitting / Rewind Production Form
									<a/>
								</li>	
							</ul>
						</div>
						</div>
					</div>
			<li class="nav-item dropdown">
				<div class="accordion" id="accordionExample">					
					<div class="card">
						<div class="card-header" id="headingTwo">
						<h5 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
							Reports
							</button>
						</h5>
						</div>

						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">
							<ul class="list-group list-group-flush">
								<li class="nav-item">
									<a class="nav-link" href="CrepeProductionForm.php">
									Crepe Production Reports
									<a/>
								</li>	
								<li class="nav-item">
									<a class="nav-link" href="CrepeProductionForm.php">
									Cuffing / CFK Production Reports
									<a/>
								</li>	
								<li class="nav-item">
									<a class="nav-link" href="CrepeProductionForm.php">
									Components Production Reports
									<a/>
								</li>	
								<li class="nav-item">
									<a class="nav-link" href="CrepeProductionForm.php">
									Polytype Production Reports
									<a/>
								</li>	
								<li class="nav-item">
									<a class="nav-link" href="CrepeProductionForm.php">
									Slitting / Rewind Production Reports
									<a/>
								</li>	
							</ul>
						</div>
						</div>
					</div>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Daily Production Reports
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Monthy Production Report
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Quarterly Production Report
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Yearly Production Report
                </a>
              </li>

            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
			<div class="container-fluid">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Grade Information Form</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Machine Settings Form</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Production Tracking Form</a>
				</li>
				</ul>
				<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
						<h1 class="h2">Grade Information Form</h1>
						</div>
						<form>
						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="inputPO">PO Number</label>
							<input type="inputPO" class="form-control" id="inputPO" placeholder="PO Number">
							</div>
							<div class="form-group col-md-6">
							<label for="inputDate">Date</label>
							<input type="inputDate" class="form-control" id="inputDate" placeholder="Date">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
							<label for="inputGrade">Grade</label>
							<select id="inputGrade" class="form-control">
								<option selected>Choose Grade..</option>
								<option>...</option>
							</select>
							</div>
							<div class="form-group col-md-4">
							<label for="inputGradeCode">Grade Code</label>
							<input type="gradeCode" class="form-control" id="inputGradeCode" placeholder="Grade Code">
							</div>
							<div class="form-group col-md-4">
							<label for="inputPassword4">Base Paper</label>
							<input type="basePaper" class="form-control" id="inputBasePaper" placeholder="Base Paper">
							</div>
						</div>
						<div class="form-group">
							<label for="inputAddress">Address</label>
							<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
						</div>
						<div class="form-group">
							<label for="inputAddress2">Address 2</label>
							<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="inputCity">City</label>
							<input type="text" class="form-control" id="inputCity">
							</div>
							<div class="form-group col-md-4">
							<label for="inputState">State</label>
							<select id="inputState" class="form-control">
								<option selected>Choose...</option>
								<option>...</option>
							</select>
							</div>
							<div class="form-group col-md-2">
							<label for="inputZip">Zip</label>
							<input type="text" class="form-control" id="inputZip">
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
							<input class="form-check-input" type="checkbox" id="gridCheck">
							<label class="form-check-label" for="gridCheck">
								Check me out
							</label>
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
						</form>

				</div>		
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
						<h1 class="h2">Machine Settings Form</h1>
						</div>
						<form>
						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="inputEmail4">Grade</label>
							<input type="email" class="form-control" id="inputEmail4" placeholder="Grade">
							</div>
							<div class="form-group col-md-6">
							<label for="inputPassword4">Password</label>
							<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<label for="inputAddress">Address</label>
							<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
						</div>
						<div class="form-group">
							<label for="inputAddress2">Address 2</label>
							<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="inputCity">City</label>
							<input type="text" class="form-control" id="inputCity">
							</div>
							<div class="form-group col-md-4">
							<label for="inputState">State</label>
							<select id="inputState" class="form-control">
								<option selected>Choose...</option>
								<option>...</option>
							</select>
							</div>
							<div class="form-group col-md-2">
							<label for="inputZip">Zip</label>
							<input type="text" class="form-control" id="inputZip">
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
							<input class="form-check-input" type="checkbox" id="gridCheck">
							<label class="form-check-label" for="gridCheck">
								Check me out
							</label>
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
						</form>

				</div>
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
						<h1 class="h2">Production Tracking Form</h1>
						</div>
						<form>
						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="inputEmail4">Grade</label>
							<input type="email" class="form-control" id="inputEmail4" placeholder="Grade">
							</div>
							<div class="form-group col-md-6">
							<label for="inputPassword4">Password</label>
							<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<label for="inputAddress">Address</label>
							<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
						</div>
						<div class="form-group">
							<label for="inputAddress2">Address 2</label>
							<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="inputCity">City</label>
							<input type="text" class="form-control" id="inputCity">
							</div>
							<div class="form-group col-md-4">
							<label for="inputState">State</label>
							<select id="inputState" class="form-control">
								<option selected>Choose...</option>
								<option>...</option>
							</select>
							</div>
							<div class="form-group col-md-2">
							<label for="inputZip">Zip</label>
							<input type="text" class="form-control" id="inputZip">
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
							<input class="form-check-input" type="checkbox" id="gridCheck">
							<label class="form-check-label" for="gridCheck">
								Check me out
							</label>
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
						</form>

				</div>
			</div>
			</div>
			<br>
			<div class="container" >
				<h2>Daily Production</h2>
				<table class="table table-hover">
					<thead>
					<tr>
						<th>Machine</th>
						<th>Operator</th>
						<th>Production Order</th>
						<th>Grade Code</th>
						<th>Total Kg's</th>
						<th>Rate</th>
					</tr>
					</thead>
					<tbody>
					<?php
					while($row = mysqli_fetch_array($result))
					{
						echo '<tr>
							 	<td>'.$row['machine'].'</td>
								<td>'.$row['operator'].'</td>
								<td>'.$row['productionOrder'].'</td>
								<td>'.$row['gradeCode'].'</td>
								<td>'.$row['totalKgs'].'</td>
								<td>'.$row['rate'].'</td>

							 </tr>';
					}
					?>
					</tbody>
				</table>
			</div>
        </main>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	    <!-- Icons -->
	<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
  </body>
</html>