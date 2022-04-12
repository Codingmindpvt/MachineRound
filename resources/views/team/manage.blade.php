<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<h1 >Manage AdminVendor</h1>
    <a href="{{url('main')}}">
        <button type="button" class="btn btn-success">
            Back
        </button>
    </a>
<div >

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('team.manage_process')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="" class="control-label mb-1"> Name</label>
                        <input id="name" value="{{$name}}" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                        @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}		
                        </div>
                        @enderror
                    </div>

                    
                    <div class="form-group">
                                                <label for="logo" class="control-label mb-1"> Image</label>
                                                <input id="logo" name="logo" type="file" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('logo')
                                                <div class="alert alert-danger" role="alert">
                                                {{$message}}		
                                                </div>
                                                @enderror

                                                @if($logo!='')

                                                    <img width="100px" src="{{asset('storage/app/public/media/'.$logo)}}"/>
                                                @endif
                                            </div>

                                            <div class="form-group">
                        <label for="" class="control-label mb-1"> address</label>
                        <input id="address" value="{{$address}}" name="address" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                        @error('address')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}		
                        </div>
                        @enderror
                    </div>

                    <div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            Submit
                        </button>
                    </div>
                    <input type="hidden" name="id" value="{{$id}}"/>
                </form>


</body>
</html>