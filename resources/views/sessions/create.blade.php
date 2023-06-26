@extends('layout.layout')

@section('title', 'Inloggen')

@section('content')

    <h1 class="title">Inloggen</h1>

    <form method="POST" action="/login">
        @csrf

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label has-text-white">Email</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <input class="input" type="email" id="email" name="email" value="{{ old('email') }}"
                            required>
                    </div>
                    @error('email')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label has-text-white">Wachtwoord</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <input class="input" type="password" id="password" name="password" required>
                    </div>
                    @error('password')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label">
                <!-- Left empty for spacing -->
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-success">Inloggen</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
