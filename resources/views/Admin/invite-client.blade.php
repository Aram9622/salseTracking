@extends('Admin.layouts.app')

@section('title', 'Invite New Clients')
@section('content')
    <section>
        @if (session('status'))
            {{ session('status') }}
        @endif
        <form action="{{route('admin.create-client')}}" method="post">
            @csrf
            <div class="section-wrap for-information">
                <div>
                    <div class="select-content select-package">
                        <label for="select_package">Select package</label>
                        <select name="select_package" id="select_package" class="custom-select sources @error('select_package') is-invalid @enderror"
                                placeholder="Select package">
                            <option value="platinum">Platinum Package</option>
                            <option value="gold">Gold Package</option>
                            <option value="silver">Silver Package</option>
                            <option value="bronze">Bronze Package</option>
                        </select>
                        @error('select_package')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group event-name-group">
                        <label for="event_name">Event name</label>
                        <input type="text" placeholder="Event name" class="@error('event') is-invalid @enderror" id="event_name" name="event">
                        @error('event')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div>
                    <h3>personal information</h3>
                    <div class="form-group">
                        <label for="first_name">First name</label>
                        <input type="text" placeholder="First Name" class="@error('first_name') is-invalid @enderror" id="first_name" name="first_name">
                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last name</label>
                        <input type="text" placeholder="Last name" id="last_name" class="@error('last_name') is-invalid @enderror" name="last_name">
                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group email-address-group">
                        <label for="email_address">Email address</label>
                        <input type="email" placeholder="Email address" class="@error('email') is-invalid @enderror" id="email_address" name="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group phone-number-group">
                        <label for="phone_number">Phone number</label>
                        <input type="number" placeholder="Phone number" class="@error('phone') is-invalid @enderror" id="phone_number" name="phone">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div>
                    <h3>Billing address</h3>
                    <div class="select-content">
                        <label for="country">Country</label>
                        <select name="country" id="country" class="@error('country') is-invalid @enderror custom-select sources"
                                placeholder="Country" >
                            <option value="val-1">Value 1</option>
                            <option value="val-2">Value 2</option>
                            <option value="val-3">Value 3</option>
                        </select>
                        @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" placeholder="State"  class="@error('state') is-invalid @enderror" id="state" name="state">
                        @error('state')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" placeholder="City" class="@error('city') is-invalid @enderror" id="city" name = "city">
                        @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="zip_code">Zip Code</label>
                        <input type="text" placeholder="***" class="@error('zip_code') is-invalid @enderror" id="zip_code" name="zip_code">
                        @error('zip_code')
                            <span class="is-invalid" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group address-group">
                        <label for="address">Address</label>
                        <input type="text" placeholder="Address" class="@error('address') is-invalid @enderror" id="address" name="address">
                        @error('address')
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
                        <input type="number" placeholder="**** **** **** ****" class="@error('credit_card_number') is-invalid @enderror" id="" name="credit_card_number">
                        @error('credit_card_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="card_holder_name">Card Holder Name</label>
                        <input type="text" placeholder="Card Holder Name" class="@error('card_holder_name') is-invalid @enderror" id="card_holder_name" name="card_holder_name">
                        @error('card_holder_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group cvv-group">
                        <label for="cvv">CVV</label>
                        <input type="number" placeholder="***" class="@error('cvv') is-invalid @enderror" id="cvv" name="cvv">
                        @error('cvv')
                            <span class="invalid-feedback" role="alert"></span>
                        @enderror
                    </div>
                    <div class="form-group expiry-group">
                        <div class="select-content">
                            <label for="expiry_month">Expiry Month</label>
                            <select name="expire_month" id="expiry_month"  class="@error('expire_month') is-invalid @enderror custom-select sources" placeholder="**">
                                @for ($i = 1; $i <= 12; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                            @error('expire_month')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="select-content">
                            <label for="expiry_year">Expiry Year</label>
                            <select name="expire_year" id="expiry_year" class="@error('expire_year')  is-invalid @enderror custom-select sources"
                                    placeholder="**">
                                @for($y = date('Y'); $y > 1905; $y--)
                                    <option value="{{$y}}">{{$y}}</option>
                                @endfor
                            </select>
                            @error('expire_year')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="buttons_bar">
                    <button class="light-btn-style" type="button">Cancel</button>
                    <button class="site-btn-style" type="submit">Invite Client</button>
                </div>
            </div>
        </form>
    </section>
@endsection