<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>logo</th>
                            <th>address</th>                           
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->name}}</td>
                            <td><img width="50px" src="{{url('./storage/app/public/media/'.$list->adminvendor_image)}}"/>
                            <td>{{$list->address}}</td> 

                        
                            </td>
                            <td>
                            
                            <a href="{{url('show_adminvendor/show/')}}/{{$list->id}}"><button type="button" class="btn btn-success">View</button></a>
                                <a href="{{url('manage_adminvendor/')}}/{{$list->id}}"><button type="button" class="btn btn-success">Edit</button></a>

                                @if($list->status==1)
                                    <a href="{{url('adminvendor/status/0')}}/{{$list->id}}"><button type="button" class="btn btn-primary">Active</button></a>
                                 @elseif($list->status==0)
                                    <a href="{{url('adminvendor/status/1')}}/{{$list->id}}"><button type="button" class="btn btn-warning">Deactive</button></a>
                                @endif

                                <a href="{{url('adminvendor/delete/')}}/{{$list->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
</body>
</html>