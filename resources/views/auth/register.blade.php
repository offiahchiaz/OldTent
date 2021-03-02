{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}"  autocomplete="firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}"  autocomplete="lastname">

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_status" class="col-md-4 col-form-label text-md-right">{{ __('Join Tent As?') }}</label>

                            <div class="col-md-6">
                                @error('user_status')
                                    <p style="width: 100%; margin-top: 0.25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </p>
                                @enderror
                                <ul class="list-group">
                                    <label for="member">
                                        <li class="list-group-item">
                                            <input type="radio" name="user_status"
                                            {{ old('user_status') == 'member' ? 'checked' : '' }}  
                                            id="member" value="member" onclick="userFunction()">
                                            A member 
                                        </li>
                                    </label>
                                    <label for="host">
                                        <li class="list-group-item">
                                            <input type="radio" name="user_status"
                                            {{ old('user_status') == 'host' ? 'checked' : '' }}  
                                            id="host" value="host" onclick="userFunction()">
                                            A host 
                                        </li>
                                    </label>
                                </ul>

                                <div id="displayMember" class="message-info">
                                    As a Tent member, you can view and subscribe to spaces listed on Tent. 
                                    Additionally, you can switch this account to access host benefits.
                                </div>

                                <div id="displayHost" class="message-info">
                                    As a Tent Host, you can list spaces and earn on Tent. 
                                    Additionally, you can switch this account to access member benefits.
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
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
@endsection --}}






@extends('layouts.new-app')

@section('content')

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="firstname" type="text" class="form-control form-control-user @error('firstname') is-invalid @enderror" 
                                        name="firstname" value="{{ old('firstname') }}" placeholder="First Name" autocomplete="firstname" autofocus>

                                    @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input id="lastname" type="text" class="form-control form-control-user @error('lastname') is-invalid @enderror" 
                                        name="lastname" value="{{ old('lastname') }}" placeholder="Last Name"  autocomplete="lastname">

                                    @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" 
                                    name="email" value="{{ old('email') }}" placeholder="Email Address" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            {{-- <div class="form-group row">

                                @error('user_status')
                                    <p style="width: 100%; margin-top: 0.25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </p>
                                @enderror
                                <ul class="list-group">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="member">
                                            <li class="list-group-item">
                                                <input type="radio" class="form-control-user" name="user_status"
                                                {{ old('user_status') == 'member' ? 'checked' : '' }}  
                                                id="member" value="member" onclick="userFunction()">
                                                A member 
                                            </li>
                                        </label>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="host">
                                            <li class="list-group-item">
                                                <input type="radio" class="form-control form-control-user" name="user_status"
                                                {{ old('user_status') == 'host' ? 'checked' : '' }}  
                                                id="host" value="host" onclick="userFunction()">
                                                A host 
                                            </li>
                                        </label>
                                    </div>
                                </ul>

                                <div id="displayMember" class="message-info">
                                    As a Tent member, you can view and subscribe to spaces listed on Tent. 
                                    Additionally, you can switch this account to access host benefits.
                                </div>

                                <div id="displayHost" class="message-info">
                                    As a Tent Host, you can list spaces and earn on Tent. 
                                    Additionally, you can switch this account to access member benefits.
                                </div>
                            </div> --}}

                            <div class="form-group row">
                                {{-- <label for="user_status" class="col-md-4 col-form-label text-md-right">{{ __('Join Tent As?') }}</label> --}}
    
                                <div class="col-sm-6">
                                    @error('user_status')
                                        <p style="width: 100%; margin-top: 0.25rem; font-size: 80%; color: #e3342f;" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </p>
                                    @enderror
                                    <ul class="list-group d-flex justify-content-between">
                                        <label for="member">
                                            <li class="list-group-item" style="font-size: 0.9rem; border-radius: 10rem; padding: 0.8rem 1rem;">
                                                <input type="radio" name="user_status"
                                                {{ old('user_status') == 'member' ? 'checked' : '' }}  
                                                id="member" value="member" onclick="userFunction()">
                                                A member 
                                            </li>
                                        </label>
                                        <label for="host">
                                            <li class="list-group-item"  style="font-size: 0.9rem; border-radius: 10rem; padding: 0.8rem 1rem;">
                                                <input type="radio" name="user_status"
                                                {{ old('user_status') == 'host' ? 'checked' : '' }}  
                                                id="host" value="host" onclick="userFunction()">
                                                A host 
                                            </li>
                                        </label>
                                    </ul>
    
                                    {{-- <div id="displayMember" class="message-info">
                                        As a Tent member, you can view and subscribe to spaces listed on Tent. 
                                        Additionally, you can switch this account to access host benefits.
                                    </div>
    
                                    <div id="displayHost" class="message-info">
                                        As a Tent Host, you can list spaces and earn on Tent. 
                                        Additionally, you can switch this account to access member benefits.
                                    </div> --}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" 
                                    name="password" placeholder="Password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input id="password-confirm" type="password" class="form-control  form-control-user" 
                                        name="password_confirmation" placeholder="Repeat Password"  autocomplete="new-password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                {{ __('Register Account') }}
                            </button>
                            
                            <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a>
                        </form>
                        <hr>
                        <div class="text-center">
                            @if (Route::has('password.request'))
                                <div class="text-center">
                                    <a class="small" href="{{ route('password.request') }}">
                                        Forgot Password?
                                    </a>
                                </div>
                            @endif  
                        </div>
                        <div class="text-center">
                            @if (Route::has('register'))
                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">{{ __('Already have an account? Login!') }}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
