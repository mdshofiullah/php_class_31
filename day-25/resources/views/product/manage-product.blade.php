@extends('master')

@section('title')
    Manage Product Page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-lg">
                        <div class="card-header font-weight-bolder bg-success text-white text-center">All Products</div>
                        <div class="card-body">
                            <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                            <table class="table table-bordered table-hover">
                                <thead class="text-center">
                                <tr>
                                    <th>Sl. No</th>
                                    <th>Product Id</th>
                                    <th>Product Name</th>
                                    <th>Product Category</th>
                                    <th>product Brand</th>
                                    <th>Product Price</th>
                                    <th>Product Description</th>
                                    <th>Product Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                {{--                              loop iteration is build in function that increment & count loop count  --}}
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category }}</td>
                                        <td>{{ $product->brand }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td><img src="{{ asset($product->image) }}" alt="" height="100" width="120" /></td>
                                        <td>
                                            <a href="{{ route('edit-product', ['id' => $product->id]) }}" >
                                                <i class="fa fa-edit text-success"></i>
                                            </a>
                                            <a href="" onclick="deleteProduct({{ $product->id }})">
                                                <i class="fas fa-trash-alt text-danger"></i>
                                            </a>
                                            <form action="{{ route('delete-product',['id' => $product->id]) }}" id="deleteProductForm{{ $product->id }}" method="post">
                                                @csrf
                                            </form>
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
    <script>
        function deleteProduct(id)
        {
            // alert('test');
            event.preventDefault();
            var check = confirm('Are You sure You want to delete this?');
            if (check)
            {
                document.getElementById('deleteProductForm'+id).submit();
            }
        }
    </script>
@endsection
