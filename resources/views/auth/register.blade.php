@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">

        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="nickname" required="required" autofocus>
            <label for="floatingEmail">Nickname:</label>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email address</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <select class="form-select form-floating mb-3" aria-label="Default select example" name="user_type" id="user_type">
            <option selected>Selecione o tipo de usuario</option>
            <option value="2">Lab</option>
            <option value="3">Marketing</option>
            <option value="4">Recepção</option>
          </select>

        <!--
//ESTAVA UTILIZANDO ESTA PARTE DO CODIGO PARA VALIDAR QUAL SERIA O TIPO DE USUARIO, PORÉM RESOLVI LANÇAR TODOS OS USERS CRIADOS COMO EMPLOOYES

        <div class="form-group form-floating mb-3">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="admin" name="admin" value="1" {{ old('admin') == '1' ? 'checked' : ''}}/>
                <label class="form-check-label" for="inlineCheckbox1">ADMIN</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="employee" name="employee" value="1" {{ old('employee') == '1' ? 'checked' : ''}} />
                <label class="form-check-label" for="inlineCheckbox2">FUNCIONARIO</label>
            </div>

        </div>
    -->
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation"
                value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

        @include('auth.partials.copy')
    </form>
@endsection
