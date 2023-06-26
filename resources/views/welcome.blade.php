@extends('layout.layout')

@section('title', 'home')

@section('content')
    @auth
        <div class="columns is-multiline">
            @if ($tasks->count())
                @foreach ($tasks as $task)
                    <div class="column is-one-third">
                        <div class="card has-background-white">
                            <div class="card-header">
                                <p class="card-header-title">{{ $task->title }}</p>
                            </div>
                            <div class="card-content">
                                @if ($task->body)
                                    <div class="content">
                                        {!! $task->body !!}
                                    </div>
                                @endif
                            </div>
                            <footer class="card-footer">
                                <span class="card-footer-item"><a class="button is-success" href="#">Voltooid</a></span>
                                <span class="card-footer-item"><a href="/admin/tasks/{{ $task->id }}/edit" class="button is-warning">Aanpassen</a></span>
                                <span class="card-footer-item">
                                    <form method="POST" action="/admin/tasks/{{ $task->id }}">
                                        @csrf
                                        @method('DELETE')

                                        <button class="button is-danger">Verwijderen</button>
                                    </form>
                                </span>
                            </footer>
                        </div>
                @endforeach
            @else
                <div class="column">
                    <p class="is-size-1 has-text-centered has-text-weight-bold has-text-white">Er zijn nog geen taken</p>
                </div>
            @endif
        </div>
    @else
        <p class="is-size-1 has-text-centered has-text-weight-bold has-text-white">Hier komen taken te staan als je ingelogd bent</p>
    @endauth
@endsection
