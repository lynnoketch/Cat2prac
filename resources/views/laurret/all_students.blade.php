<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Students</title>
  </head>
  <style type="text/css">
  
  body
  {
    background-color: grey;
    width: 80%;



  }
</style>

  <body>
    <table border="1">
    <tr>
        <th>Name</th>
        <th>Student_id</th>
        <th>Year</th>
        <th>Course</th>
        <th>Manage</th>

    </tr>
   

    @foreach($students as $student)
    <tr>
      <td>{{$student->name}}</td>
      <td>{{$student->student_id}}</td>
      <td>{{$student->year}}</td>
      <td>{{$student->course}}</td>

  
    @endforeach
</table>
  </body>
</html>
