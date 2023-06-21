@extends('admin.layout.main')
@section('title','Profile View')

@section('style')

@endsection

@section('content')

<div id="content" class="app-content">
    <div class="d-flex align-items-center mb-3">
        <div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">PAGES</a></li>
                <li class="breadcrumb-item active">Profile View</li>
            </ul>
            <h1 class="page-header mb-0">Profile View</h1>
        </div>
    </div>

    <div class="card">
        <div class="tab-content p-4">
            <div class="tab-pane fade show active" id="allTab">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Profile</th>
                                    <th scope="col">Github</th>
                                    <th scope="col">Linkedin</th>
                                    <th scope="col">Facebook</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($profiles as $profile)
                                    <tr>
                                        <td class="w-10px align-middle">{{ $profile->id }}</td>
                                        <td class="align-middle">{{ $profile->name }}</td>
                                        <td class="align-middle">{{ $profile->designation }}</td>
                                        <td class="align-middle">
                                            <div class="w-80px h-80px d-flex align-items-center justify-content-center">
                                                <img alt="" class="mw-100 mh-100" src="{{ asset($profile->profile) }}">
                                            </div>
                                        </td>

                                        <td class="align-middle">{{ $profile->github }}</td>
                                        <td class="align-middle">{{ $profile->linkedin }}</td>
                                        <td class="align-middle">{{ $profile->facebook }}</td>
                                        <td class="align-middle">
                                            <a href="{{ url('profile/edit/'.$profile->id) }}"> <i class="far fa-lg fa-fw me-2 fa-edit"></i> </a>
                                            <a href="{{ url('profile/delete/'.$profile->id) }}" id="delete"> <i class="fas fa-lg fa-fw me-2 fa-trash" ></i></a>


                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>




                <div class="d-md-flex align-items-center">
                    <div class="me-md-auto text-md-left text-center mb-2 mb-md-0">
                        Showing 1 to 05 of 10 entries
                    </div>
                    <ul class="pagination mb-0 justify-content-center">
                        <li class="page-item disabled"><a class="page-link">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-arrow">
            <div class="card-arrow-top-left"></div>
            <div class="card-arrow-top-right"></div>
            <div class="card-arrow-bottom-left"></div>
            <div class="card-arrow-bottom-right"></div>
        </div>
    </div>


</div>
@include('admin.alert')
@endsection





@section('script')
    <script src="{{ asset('backend/assets/plugins/%40highlightjs/cdn-assets/highlight.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/demo/highlightjs.demo.js') }}"></script>


@endsection




