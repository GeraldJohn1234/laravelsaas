@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-container pb-5 px-5 pt-3 bg-dark rounded mt-5 text-light">

                <form class="signup-form" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="ic">
                        <i class="ic fa fa-user-plus"></i>
                    </div>
                    <label for="inputPassword">Name</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <label for="inputPassword">LastNAme</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input id="last_name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Lastname" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <label for="inputPassword">Password</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-key" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input id="password" data-toggle="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                        @error('password')
                        <div class="input-group-append">
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        </div>
                        @enderror
                        <div class="input-group-append">
                            <span class="input-group-text " id="eye">
                                <i class="fa fa-eye toggle-password" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    <label for="inputPassword">Confirm-Password</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-key" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input id="password-confirm" data-toggle="password" type="password" class="form-control" name="password_confirmation" placeholder="Confirm-Password" required autocomplete="new-password">
                        <div class="input-group-append">
                            <span class="input-group-text eye" id="eyed">
                                <i class="fa fa-eye toggle-password" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    <div class="text-center">
                        <span class="term rmsg"></span>
                    </div>
                    <hr />
                    <label for="inputPassword">Email Adress</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                @
                            </span>
                        </div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Adress" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="text-center">
                        <span class="term emsg"></span>
                    </div>
                    <div class="term">
                        <label class="">
                            <input type="checkbox" required> I agree with the
                        </label>
                        <a href="#"> Terms & Conditions </a>
                        <span>for Registration</span>
                    </div>
                    <input type="submit" id="signup" class="btn btn-primary btn-block" value="SIGN UP">
                    <div class="opt1 text-center">
                        <p>Already register? <a id="a" href="/">Sign in</a></p>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection