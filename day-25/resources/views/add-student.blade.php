@extends('master')

@section('title')
    Add Student Page
@endsection

@section('body')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-warning font-weight-bolder  text-center">
                            Add Student Form
                        </div>
                        <div class="card-body shadow-lg">
                            <h4 class="text-success text-center">{{ Session::get('message') }}</h4>
                            <form action="{{ route('new-student') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Mobile</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-block btn-outline-success" name="" value="Create New Student" />
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
