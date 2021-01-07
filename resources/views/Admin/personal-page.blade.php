@extends('Admin.layouts.app')

@section('title', 'Clients')

@section('content')
        <section>
            <div class="section-wrap">
                <div class="personal-content">
                    <div>
                        <div>
                            <p class="individual_no"><span>No</span>142</p>
                            <h3 class="person_naem">James Smith</h3>
                            <p class="person_mail">email_example@gmail.com</p>
                        </div>
                        <div>
                            <button class="active-person">active</button>
                        </div>
                    </div>
                    <div>
                        <div>
                            <h5>
                                assets-to-protect form
                                <span class="date-content">20 Aug 2020</span>
                            </h5>
                            <button class="view-btn">View</button>
                        </div>
                        <div>
                            <h5>
                                irrevocable trust form
                                <span class="date-content">20 Aug 2020</span>
                            </h5>
                            <button class="view-btn">View</button>
                        </div>
                        <div>
                            <h5>
                                trust and corporate docs
                                <span class="date-content">20 Aug 2020</span>
                            </h5>
                            <button class="view-btn">View</button>
                        </div>
                    </div>
                    <div>
                        <div>
                            <h4>Platinum package</h4>
                        </div>
                        <div>
                            <h4 class="fully_content">fully paid</h4>
                        </div>
                    </div>
                    <button class="edit-info-btn">
                        <span>
                            <img src="{{ asset('images/4010/icons/edit-icon.svg') }}" alt="Edit icon"
                                 title="Edit client information">
                        </span>
                        <span>Edit client information</span>
                    </button>
                </div>
            </div>
        </section>
@endsection