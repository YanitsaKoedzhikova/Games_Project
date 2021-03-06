@extends('layouts.app')

@section('content')
        <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Games</title>

</head>
<body>
<h1>Edit</h1>
<div class="panel-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{action('GameController@update',$id)}}">
        <div class="form-group row">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PATCH">
            <label for="firstName" class="col-sm-2 col-form-label col-form-label-lg">Game Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" placeholder="Enter name:" name="GameName" value="{{$game ->GameName}}">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Date" class="col-sm-2 col-form-label col-form-label-lg">ReleaseDate</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput2" placeholder="ReleaseDate:" name="ReleaseDate" value="{{$game ->ReleaseDate}}">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Location" class="col-sm-2 col-form-label col-form-label-lg">Creator</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput6" placeholder="Creator:" name="Creator" value="{{$game ->Creator}}">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="ticketType" class="col-sm-2 col-form-label col-form-label-lg">Genre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput5" placeholder="Genre:" name="Genre" value="{{$game ->Genre}}">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="ticketType" class="col-sm-2 col-form-label col-form-label-lg">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput5" placeholder="Description:" name="Description" value="{{$game ->Description}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2"></div>
            <button type="submit" class="btn btn-small btn-info">Update</button>
            <div class="col-md-2"></div>
            <a class="btn btn-primary" href="{{ route('games.index') }}"> Back</a>
        </div>
    </form>
</div>


</body>
</html>
@endsection