<!DOCTYPE html>
<html>
<head>
	<title>View Fees</title>
</head>
<style type="text/css">
	
	body
	{
		background-color: grey;
		width: 80%;



	}
</style>
<body align="center">
	<div>
		<table align="center">
			<h2>Search Fees record</h2>
			<form action="/search/fees" method="get">
				{{csrf_field()}}
				<label>Student ID:</label>
				<input type="text" name="student_id">
				<input type="submit" name="search">

			</form>
			<tr>
				<th>Student ID</th>
				
				<th>Amount</th>
			</tr>
			@foreach($fee as $value)
			<tr>
			   <td>{{$value->student_id}}</td>
			    <td>{{$value->name}}</td>
			    
			    <td>{{$value->paid}}</td>
			</tr>
			@endforeach	
		 

		</table>
		
<p>The total amount of is: {{$sum}}</p>
	</div>

</body>
</html>