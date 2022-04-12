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
  <h1>Show Employee </h1>
 <div class="float-right">
    <a href='/employees' class='btn btn-primary'>Back</a>
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




<div class="form-group">

<label for="">Name</label>
<input type="text" readonly class='form-control' value='{{$employee->name}}' name='name'>
</div>

<div class="form-group">
<label for="">email</label>
<input type="text" readonly class='form-control' value='{{$employee->email}}' name='email'>
</div>

<div class="form-group">
<label for="">mobile</label>
<input type="numbder" readonly class='form-control' value='{{$employee->mobile}}' name='mobile'>
</td></div>

<div class="form-group">
<label for="">Salary</label>
<input type="text" readonly class='form-control' value='{{$employee->salary}}' name='salary'>
</div>

<div class="form-group">
<label for="">dept_id</label>
<input type="text" readonly class='form-control' value='{{$employee->departmentdata->name}}' name='dept_id'>
</div>





</form>
  
</div>

</body>
</html>
