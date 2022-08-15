@extends('admin.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="col-sm-12">
            <div class="card card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h1>Resume Create Page</h1>
                <form enctype="multipart/form-data" method="POST" action="{{ route('resume.store') }}" class="form-horizontal mt-4">
                    @csrf
                    <div class="form-group" style="width: 50%">
                        <label>Resume Type</label>
                        <select class="custom-select col-12" id="inlineFormCustomSelect" name="resume_resume_type">
                            <option selected disabled>Choose Resume Type</option>
                            <option value="1" >Education</option>
                            <option value="2" >Experience</option>
                        </select>
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Start Date</label>
                        <input type="text" class="form-control" name="resume_start_date">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>End Date</label>
                        <input type="text" class="form-control" name="resume_end_date">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Title</label>
                        <input type="text" class="form-control" name="resume_title">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Description</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3" name="resume_description"></textarea>
                    </div>

                    <div class="button-group" style="margin-left: 450px; padding-top: 20px">
                        <button type="submit" class="btn waves-effect waves-light btn-success">Add Resume</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection