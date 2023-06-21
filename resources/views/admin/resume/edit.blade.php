@extends('admin.layout.main')
@section('title','Client Edit')


@section('content')
<div  class="app-content">
    <div class="d-flex align-items-center mb-3">
        <div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">PAGES</a></li>
                <li class="breadcrumb-item active">Client Edit</li>
            </ul>
            <h1 class="page-header mb-0"> Client Edit</h1>
        </div>
    </div>
    <hr class="mb-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="row">
                    <div  class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <form  action="{{ route('resume.update',$resume->id) }}" class="forms-sample" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $resume->id }}">
                                    <input type="hidden" name="old_cv" value="{{ $resume->resume }}">

                                    <div class=" mb-3">
                                        <label for="title">Resume Title</label>
                                        <input type="text" name="title" class="form-control" id="title"  placeholder="Enter Your Resume Title" value="{{ $resume->title }}">
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="Select">Select</label>
                                        <select name="name" class="form-select">
                                            <option value="education" {{($resume->type=="Education")?"selected":""}}>Education</option>
                                            <option value="experience" {{($resume->type=="Experience")?"selected":""}}>Experience</option>
                                        </select>
                                    </div>


                                    <div class=" mb-3">
                                        <label for="year">Resume Year</label>
                                        <input type="text" name="year" class="form-control" id="year"  placeholder="Enter Your Resume Year" value="{{ $resume->year }}" >
                                        @error('year')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class=" mb-3">
                                        <label for="qualification">Resume Qualification</label>
                                        <input type="text" name="qualification" class="form-control" id="qualification"  placeholder="Enter Your Resume Qualification" value="{{ $resume->qualification }}" >
                                        @error('qualification')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="university">Resume University</label>
                                        <input type="text" name="university" class="form-control" id="university"  placeholder="Enter Your Resume University" value="{{ $resume->university }}" >
                                        @error('university')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="Description" class="form-label">Description</label>
                                        <textarea name="description" class="form-control" id="description" placeholder="Please Input your resume Description" >{{ $resume->description }}"</textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3 d-grid">
                                        <button type="submit" name="submit" class="btn btn-outline-theme">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-arrow">
                                <div class="card-arrow-top-left"></div>
                                <div class="card-arrow-top-right"></div>
                                <div class="card-arrow-bottom-left"></div>
                                <div class="card-arrow-bottom-right"></div>
                            </div>
                            <div class="hljs-container">
                                <pre><code class="xml" data-url="{{ asset('assets') }}/assets/data/form-plugins/code-1.json"></code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.alert')
@endsection




@section('script')


@endsection
