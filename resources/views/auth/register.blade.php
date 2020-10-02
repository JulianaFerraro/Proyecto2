@extends('layouts.app')

@section('content')


@php 
  use App\Models\Gender;
  $genders=Gender::all();

  use App\Models\Document_Type;
  $document_types=Document_Type::all();

  use App\Models\Rol;
  $rol=Rol::all();

@endphp
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="<$document_types_id" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de documento') }}</label>

                            <div class="col-md-6">
                                <select name="document_types_id" id="document_types_id" class="form-control">
                                    @foreach($document_types as $document_types)
                                    <option value="{{ $document_types->id }}">{{ $document_types->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="docuement_number" class="col-md-4 col-form-label text-md-right">{{ __('Numero de documento') }}</label>

                            <div class="col-md-6">
                                <input id="docuement_number" type="text" class="form-control @error('docuement_number') is-invalid @enderror" name="docuement_number" value="{{ old('docuement_number') }}" required autocomplete="docuement_number" autofocus>

                                @error('docuement_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="names" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="names" type="text" class="form-control @error('name') is-invalid @enderror" name="names" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('names')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_names" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                            <input id="last_names" type="text" class="form-control @error('last_names') is-invalid @enderror" name="last_names" value="{{ old('last_names') }}" required autocomplete="last_names" autofocus>
                                @error('last_names')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birth_date" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}" required autocomplete="birth_date">

                                @error('birth_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Edad') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="age" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age">

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender_id" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <select name="gender_id" id="gender_id" class="form-control">
                                    @foreach($genders as $gender)
                                    <option value="{{ $gender->id}}">{{ $gender->names}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rol_id" class="col-md-4 col-form-label text-md-right">{{ __('Rol de ingreso') }}</label>

                            <div class="col-md-6">
                                <select name="rol_id" id="rol_id" clrolass="form-control">
                                    @foreach($rol as $rol)
                                    <option value="{{ $rol->id }}">{{ $rol->names}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registro') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
