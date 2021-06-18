@extends('layouts.app')

@section('content')
<div class="container toLog d-flex justify-content-around allFont "> 

            <div class="row card text-white align-self-center bg-dark mb-3" style="max-width: 30rem;">
            <div class="forBg">
            <div class="card-header forBg">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
                    
      

        <div class="row ">
            <div class="col-md-12 forBg mar">
                <div class="form-container opacity pb-5 px-5 pt-3 this rounded mt-5 text-light ">
                
                    <form method="POST" action="{{ route('login') }}" class="">
                        @csrf
                        <div class="ic mb-3">
                            <!-- <i class="ic fa fa-user-circle"></i> -->
                            <h2>Work<span>Kit</span></h2>
                            <h5 class="myfonts">Log in to your acount</h5>
                        </div>

                        <label for="user">E-Mail Address</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                            </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  required placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="user">Password</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                            </span>
                            </div>
                            <input id="password" data-toggle="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="input-group-append ">
                                <span class="input-group-text" id="eye">
                                    <i class="fa fa-eye toggle-password" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                            <div class="form-group row">
                                <div class="col-md-4 ml-0 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember_Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                        <input type="submit" class="btn btn-primary btn-block" value="LOGIN">
                        <div class="form-group row mb-0 row justify-content-center">
                                <div class="text-center">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
                                    @endif
                                </div>
                        </div>
                        <div class="opt1 text-center">
                            <p>Not register? <a href="{{ route('register') }}">Create an Acount</a></p>
                        </div>
                    </form>
            
                </div>
            </div>
        </div>
    </div>
@endsection