@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="text-danger" >
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="text-danger" >
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<!-- 
<div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <input type="hidden" name="url" id="url" value="{{url('/')}}">
                                <button type="submit" class="primary-btn white mr-1 get-login-access">Super Admin</button>
                                <button type="submit" class="primary-btn white ml-1 mr-1 get-login-access">Admin</button>
                                <button type="submit" class="primary-btn white ml-1 mr-1 get-login-access">Teacher</button>
                                <button type="submit" class="primary-btn white ml-1 get-login-access">Accountant</button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-center mt-10">
                                <button type="submit" class="primary-btn white mr-1 get-login-access">Receptionist</button>
                                <button type="submit" class="primary-btn white ml-1 mr-1 get-login-access">Librarian</button>
                                <button type="submit" class="primary-btn white ml-1 mr-1 get-login-access">Student</button>
                                <button type="submit" class="primary-btn white ml-1 get-login-access">Parent</button>
                            </div>
                        </div>
                    </div> -->
