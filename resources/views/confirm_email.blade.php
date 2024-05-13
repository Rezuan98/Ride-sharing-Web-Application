@extends('landing.landing')

@section('keyTitle', 'Confirm Email')

@section('maincontent')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3" style="background-color: rgba(130, 130, 197, 0.555)">
            <h3>Verify Your Email</h3>
            <p>we sent a confirmation code to your given email.please check your email and enter the code to log in</p>
            <form method="get" action="{{ route('confirm.code') }}">
                @csrf
                <div class="form-group">
                    <label for="confirmation_code">Confirmation Code</label>
                    <input type="text" class="form-control" id="confirmation_code" name="confirmation_code" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
