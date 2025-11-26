@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Cookies Policy | Mind Rewire</title>
<meta name="description"
    content="This Cookies Policy explains how Mind Rewire uses cookies to enhance your browsing experience and ensure secure, personalized access to our services.">
<meta name="keywords"
    content="cookies policy therapy website, Mind Rewire cookies usage, browsing data wellness site, GDPR cookies India, emotional wellness website cookies, session tracking cookies, online therapy user data">

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@skybridge" />
<meta name="twitter:creator" content="@skybridge" />
<meta name="twitter:title" content="Cookies Policy | Mind Rewire">
<meta name="twitter:description"
    content="This Cookies Policy explains how Mind Rewire uses cookies to enhance your browsing experience and ensure secure, personalized access to our services.">
<meta name="twitter:image" content="{{ url('favicon.png') }}">

<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Cookies Policy | Mind Rewire" />
<meta property="og:description"
    content="This Cookies Policy explains how Mind Rewire uses cookies to enhance your browsing experience and ensure secure, personalized access to our services." />
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
                    <span class="lightpink">Cookies Policy</span>
                </h2>
            </div>
        </div>
    </div>

    <div class="pagetab" data-aos="fade-up" data-aos-duration="1500">
        <div class="custom_container">
            <ul>
                <li><a href="{{url('terms-of-service')}}">TERMS OF SERVICE</a></li>
                <li><a href="{{url('privacy-policy')}}">PRIVACY POLICY</a></li>
                <li><a href="{{url('data-protection')}}">DATA PROTECTION</a></li>
                <li><a href="{{url('refund-policy')}}">REFUND POLICY</a></li>
                <li><a href="{{url('cookies-policy')}}" class="active">COOKIES POLICY</a></li>
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
                    This Cookies Policy explains how <b>Mind Rewire</b> uses cookies and similar technologies when
                    you
                    visit our website or
                    interact with our services.
                </p>
                <p>
                    By using our website, you consent to the use of cookies in accordance with this policy. You can
                    manage your preferences
                    at any time through your browser settings.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>What Are Cookies?</h3>
                <p>
                    Cookies are small text files stored on your device when you visit a website. They help the site
                    remember your actions
                    and preferences (such as login, language, session behavior) for a smoother user experience.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Why We Use Cookies</h3>
                <p>
                    Mind Rewire uses cookies for the following reasons:
                </p>
                <ul>
                    <li>
                        <strong>Essential Cookies</strong><br>
                        To ensure the website functions properly (e.g., booking sessions, form submissions).
                    </li>
                    <li>
                        <strong>Performance Cookies</strong><br>
                        To collect anonymous data on how visitors use the site and help us improve content and
                        navigation.
                    </li>
                    <li>
                        <strong>Functionality Cookies</strong><br>
                        To remember your preferences, such as your language or region.
                    </li>
                    <li>
                        <strong>Analytics & Tracking Cookies</strong><br>
                        To understand user behavior, page performance, and improve accessibility across devices.
                    </li>
                </ul>
                <p>
                    We do not use cookies to collect sensitive information or for invasive tracking.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Third-Party Cookies</h3>
                <p>
                    Some cookies may be placed by trusted third-party tools integrated into our website, such as:
                </p>
                <ul>
                    <li><strong>Google Analytics –</strong> For traffic and engagement reporting</li>
                    <li><strong>Calendly –</strong> For session booking</li>
                    <li><strong>Razorpay / Payment Gateways –</strong> For secure transactions</li>
                    <li><strong>Newsletter Providers –</strong> For opt-in tracking and unsubscribes</li>
                </ul>
                <p>
                    These services have their own cookies and privacy policies, and we recommend reviewing them
                    directly.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Managing Cookies</h3>
                <p>
                    You can control and manage cookies in your browser settings:
                </p>
                <ul>
                    <li>Block cookies from specific sites</li>
                    <li>Clear existing cookies</li>
                    <li>Notify you before cookies are stored</li>
                </ul>
                <p>
                    Please note: disabling cookies may affect the functionality of some services (like session
                    booking or embedded forms).
                </p>
                <p>
                    For detailed instructions, visit your browser’s help section:
                </p>
                <ul>
                    <li>Google Chrome Help</li>
                    <li><a href="https://support.mozilla.org/en-US/kb/enable-and-disable-cookies">Mozilla Firefox
                            Help</a></li>
                    <li><a href="https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac">Safari
                            Help</a></li>
                </ul>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Updates to This Policy</h3>
                <p>
                    We may occasionally update this Cookies Policy to reflect changes in technology, legal
                    requirements, or our own
                    practices. Updated versions will be posted on this page with the new effective date.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Contact Us</h3>
                <p>
                    If you have any questions or concerns about our cookie practices, please reach out to:
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