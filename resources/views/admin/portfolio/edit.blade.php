@extends('admin.layout.main')
@section('title','Portfolio Edit')

@section('style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .select2-container--classic .select2-selection--multiple {
     background-color: #00000000;
     border: 1px solid #e8bfbf;
}
</style>
@endsection

@section('content')
<div  class="app-content">
    <div class="d-flex align-items-center mb-3">
        <div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">PAGES</a></li>
                <li class="breadcrumb-item active">Portfolio Edit</li>
            </ul>
            <h1 class="page-header mb-0"> Portfolio Edit</h1>
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
                                <form  action="{{ route('portfolio.update',$portfolio->id) }}" class="forms-sample" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $portfolio->id }}">
                                    <input type="hidden" name="old_image" value="{{ $portfolio->profile }}">
                                    <div class=" mb-3">
                                        <label for="portfolio_tag">Portfolio Tag:</label><br><br>
                                        <input type="text" name="portfolio_tag" class="form-control" id="portfolio_tag"  placeholder="Enter Your Name" value="{{ $portfolio->portfolio_tag }}">
                                        @error('portfolio_tag')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="project_name">Project Name :</label><br><br>
                                        <input type="text" name="project_name" class="form-control" id="project_name"  placeholder="Enter Your Designation" value="{{ $portfolio->project_name }}">
                                        @error('project_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="project_image">Profile Image :</label><br><br>
                                        <input type="file" name="project_image" class="form-control" id="image"><br>
                                        <div class="w-50px h-50px bg-inverse bg-opacity-25 d-flex align-items-center justify-content-center">
                                            <img alt="" id="showImage" class="mw-100 mh-100" src="{{ asset($portfolio->project_image) }}">
                                        </div>
                                        @error('project_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="project_tag">Project Tag Name :</label><br><br>
                                        <input type="text" name="project_tag" class="form-control" id="project_tag" value="{{ $portfolio->project_tag }}">
                                        @error('project_tag')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="project_dev_name">Project Devloper Name :</label><br>
                                        <input type="text" name="project_dev_name" class="form-control" id="project_dev_name" value="{{ $portfolio->project_dev_name }}">
                                        @error('project_dev_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="project_link">Project Link :</label><br>
                                        <input type="text" name="project_link" class="form-control" id="project_link" value="{{ $portfolio->project_link }}">
                                        @error('project_link')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="project_create">Project Create Date :</label><br>
                                        <input type="text" name="project_create" class="form-control" id="project_create" value="{{ $portfolio->project_create }}">
                                        @error('project_create')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="project_description">Project Description :</label><br>
                                        <textarea name="project_description" class="form-control" id="project_description" >{{ $portfolio->project_description }}"</textarea>
                                        @error('project_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="mb-3">
                                        <label>Technology Name:</label>
                                        <div class=" mt-3">
                                            <select class="js-example-basic-single form-control" multiple name="tags[]" value="{{ $portfolio->tags }}">
                                                @foreach (json_decode($portfolio->tags) as $item)
                                                    <option selected value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="mb-3">
                                        <label for="multi_image">Project Sub Image :</label><br>
                                        <input type="file" name="multi_image[]" multiple class="form-control" id="image"><br>
                                        <div class="w-50px h-50px bg-inverse bg-opacity-25 d-flex align-items-center justify-content-center">
                                            <img alt="" id="showImage" class="mw-100 mh-100" src="{{ asset($portfolio->project_sub_img) }}">
                                        </div>
                                        @error('profile')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="project_video_link">Project Video Link :</label><br>
                                        <input type="text" name="project_video_link" class="form-control" id="project_video_link" value="{{ $portfolio->project_video_link }}">
                                        @error('project_video_link')
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('.js-example-basic-single').select2({
        theme: "classic",
        tags: true
    });
</script>




<script type="text/javascript">

    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
