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
                                @if ($task->is_complete)
                                    <p class="card-header-title"><s>{{ $task->title }}</s></p>
                                @else
                                    <p class="card-header-title">{{ $task->title }}</p>
                                @endif
                                <span
                                    class="card-header-title has-text-weight-light has-text-right"><time><time>{{ $task->created_at->format('d-m-Y H:i') }}</time></time></span>
                            </div>
                            @if ($task->body)
                                <div class="card-content">
                                    <div class="content">
                                        @if ($task->is_complete)
                                            <s>{!! $task->body !!}</s>
                                        @else
                                            {!! $task->body !!}
                                        @endif
                                    </div>
                                </div>
                            @endif
                            <footer class="card-footer">
                                @if ($task->is_complete == false)
                                    <span class="card-footer-item">
                                        <form method="POST" action="/admin/tasks/{{ $task->id }}/complete">
                                            @csrf
                                            @method('PATCH')

                                            <button class="button is-success">Voltooid</button>
                                        </form>
                                    </span>
                                    <span class="card-footer-item"><a href="/admin/tasks/{{ $task->id }}/edit"
                                            class="button is-warning">Aanpassen</a>
                                    </span>
                                @endif
                                <span class="card-footer-item">
                                    <form method="POST" action="/admin/tasks/{{ $task->id }}">
                                        @csrf
                                        @method('DELETE')

                                        <button class="button is-danger">Verwijderen</button>
                                    </form>
                                </span>
                            </footer>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="column">
                    <p class="is-size-1 has-text-centered has-text-weight-bold has-text-white">Er zijn nog geen taken</p>
                </div>
            @endif
        </div>
    @else
        <p class="is-size-1 has-text-centered has-text-weight-bold has-text-white">Hier komen taken te staan als je ingelogd
            bent</p>
    @endauth
@endsection
