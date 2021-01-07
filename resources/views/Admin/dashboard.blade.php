@extends('Admin.layouts.app')

@section('title', 'Dashboard')
@section('content')
        <section>
            <div class="section-wrap dashboard-section">
                <div class="header-bar">
                    <div class="total-payment-bar">
                        <h2>Total Payments</h2>
                        <p>$14.800 one-time plus $200/mo.</p>
                    </div>
                    <div class="date-bar">
                        <p>December 2020</p>
                        <img src="{{asset('images/4010/icons/calendar-icon.svg')}}" alt="" title="">
                    </div>
                </div>
                <div class="total-payments-packages">
                    <h4>Total Payments for all packages</h4>
                    <div class="total-payments-appearance">
                        <div class="progress-bar">
                            <div class="progress-paid"></div>
                            <div class="progress-must-paid"></div>
                        </div>
                        <div class="progress-val">
                            <span>$5k</span>
                            <span>$10k</span>
                            <span>$15k</span>
                            <span>$20k</span>
                            <span>$25k</span>
                            <span>$30k</span>
                        </div>
                    </div>
                    <div class="total-payments-values">
                        <div class="aside-left">
                            <div class="total-payment-val-item">
                                <h5>Paid</h5>
                                <p>$13,500</p>
                            </div>
                            <div class="total-payment-val-item">
                                <h5>Must Be Paid</h5>
                                <p>$11,200</p>
                            </div>
                        </div>
                        <div class="aside-right">
                            <div class="total-payment-val-item">
                                <h5>Your percent</h5>
                                <p>10%</p>
                            </div>
                            <div class="total-payment-val-item">
                                <h5>Total Payments</h5>
                                <p>$24,700</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="packages-profit-bar">
                    <h4>Total Profit for all packages <span>%</span></h4>
                    <div id="chartdiv"></div>
                </div>
            </div>
        </section>
@endsection