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
                <h1>Resume Page</h1>
                <form method="POST" action="{{ route('resume.update') }}" class="form-horizontal mt-4">
                    @csrf
                    
                @foreach ($resume as $resume )
                    <input type="hidden" value="{{ $resume->id }}" name="id_abouts">
                    <div class="form-group" style="width: 50%">
                        <label>Resume Type</label>
                        <select class="custom-select col-12" id="inlineFormCustomSelect" name="resume_resume_type">
                            <option selected disabled>Choose Resume Type</option>
                            <option value=" {{$resume->resume_type }}" @if ($resume->resume_type == 1) selected @endif >Education</option>
                            <option value=" {{$resume->resume_type }}" @if ($resume->resume_type == 2) selected @endif>Experience</option>
                        </select>
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Start Date</label>
                        <input value="{{ $resume->start_date }}" type="text" class="form-control" name="resume_start_date">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>End Date</label>
                        <input value="{{ $resume->end_date }}" type="text" class="form-control" name="resume_end_date">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Title</label>
                        <input value="{{ $resume->title }}" type="text" class="form-control" name="resume_title">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Description</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3" name="resume_description">{{$resume->description}}</textarea>
                    </div>
                    <br>
                    <hr>
                    
                @endforeach
                    
                   
                    
                               
                    


                    {{-- <div class="custom-file" style="width: 50%">
                        <label class="custom-file-label" for="inputGroupFile01">Choose files</label>
                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="category_icon" value="category_icon">
                        <p>Image now:</p>
                        <img style="width: 80px" src="{{ asset('img/category_images') . '/' . $category->icon}}" alt="">

                    </div> --}}

                    <div class="button-group" style="margin-left: 450px; padding-top: 20px">
                        <button type="submit" class="btn waves-effect waves-light btn-success">Update About</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection