@extends('layout.layout')

@section('title', 'Registreren')

@section('content')

    <h1 class="title">Registreren</h1>

    <form method="POST" action="/register">
        @csrf

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Gebruikersnaam</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <input class="input" type="text" id="username" name="username" value="{{ old('username') }}"
                            required>
                    </div>
                    @error('username')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Email</label>
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
                <label class="label">Wachtwoord</label>
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
                        <button type="submit" class="button is-primary"> Registreren</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
