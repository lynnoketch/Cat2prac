<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
  	body
  	{
  		background-color: grey;
  		width: 100%;
  	}
  </style>
<body align="center"> 
	<div>

<a href="/search/fees"> <button>View all fees</button></a>
<a href="/viewfees/fees"><button>Search fee record</button></a>
<form class="form" method ="post" action="/fees" >
	{{csrf_field()}}

<fieldset>
<legend>Student Fees</legend>
<input type="hidden" name="id" >

Student ID:<input type="text" name="student_id" ><br>
Total:<input type="number" name="total" ><br>
Paid:<input type="number" name="paid" ><br>

<button type="submit" name="button">Submit</button>

</fieldset>
</form>
</div>

</body>
</html>