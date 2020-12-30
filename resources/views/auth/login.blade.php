@extends('layouts.app')

@section('content')
<section class="navbar main-menu">
    <div class="navbar-inner main-menu">
        <a href="/" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
        <nav id="menu" class="pull-right">
            <ul>
                <li><a href="{{ url('/products/1') }}">Đồ nữ</a></li>
                <li><a href="{{ url('/products/2') }}">Đồ nam</a></li>
                <li><a href="{{ url('/products/3') }}">Đồ thể thao</a></li>
                <li><a href="{{ url('/products/4') }}">Túi sách</a></li>
                <li><a href="{{ url('/products/5') }}">Giày</a></li>
            </ul>
        </nav>
    </div>
</section>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="text-center">
                    <h3>ĐĂNG NHẬP</h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Tên đăng nhập') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="input-full form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mật Khẩu') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="input-full form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="form-group row">--}}
                        {{-- <div class="col-md-6 offset-md-4">--}}
                        {{-- <div class="form-check">--}}
                        {{-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
                        {{-- <label class="form-check-label" for="remember">--}}
                        {{-- {{ __('Remember Me') }}--}}
                        {{-- </label>--}}
                        {{-- </div>--}}
                        {{-- </div>--}}
                        {{-- </div>--}}
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Đăng nhập') }}
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