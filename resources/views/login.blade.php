@extends('landing.landing')

@section('keyTitle', 'Login');


@section('maincontent')
<div class="container" style=" display: flex;justify-content: center;align-items: center;height: 100vh;">
    <form method="POST" action="{{ route('login') }}" class="centered-form" style="width: 100%; max-width: 350px;">
        @csrf
        <div class="formdesign" style="width: 350px; height: 400px;">
            <h3 class="pt-2 mt-2">Please Login First</h3>
            <input name="email" class="form-control" type="email" id=""><br>
            <input name="password" class="form-control" type="password" id=""><br>
            <button class="btn btn-primary p-2 m-2">Login</button><br>
            <br>
            <button class="btn btn-warning p-2 m-2"><a href="{{url('/all_register')}}">Register</a></button>
        </div>
    </form>
    
</div>



@endsection