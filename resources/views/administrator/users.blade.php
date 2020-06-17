@extends('layouts.adminmaster')

@section('content')

    <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th class="th-sm">Name</th>
            <th class="th-sm">Email</th>
            <th class="th-sm">Role</th>
            <th class="th-sm">Action</th>

        </tr>
        </thead>

        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td></td>

            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>

        </tr>
        </tfoot>
    </table>
@endsection
