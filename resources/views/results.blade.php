@extends('layout')

@section('header')

@stop

@section('content')
      
        <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Number</th>
                <th>Company Name</th>
                <th>Industry</th>
                <th>Province</th>
            </tr>
            </thead>
            <tbody>
              @foreach($InfoData as $info)
                <tr>
                    <td>{{ $info->id }}</td>
                    <td>{{ $info->fname }}</td>
                    <td>{{ $info->lname }}</td>
                    <td>{{ $info->email }}</td>
                    <td>{{ $info->number }}</td>
                    <td>{{ $info->cname }}</td>
                    <td>{{ $info->industry }}</td>
                    <td>{{ $info->province }}</td>
                </tr>
              @endforeach
            </tbody>
        </table>
        </div>
    
@stop

@section('footer')

@stop
