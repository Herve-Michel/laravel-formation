@extends('layouts.main')

@section('content')

<h1>
    Update Training
</h1>
<form action="{{route('training.update', ['id' => $training->id])}}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$training->name}}">
    <br>
    <label for="length">length</label>
    <input type="number" name="length" id="length" value="{{$training->length}}">
    <br>
    <label for="max_people">max_people</label>
    <input type="number" name="max_people" id="max_people" value="{{$training->max_people}}">
    <br>
    <label for="type">type</label>
    <input type="radio" name="type" id="type" value="adulte" {{
        $training->type == 'adulte' ? 'checked' : ''
    }}>Adulte</radio>
    <input type="radio" name="type" id="type" value="enfant" {{
        $training->type == 'enfant' ? 'checked' : ''
    
    }}>Enfant</radio>
    <br>
    <button type="submit">Save</button>

    @endSection