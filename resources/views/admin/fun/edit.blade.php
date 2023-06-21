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
                                <form  action="{{ route('fun.update',$fun->id) }}" class="forms-sample" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $fun->id }}">
                                    <div class=" mb-3">
                                        <label for="service_title">Fun icon</label>
                                        <input type="text" name="icon" class="form-control" id="icon"  placeholder="Enter Your icon" value="{{ $fun->icon }}" >
                                        @error('icon')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="icon_title">Fun Title</label>
                                        <input type="text" name="icon_title" class="form-control" id="icon_title"  placeholder="Enter Your icon" value="{{ $fun->icon_title }}" >
                                        @error('icon_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="icon_time">Fun Time </label>
                                        <input type="text" name="icon_time" class="form-control" id="icon_time"  placeholder="Enter Your icon Time" value="{{ $fun->icon_time }}">
                                        @error('icon_time')
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
