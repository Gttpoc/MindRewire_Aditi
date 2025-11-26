@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Terms of Use | Mind Rewire</title>
<meta name="description"
    content="Read the terms and conditions that govern your use of Mind Rewire’s website, services, and digital tools. By using this site, you agree to these terms.">
<meta name="keywords"
    content="therapy terms of use, counselling disclaimer India, Mind Rewire legal, UNTANGLE card game terms, mental health service policy, website usage policy, online therapy guidelines, digital wellness tools terms">

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@skybridge" />
<meta name="twitter:creator" content="@skybridge" />
<meta name="twitter:title" content="Terms of Use | Mind Rewire">
<meta name="twitter:description"
    content="Read the terms and conditions that govern your use of Mind Rewire’s website, services, and digital tools. By using this site, you agree to these terms.">
<meta name="twitter:image" content="{{ url('favicon.png') }}">

<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Terms of Use | Mind Rewire" />
<meta property="og:description"
    content="Read the terms and conditions that govern your use of Mind Rewire’s website, services, and digital tools. By using this site, you agree to these terms." />
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
                    <span class="lightpink">Terms of Service</span>
                </h2>
            </div>
        </div>
    </div>

    <div class="pagetab" data-aos="fade-up" data-aos-duration="1500">
        <div class="custom_container">
            <ul>
                <li><a href="{{url('terms-of-service')}}" class="active">TERMS OF SERVICE</a></li>
                <li><a href="{{url('privacy-policy')}}">PRIVACY POLICY</a></li>
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
                    Welcome to <b>Mind Rewire</b>. These Terms of Use (“Terms”) govern your access to and use of our
                    website, tools, services, and
                    digital content. By visiting our website or engaging with any of our services, you agree to
                    abide by the following terms
                    and conditions.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Who We Are</h3>
                <p>
                    Mind Rewire offers therapy, coaching, self-awareness tools (including the UNTANGLE™ card decks),
                    career counselling,
                    student programs, and emotional wellness services. These services are designed for
                    informational, educational, and
                    personal development purposes.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Not Medical Advice</h3>
                <p>
                    Mind Rewire is not a crisis service or a substitute for medical or psychiatric treatment. <br>
                    Our sessions and tools (including UNTANGLE™) support emotional wellbeing but do not replace
                    medical, psychological, or
                    psychiatric diagnosis or intervention.
                    Always consult a licensed medical professional for emergency or clinical mental health needs.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Eligibility</h3>
                <p>
                    By using our services, you confirm that:
                </p>
                <ul>
                    <li>You are at least 18 years old (or using services with parental/guardian consent)</li>
                    <li>You are legally capable of entering into binding contracts</li>
                    <li>You are using the platform for personal, non-commercial purposes</li>
                </ul>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Service Limitations</h3>
                <ul>
                    <li>Session availability is subject to therapist schedules and capacity</li>
                    <li>Tools like UNTANGLE are for self-reflection and awareness, not diagnostic use</li>
                    <li>We reserve the right to refuse or discontinue services if misused</li>
                </ul>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Confidentiality</h3>
                <p>
                    Therapy and coaching sessions are confidential.<br>
                    However, we may break confidentiality if legally required or if there is a threat of harm to
                    self or others.<br>
                    For digital forms and emails, while we take security seriously, we recommend avoiding sensitive
                    health information via
                    unsecured messages.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Intellectual Property</h3>
                <p>
                    All content on this site—including text, visuals, audio, logos, and card decks—is the property
                    of Mind Rewire and
                    protected by copyright laws. <br>
                    You may not copy, reproduce, distribute, or modify any materials without written permission.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Purchases and Refunds</h3>
                <p>
                    Digital and physical products, including UNTANGLE, are non-refundable once shipped/downloaded
                    unless damaged or
                    defective.<br>
                    All purchases are governed by the respective terms presented at checkout.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Your Responsibilities</h3>
                <p>
                    You agree not to:
                </p>
                <ul>
                    <li>Misrepresent yourself during sessions or on forms</li>
                    <li>Use our tools to provide therapy to others without proper qualifications</li>
                    <li>Use this website in any unlawful manner</li>
                </ul>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Third-Party Links</h3>
                <p>
                    Our site may contain links to third-party resources or tools. We are not responsible for the
                    content, policies, or
                    practices of these sites.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Limitation of Liability</h3>
                <p>
                    Mind Rewire is not liable for any indirect, incidental, or consequential damages resulting from
                    your use or inability to
                    use our services, products, or content.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Modifications</h3>
                <p>
                    We reserve the right to update or change these Terms at any time. Continued use of the site
                    constitutes acceptance of
                    the updated Terms.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Governing Law</h3>
                <p>
                    These Terms are governed by the laws of India.<br>
                    Any disputes arising out of or relating to these Terms shall be subject to the exclusive
                    jurisdiction of the courts in
                    [insert applicable city/state].
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Contact Us</h3>
                <p>
                    For any questions regarding these Terms of Use, please contact:
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