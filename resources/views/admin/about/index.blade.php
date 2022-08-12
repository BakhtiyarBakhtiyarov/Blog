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
                <h1>About Page</h1>
                <form method="POST" action="{{ route('about.update') }}" class="form-horizontal mt-4">
                    @csrf
                    <input type="hidden" value="{{ $abouts->id }}" name="id_abouts">
                    <input type="hidden" value="{{ $contacts->id }}" name="id_contacts">
                    <div class="form-group" style="width: 50%">
                        <label>Name</label>
                        <input value="{{ $abouts->name }}" type="text" class="form-control" name="abouts_name">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Birthday Date</label>
                        <input value="{{ $abouts->birthday }}" type="date" class="form-control" name="abouts_birthday">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>City</label>
                        <input value="{{ $abouts->city }}" type="text" class="form-control" name="abouts_city">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Study</label>
                        <input value="{{ $abouts->study }}" type="text" class="form-control" name="abouts_study">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Website</label>
                        <input value="{{ $abouts->website }}" type="text" class="form-control" name="abouts_website">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Interests</label>
                        <input value="{{ $abouts->interests }}" type="text" class="form-control" name="abouts_interests">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Degree</label>
                        <select class="custom-select col-12" id="inlineFormCustomSelect" name="abouts_degree">
                            <option selected disabled>Choose Degree</option>
                            <option value=" {{$abouts->degree }}" @if ($abouts->degree == 1) selected @endif >Bachelor</option>
                            <option value=" {{$abouts->degree }}" @if ($abouts->degree == 2) selected @endif>Master</option>
                        </select>
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Phone</label>
                        <input value="{{ $contacts->phone }}" type="text" class="form-control" name="contacts_phone">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Email</label>
                        <input value="{{ $contacts->email }}" type="text" class="form-control" name="contacts_email">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Address</label>
                        <input value="{{ $contacts->address }}" type="text" class="form-control" name="contacts_address">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Facebook</label>
                        <input value="{{ $contacts->facebook }}" type="text" class="form-control" name="contacts_facebook">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>LinkedIn</label>
                        <input value="{{ $contacts->linkedin }}" type="text" class="form-control" name="contacts_linkedin">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Github</label>
                        <input value="{{ $contacts->github }}" type="text" class="form-control" name="contacts_github">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Instagram</label>
                        <input value="{{ $contacts->instagram }}" type="text" class="form-control" name="contacts_instagram">
                    </div>                   
                    <div class="form-group" style="width: 50%">
                        <label>Description</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3" name="abouts_description">{{$abouts->description}}</textarea>
                    </div>


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