@extends('admin.layouts.master')
@section('css')
@stop
@section('content')
    <div class="page-wrapper">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6"><h4 class="card-title">User Messages Page </h4></div>
                    <div class="col-md-6" style="text-align: right"> 
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Delete</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($messages as $message)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $message->name }}</td>                                
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->subject }}</td>
                                <td>{{ $message->message }}</td>
                                <td> <button onclick="UserMessagesDelete('{{$message->id}}')" type="button" class="btn waves-effect waves-light btn-danger">Delete</button></td>                              
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    function UserMessagesDelete(id) {
        swal({
            title: "Warning",
            text: "Are you sure?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            buttons: ["No", "Yes"],
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: "{{ route('usermessages.delete') }}",
                        data: { "_token": "{{ csrf_token() }}", id:id },
                        method: "POST",
                        success: function (data) {
                            if(data==="ok"){
                                swal("Success!", "User Message deleted!", "success");
                                window.setTimeout(function(){location.reload()},2000)
                            }else{
                                swal("Error!", "User Message didn't deleted!", "error");
                            }
                        },
                        error: function (x, sts) {
                            console.log("Error...");
                            console.log('no');
                        },
                    });
                } else {
                    swal("Cancelled!");
                }
            });
    }
</script>

@endsection