@extends('master')

@section('title')
    Edit Student Page
@endsection

@section('body')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-warning font-weight-bolder  text-center">
                            Edit Student Form
                        </div>
                        <div class="card-body shadow-lg">
                            <h4 class="text-success text-center">{{ Session::get('message') }}</h4>
                            <form action="{{ route('update-student', ['id'=> $student->id] ) }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="{{ $student->name }}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" value="{{ $student->email }}" name="email" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Mobile</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" value="{{ $student->mobile }}" name="mobile" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-block btn-outline-success" name="" value="Update Student" />
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
