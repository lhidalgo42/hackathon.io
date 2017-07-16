@extends('layout.app')
@section('content')
    <div class="container" style="padding-top: 60px;">
        <form class="form-horizontal">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Nombre</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ Input::old('name') }}"
                           placeholder="Nombre"
                           required>

                    @if ($errors->has('name'))
                        <span class="help-block">
                                                                        <strong>{{ $errors->first('name') }}</strong>
                                                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                <label for="lastname" class="col-md-4 control-label">Apellidos</label>

                <div class="col-md-6">
                    <input id="lastname" type="text" class="form-control" name="lastname" value="{{ Input::old('lastname') }}"
                           placeholder="Apellidos" required>

                    @if ($errors->has('lastname'))
                        <span class="help-block">
                                                                <strong>{{ $errors->first('lastname') }}</strong>
                                                            </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('rut') ? ' has-error' : '' }}">
                <label for="rut" class="col-md-4 control-label">Rut</label>

                <div class="col-md-6">
                    <input id="rut" type="text" class="form-control" name="rut" value="{{ Input::old('rut') }}" placeholder="Rut"
                           required>

                    @if ($errors->has('rut'))
                        <span class="help-block">
                                                                <strong>{{ $errors->first('rut') }}</strong>
                                                            </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('dni_number') ? ' has-error' : '' }}">
                <label for="dni_number" class="col-md-4 control-label">Numero de Serie</label>

                <div class="col-md-6">
                    <input id="dni_number" type="text" class="form-control" name="dni_number"
                           value="{{ Input::old('dni_number') }}"
                           placeholder="Numero de Serie" required>

                    @if ($errors->has('dni_number'))
                        <span class="help-block">
                                                                <strong>{{ $errors->first('dni_number') }}</strong>
                                                            </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Direccion de Correo</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ Input::old('email') }}"
                           placeholder="Direccion de Correo"
                           required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                <label for="phone" class="col-md-4 control-label">Telefono</label>

                <div class="col-md-6">
                    <input id="phone" type="text" class="form-control" name="phone" value="{{ Input::old('phone') }}"
                           placeholder="Telefono"
                           required>

                    @if ($errors->has('phone'))
                        <span class="help-block">
                                                                <strong>{{ $errors->first('phone') }}</strong>
                                                            </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('birth_date') ? ' has-error' : '' }}">
                <label for="birth_date" class="col-md-4 control-label">Fecha de Nacimiento</label>

                <div class="col-md-6">
                    <input id="birth_date" type="date" class="form-control" name="birth_date"
                           value="{{ Input::old('birth_date') }}" data-date-format="YYYY-MM-DD"
                           placeholder="Fecha de Nacimiento" required>

                    @if ($errors->has('birth_date'))
                        <span class="help-block">
                                                                <strong>{{ $errors->first('birth_date') }}</strong>
                                                            </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                <label for="address" class="col-md-4 control-label">Direccion</label>

                <div class="col-md-6">
                    <input id="address" type="text" class="form-control" name="address" value="{{ Input::old('address') }}"
                           placeholder="Direccion" required>

                    @if ($errors->has('address'))
                        <span class="help-block">
                                                                <strong>{{ $errors->first('address') }}</strong>
                                                            </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Contrasena</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" value="{{ Input::old('password') }}"
                           placeholder="Contrasena" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('password2') ? ' has-error' : '' }}">
                <label for="password2" class="col-md-4 control-label">Confirme la Contrasena</label>

                <div class="col-md-6">
                    <input id="password2" type="password" class="form-control" name="password2"
                           value="{{ Input::old('password2') }}"
                           placeholder="Confirme la Contrasena" required>

                    @if ($errors->has('password2'))
                        <span class="help-block">
                                                                <strong>{{ $errors->first('password2') }}</strong>
                                                            </span>
                    @endif
                </div>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="sbif"> Accepta la posibilidad de acceder a sus informes en el Sbif
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="tyc"> Accepta los Terminos y condiciones de Servicio
                </label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Registro</button>
        </form>
    </div>

@endsection