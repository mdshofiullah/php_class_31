@extends('master')

@section('title')
    Manage Blogs Page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-lg">
                        <div class="card-header font-weight-bolder bg-warning text-center">All Blogs</div>
                        <div class="card-body">
                            <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                            <table class="table table-bordered table-hover">
                                <thead class="text-center">
                                <tr>
                                    <th>Sl. No</th>

                                    <th>Blog Title</th>
                                    <th>Blog Author</th>
                                    <th>Blog Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                @foreach($blogs as $blog)
                                    <tr>
                                        {{--                              loop iteration is build in function that increment & count loop count  --}}
                                        <td>{{$loop->iteration}}</td>

                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->author }}</td>
                                        <td>{{ $blog->description }}</td>
                                        <td>
                                            <a href="{{ route('edit-blog',['id'=> $blog->id]) }}" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
