<?php
    
if (isset($_POST['submit'])){

    include_once 'dbh.inc.php';


    $PO = mysqli_real_escape_string($conn, $_POST['inputPO']);
    $date = mysqli_real_escape_string($conn, $_POST['inputDate']); 
    $grade = mysqli_real_escape_string($conn, $_POST['inputGrade']);
    $gradeCode = mysqli_real_escape_string($conn, $_POST['inputGradeCode']); 
    $basePaper = mysqli_real_escape_string($conn, $_POST['inputBasePaper']); 
    $core = mysqli_real_escape_string($conn, $_POST['inputCore']);
    $coreOD = mysqli_real_escape_string($conn, $_POST['inputCoreOD']);
    $caliper = mysqli_real_escape_string($conn, $_POST['inputCaliper']); 
    $rollWidth = mysqli_real_escape_string($conn, $_POST['inputRollWidth']);


    	//Error Handlers
    //Check for empty fields
    if (empty($PO) || empty($date) || empty($grade) || empty($gradeCode) || empty($basePaper) || empty($core) || empty($coreOD) || empty($caliper) || empty($rollWidth)) {
        header("Location: ../CrepeProductionForm.php?signup=empty");
        exit();
    } else {
		//Insert the user into the database
		$sql = "INSERT INTO crepedailyproduction(productionOrder, crepeDate, grade, gradeCode, basePaper, coreType, coreOD, caliper, rollWidth) 
		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)){
			echo "SQL Error";
		} else {
			mysqli_stmt_bind_param($stmt, "sssssssss", $PO, $date, $grade, $gradeCode, $basePaper, $core, $coreOD, $caliper, $rollWidth);
			mysqli_stmt_execute($stmt);
		}
		header("Location: ../CrepeProductionForm.php?Submission=success");
		exit();
					
				
					
				
			
		
	}
}	else {
		header("Location: ../home.php");
		exit();
	}
