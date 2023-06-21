@extends('admin.layout.main')
@section('title','Testimonial Add')


@section('content')
<div  class="app-content">
    <div class="d-flex align-items-center mb-3">
        <div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">PAGES</a></li>
                <li class="breadcrumb-item active">Testimonial Add</li>
            </ul>
            <h1 class="page-header mb-0"> Testimonial Add</h1>
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
                                <form  action="{{ route('testimonial.store') }}" class="forms-sample" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class=" mb-3">
                                        <label for="validationTextarea" class="form-label">Testimonial</label>
                                        <textarea name="testimonial" class="form-control" id="summernote"  ></textarea>
                                        @error('testimonial')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="testimonial_img">Profile</label>
                                        <input type="file" name="testimonial_img" class="form-control" id="testimonial_img">
                                        @error('testimonial_img')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="exampleInputUsername1">Testimonial Name</label>
                                        <input type="text" name="testimonial_name" class="form-control" id="testimonial_name"  placeholder="Enter Your Testimonial Name" >
                                        @error('testimonial_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="testimonial_title">Linkedin</label>
                                        <input type="text" name="testimonial_title" class="form-control" id="testimonial_title"  placeholder="Enter Your Testimonial Title" >
                                        @error('testimonial_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    {{-- <div class="mb-3">
                                        <label for="validationTextarea" class="form-label">Textarea</label>
                                        <textarea name="desc" class="form-control" id="summernote" required ></textarea>

                                    </div> --}}



                                    {{-- <div class="mb-3">
                                        <label class="form-label" for="profile"> Add your profile</label>
                                        <input type="file" class="form-control" id="profile" name="image" value="">
                                    </div> --}}

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
