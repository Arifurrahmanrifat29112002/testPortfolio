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
                                <form  action="{{ route('client.update',$client->id) }}" class="forms-sample" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $client->id }}">
                                    <input type="hidden" name="old_image" value="{{ $client->client_img }}">

                                    <div class="mb-3">
                                        <label for="service_img	">Client Image</label>
                                        <input type="file" name="client_img" class="form-control" id="image"><br>
                                        <div class="w-50px h-50px bg-inverse bg-opacity-25 d-flex align-items-center justify-content-center">
                                            <img alt="" id="showImage" class="mw-100 mh-100" src="{{ asset($client->client_img) }}">
                                        </div>
                                        @error('client_img')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class=" mb-3">
                                        <label for="client_link">Client Link</label>
                                        <input type="text" name="client_link" class="form-control" id="client_link"  placeholder="Enter Your Client Link" value="{{ $client->client_link }}" >
                                        @error('client_link')
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
