<?php 

include_once('config.php');

$id = $_GET['id'];
$sql="SELECT * FROM employee WHERE id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id'=>$id));
$row=$query->fetch();

?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<body>
<div id="addEmployeeModal" class="">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="createForm" method="POST" action="update.php">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
					<div class="modal-header">						
						<h4 class="modal-title">Edit Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
                    					
						<div class="form-group">
							<label>First Name</label>
							<input type="text" name="f_name" value="<?php echo $row['first_name']; ?>" class="form-control" required>
						</div>
                        <div class="form-group">
							<label>Last Name</label>
							<input type="text" name="l_name" value="<?php echo $row['last_name']; ?>" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Job Title</label>
							<input type="text" name="job_title" value="<?php echo $row['job_title']; ?>" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Salary</label>
							<input type="number" name="salary" value="<?php echo $row['salary']; ?>" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Notes</label>
							<input type="text" name="notes" value="<?php echo $row['notes']; ?>" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" name="submit" class="btn btn-success" value="update">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</head>
</html>