@extends('layouts.app')

@section('content')

    <!-- register-area -->
    <div class="register-area" style="background-color: rgb(249, 249, 249);">
        <div class="container">

            <div class="col-md-6">
                <div class="box-for overflow">
                    <div class="col-md-12 col-xs-12 register-blocks">
                        <h2>创建账号 : </h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name">
                            </div>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong class="alert-danger">{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email">
                            </div>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong class="alert-danger">{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            <div class="form-group">
                                <label for="password">密码</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong class="alert-danger" class="alert-danger">{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                            <div class="form-group">
                                    <label for="password">确认密码</label>
                                <input type="password" name="password_confirmation" class="form-control" id="password">
                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn btn-default">{{ __('Register') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box-for overflow">
                    <div class="col-md-12 col-xs-12 login-blocks">
                        <h2>登录 : </h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email">
                            </div>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback " role="alert">
                                        <strong class="alert-danger">{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            <div class="form-group">
                                <label for="password">密码</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback " role="alert">
                                        <strong class="alert-danger">{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                            <div class="text-center">
                                <button type="submit" class="btn btn-default"> 登录</button>
                            </div>
                        </form>
                        <br>

                        <h2>快速登录 :  </h2>

                        <p>
                            <a class="login-social" href="#"><i class="fa fa-wechat"></i>&nbsp;微信</a>
                            <a class="login-social" href="#"><i class="fa fa-weibo"></i>&nbsp;微博</a>
                            <a class="login-social" href="#"><i class="fa fa-qq"></i>&nbsp;QQ</a>
                            <a class="login-social" href="#"><i class="fa fa-github"></i>&nbsp;GitHub</a>
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
