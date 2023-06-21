@extends('admin.layout.main')
@section('title','Profile')


@section('content')
<div  class="app-content">
    <div class="d-flex align-items-center mb-3">
        <div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">PAGES</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ul>
            <h1 class="page-header mb-0"> Profile</h1>
        </div>

        <div class="ms-auto">
            <a href="" class="btn btn-outline-theme"> All Blog</a>
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
                                <form  action="{{ route('profile.store') }}" class="forms-sample" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class=" mb-3">
                                        <label for="exampleInputUsername1">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"  placeholder="Enter Your Name" >
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="exampleInputUsername1">Designation</label>
                                        <input type="text" name="designation" class="form-control" id="designation"  placeholder="Enter Your Designation" >
                                        @error('designation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1">Profile</label>
                                        <input type="file" name="profile" class="form-control" id="profile"><br>
                                        <div class="w-50px h-50px bg-inverse bg-opacity-25 d-flex align-items-center justify-content-center">
                                            <img alt="" id="showImage" class="mw-100 mh-100">
                                        </div>
                                        @error('profile')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="exampleInputUsername1">Github</label>
                                        <input type="text" name="github" class="form-control" id="github"  placeholder="Enter Your Github Link" >
                                        @error('github')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="exampleInputUsername1">Linkedin</label>
                                        <input type="text" name="linkedin" class="form-control" id="linkedin"  placeholder="Enter Your Linkedin Link" >
                                        @error('linkedin')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class=" mb-3">
                                        <label for="exampleInputUsername1">Facebook</label>
                                        <input type="text" name="facebook" class="form-control" id="facebook"  placeholder="Enter Your Facebook Link" >
                                        @error('facebook')
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
