<?php
include('../Admin/include/config.php');
$output = '';
if(isset($_POST["query"]))
		{
			$search = mysqli_real_escape_string($connect, $_POST["query"]);
			$query = "SELECT * FROM tblcomplaints WHERE complaintNumber LIKE '%".$search."%'
			OR cat_dep LIKE '%".$search."%' 
			OR status LIKE '%".$search."%' 
			
			";
		}
else
		{
			$query = "SELECT * FROM tbl_customer ORDER BY CustomerID";
		}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
	{
		$output .= '<div class="table-responsive">
						<table class="table table bordered">
										<tr>
                                            <th>Complaint Number</th>
                                            <th>Category</th>
                                            <th>Reg Date</th>
                                            <th>last Updation date</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>';
		while($row = mysqli_fetch_array($result))
		{
			$output .= '
				<tr>
					<td>'.$row["CustomerName"].'</td>
					<td>'.$row["Address"].'</td>
					<td>'.$row["City"].'</td>
					<td>'.$row["PostalCode"].'</td>
					<td>'.$row["Country"].'</td>
				</tr>
			';
		}
		echo $output;
	}




?>