@extends('layouts.main')


@section('content')

<ul class="list-group">

    @foreach ($trainings as $training)
    <li class="list-group-item">{{$training->name}} ;
        @if ($training->type == 'adulte')
        Adulte
        @else
        Enfant
        @endif
        <a class="btn btn-primary" href="{{route('training.edit', ['id' => $training->id])}}">Edit</a>

        <form action="{{route('training.destroy', ['id' => $training->id])}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>

    </li>

    @endforeach
</ul>

@endsection