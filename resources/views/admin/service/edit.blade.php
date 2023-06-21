@extends('admin.layout.main')
@section('title','Service Edit')


@section('content')
<div  class="app-content">
    <div class="d-flex align-items-center mb-3">
        <div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">PAGES</a></li>
                <li class="breadcrumb-item active">Service Edit</li>
            </ul>
            <h1 class="page-header mb-0"> Service Edit</h1>
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
                                <form  action="{{ route('service.update',$service->id) }}" class="forms-sample" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $service->id }}">
                                    <input type="hidden" name="old_image" value="{{ $service->service_img }}">

                                    <div class="mb-3">
                                        <label for="service_img">Service Image</label>
                                        <input type="file" name="service_img" class="form-control" id="service_img">
                                        @error('service_img')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="service_title">Service Title</label>
                                        <input type="text" name="service_title" class="form-control" id="github"  placeholder="Enter Your Service Title" value="{{ $service->service_title }}">
                                        @error('service_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="Service Description" class="form-label"></label>
                                        <textarea name="service_dec" class="form-control" id="summernote"  >{{ $service->service_dec }}</textarea>
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
