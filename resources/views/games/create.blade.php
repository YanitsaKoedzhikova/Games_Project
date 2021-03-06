@extends('layouts.app')

@section('content')
        <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>
<body>
<h1>Create a new game</h1>
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

    <form method="post" action="{{url('/games')}}">
        <div class="form-group row">
            {{csrf_field()}}
            <label for="gameName" class="col-sm-2 col-form-label col-form-label-lg">Game Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" placeholder="Game Name:" name="GameName">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Date" class="col-sm-2 col-form-label col-form-label-lg">ReleaseDate</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput2" placeholder="ReleaseDate" name="ReleaseDate">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Location" class="col-sm-2 col-form-label col-form-label-lg">Creator</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput6" placeholder="Creator" name="Creator">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="ticketType" class="col-sm-2 col-form-label col-form-label-lg">Genre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput5" placeholder="Genre:" name="Genre">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="ticketType" class="col-sm-2 col-form-label col-form-label-lg">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput5" placeholder="Description:" name="Description">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2"></div>
            <input type="submit" class="btn btn-primary">
            <div class="col-xl-1"></div>
            <a class="btn btn-primary" href="{{ route('games.index') }}"> Back</a>
        </div>
    </form>
</div>
</body>
</html>
@endsection