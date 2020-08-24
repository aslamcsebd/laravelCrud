<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		h5{
			font: 700;
			font-size: 20px;
			text-align: center;
		}
		table {
		  width: 100%;
		  border-collapse: collapse;
		}
		table, td, th {
		  border: 1px solid;
		  text-align: center;
		  vertical-align: middle;
		}		
		.table thead th{
			padding: 5px 18px;
			background-color: lightblue;
		}		
	</style>
</head>
<body>
	<h5>Employee list</h5>
	<div class="card-body">
		<table class="table singer_list_table table-bordered">
			<thead lass="bg-info">
				<tr class="text-center">
					<th>Image</th>
					<th>Name</th>
					<th>Email</th>
					<th>Gender</th>
					<th>DOB</th>
					<th>Position</th>
					<th>Salary</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($Salaries as $Salary)
					<tr class="text-center">
						<td>
							<img src="{{ asset('photo') }}/{{ $Salary->salaryToemployee->photo }}" alt="No Image found" width="40" />
						</td>
						<td>{{ $Salary->salaryToemployee->name }}</td>
						<td>{{ $Salary->salaryToemployee->email }}</td>
						<td>{{ $Salary->salaryToemployee->gender }}</td>
						<td>{{ $Salary->salaryToemployee->dob }}</td>
						<td>{{ $Salary->position }}</td>
						<td>{{ $Salary->salary }}</td>			
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>	
</body>
</html>

