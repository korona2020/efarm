@extends('layouts.adminmaster')

@section('content')
<div class="card">
    <div class="card-header">
        {{isset($category) ? 'Edit Category' : 'Add Category'}}
    </div>
    <div class="card-body">
        @if(empty($category))
            {!! Form::open(['route'=>'categories.store']) !!}
            <div class="form-group">
                {!! Form::label('name','Name') !!}
                {!! Form::text('name',null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create', ['class'=>'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
        @endif
            @if(!empty($category))

                {!! Form::model($category,['method'=>'PUT','route'=>['categories.update',$category->id]]) !!}

                <div class="form-group">
                    {!! Form::label('name','Name') !!}
                    {!! Form::text('name',null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Edit', ['class'=>'btn btn-success']) !!}
                </div>

            {!! Form::close() !!}
        @endif

        @include('partials.errors')
    </div>
</div>

@endsection
