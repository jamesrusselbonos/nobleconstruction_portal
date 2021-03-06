@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="padding-top: 60px;">
        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12" style="padding-top: 100px;">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                    <img src="{{ asset('images/logo.png') }}" class="picture2">
                    
                    
                </div>
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10" style="padding-left: 35px; padding-right: 25px;">
                    <h5>Welcome!</h5>
                    <h2 class="" style="font-weight: bold; font-size: 3em;">
                        NOBLE CONSTRUCTION PORTAL
                    </h2>
                    <h6 class="client_address" style="padding-right: 50px;">
                        From the blueprints to the finishing touches, Noble offers peace of mind
                    </h6>
                </div>
            </div>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
            <div class="card">
                <!-- <div class="card-header">{{ __('Register') }}</div> -->

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                            <div class="col-md-8">
                               <!-- <input name="phone_number" id="phone_number" type="tel" class="form-control"> -->

                               <input type="tel"name ="phone_number" id="phone1" value="" required>

                               <!-- <input type="tel" class="hide" id="hiden"> -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">Address</label>

                            <div class="col-md-8">
                                <input id="address" type="text" class="form-control" name="client_address" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
