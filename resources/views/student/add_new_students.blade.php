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
  <h1>Add New Student </h1>
 <div class="float-right">
    <a href='/students' class='btn btn-primary'>Back</a>
 </div>
</div>
  
<div class="container">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif




<form action="/students" method='POST' enctype='multipart/form-data'>
@csrf

<div class="form-group">
<label for="">First Name</label>
<input type="text" class='form-control' name='first_name'>
</div>

<div class="form-group">
<label for="">Last Name</label>
<input type="text" class='form-control' name='last_name'>
</div>

<div class="form-group">
<label for="">Address</label>
<input type="text" class='form-control' name='address'>
</div>


<div class="form-group">
<label for="">Image</label>
<input type="file" class='form-control' name='image'>
</div>


<div class="form-group">
 
<input type="submit" value='Save' class='btn btn-success' >
</div>


</form>
  
</div>

</body>
</html>
