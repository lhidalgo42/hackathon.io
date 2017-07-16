@extends('layout.app')
@section('content')
{{ Form::open(['route'=> 'sessions.store','class'=>'form-signin']) }}
<h2 class="form-signin-heading">Ingrese sus datos</h2>
<label for="inputEmail" class="sr-only">Direccion de Correo</label>
{{ Form::email('email', Input::old('email'), array('placeholder' => 'Correo','class' => 'form-control','id' => 'mail','required','autofocus')) }}
<label for="inputPassword" class="sr-only">Password</label>
{{ Form::password('password',array('placeholder' => 'Contraseña','class' => 'form-control', 'id' => 'pass' ,'required')) }}

<div class="row" style="text-align: center">
    @if(Session::has('error'))
        <span class="text-danger">{{Session::get('error')}}</span>
    @endif
    @if(Session::has('info'))
        <span class="text-primary">{{Session::get('info')}}</span>
    @endif
</div>
<div class="checkbox">
    <label>
        {{ Form::checkbox('remember', true) }} Recordarme
    </label>
</div>
<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
{{ Form::close() }}

@endsection
@section('css')
    <style>
        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin .checkbox {
            font-weight: normal;
        }
        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
@endsection