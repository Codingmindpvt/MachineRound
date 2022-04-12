<h1 >Manage Team Show</h1>
    <a href="{{url('team')}}">
        <button type="button" class="btn btn-success">
            Back
        </button>
    </a>
<div >

<div class="row m-t-30">
        <div class="col-md-8">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    
                    <tbody>
                        <tr>
                            <td><strong>Name</strong></td>
                            <td>{{$list->name}}</td>
                        </tr>
                        <tr>
                            <td><strong>Email</strong></td>
                            <td>{{$list->email}}</td>
                        </tr>
                        <tr>
                            <td><strong>ContactNo</strong></td>
                            <td>{{$list->contact_number}}</td>
                        </tr>
                        
                        <tr>
                            <td><strong>Created On</strong></td>
                            <td>{{\Carbon\Carbon::parse($list->created_at)->format('d-m-Y h:i:s')}}</td>
                        </tr>
                        <tr>
                            <td><strong>Updated On</strong></td>
                            <td>{{\Carbon\Carbon::parse($list->updated_at)->format('d-m-Y h:i:s')}}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>