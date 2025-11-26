@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Privacy Policy | Mind Rewire</title>
<meta name="description"
    content="Mind Rewire is committed to protecting your privacy. Read how we handle your personal data across our therapy services, digital tools, and emotional wellness offerings.">
<meta name="keywords"
    content="privacy policy therapy India, emotional wellness data safety, Mind Rewire privacy terms, online counselling confidentiality, client data protection, self-help tool privacy, career counselling info usage, mental health platform privacy">

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@skybridge" />
<meta name="twitter:creator" content="@skybridge" />
<meta name="twitter:title" content="Privacy Policy | Mind Rewire">
<meta name="twitter:description"
    content="Mind Rewire is committed to protecting your privacy. Read how we handle your personal data across our therapy services, digital tools, and emotional wellness offerings.">
<meta name="twitter:image" content="{{ url('favicon.png') }}">

<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Privacy Policy | Mind Rewire" />
<meta property="og:description"
    content="Mind Rewire is committed to protecting your privacy. Read how we handle your personal data across our therapy services, digital tools, and emotional wellness offerings." />
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
                    <span class="lightpink">Privacy Policy</span>
                </h2>
            </div>
        </div>
    </div>

    <div class="pagetab" data-aos="fade-up" data-aos-duration="1500">
        <div class="custom_container">
            <ul>
                <li><a href="{{url('terms-of-service')}}">TERMS OF SERVICE</a></li>
                <li><a href="{{url('privacy-policy')}}" class="active">PRIVACY POLICY</a></li>
                <li><a href="{{url('data-protection')}}">DATA PROTECTION</a></li>
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
                    At <b>Mind Rewire</b>, your trust is our responsibility. This Privacy Policy outlines how we
                    collect,
                    use, store, and protect
                    your personal data when you interact with our website, use our services, or purchase tools like
                    UNTANGLE.
                </p>
                <p>
                    By using our platform, booking sessions, or contacting us, you agree to the terms in this
                    policy.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>What We Collect</h3>
                <p>
                    We may collect the following types of information:
                </p>
                <ul>
                    <li>
                        <strong>Personal Information:</strong> Name, email, phone number, location, age group
                        (especially during session intake)
                    </li>
                    <li>
                        <strong>Service Information:</strong> Session preferences, notes from intake forms, goals,
                        areas of concern
                    </li>
                    <li>
                        <strong>Payment Details:</strong> Only processed via secure third-party gateways (we don’t
                        store card info)
                    </li>
                    <li>
                        <strong>Website Usage:</strong> Device data, IP address, and cookies for experience
                        optimization
                    </li>
                    <li>
                        <strong>Product Interaction:</strong> If you use digital versions of UNTANGLE or sign up for
                        newsletters, we may store interaction data
                    </li>
                </ul>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>How We Use Your Data</h3>
                <ul>
                    <li>To schedule and personalize therapy or coaching sessions</li>
                    <li>To deliver emotional wellness products or downloadable resources</li>
                    <li>To improve website experience and recommend relevant content</li>
                    <li>To send appointment confirmations, support communication, or updates</li>
                    <li>To provide access to self-help tools and emotional wellness material</li>
                </ul>
                <p>
                    We do not sell or rent your personal data.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Confidentiality in Therapy</h3>
                <p>
                    All session-related data is strictly confidential and used only by assigned professionals at
                    Mind Rewire. <br>
                    Confidentiality may be broken only in situations involving:
                </p>
                <ul>
                    <li>Risk of harm to self or others</li>
                    <li>Legal obligations or court orders</li>
                </ul>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Cookies and Tracking</h3>
                <p>
                    We use basic cookies to enhance your browsing experience, monitor site performance, and support
                    analytics.<br>
                    You can disable cookies through your browser settings without affecting session access.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Third-Party Tools</h3>
                <p>
                    We may use trusted third-party platforms (e.g., Calendly, Razorpay, Google Workspace) for:
                </p>
                <ul>
                    <li>Booking and scheduling</li>
                    <li>Secure payment processing</li>
                    <li>Newsletter management</li>
                </ul>
                <p>
                    All tools comply with privacy standards and only access data required to function.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Data Retention</h3>
                <p>
                    We retain your personal data for as long as needed:
                </p>
                <ul>
                    <li>To provide ongoing services</li>
                    <li>To meet legal, accounting, or reporting obligations</li>
                    <li>To enhance future therapeutic continuity (unless you request deletion)</li>
                </ul>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Your Rights</h3>
                <p>
                    You may request:
                </p>
                <ul>
                    <li>Access to your stored data</li>
                    <li>Correction of inaccurate information</li>
                    <li>Deletion of data (where legally permitted)</li>
                    <li>To opt-out of marketing communications</li>
                </ul>
                <p>Send your request to <b>support@mind-rewire.com</b></p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Data Security</h3>
                <p>
                    We use secure servers, encrypted storage tools, and session-level data protection protocols.<br>
                    While no system is 100% secure, we regularly review our security practices and limit access to
                    trained staff only.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Policy Updates</h3>
                <p>
                    We may update this policy to reflect service changes or regulatory updates. <br>
                    The revised version will carry a new “Last Updated” date and be published here.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Contact Us</h3>
                <p>
                    If you have any questions about this Privacy Policy, your rights, or our data practices, please
                    contact us:
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