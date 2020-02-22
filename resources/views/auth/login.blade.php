<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <meta name="description" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('css/login/style.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('css/login/form.css') }}">
</head>
<body>

<!-- particles.js container -->
<div id="particles-js">

<div class="wrapper fadeInDown">
    <div id="formContent">

        <!-- Icon -->
        <div class="fadeIn first mt-3">
            <img src="{{ asset('img/ceind.jpg') }}" id="icon" alt="User Icon" />
        </div>
        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <input type="email" id="email" class="fadeIn second" name="email" placeholder="E-mail" value="{{old('email') }}" required autofocus>
                        {{-- errors E-mail--}}
                    <div class="col-sm-12 m-2">
                        <small style="color: red;"> {{  $errors->first('email',':message')}} </small>
                    </div>

            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password"  required>
                {{--errors password--}}
                        <div class="col-sm-12 m-2">
                            <small style="color: red;"> {{  $errors->first('password',':message')}} </small>
                        </div>
            <input type="submit" class="fadeIn fourth" value="Ingresar">

            <div class="custom-control custom-checkbox mb-3 p-3">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Recordar Contraseña</label>
            </div>

        </form>
    </div>
</div>
</div>


<script src="{{asset('js/login/particles.js')}}"></script>
<script src="{{asset('js/login/app.js')}}"></script>

</body>
</html>    