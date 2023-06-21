@extends('admin.layout.main')
@section('title','Profile Edit')


@section('content')
<div  class="app-content">
    <div class="d-flex align-items-center mb-3">
        <div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">PAGES</a></li>
                <li class="breadcrumb-item active">Profile Edit</li>
            </ul>
            <h1 class="page-header mb-0"> Profile Edit</h1>
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
                                <form  action="{{ route('profile.update',$profile->id) }}" class="forms-sample" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $profile->id }}">
                                    <input type="hidden" name="old_image" value="{{ $profile->profile }}">
                                    <div class=" mb-3">
                                        <label for="exampleInputUsername1">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"  placeholder="Enter Your Name" value="{{ $profile->name }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="exampleInputUsername1">Designation</label>
                                        <input type="text" name="designation" class="form-control" id="designation"  placeholder="Enter Your Designation" value="{{ $profile->designation }}" >
                                        @error('designation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1">Profile</label>
                                        <input type="file" name="profile" class="form-control" id="profile">
                                        @error('profile')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="exampleInputUsername1">Github</label>
                                        <input type="text" name="github" class="form-control" id="github"  placeholder="Enter Your Github Link" value="{{ $profile->github }}">
                                        @error('github')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="exampleInputUsername1">Linkedin</label>
                                        <input type="text" name="linkedin" class="form-control" id="linkedin"  placeholder="Enter Your Linkedin Link" value="{{ $profile->linkedin }}" >
                                        @error('linkedin')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="exampleInputUsername1">Facebook</label>
                                        <input type="text" name="facebook" class="form-control" id="facebook"  placeholder="Enter Your Facebook Link" value="{{ $profile->facebook }}">
                                        @error('facebook')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="get_in_touch" class="form-label">Textarea</label>
                                        <textarea name="get_in_touch" class="form-control" id="summernote" placeholder="Get in Touch " >{{ $profile->get_in_touch }}</textarea>
                                        @error('get_in_touch')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="location">Location</label>
                                        <input type="text" name="location" class="form-control" id="location"  placeholder="Enter Your Location" value="{{ $profile->location }}">
                                        @error('location')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"  placeholder="Enter Your email" value="{{ $profile->email }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="number">Number</label>
                                        <input type="text" name="number" class="form-control" id="number"  placeholder="Enter Your Number" value="{{ $profile->number }}">
                                        @error('number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="resume">Cv Uplode:</label>
                                        <input type="file" name="resume" class="form-control" id="resume" value="{{ $profile->resume }}">>
                                        @error('resume')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="Freelance">Freelance</label>
                                        <input type="text" name="Freelance" class="form-control" id="Freelance"  placeholder="Enter Your Freelance" value="{{ $profile->Freelance }}">
                                        @error('Freelance')
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
