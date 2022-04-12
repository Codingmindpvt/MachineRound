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
    <a href='/students/create' class='btn btn-primary'>Add New Student</a>
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
    <td> first_name</td>
      <td> last_name</td>
      <td> address</td>
      <td> Image</td>
      <td>Edit</td>
        <td>Delete</td>
  </tr>
 
@foreach($students as $d)
<tr>
    <td>{{$d->id}}</td>
    <td>{{$d->first_name}}</td>
    <td>{{$d->last_name}}</td>
    <td>{{$d->address}}</td>
   
    <td>
    <img src="{{asset('student_imgs')}}/{{$d->image}}" height=100 width=100></td>
      <td><a href="students/{{$d->id}}/edit" class='btn btn-warning'>Edit</a></td>
      <td><a href="students/{{$d->id}}" class='btn btn-warning'>show</a></td>
        <td>
        <form action="students/{{$d->id}}" method='POST'>
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
