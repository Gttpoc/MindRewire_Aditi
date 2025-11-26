@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Compliance Statement | Mind Rewire</title>
<meta name="description"
    content="Learn how Mind Rewire adheres to ethical, legal, and data protection regulations in providing therapy, coaching, assessments, and wellness products.">
<meta name="keywords"
    content="therapy compliance India, mental health service compliance, Mind Rewire ethics, wellness product regulations, GDPR therapy tools, online counselling standards, emotional wellness legal policy, psychological service ethics">

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@skybridge" />
<meta name="twitter:creator" content="@skybridge" />
<meta name="twitter:title" content="Compliance Statement | Mind Rewire">
<meta name="twitter:description"
    content="Learn how Mind Rewire adheres to ethical, legal, and data protection regulations in providing therapy, coaching, assessments, and wellness products.">
<meta name="twitter:image" content="{{ url('favicon.png') }}">

<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Compliance Statement | Mind Rewire" />
<meta property="og:description"
    content="Learn how Mind Rewire adheres to ethical, legal, and data protection regulations in providing therapy, coaching, assessments, and wellness products." />
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
                    <span class="lightpink">Compliance Statement</span>
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
                <li><a href="{{url('cookies-policy')}}">COOKIES POLICY</a></li>
                <li><a href="{{url('compliance-statement')}}" class="active">COMPLIANCE STATEMENT</a></li>
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
                    At <b>Mind Rewire</b>, we are committed to delivering emotional wellness services and digital
                    tools with the highest standards
                    of ethics, transparency, and regulatory compliance. This Compliance Statement outlines the
                    frameworks and best practices
                    that guide our operations, both online and offline.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Clinical and Ethical Standards</h3>
                <p>
                    All therapy, counselling, and coaching services offered by Mind Rewire are provided by certified
                    professionals trained
                    in evidence-based modalities such as:
                </p>
                <ul>
                    <li>Cognitive Behavioral Therapy (CBT)</li>
                    <li>Rational Emotive Behavior Therapy (REBT)</li>
                    <li>Neuro-Linguistic Programming (NLP)</li>
                    <li>Trauma-Informed Care</li>
                    <li>Applied Behavior Analysis (ABA)</li>
                </ul>
                <p>
                    We adhere to the ethical codes outlined by recognized psychological and counselling bodies, and
                    we maintain strict
                    boundaries in client-practitioner relationships.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Data Privacy and Security</h3>
                <p>
                    Mind Rewire complies with applicable privacy and data protection regulations, including:
                </p>
                <ul>
                    <li>The Information Technology Act, 2000 (India)</li>
                    <li>Basic GDPR-aligned practices for international users</li>
                    <li>Industry-standard protocols for securing personal and session-related information</li>
                </ul>
                <p>
                    See our [Privacy Policy] and [Data Protection Statement] for detailed information.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Session Integrity and Confidentiality</h3>
                <p>
                    All therapeutic and coaching sessions are conducted with strict confidentiality. Information is
                    shared only:
                </p>
                <ul>
                    <li>With the client’s explicit consent</li>
                    <li>If legally required or in cases of imminent harm</li>
                </ul>
                <p>
                    Practitioners are required to maintain session records securely and ethically, in accordance
                    with psychological best
                    practices.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Product Transparency and Usage</h3>
                <p>
                    Our wellness tools—including the UNTANGLE card decks—are designed for self-reflection, personal
                    growth, and group
                    facilitation. They are not clinical diagnostic tools, nor are they substitutes for medical or
                    psychiatric treatment.
                </p>
                <p>
                    All product information, use cases, and disclaimers are clearly mentioned on packaging and in
                    digital product guides.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Platform and Payment Security</h3>
                <p>
                    Mind Rewire’s website and digital services operate on encrypted platforms with secure payment
                    processing partners. We do
                    not store sensitive financial data. We only partner with third-party platforms (e.g., payment
                    gateways, scheduling
                    tools) that are known to meet security and compliance standards.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Feedback and Grievance Redressal</h3>
                <p>
                    We welcome feedback and are committed to resolving concerns transparently and fairly. If you
                    wish to report an issue
                    related to service conduct, data usage, or session quality, please contact:
                </p>
                <p>
                    <b>Email:</b> support@mind-rewire.com <br>
                    All grievances are reviewed by our internal ethics and compliance lead within 5 business days.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Ongoing Compliance Monitoring</h3>
                <p>
                    Our internal policies are reviewed periodically to remain aligned with:
                </p>
                <ul>
                    <li>Evolving regulations in mental healthcare and digital services</li>
                    <li>User safety expectations</li>
                    <li>Ethical innovation in the emotional wellness space</li>
                </ul>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Contact for Compliance Matters</h3>
                <p>
                    For queries or documentation requests related to compliance, professional certifications, or
                    partnership due diligence,
                    write to:
                </p>
                <p>
                    <b>Email:</b> compliance@mind-rewire.com<br>
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