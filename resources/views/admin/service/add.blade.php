@extends('admin.layout.main')
@section('title','Service Add')


@section('content')
<div  class="app-content">
    <div class="d-flex align-items-center mb-3">
        <div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">PAGES</a></li>
                <li class="breadcrumb-item active">Service Add</li>
            </ul>
            <h1 class="page-header mb-0"> Service Add</h1>
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
                                <form  action="{{ route('service.store') }}" class="forms-sample" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="service_img	">Service Image</label>
                                        <input type="file" name="service_img" class="form-control" id="service_img	">
                                        @error('service_img	')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class=" mb-3">
                                        <label for="service_title">Testimonial Name</label>
                                        <input type="text" name="service_title" class="form-control" id="service_title"  placeholder="Enter Your Service Title	" >
                                        @error('service_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="Service Description" class="form-label"></label>
                                        <textarea name="service_dec" class="form-control" id="summernote" placeholder="Please Input Your Service Description Details" ></textarea>
                                        @error('service_dec')
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
