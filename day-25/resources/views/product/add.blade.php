@extends('master')

@section('title')
    Add Product Page
@endsection

@section('body')
    <section class="py-3 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">

                        <div class="card-header font-weight-bolder text-center bg-success text-white">
                            Add Product Form
                        </div>

                        <div class="card-body shadow-lg">
                            <h4 class="text-success text-center">{{ Session::get('message') }}</h4>
                            <form action="{{ route('add-product') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label for="" class="col-md-3">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="category" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3">Brand Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="brand" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3">Product Price</label>
                                    <div class="col-md-9">
                                        <input type="number" name="price" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3">Product Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" id="" cols="" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control-file"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="" class="btn btn-success" value="Add Product"/>
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
