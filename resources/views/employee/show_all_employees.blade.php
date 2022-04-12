<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
 
 <div class="float-right">
    <a href='/employees/create' class='btn btn-primary'>Add New Employee</a>
 </div>
</div>
  
<div class="container">

@if(session()->has('status'))
  <div class="alert alert-success">
    {{session()->get('status')}}
  <button class="close" data-dismiss='alert'>X</button>
  </div>
@endif



<table class="table">
  <tr>
  
    <td>id</td>
    <td> Name</td>
      <td>Age</td>
      <td> Salary</td>
      <td> Image</td>
      <td>Edit</td>
        <td>Delete</td>
  </tr>
 
@foreach($employees as $d)
<tr>
    <td>{{$d->id}}</td>
    <td>{{$d->name}}</td>
    <td>{{$d->age}}</td>
    <td>{{$d->salary}}</td>
   
    <td>
    <img src="{{asset('employee_imgs')}}/{{$d->image}}" height=100 width=100></td>
      <td><a href="employees/{{$d->id}}/edit" class='btn btn-warning'>Edit</a></td>
      <td><a href="employees/{{$d->id}}" class='btn btn-warning'>show</a></td>
        <td>
        
        <form action="employees/{{$d->id}}" method='POST'>
        @csrf
        @method('DELETE')
        
          <input type="submit" value='delete' class='btn btn-delete'>
        </form>
        
        </td>
  </tr>
@endforeach

</table>
  
</div>

</body>
</html>
