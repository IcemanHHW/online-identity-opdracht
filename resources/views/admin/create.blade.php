@extends('layout.layout')

@section('title', 'Nieuwe taak aanmaken')

@section('content')

    <h1 class="title">Nieuwe taak aanmaken</h1>

    <form method="POST" action="/admin/tasks" enctype="multipart/form-data">
        @csrf

        <div class="field">
            <label class="label has-text-white">Titel</label>
            <div class="control">
                <input class="input" type="text" id="title" name="title" required>
            </div>
            @error('title')
                <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <label class="label has-text-white">Taak beschrijving</label>
            <div class="control">
                <textarea class="textarea" id="body" name="body"></textarea>
            </div>
            @error('body')
                <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Aanmaken</button>
            </div>
        </div>
    </form>
@endsection
