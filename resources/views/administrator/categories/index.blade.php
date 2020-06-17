@extends('layouts.adminmaster')

@section('content')

<div class="card">
    <div class="card-header">
        All Categories
    </div>
    <div class="card-body">
        @if($categories->count() > 0)
        <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm">Name</th>
                <th class="th-sm">Action</th>

            </tr>
            </thead>

            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td colspan="2">
                        <a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>Edit
                        </a>
                        <span class="ml-4">
                            <button onclick="handleDelete({{$category->id}})" class="btn btn-danger btn-sm"> <i class="fa fa-trash" aria-hidden="true"></i>Delete</button>
                        </span>
                    </td>

                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Name</th>
                <th>Action</th>

            </tr>
            </tfoot>
        </table>
            @include('partials.deletemodal')
        @else
        <p>No categories found
            <a href="{{route('categories.create')}}" class="btn btn-success">Create</a>
        </p>
        @endif


    </div>

</div>
@endsection
