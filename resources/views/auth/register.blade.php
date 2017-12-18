@extends('layouts.app',
        [
        'body_class' => $bodyClass,
        'title' => setting('site.title') . ' | ' . $PageTitle
        ])


@section('content')
    <div class="container">
        <section class="register">
            <form class="row form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-6">
                    <label for="name" class="gray text-1 font-size-500 control-label">Name</label>

                    <div class="">
                        <input id="name" type="text" class="form-control" name="name"
                               value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-6">
                    <label for="email" class="gray text-1 font-size-500 control-label">E-Mail Address</label>

                    <div class="">
                        <input id="email" type="email" class="form-control" name="email"
                               value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-6">
                    <label for="password" class="gray text-1 font-size-500 control-label">Password</label>

                    <div class="">
                        <input id="password" type="password" class="form-control" name="password"
                               required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group  col-md-6">
                    <label for="password-confirm" class="gray text-1 font-size-500 control-label">Confirm
                        Password</label>

                    <div class="">
                        <input id="password-confirm" type="password" class="form-control"
                               name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="green-btn btn">
                            Register
                        </button>
                        <a class="green-btn btn" href="{{ url('/login') }}">Login</a>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection
