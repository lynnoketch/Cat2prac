<!DOCTYPE html>
<html>
<head>
  <title>View All Fees</title>
</head>
<style type="text/css">
  
  div
  {
    background-color: grey;
    width: 100%;



  }
</style>
<body align="center">
  <div>
      <table align="center">
      <tr>
        <th>Student ID</th>
     
        <th>Amount</th>
      </tr>
      @foreach($fee as $value)
      <tr>
      <td>{{$value->student_id}}</td>
   
      <td>{{$value->paid}}</td>
    </tr>
    @endforeach
    </table>
    <p>The total amount of fees paid is: {{$sum}}</p>
  </div>

</body>
</html>