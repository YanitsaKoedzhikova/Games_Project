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
<h1 style= " text-align: center" >Game</h1>

<table class="table table-bordered table-hover" style="width: 70%">
    <tr>
        <td width="20%">
            <strong>Game name:</strong>
        </td>
        <td>
            {{ $game->GameName }}
        </td>
    </tr>
    <tr>
        <td width="20%">
            <strong>Release Date:</strong>
        </td>
        <td>
            {{ $game->ReleaseDate }}
        </td>
    </tr>
    <tr>
        <td width="20%">
            <strong>Creator:</strong>
        </td>
        <td>
            {{ $game->Creator}}
        </td>
    </tr>
    <tr>
        <td width="20%">
            <strong>Genre:</strong>
        </td>
        <td>
            {{ $game->Genre }}
        </td>
    </tr>
    <tr>
        <td width="20%">
            <strong>Description:</strong>
        </td>
        <td>
            {{ $game->Description }}
        </td>
    </tr>
</table>
<div class="panel-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('games.index') }}"> Back</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection