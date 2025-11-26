@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Data Protection Statement | Mind Rewire</title>
<meta name="description"
    content="Mind Rewire is committed to the responsible handling, protection, and privacy of all client and visitor data. Learn how we safeguard your information across services.">
<meta name="keywords"
    content="data protection therapy India, client data safety, Mind Rewire security policy, online counselling data practices, emotional wellness data ethics, secure therapy platform, digital tool privacy, UNTANGLE user info protection">

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@skybridge" />
<meta name="twitter:creator" content="@skybridge" />
<meta name="twitter:title" content="Data Protection Statement | Mind Rewire">
<meta name="twitter:description"
    content="Mind Rewire is committed to the responsible handling, protection, and privacy of all client and visitor data. Learn how we safeguard your information across services.">
<meta name="twitter:image" content="{{ url('favicon.png') }}">

<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Data Protection Statement | Mind Rewire" />
<meta property="og:description"
    content="Mind Rewire is committed to the responsible handling, protection, and privacy of all client and visitor data. Learn how we safeguard your information across services." />
@stop

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/common-content/common-content.css') }}">
@stop

@section('content')

<!-- page_wrap Start -->
<div class="page_wrap">

    <div class="top_banner">
        <div class="common_patch patch1">
            <img src="{{ url('assets/images/common-images/patch_pink.svg')}}" alt="icon">
        </div>
        <div class="common_patch patch2">
            <img src="{{ url('assets/images/common-images/patch_pink.svg')}}" alt="icon">
        </div>
        <div class="custom_container">
            <div class="textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading white center">
                    <span class="lightpink">Data Protection Statement</span>
                </h2>
            </div>
        </div>
    </div>

    <div class="pagetab" data-aos="fade-up" data-aos-duration="1500">
        <div class="custom_container">
            <ul>
                <li><a href="{{url('terms-of-service')}}">TERMS OF SERVICE</a></li>
                <li><a href="{{url('privacy-policy')}}">PRIVACY POLICY</a></li>
                <li><a href="{{url('data-protection')}}" class="active">DATA PROTECTION</a></li>
                <li><a href="{{url('refund-policy')}}">REFUND POLICY</a></li>
                <li><a href="{{url('cookies-policy')}}">COOKIES POLICY</a></li>
                <li><a href="{{url('compliance-statement')}}">COMPLIANCE STATEMENT</a></li>
            </ul>
        </div>
    </div>
    <div class="content_area">
        <div class="custom_container">
            <div class="top_fullrow" data-aos="fade-up" data-aos-duration="1500">
                <p><strong>Effective Date : Insert date</strong></p>
                <p><strong>Last Updated : Insert date</strong></p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <p>
                    At <b>Mind Rewire</b>, we recognize the trust you place in us when you share personal,
                    emotional, or professional information.
                    We are fully committed to protecting your data and ensuring it is handled with care,
                    confidentiality, and integrity
                    across all our offerings—from therapy and coaching to digital tools like UNTANGLE.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Our Commitment</h3>
                <p>
                    We protect your data in accordance with:
                </p>
                <ul>
                    <li>The Information Technology Act (India) and applicable privacy regulations</li>
                    <li>Global standards for digital confidentiality and mental health data ethics</li>
                    <li>Our internal ethical guidelines rooted in psychological best practices</li>
                </ul>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Principles We Follow</h3>
                <p>
                    We adhere to the following data protection principles:
                </p>
                <ul>
                    <li>
                        <b>Transparency:</b> You will always know what data we collect and why.
                    </li>
                    <li>
                        <b>Purpose Limitation:</b> We use your data only for relevant and clearly stated
                        purposes.
                    </li>
                    <li>
                        <b>Minimization:</b> We collect only what is needed—no more, no less.
                    </li>
                    <li>
                        <b>Accuracy:</b> We maintain accurate, up-to-date information where applicable.
                    </li>
                    <li>
                        <b>Integrity & Confidentiality:</b> We store data securely and limit access to
                        authorized personnel.
                    </li>
                    <li>
                        <b>Consent-Driven:</b> Your data is collected and used only with your clear,
                        informed consent.
                    </li>
                </ul>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>What We Protect</h3>
                <p>
                    We protect all forms of data shared with us, including:
                </p>
                <ul>
                    <li>Personal identifiers (name, email, contact details)</li>
                    <li>Mental health and therapy intake information</li>
                    <li>Session notes (where applicable)</li>
                    <li>Purchase records for self-help products like UNTANGLE</li>
                    <li>Communication logs related to bookings and support</li>
                </ul>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Who Has Access</h3>
                <p>
                    Only authorized therapists, internal team members, or technology partners (e.g., scheduling or
                    payment gateways) will
                    access your data—strictly on a need-to-know basis and under confidentiality agreements.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Storage & Security</h3>
                <p>
                    Your data is stored using secure, encrypted tools and services. <br>
                    We apply regular security reviews, strong access controls, and device-level protections to
                    minimize risks of breach or
                    unauthorized exposure.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Data Requests & Deletion</h3>
                <p>
                    You may contact us at any time to:
                </p>
                <ul>
                    <li>Request a copy of your stored data</li>
                    <li>Ask for a correction or update</li>
                    <li>Request deletion of your records, unless prohibited by legal or therapeutic obligations</li>
                </ul>
                <p>
                    Email: <b>support@mind-rewire.com</b>
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Children & Minors</h3>
                <p>
                    Where services involve children or adolescents, we collect data only with parent/guardian
                    consent. All data is handled
                    with additional care in compliance with ethical standards for child mental health support.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Ongoing Protection</h3>
                <p>
                    We regularly review and update our data protection policies in line with evolving technologies,
                    legal frameworks, and
                    ethical standards in mental healthcare.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Contact Us</h3>
                <p>
                    For any data-related concerns, access requests, or clarifications, contact us at:
                </p>
                <p>
                    <b>Email:</b> support@mind-rewire.com<br>
                    <b>Website:</b> <a href="{{url('/')}}">www.mind-rewire.com</a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- page_wrap End -->

@stop

@section('footer_script')
<script>

</script>
@stop