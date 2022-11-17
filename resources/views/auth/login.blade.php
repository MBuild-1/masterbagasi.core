@extends('layouts.login.app')

@section('content')

<section class="vh-100" style="background-color: #FEF9F3;">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="{{ asset('image/caption.png') }}" class="img-fluid" alt="Phone image">
            </div>
            @if(Session()->has('failed'))
                <div class="alert alert-danger" role="alert">
                    {{ Session()->get('failed') }}
                </div>
            @endif
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <div class="card text-black w-100" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    <div class="mb-md-5 mt-md-4 pb-5">
                        <h1 class="fw-bold mb-2 text-uppercase">Halo</h1>
                        <p class="mb-3">Masuk ke Masterbagasi atau <a href="register"
                                class="text-black-50 fw-bold">Daftar</a>
                        </p>
                        <form method="POST" class="my-4" action="{{ route('login') }}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email" placeholder="name@example.com" autocomplete="on" @if(Cookie::has('mbu')) value="{{ Cookie::get('mbu') }}" @endif>
                                <label for="email">Email address</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" placeholder="Password" name="password"
                                    autocomplete="current-password" @if(Cookie::has('mbp')) value="{{ Cookie::get('mbp') }}" @endif>
                                <label for="password">Password</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-check d-flex justify-content-start mt-4">
                                <input class="form-check-input" type="checkbox" name="remember_me" id="remember_me" @if(Cookie::has('mbu')) checked @endif/>
                                <label class="form-check-label mx-2" for="remember_me" >Remember password </label>
                            </div>
                            <div class="form-floating mt-4">
                                <button class="button_slide slide_right fw-bold text-white w-100" type="submit"
                                    style="background-color: #FF4200;"><i class=" fa fa-sign-in me-2"></i>Login
                                    Masterbagasi</button><br>
                            </div>
                        </form>
                        <hr>
                        <p class="small mb-3 pb-lg-2"><a class="text-black-50" href="{{url('/password/reset')}}">
                                <h5>Lupa Password?</h5>
                            </a></p>
                        <a class="button_slide slide_right btn fw-bold text-white w-100"
                            style="background-color: #ee2a23;" href="{{route('auth.google')}}" ><i class="fab fa-google me-2"></i>Sign in
                            with Google</a>
                        <a class="button_slide slide_right btn fw-bold text-white w-100 my-2" 
                            style="background-color: #216ab9;" href="{{route('auth.facebook')}}" ><i class="fab fa-facebook-f me-2"></i>Sign
                            in with facebook</a>
                    </div>
                    <footer>
                        <p class="fw-bold">©Masterbagasi Team IT 2022</p>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection