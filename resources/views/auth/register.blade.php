<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/style/font-face.css')}}">
    <link rel="stylesheet" href="{{asset('css/style/modal.css')}}">
    <link rel="stylesheet" href="{{asset('css/style/full-screen-modal.css')}}">
    <link rel="stylesheet" href="{{asset('css/style/app.css')}}">
    <title>Sign Up</title>
    <style>

    </style>
</head>
<body>

{{--<div>--}}
{{--    <button data-modal-trigger="signUp" class=" modal__btn modal__btn--secondary" id="sign-up_btn"--}}
{{--            style="padding: 14px;border: 1px solid #707070; font-size: 16px; background-color: transparent;color: #707070">--}}
{{--        Sign Up--}}
{{--    </button>--}}
{{--</div>--}}

<!-- Sign Up -->
<div class="modal full-screen-modal is-modal-active" data-modal-name="signUp" id="sign-up_content"
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
                    <span>Already have an account?</span>
                    <div class="btn-bar">
                        <button class="light-btn-style">
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
                                <input type="text" id="reg-f_name" placeholder="{{ __('First Name') }}" class="@error('f_name') is-invalid @enderror" name="f_name" value="{{ old('f_name') }}" required autocomplete="name" autofocus>
                                @error('f_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="reg-l_name">Last Name</label>
                                <input type="text" placeholder="{{ __('Last Name') }}" class="@error('l_name') is-invalid @enderror" name="l_name" value="{{ old('l_name') }}" required autocomplete="name" autofocus id="reg-l_name">
                                @error('l_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="reg-user_email">Email</label>
                                <input type="email" placeholder="Email Address" id="reg-user_email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>

                            <div class="form-group">
                                <label for="reg-phone_num">Phone Number</label>
                                <input type="number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" id="reg-phone_num"
                                       placeholder="+44" class="@error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="name" autofocus>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group" style="width: 100%;max-width: 100%">
                                <label for="reg-physical_address">Physical Address</label>
                                <input type="text" id="reg-physical_address" placeholder="Physical Address"
                                       class="@error('physical_address') is-invalid @enderror" name="physical_address" value="{{ old('physical_address') }}" required autocomplete="name" autofocus
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
                                       class="@error('zip_code') is-invalid @enderror" name="zip_code" value="{{ old('zip_code') }}" required autocomplete="name" autofocus
                                >
                                @error('zip_code')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="reg-npn">National Producer Number (NPN)</label>
                                <input type="password" placeholder="********" id="reg-npn" class="@error('npn') is-invalid @enderror" name="npn" value="{{ old('physical_address') }}" required autocomplete="name" autofocus>
                                @error('npn')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="reg-user_pass">Password</label>
                                <input type="password" placeholder="********" class="@error('password') is-invalid @enderror" id="reg-user_pass" name="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="reg-user_retype-pass">Retype Password</label>
                                <input type="password" placeholder="********" class="@error('password_confirmation') is-invalid @enderror" id="reg-user_retype-pass" name="password_confirmation">
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

<script src="{{asset('lib/script/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/script/myModal.js')}}"></script>
</body>
</html>