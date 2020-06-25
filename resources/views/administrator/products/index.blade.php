@extends('layouts.adminmaster')

@section('content')

    <div class="card">
        <div class="card-header">
            All Products
        </div>
        <div class="card-body">
            @if($products->count() > 0)
                <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Price</th>
                        <th class="th-sm">Discount</th>
                        <th class="th-sm">Unit</th>
                        <th class="th-sm">Description</th>
                        <th class="th-sm">Category</th>
                        <th class="th-sm">Action</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->discount}}</td>
                            <td>{{$product->unit}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->category->name}}</td>
                            <td colspan="2">
                                <a href="{{route('mngproducts.edit',$product->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>Edit
                                </a>
                                <span class="ml-4">
                            <button  class="btn btn-danger btn-sm"> <i class="fa fa-trash" aria-hidden="true"></i>Delete</button>
                        </span>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Price</th>
                        <th class="th-sm">Discount</th>
                        <th class="th-sm">Unit</th>
                        <th class="th-sm">Description</th>
                        <th class="th-sm">Category</th>
                        <th class="th-sm">Action</th>
                    </tr>
                    </tfoot>
                </table>

            @else
                <p>No products found
                    <a href="{{route('products.create')}}" class="btn btn-success">Create</a>
                </p>
            @endif


        </div>

    </div>

@endsection
