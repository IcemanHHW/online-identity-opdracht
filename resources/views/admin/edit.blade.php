@extends('layout.layout')

@section('title', 'Taak bewerken')

@section('content')

    <h1 class="title">{{ $task->title }} bewerken</h1>

    <form method="POST" action="/admin/tasks/{{ $task->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="field">
            <label class="label has-text-white">Titel</label>
            <div class="control">
                <input class="input" type="text" id="title" name="title" value="{{ old('title', $task->title) }}" required>
            </div>
            @error('title')
                <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <label class="label has-text-white">Taak beschrijving</label>
            <div class="control">
                <textarea class="textarea" id="body" name="body" required>{{ old('body', $task->body) }}</textarea>
            </div>
            @error('body')
                <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Bewerken</button>
            </div>
        </div>
    </form>
@endsection
