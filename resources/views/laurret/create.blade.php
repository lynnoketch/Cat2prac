<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create Student</title>
  </head>
  <style type="text/css">
body  	{
  		background-color: grey;
  		width: 100%;
  		height: 40%;
  	}
  </style>
  <body align="center">
  	<div>
    <form class="form"  action="/student" method="post">
      {{ csrf_field() }}
      <fieldset  style="width:150px;">
        <legend>Student Form</legend>
        <label for="name">Student name</label>
        <input type="text" name="name" placeholder="Name" >
        <br><br>

        <label for="student_id">Student ID</label>
        <input type="text" name="student_id" placeholder="Student ID" ">
        <br><br>

        <label for="year">Year</label>
        <input type="number" name="year" placeholder="Year" >
        <br><br>
        <label for="course">Course</label>
        <input type="text" name="course" placeholder="Course" 
        <br><br>

        <input type="number" name="id" hidden >

        <button type="submit" name="button">Submit</button>
      

 
   </form>
</fieldset>
</div>
  </body>
</html>
