<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/style/font-face.css')}}">
    <link rel="stylesheet" href="{{asset('css/style/modal.css')}}">
    <link rel="stylesheet" href="{{asset('css/style/full-screen-modal.css')}}">
    <link rel="stylesheet" href="{{asset('css/style/app.css')}}">
    <!-- <link rel="stylesheet" href="css/font-face.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/full-screen-modal.css">
    <link rel="stylesheet" href="css/app.css"> -->
    <title>Login</title>
    <style>

    </style>

</head>
<body>

<!-- Login -->
<div class="modal full-screen-modal is-modal-active" data-modal-name="login" id="login_content"
     data-modal-dismiss>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__content-aside-left">
                <div class="modal__body">
                    <div class="logo-bar">
                        <img src="{{asset('images/4010/Fortune-logo.png')}}" alt="Company Logo" title="Company Logo">
                    </div>
                    <h5 class="information-bar">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed.
                    </h5>
                    <span>Don’t have an account yet?</span>
                    <div class="btn-bar">
                        <button class="sign-up_btn light-btn-style modal__btn modal__btn--secondary"
                                data-modal-trigger="signUp">
                            Sign Up
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal__content-aside-right">
                <div class="modal__body">
                    <div class="logo-bar">
                        <img src="{{asset('images/4010/Fortune-horizon-logo.png')}}" alt="Company Logo"
                             title="Company Logo">
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h2 class="modal__title">Login</h2>
                        <div class="form-banner">
                            <div class="form-group">
                                <label for="login-user_email">{{ __('Email Address') }}</label>
                                <input type="email" class="@error('email') is-invalid @enderror"
                                       placeholder="Email Address" id="login-user_email" name="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="login_pass">Password</label>
                                <input type="password" class="@error('password') is-invalid @enderror"
                                       placeholder="********" id="login_pass" name="password" required
                                       autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="user-accept-bar">
                                    <div>
                                        <div class="checkBox-btn-styles">
                                            <div class="form-check">
                                                <input type="checkbox" id="studio-company_keepMe-checkbox"
                                                       name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label for="studio-company_keepMe-checkbox">
                                                        <span>
                                                            <svg class="checkbox" viewBox="0 0 40 40">
                                                                <defs>
                                                                    <linearGradient id="gradient" x1="0" y1="0"
                                                                                    x2="1" y2="1">
                                                                        <stop offset="0%" stop-color="#031A39"></stop>
                                                                        <stop offset="100%" stop-color="#666"></stop>
                                                                    </linearGradient>
                                                                </defs>
                                                                <rect x="2" y="2" width="36" height="36"></rect>
                                                                <rect id="colors" x="2" y="2" width="36"
                                                                      height="36"></rect>
                                                                <polyline points="9,22 18,30 32,9"></polyline>
                                                            </svg>
                                                        </span>
                                                    <span>
                                                            keep me logged in
                                                        </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button data-modal-trigger="forgotPassword"
                                                class="forgotPass_btn modal__btn modal__btn--secondary">Forgot Password
                                            ?
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="btn-bar">
                                    {{--                                     <a href="{{route('login')}}" class="site-btn-style">--}}
                                    {{--                                        Login--}}
                                    {{--                                    </a>--}}
                                    {{--                                    <button type="submit" class="site-btn-style">{{ __('Login') }}</button>--}}
                                    <input type="submit" class="site-btn-style" value="{{ __('Login') }}">
                                    <!--                                    <button class="site-btn-style">Login</button>-->
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sign Up -->
<div class="modal full-screen-modal" data-modal-name="signUp" id="sign-up_content"
     data-modal-dismiss>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__content-aside-left">
                <div class="modal__body">
                    <div class="logo-bar">
                        <img src="images/4010/Fortune-logo.png" alt="Company Logo" title="Company Logo">
                    </div>
                    <h5 class="information-bar">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed.
                    </h5>
                    <span>Already have an account?</span>
                    <div class="btn-bar">
                        <button data-modal-trigger="login"
                                class="login_btn modal__btn modal__btn--secondary light-btn-style">
                            Login
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal__content-aside-right">
                <div class="modal__body">
                    <form action="{{route('register')}}" method="post">
                        @csrf
                        <h2 class="modal__title">Sign up</h2>
                        <p class="question-bar">Are you planning on selling structures like the LLLP and Trusts?</p>
                        <div class="custom-radios">
                            <div>
                                <input type="radio" id="planningToSell_yes" name="lllp_trusts" value="on"
                                       checked>
                                <label for="planningToSell_yes">
                                <span>
                                  <img src="{{asset('images/4010/icons/radio-btn-check.svg')}}" alt="Checked Icon"/>
                                </span>
                                    Yes
                                </label>
                            </div>

                            <div>
                                <input type="radio" id="planningToSell_no" name="lllp_trusts" value="off">
                                <label for="planningToSell_no">
                                <span>
                                  <img src="{{asset('images/4010/icons/radio-btn-check.svg')}}" alt="Checked Icon"/>
                                </span>
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="form-banner">
                            <div class="form-group">
                                <label for="reg-f_name">First Name</label>
                                <input type="text" id="reg-f_name" placeholder="{{ __('First Name') }}"
                                       class="@error('f_name') is-invalid @enderror" name="f_name"
                                       value="{{ old('f_name') }}" required autocomplete="name" autofocus>
                                @error('f_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="reg-l_name">Last Name</label>
                                <input type="text" placeholder="{{ __('Last Name') }}"
                                       class="@error('l_name') is-invalid @enderror" name="l_name"
                                       value="{{ old('l_name') }}" required autocomplete="name" autofocus
                                       id="reg-l_name">
                                @error('l_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="reg-user_email">Email</label>
                                <input type="email" placeholder="Email Address" id="reg-user_email"
                                       class="@error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email">
                            </div>

                            <div class="form-group">
                                <label for="reg-phone_num">Phone Number</label>
                                <input type="number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" id="reg-phone_num"
                                       placeholder="+44" class="@error('phone') is-invalid @enderror" name="phone"
                                       value="{{ old('phone') }}" required autocomplete="name" autofocus>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group" style="width: 100%;max-width: 100%">
                                <label for="reg-physical_address">Physical Address</label>
                                <input type="text" id="reg-physical_address" placeholder="Physical Address"
                                       class="@error('physical_address') is-invalid @enderror" name="physical_address"
                                       value="{{ old('physical_address') }}" required autocomplete="name" autofocus
                                >
                                @error('physical_address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="reg-zip_code">Zip Code</label>
                                <input type="password" placeholder="***" id="reg-zip_code"
                                       class="@error('zip_code') is-invalid @enderror" name="zip_code"
                                       value="{{ old('zip_code') }}" required autocomplete="name" autofocus
                                >
                                @error('zip_code')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="reg-npn">National Producer Number (NPN)</label>
                                <input type="password" placeholder="********" id="reg-npn"
                                       class="@error('npn') is-invalid @enderror" name="npn"
                                       value="{{ old('physical_address') }}" required autocomplete="name" autofocus>
                                @error('npn')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="reg-user_pass">Password</label>
                                <input type="password" placeholder="********"
                                       class="@error('password') is-invalid @enderror" id="reg-user_pass"
                                       name="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="reg-user_retype-pass">Retype Password</label>
                                <input type="password" placeholder="********"
                                       class="@error('password_confirmation') is-invalid @enderror"
                                       id="reg-user_retype-pass" name="password_confirmation">
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="user-accept-bar">
                                    <div>
                                        <div class="checkBox-btn-styles">
                                            <div class="form-check">
                                                <input type="checkbox" id="studio-company_accept-checkbox">
                                                <label for="studio-company_accept-checkbox">
                                                        <span>
                                                            <svg class="checkbox" viewBox="0 0 40 40">
                                                                <defs>
                                                                    <linearGradient id="gradient" x1="0" y1="0"
                                                                                    x2="1" y2="1">
                                                                        <stop offset="0%" stop-color="#031A39"></stop>
                                                                        <stop offset="100%" stop-color="#666"></stop>
                                                                    </linearGradient>
                                                                </defs>
                                                                <rect x="2" y="2" width="36" height="36"></rect>
                                                                <rect id="colors" x="2" y="2" width="36"
                                                                      height="36"></rect>
                                                                <polyline points="9,22 18,30 32,9"></polyline>
                                                            </svg>
                                                        </span>
                                                    <span>
                                                            I read and accept
                                                        </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button>Terms and Conditions</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="btn-bar">
                                    {{--                                    <button class="site-btn-style">Create account</button>--}}
                                    <input type="submit" class="site-btn-style" value="Create account">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Forgot Password -->
<div class="modal full-screen-modal" data-modal-name="forgotPassword" id="forgotPass_content"
     data-modal-dismiss>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__content-aside-left">
                <div class="modal__body">
                    <div class="logo-bar">
                        <img src="{{asset('images/4010/Fortune-logo.png')}}" alt="Company Logo" title="Company Logo">
                    </div>
                    <h5 class="information-bar">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed.
                    </h5>
                    <span>Don’t have an account yet?</span>
                    <div class="btn-bar">
                        <button class="light-btn-style modal__btn modal__btn--secondary sign-up_btn"
                                data-modal-trigger="signUp">
                            Sign Up
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal__content-aside-right">
                <div class="modal__body">
                    <div class="logo-bar">
                        <img src="{{asset('images/4010/Fortune-horizon-logo.png')}}" alt="Company Logo" title="Company Logo">
                    </div>
                    <form action="{{ route('password.update') }}" method="post">
                        @csrf

                        <h2 class="modal__title">Forgot Password?</h2>
                        <p class="modal__description">Enter your e-mail address and we’ll send you a link to reset your
                            password</p>
                        <div class="form-banner">
                            <div class="form-group">
                                <label for="forgot-pass_email">Email Address</label>
                                <input type="email" placeholder="Email Address" id="forgot-pass_email" class="@error('email') is-invalid @enderror" name="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="btns-bar">
                                    <button class="light-btn-style">Cancel</button>
                                    <input class="resetPass_btn site-btn-style modal__btn modal__btn--secondary"
                                            data-modal-trigger="resetPassword" type="submit" value="Send">
{{--                                    </input>--}}
                                    <a href=""
                                       class="resetPass_btn site-btn-style modal__btn modal__btn--secondary"></a>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Reset Password -->
<div class="modal full-screen-modal" data-modal-name="resetPassword" id="resetPass_content"
     data-modal-dismiss>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__content-aside-left">
                <div class="modal__body">
                    <div class="logo-bar">
                        <img src="images/4010/Fortune-logo.png" alt="Company Logo" title="Company Logo">
                    </div>
                    <h5 class="information-bar">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed.
                    </h5>
                    <span>Don’t have an account yet?</span>
                    <div class="btn-bar">
                        <button class="light-btn-style">
                            Sign Up
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal__content-aside-right">
                <div class="modal__body">
                    <div class="logo-bar">
                        <img src="images/4010/Fortune-horizon-logo.png" alt="Company Logo" title="Company Logo">
                    </div>
                    <form action="#" method="post">
                        <h2 class="modal__title">Reset Your Password</h2>
                        <div class="form-banner">
                            <div class="form-group">
                                <label for="reset-pass_pass">Password</label>
                                <input type="password" placeholder="Password" id="reset-pass_pass">
                            </div>
                            <div class="form-group">
                                <label for="reset-pass_retype-pass">Retype Password</label>
                                <input type="password" placeholder="Retype Password" id="reset-pass_retype-pass">
                            </div>
                            <div class="form-group">
                                <div class="btn-bar">
                                    <button class="site-btn-style">Save</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('js/lib/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/script/myModal.js')}}"></script>
</body>
</html>