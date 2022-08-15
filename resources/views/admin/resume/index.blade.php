@extends('admin.layouts.master')
@section('css')
@stop
@section('content')
    <div class="page-wrapper">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title">Resume Table </h4>
                        </div>
                        <div class="col-md-6" style="text-align: right">
                            @if (session('success'))
                                <div>{{ session('success') }}</div>
                            @endif

                            <a href="{{ route('resume.create') }}" type="button"
                                class="btn waves-effect waves-light btn-success">Add Resume</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Type</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($resume as $resume)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                @if ($resume->resume_type == 1)
                                                    Education
                                                @elseif ($resume->resume_type == 2)
                                                    Experience
                                                @endif
                                            </td>
                                            <td>{{ $resume->title }}</td>
                                            <td>{{ $resume->description }}</td>
                                            <td>{{ $resume->start_date }}</td>
                                            <td>{{ $resume->end_date }}</td>
                                            <td> <a href="{{ route('resume.edit', $resume->id) }}"
                                                    class="btn waves-effect waves-light btn-warning">Edit</a></td>
                                            <td> <button onclick="ResumeDelete('{{ $resume->id }}')" type="button"
                                                    class="btn waves-effect waves-light btn-danger">Delete</button></td>
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
        function ResumeDelete(id) {
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
                            url: "{{ route('resume.delete') }}",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                id: id
                            },
                            method: "POST",
                            success: function(data) {
                                if (data === "ok") {
                                    swal("Success!", "Resume deleted!", "success");
                                    window.setTimeout(function() {
                                        location.reload()
                                    }, 2000)
                                } else {
                                    swal("Error!", "Resume didn't deleted!", "error");
                                }
                            },
                            error: function(x, sts) {
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
