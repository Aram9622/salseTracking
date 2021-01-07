@extends('Admin.layouts.app')
@section('title', 'My Account')
@section('content')
    <section>
        <form action="{{route('admin.update-my-account')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if (session('status'))
                {{ session('status') }}
            @endif
            <div class="section-wrap for-information">
                <div class="account-info-bar">
                    <div class="avatar-upload">
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url({{asset('uploads/agent/'.$user->image)}});">
                            </div>
                        </div>
                        <div class="account-info-bar">
                            <h2>{{$user->f_name}} {{$user->l_name}}</h2>
                            <div class="avatar-edit">
                                <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg"/>
                                <label for="imageUpload">change picture</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h3>personal information
                        <button class="change-pass-btn" type="button">Change Password</button>
                    </h3>
                    <div class="form-group">
                        <label for="first_name">First name</label>
                        <input type="text" placeholder="First Name" class="@error('f_name') is-invalid @enderror" id="first_name" value="{{$user->f_name}}" name="f_name">
                        @error('f_name')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last name</label>
                        <input type="text" placeholder="Last name" id="last_name" class="@error('l_name') is-invalid @enderror" value="{{$user->l_name}}" name="l_name">
                        @error('l_name')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="form-group email-address-group">
                        <label for="email_address">Email address</label>
                        <input type="email" placeholder="Email address" class="@error('email') is-invalid @enderror" value="{{$user->email}}" id="email_address" name="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="form-group phone-number-group">
                        <label for="phone_number">Phone number</label>
                        <input type="text" placeholder="Phone number" class="@error('phone') is-invalid @enderror" value="{{$user->phone}}" id="phone_number" name="phone">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group hide-form-group pass-group">
                        <label for="old_password">old password</label>
                        <input type="password" placeholder="********" id="old_password" name="old_password">
                    </div>
                    <div class="form-group hide-form-group pass-group">
                        <label for="new_password">new password</label>
                        <input type="password" placeholder="********" id="new_password" name="new_password">
                    </div>


                </div>
                <div>
                    <h3>address</h3>
                    <div class="form-group">
                        <label for="zip_code">Zip Code</label>
                        <input type="text" placeholder="***" value="{{$user->zip_code}}" id="zip_code" class="@error('zip_code') is-invalid @enderror" name="zip_code">
                        @error('zip_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="npn_code">national Producer Number (NPN)</label>
                        <input type="text" placeholder="********" value="{{$user->npn}}" id="npn_code" class="@error('npn') is-invalid @enderror" name="npn">
                        @error('npn')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group address-group">
                        <label for="address">physical address</label>
                        <input type="text" placeholder="physical address" value="{{$user->physical_address}}" class="@error('phys_address') is-invalid @enderror" id="address" name="physical_address">
                        @error('phys_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div>
                    <h3>Credit Card information</h3>
                    <div class="credit-card-banner">
                        <button class="card-item active-card" type="button">
                            <img src="{{asset('images/visa.png')}}" alt="VISA" title="VISA">
                            <input type="radio" name="credit_card" checked value="visa" style="visibility: hidden;">
                        </button>
                        <button class="card-item" type="button">
                            <img src="{{asset('images/masterCard.png')}}" alt="MasterCard" title="MasterCard">
                            <input type="radio" name="credit_card" value="mastercard" style="visibility: hidden;">
                        </button>
                        <button class="card-item" type="button">
                            <img src="{{asset('images/discover.png')}}" alt="DISCOVER" title="DISCOVER">
                            <input type="radio" name="credit_card" value="discover" style="visibility: hidden;">
                        </button>
                    </div>
                    <div class="form-group">
                        <label for="credit_card_number">Credit Card Number</label>
                        <input type="number" value="{{$user->credit_card_number}}" placeholder="**** **** **** ****" class="@error('credit_card_number') is-invalid @enderror" id="credit_card_number" name="credit_card_number">
                        @error('credit_card_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="card_holder_name">Card Holder Name</label>
                        <input type="text" value="{{$user->card_holder_name}}" placeholder="Card Holder Name" class="@error('card_holder_name') is-invalid @enderror" id="card_holder_name" name="card_holder_name">
                        @error('card_holder_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group cvv-group">
                        <label for="cvv">CVV</label>
                        <input type="number" value="{{$user->cvv}}" placeholder="***" class="@error('cvv') is-invalid @enderror" id="cvv" name="cvv">
                        @error('cvv')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group expiry-group">
                        <div class="select-content">
                            <label for="expiry_month">Expiry Month</label>
                            <select name="expiry_month" id="expiry_month" class="@error('expiry_month') is-invalid @enderror custom-select sources"
                                    placeholder="{{$user->expiry_month}}">
                                @for ($i = 1; $i <= 12; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                            @error('expiry_month')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="select-content">
                            <label for="expiry_year">Expiry Year</label>
                            <select name="expiry_year" id="expiry_year" class="@error('expiry_year') is-invalid @enderror custom-select sources"
                                    placeholder="{{$user->expiry_year}}">
                                @for($y = date('Y'); $y < date('Y')+40; $y++)
                                    <option value="{{$y}}">{{$y}}</option>
                                @endfor
                            </select>
                            @error('expiry_year')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="buttons_bar">
                    <button class="light-btn-style" type="button">Cancel</button>
                    <button class="site-btn-style" type="submit">Save Changings</button>
                </div>
            </div>
        </form>
    </section>
@endsection