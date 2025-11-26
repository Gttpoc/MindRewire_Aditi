@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Careers at Mind Rewire | Join Our Mission to Redefine Mental Wellness</title>
<meta name="description"
    content="Apply to join Mind Rewire’s team of psychologists, coaches, content creators, and wellness strategists. We’re building a culture of empathy, emotional safety, and modern mental health innovation.">
<meta name="keywords"
    content="psychologist job India, mental health careers, therapy jobs Pune, join wellness startup, trauma-informed careers, apply therapist position, content writer psychology, EQ coach career, careers at Mind Rewire">

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@skybridge" />
<meta name="twitter:creator" content="@skybridge" />
<meta name="twitter:title" content="Careers at Mind Rewire | Join Our Mission to Redefine Mental Wellness">
<meta name="twitter:description"
    content="Apply to join Mind Rewire’s team of psychologists, coaches, content creators, and wellness strategists. We’re building a culture of empathy, emotional safety, and modern mental health innovation.">
<meta name="twitter:image" content="{{ url('favicon.png') }}">

<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Careers at Mind Rewire | Join Our Mission to Redefine Mental Wellness" />
<meta property="og:description"
    content="Apply to join Mind Rewire’s team of psychologists, coaches, content creators, and wellness strategists. We’re building a culture of empathy, emotional safety, and modern mental health innovation." />
@stop

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/careers/careers.css') }}">
@stop

@section('content')

<!-- page_wrap Start -->
<div class="page_wrap">
    <div class="top_banner">
        <div class="custom_container">
            <div class="textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading white">
                    We’re Not Just Building a Brand.
                    <span class="lightpink">
                        We’re Rebuilding How the World Thinks About Mental Health.
                    </span>
                </h2>
                <strong class="sub_heading white">
                    If You Believe Empathy Should Be Actionable, And Healing Should Be Intelligently Designed—This
                    Is Your Place.
                </strong>
                <div class="btnrow">
                    <a href="#section4" class="cta_btn animate_arrow animation_white_line bgpink">
                        Join the Mission
                        <span class="rgt_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="7" viewBox="0 0 16.336 7.913">
                                <g id="Group_49586" data-name="Group 49586" transform="translate(0 -132)">
                                    <g id="Group_48855" data-name="Group 48855" transform="translate(0 132)">
                                        <path id="Path_127067" data-name="Path 127067"
                                            d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
                                            transform="translate(0 -132)" fill="#ffc224"></path>
                                    </g>
                                </g>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="common_patch">
                    <img src="{{ url('assets/images/common-images/patch_pink.svg')}}" alt="icon">
                </div>
            </div>
            <div class="imgbox abs_img" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ url('assets/images/careers/img_top_banner.png')}}" alt="image" />
            </div>
        </div>
    </div>

    <div class="fullwrap1">
        <div class="section1" id="section1">
            <div class="custom_container">
                <div class="top_textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">
                        Currently<span class="blue"> Hiring</span>
                    </h2>
                    <div class="animate_border"></div>
                </div>
                <div class="hirings">
                    <div class="cardbox" data-aos="fade-up" data-aos-duration="1500">
                        <div class="tag">
                            <img src="{{ url('assets/images/icon_fav.svg')}}" alt="icon" />
                        </div>
                        <div class="row1">
                            <div class="b_row">
                                <h4>Program Support Associate</h4>
                                <span class="jobtype">(Part-Time)</span>
                                <div class="fullrow">
                                    <div class="icon">
                                        <img src="{{ url('assets/images/careers/icon_location.svg')}}" alt="icon" />
                                    </div>
                                    <div class="text">
                                        Remote (Pune-Based Preferred)
                                    </div>
                                </div>
                            </div>
                            <div class="b_row">
                                <div class="fullrow">
                                    <div class="icon">
                                        <img src="{{ url('assets/images/careers/icon_languages.svg')}}" alt="icon" />
                                    </div>
                                    <div class="text">
                                        English, Hindi, Marathi
                                    </div>
                                </div>
                            </div>
                            <div class="b_row">
                                <div class="fullrow">
                                    <div class="text">
                                        <strong class="btext">Skills</strong>
                                        Content Creation, Workshop Co-Hosting, Slide Decks, Basic Social Media
                                    </div>
                                </div>
                            </div>
                            <div class="b_row">
                                <div class="fullrow">
                                    <div class="text">
                                        <strong class="btext">Background</strong>
                                        Psychology, Education, Or Communication (Preferred)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row2">
                            <strong class="price">Payout : ₹ 10,000</strong>
                        </div>
                        <a href="#section4" class="cta_btn animation_white_line animate_arrow border_btn">
                            Apply
                            <span class="rgt_arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="7"
                                    viewBox="0 0 16.336 7.913">
                                    <g id="Group_49586" data-name="Group 49586" transform="translate(0 -132)">
                                        <g id="Group_48855" data-name="Group 48855" transform="translate(0 132)">
                                            <path id="Path_127067" data-name="Path 127067"
                                                d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
                                                transform="translate(0 -132)" fill="#ffc224"></path>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div class="cardbox" data-aos="fade-up" data-aos-duration="1500">
                        <div class="tag">
                            <img src="{{ url('assets/images/icon_fav.svg')}}" alt="icon" />
                        </div>
                        <div class="row1">
                            <div class="b_row">
                                <h4>Intern – Research & Content</h4>
                                <span class="jobtype">(3 Months)</span>
                                <div class="fullrow">
                                    <div class="icon">
                                        <img src="{{ url('assets/images/careers/icon_location.svg')}}" alt="icon" />
                                    </div>
                                    <div class="text">
                                        Remote
                                    </div>
                                </div>
                            </div>
                            <div class="b_row">
                                <div class="fullrow">
                                    <div class="icon">
                                        <img src="{{ url('assets/images/careers/icon_languages.svg')}}" alt="icon" />
                                    </div>
                                    <div class="text">
                                        English, Hindi, Marathi
                                    </div>
                                </div>
                            </div>
                            <div class="b_row">
                                <div class="fullrow">
                                    <div class="text">
                                        <strong class="btext">Skills</strong>
                                        Writing, Summarizing Psychology Concepts, Research
                                    </div>
                                </div>
                            </div>
                            <div class="b_row">
                                <div class="fullrow">
                                    <div class="text">
                                        <strong class="btext">Ideal For</strong>
                                        Psychology Students Or Fresh Grads
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row2">
                            <strong class="price">Payout : Performance-Based</strong>
                        </div>
                        <a href="#section4" class="cta_btn animation_white_line animate_arrow border_btn">
                            Apply
                            <span class="rgt_arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="7"
                                    viewBox="0 0 16.336 7.913">
                                    <g id="Group_49586" data-name="Group 49586" transform="translate(0 -132)">
                                        <g id="Group_48855" data-name="Group 48855" transform="translate(0 132)">
                                            <path id="Path_127067" data-name="Path 127067"
                                                d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
                                                transform="translate(0 -132)" fill="#ffc224"></path>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div class="cardbox" data-aos="fade-up" data-aos-duration="1500">
                        <div class="tag">
                            <img src="{{ url('assets/images/icon_fav.svg')}}" alt="icon" />
                        </div>
                        <div class="row1">
                            <div class="b_row">
                                <h4>Therapist</h4>
                                <span class="jobtype">(Part-Time)</span>
                                <div class="fullrow">
                                    <div class="icon">
                                        <img src="{{ url('assets/images/careers/icon_location.svg')}}" alt="icon" />
                                    </div>
                                    <div class="text">
                                        Online (India-Based)
                                    </div>
                                </div>
                            </div>
                            <div class="b_row">
                                <div class="fullrow">
                                    <div class="icon">
                                        <img src="{{ url('assets/images/careers/icon_languages.svg')}}" alt="icon" />
                                    </div>
                                    <div class="text">
                                        English, Hindi, Marathi
                                    </div>
                                </div>
                            </div>
                            <div class="b_row">
                                <div class="fullrow">
                                    <div class="text">
                                        <strong class="btext">Skills</strong>
                                        CBT, REBT, NLP, Or Trauma Modalities
                                    </div>
                                </div>
                            </div>
                            <div class="b_row">
                                <div class="fullrow">
                                    <div class="text">
                                        <strong class="btext">Criteria</strong>
                                        Must Be Comfortable With Young Adults + Digital Therapy Tools
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row2">
                            <strong class="price">Payout : Experience-Based</strong>
                        </div>
                        <a href="#section4" class="cta_btn animation_white_line animate_arrow border_btn">
                            Apply
                            <span class="rgt_arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="7"
                                    viewBox="0 0 16.336 7.913">
                                    <g id="Group_49586" data-name="Group 49586" transform="translate(0 -132)">
                                        <g id="Group_48855" data-name="Group 48855" transform="translate(0 132)">
                                            <path id="Path_127067" data-name="Path 127067"
                                                d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
                                                transform="translate(0 -132)" fill="#ffc224"></path>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="section2" id="section2">
            <div class="custom_container">
                <div class="top_textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading center">What Makes This Different From <br>
                        <span class="blue"> Any Other Practice or Startup</span>
                    </h2>
                    <div class="animate_border center"></div>
                    <p>
                        Reasons to Join :
                    </p>
                </div>
                <div class="boxwrap">
                    <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                        <a>
                            <div class="imgbox">
                                <img src="{{ url('assets/images/careers/img_startup1.png')}}" alt="image" />
                            </div>
                            <div class="textbox">
                                <h3>Mission That Matters</h3>
                                <p>
                                    We’re not chasing content or clients. We’re redesigning access to healing.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                        <a>
                            <div class="imgbox">
                                <img src="{{ url('assets/images/careers/img_startup2.png')}}" alt="image" />
                            </div>
                            <div class="textbox">
                                <h3>Hybrid Thinking Culture</h3>
                                <p>
                                    Bring your therapy degree or your startup brain—we value both.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                        <a>
                            <div class="imgbox">
                                <img src="{{ url('assets/images/careers/img_startup3.png')}}" alt="image" />
                            </div>
                            <div class="textbox">
                                <h3>Human-First</h3>
                                <p>
                                    We listen before we lead. We care before we convert. We’re building what the
                                    world
                                    truly needs.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                        <a>
                            <div class="imgbox">
                                <img src="{{ url('assets/images/careers/img_startup4.png')}}" alt="image" />
                            </div>
                            <div class="textbox">
                                <h3>Creative Freedom</h3>
                                <p>
                                    Want to write, teach, design, speak? There’s room here for more than just
                                    sessions.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="common_patch patch1" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="image" />
                </div>
                <div class="common_patch patch2" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="image" />
                </div>
            </div>
        </div>
    </div>

    <div class="section3" id="section3">
        <div class="common_fullrow">
            <div class="custom_container align-items-start mw_1250">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">
                        A Space That Respects <br>
                        <span class="blue"> Your Mind - And Your Voice</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p>
                        <strong>We Value :</strong>
                    </p>
                    <div class="accordion_wrap">
                        <div class="accordion_new">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="18"
                                    viewBox="0 0 15.028 18.678">
                                    <g id="Group_50480" data-name="Group 50480" transform="translate(-9.472 -4)">
                                        <path id="Path_132411" data-name="Path 132411"
                                            d="M16.485,23.014v-1.63a2.545,2.545,0,0,0-2.542-2.542H12.013a2.544,2.544,0,0,0-2.542,2.542v1.63a.334.334,0,0,0,.334.334h6.345a.334.334,0,0,0,.334-.334Zm-.668-.334H10.14v-1.3a1.876,1.876,0,0,1,1.874-1.874h1.929a1.876,1.876,0,0,1,1.874,1.874Z"
                                            transform="translate(0 -9.891)" fill="#6bbf9e" />
                                        <path id="Path_132412" data-name="Path 132412"
                                            d="M15.483,8.489A2.253,2.253,0,1,0,13.23,6.236a2.255,2.255,0,0,0,2.253,2.253Zm0-3.838a1.585,1.585,0,0,1,0,3.171A1.585,1.585,0,0,1,15.483,4.651Z"
                                            transform="translate(-2.505)" fill="#6bbf9e" />
                                        <path id="Path_132413" data-name="Path 132413"
                                            d="M37.974,46.491H36.044A2.545,2.545,0,0,0,33.5,49.032v1.63a.334.334,0,0,0,.334.334h6.345a.334.334,0,0,0,.334-.334v-1.63A2.544,2.544,0,0,0,37.974,46.491Zm1.874,3.838H34.17v-1.3a1.876,1.876,0,0,1,1.874-1.874h1.929a1.876,1.876,0,0,1,1.874,1.874Z"
                                            transform="translate(-16.015 -28.318)" fill="#6bbf9e" />
                                        <path id="Path_132414" data-name="Path 132414"
                                            d="M39.514,31.6a2.253,2.253,0,1,0,2.253,2.253A2.256,2.256,0,0,0,39.514,31.6Zm0,3.838a1.585,1.585,0,0,1,0-3.171A1.585,1.585,0,0,1,39.514,35.437Z"
                                            transform="translate(-18.52 -18.393)" fill="#6bbf9e" />
                                        <path id="Path_132415" data-name="Path 132415"
                                            d="M35.666,13.961a.334.334,0,1,0,.668,0V10.038A.334.334,0,0,0,36,9.7H32.324a.334.334,0,1,0,0,.668h3.342Z"
                                            transform="translate(-15.007 -3.802)" fill="#6bbf9e" />
                                        <path id="Path_132416" data-name="Path 132416"
                                            d="M22.493,44.071H19.656V40.316a.334.334,0,1,0-.668,0v4.09a.334.334,0,0,0,.334.334h3.172a.334.334,0,1,0,0-.668Z"
                                            transform="translate(-6.342 -23.98)" fill="#6bbf9e" />
                                        <path id="Path_132417" data-name="Path 132417"
                                            d="M17.747,37.025a.334.334,0,1,0,.535-.4l-1.305-1.754a.346.346,0,0,0-.536,0l-1.305,1.754a.334.334,0,1,0,.536.4l1.037-1.394Z"
                                            transform="translate(-3.731 -20.491)" fill="#6bbf9e" />
                                        <path id="Path_132418" data-name="Path 132418"
                                            d="M39.7,22.1a.334.334,0,1,0-.536.4l1.305,1.754a.336.336,0,0,0,.536,0L42.309,22.5a.334.334,0,1,0-.536-.4l-1.037,1.394Z"
                                            transform="translate(-19.744 -11.973)" fill="#6bbf9e" />
                                    </g>
                                </svg>
                            </div>
                            <div class="textbox">
                                <h3>Empathy Over Ego</h3>
                                <div class="slidetext">
                                    <p>
                                        No role is more important than the mission. We leave judgment at the door.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion_new">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 14.668 14.795">
                                    <g id="Group_50136" data-name="Group 50136" transform="translate(-2.74 -2.21)">
                                        <path id="Path_132222" data-name="Path 132222"
                                            d="M10.672,4.648a.479.479,0,0,0,.479-.479v-1H22.119V12.38a.479.479,0,0,0,.958,0V2.689A.479.479,0,0,0,22.6,2.21H10.672a.479.479,0,0,0-.479.479v1.48a.479.479,0,0,0,.479.479Z"
                                            transform="translate(-6.561)" fill="#213f6c" />
                                        <path id="Path_132223" data-name="Path 132223"
                                            d="M22.6,49.169a.479.479,0,0,0-.479.479v.563H11.151V41.5a.479.479,0,1,0-.958,0V50.69a.479.479,0,0,0,.479.479H22.6a.479.479,0,0,0,.479-.479V49.648a.479.479,0,0,0-.479-.479Z"
                                            transform="translate(-6.561 -34.164)" fill="#213f6c" />
                                        <path id="Path_132224" data-name="Path 132224"
                                            d="M9.815,28.152a.479.479,0,0,0-.479-.479H3.219a.479.479,0,1,0,0,.958H9.336a.479.479,0,0,0,.479-.479Z"
                                            transform="translate(0 -22.415)" fill="#213f6c" />
                                        <path id="Path_132225" data-name="Path 132225"
                                            d="M28.987,51.152a.479.479,0,0,0-.479-.479H24.219a.479.479,0,0,0,0,.958h4.289a.479.479,0,0,0,.479-.479Z"
                                            transform="translate(-18.486 -42.661)" fill="#213f6c" />
                                        <path id="Path_132226" data-name="Path 132226"
                                            d="M31.219,74.631h4.169a.479.479,0,1,0,0-.958H31.219a.479.479,0,1,0,0,.958Z"
                                            transform="translate(-24.648 -62.908)" fill="#213f6c" />
                                        <path id="Path_132227" data-name="Path 132227"
                                            d="M52.141,96.673H43.219a.479.479,0,1,0,0,.958h8.921a.479.479,0,1,0,0-.958Z"
                                            transform="translate(-35.211 -83.154)" fill="#213f6c" />
                                        <path id="Path_132228" data-name="Path 132228"
                                            d="M69.051,25.585h.029a.479.479,0,0,0,.318-.121l1.457-1.3a.479.479,0,1,0-.637-.715l-1.1.977-.461-.523a.479.479,0,1,0-.718.634l.78.884A.479.479,0,0,0,69.051,25.585Z"
                                            transform="translate(-57.289 -18.593)" fill="#213f6c" />
                                        <path id="Path_132229" data-name="Path 132229"
                                            d="M75.721,48.424a.479.479,0,0,0,.33.161h.029a.479.479,0,0,0,.318-.121l1.457-1.3a.479.479,0,1,0-.637-.715l-1.1.977-.461-.523a.479.479,0,0,0-.718.634Z"
                                            transform="translate(-63.451 -38.84)" fill="#213f6c" />
                                        <path id="Path_132230" data-name="Path 132230"
                                            d="M80.721,72.424a.479.479,0,0,0,.33.161h.029a.479.479,0,0,0,.318-.121l1.457-1.3a.479.479,0,0,0-.637-.715l-1.1.977-.461-.523a.479.479,0,1,0-.718.634Z"
                                            transform="translate(-67.853 -59.967)" fill="#213f6c" />
                                    </g>
                                </svg>
                            </div>
                            <div class="textbox">
                                <h3>Learning Over Labels</h3>
                                <div class="slidetext">
                                    <p>
                                        You don’t need to know it all—you just need to want to grow.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion_new">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16"
                                    viewBox="0 0 18.706 16.642">
                                    <path id="Path_132419" data-name="Path 132419"
                                        d="M9.353,16.642a1.1,1.1,0,0,1-.723-.272c-.756-.661-1.484-1.282-2.127-1.829l0,0a39.559,39.559,0,0,1-4.644-4.359A6.962,6.962,0,0,1,0,5.622,5.846,5.846,0,0,1,1.484,1.629,5.03,5.03,0,0,1,5.226,0,4.705,4.705,0,0,1,8.165,1.015,6.013,6.013,0,0,1,9.353,2.255a6.014,6.014,0,0,1,1.188-1.241A4.705,4.705,0,0,1,13.48,0a5.03,5.03,0,0,1,3.742,1.629,5.846,5.846,0,0,1,1.484,3.993,6.962,6.962,0,0,1-1.855,4.557,39.55,39.55,0,0,1-4.644,4.359c-.644.549-1.374,1.171-2.131,1.833A1.1,1.1,0,0,1,9.353,16.642ZM5.226,1.1A3.946,3.946,0,0,0,2.289,2.371,4.756,4.756,0,0,0,1.1,5.622,5.858,5.858,0,0,0,2.7,9.48,38.928,38.928,0,0,0,7.21,13.7l0,0c.645.55,1.377,1.173,2.138,1.839.766-.667,1.5-1.291,2.145-1.842A38.935,38.935,0,0,0,16.007,9.48a5.859,5.859,0,0,0,1.6-3.858,4.756,4.756,0,0,0-1.194-3.25A3.946,3.946,0,0,0,13.48,1.1a3.634,3.634,0,0,0-2.269.785A5.317,5.317,0,0,0,9.947,3.344a.692.692,0,0,1-1.188,0A5.312,5.312,0,0,0,7.494,1.881,3.634,3.634,0,0,0,5.226,1.1Zm0,0"
                                        fill="#1c3495" />
                                </svg>
                            </div>
                            <div class="textbox">
                                <h3>Emotional Safety</h3>
                                <div class="slidetext">
                                    <p>
                                        We live what we teach: boundaries, balance, and burnout prevention.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion_new">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18"
                                    viewBox="0 0 16.83 18.125">
                                    <g id="Group_50481" data-name="Group 50481" transform="translate(-3 -2)">
                                        <path id="Path_132420" data-name="Path 132420"
                                            d="M15.647,2A.647.647,0,0,0,15,2.647v16.83a.647.647,0,1,0,1.295,0V2.647A.647.647,0,0,0,15.647,2Z"
                                            transform="translate(-4.232)" fill="#1c3495" />
                                        <path id="Path_132421" data-name="Path 132421"
                                            d="M19.647,9A.647.647,0,0,0,19,9.647v8.415a.647.647,0,1,0,1.295,0V9.647A.647.647,0,0,0,19.647,9Z"
                                            transform="translate(-5.643 -2.469)" fill="#1c3495" />
                                        <path id="Path_132422" data-name="Path 132422"
                                            d="M23.647,6A.647.647,0,0,0,23,6.647v12.3a.647.647,0,1,0,1.295,0V6.647A.647.647,0,0,0,23.647,6Z"
                                            transform="translate(-7.053 -1.411)" fill="#1c3495" />
                                        <path id="Path_132423" data-name="Path 132423"
                                            d="M27.647,12a.647.647,0,0,0-.647.647v4.531a.647.647,0,1,0,1.295,0V12.647A.647.647,0,0,0,27.647,12Z"
                                            transform="translate(-8.464 -3.527)" fill="#1c3495" />
                                        <path id="Path_132424" data-name="Path 132424"
                                            d="M11.647,9A.647.647,0,0,0,11,9.647v8.415a.647.647,0,1,0,1.295,0V9.647A.647.647,0,0,0,11.647,9Z"
                                            transform="translate(-2.821 -2.469)" fill="#1c3495" />
                                        <path id="Path_132425" data-name="Path 132425"
                                            d="M7.647,6A.647.647,0,0,0,7,6.647v12.3a.647.647,0,1,0,1.295,0V6.647A.647.647,0,0,0,7.647,6Z"
                                            transform="translate(-1.411 -1.411)" fill="#1c3495" />
                                        <path id="Path_132426" data-name="Path 132426"
                                            d="M3.647,12A.647.647,0,0,0,3,12.647v4.531a.647.647,0,1,0,1.295,0V12.647A.647.647,0,0,0,3.647,12Z"
                                            transform="translate(0 -3.527)" fill="#1c3495" />
                                    </g>
                                </svg>
                            </div>
                            <div class="textbox">
                                <h3>Your Voice Matters</h3>
                                <div class="slidetext">
                                    <p>
                                        Every member contributes to how we shape our brand, services, and
                                        storytelling.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>
                        <strong>We hire human beings first. Skills come second. Heart always leads.</strong>
                    </p>
                </div>
                <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/careers/img_your_voice.png')}}" alt="image" />
                </div>
            </div>
        </div>
    </div>

    <div class="section4" id="section4">
        <div class="custom_container">
            <div class="top_textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading center">
                    Let’s Build the Future of
                    <span class="blue"> Mental Wellness—Together</span>
                </h2>
                <div class="animate_border center"></div>
                <p>
                    Submit The Details Below :
                </p>
            </div>
            <div class="formarea" data-aos="fade-up" data-aos-duration="1500">
                <div class="whitebox">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- add error class for error -->
                            <div class="new_inputlabel">
                                <div class="label">
                                    <div class="relative">
                                        First Name
                                        <!-- <span class="star">*</span> -->
                                    </div>
                                </div>
                                <input type="text" class="input" placeholder="Enter First Name, eg. John" />
                            </div>
                            <span class="error_msg d-none">
                                <img src="{{ url('assets/images/common-images/icon_error.svg')}}" alt="icon error"
                                    class="licon">
                                <div class="textbox">
                                    <strong class="ttext">Error</strong>
                                    <p>First Name is required.</p>
                                </div>
                            </span>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- add error class for error -->
                            <div class="new_inputlabel">
                                <div class="label">
                                    <div class="relative">
                                        Last Name
                                    </div>
                                </div>
                                <input type="text" class="input" placeholder="Enter Last Name, eg. Doe" />
                            </div>
                            <span class="error_msg d-none">
                                <img src="{{ url('assets/images/common-images/icon_error.svg')}}" alt="icon error"
                                    class="licon">
                                <div class="textbox">
                                    <strong class="ttext">Error</strong>
                                    <p>Last Name is required.</p>
                                </div>
                            </span>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="new_inputlabel">
                                <div class="label">
                                    <div class="relative">Email Address
                                    </div>
                                </div>
                                <input type="email" class="input" placeholder="Enter Email, eg. johndoe@gmail.com" />
                            </div>
                            <span class="error_msg d-none">
                                <img src="{{ url('assets/images/common-images/icon_error.svg')}}" alt="icon error"
                                    class="licon">
                                <div class="textbox">
                                    <strong class="ttext">Error</strong>
                                    <p>Valid Email Address is required.</p>
                                </div>
                            </span>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="two_column">
                                <div class="td1">
                                    <div class="new_inputlabel">
                                        <div class="ui search selection dropdown dropdownmenu input_none with_icon">
                                            <input type="hidden" name="yourFieldName">
                                            <div class="text default">
                                                <div class="icon">
                                                    <img src="{{ url('assets/images/common-images/flag_india.png')}}"
                                                        alt="icon">
                                                </div>
                                                +91
                                            </div>
                                            <div class="menu with_searchbox mw_180">
                                                <div class="selectsearch_wrap">
                                                    <div class="search_area">
                                                        <input type="text" placeholder="Search"
                                                            class="input graytext filter-input" />
                                                    </div>
                                                </div>
                                                <div class="select_scrollarea filterfrom customscroll">
                                                    <div class="item" data-value="+91">
                                                        <div class="icon">
                                                            <img src="{{ url('assets/images/common-images/flag_india.png')}}"
                                                                alt="icon">
                                                        </div>
                                                        +91
                                                    </div>
                                                    <div class="item" data-value="+974">
                                                        <div class="icon">
                                                            <img src="{{ url('assets/images/common-images/flag_uae.png')}}"
                                                                alt="icon">
                                                        </div>
                                                        +974
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="td2">
                                    <div class="new_inputlabel">
                                        <div class="label">
                                            <div class="relative">Phone #
                                            </div>
                                        </div>
                                        <input type="number" class="input" placeholder="Enter Phone, eg. 98765432" />
                                    </div>
                                </div>
                            </div>
                            <span class="error_msg d-none">
                                <img src="{{ url('assets/images/common-images/icon_error.svg')}}" alt="icon error"
                                    class="licon">
                                <div class="textbox">
                                    <strong class="ttext">Error</strong>
                                    <p>Phone Number is required.</p>
                                </div>
                            </span>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="new_inputlabel">
                                <div class="label">
                                    <div class="relative">Gender
                                    </div>
                                </div>
                                <div class="ui search selection dropdown dropdownmenu input_none">
                                    <input type="hidden" name="yourFieldName">
                                    <div class="text default">
                                        Select Gender
                                    </div>
                                    <div class="menu with_searchbox mw_180">
                                        <div class="selectsearch_wrap">
                                            <div class="search_area">
                                                <input type="text" placeholder="Search"
                                                    class="input graytext filter-input" />
                                            </div>
                                        </div>
                                        <div class="select_scrollarea filterfrom customscroll">
                                            <div class="item" data-value="Male">Male</div>
                                            <div class="item" data-value="Female">Female</div>
                                            <div class="item" data-value="Other">Other</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="error_msg d-none">
                                <img src="{{ url('assets/images/common-images/icon_error.svg')}}" alt="icon error"
                                    class="licon">
                                <div class="textbox">
                                    <strong class="ttext">Error</strong>
                                    <p>Please select the Gender.</p>
                                </div>
                            </span>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="new_inputlabel">
                                <div class="label">
                                    <div class="relative">Role Applying For
                                    </div>
                                </div>
                                <div class="ui search selection dropdown dropdownmenu input_none">
                                    <input type="hidden" name="yourFieldName">
                                    <div class="text default">
                                        Select Role Applying For
                                    </div>
                                    <div class="menu with_searchbox mw_180">
                                        <div class="selectsearch_wrap">
                                            <div class="search_area">
                                                <input type="text" placeholder="Search"
                                                    class="input graytext filter-input" />
                                            </div>
                                        </div>
                                        <div class="select_scrollarea filterfrom customscroll">
                                            <div class="item" data-value="HR">HR</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="error_msg d-none">
                                <img src="{{ url('assets/images/common-images/icon_error.svg')}}" alt="icon error"
                                    class="licon">
                                <div class="textbox">
                                    <strong class="ttext">Error</strong>
                                    <p>Please select Role Applying For.</p>
                                </div>
                            </span>
                        </div>
                        <div class="col-lg-12">
                            <div class="new_inputlabel">
                                <div class="label">
                                    <div class="relative">
                                        Why Do You Want to Join Mind Rewire?
                                    </div>
                                </div>
                                <textarea class="textarea text_autoheight" placeholder="Enter Your Reason"></textarea>
                            </div>
                            <span class="error_msg d-none">
                                <img src="{{ url('assets/images/common-images/icon_error.svg')}}" alt="icon error"
                                    class="licon">
                                <div class="textbox">
                                    <strong class="ttext">Error</strong>
                                    <p>Enter the Reason.</p>
                                </div>
                            </span>
                        </div>
                        <div class="col-lg-12">
                            <div class="btnrow">
                                <div class="add_attachment">
                                    <strong class="htext">Attach Resume/ CV <span class="red">*</span></strong>
                                    <div class="custom_choose">
                                        <input type="file" class="fileInput" id="fileInput"
                                            accept=".pdf,.doc,.docx,.rtf,.txt,.odt,.xlsx" />
                                        <label for="fileInput" class="custom-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                viewBox="0 0 15.849 15">
                                                <g id="Group_50233" data-name="Group 50233"
                                                    transform="translate(-0.001 -13.707)">
                                                    <g id="Group_50232" data-name="Group 50232"
                                                        transform="translate(0.001 13.707)">
                                                        <path id="Path_132352" data-name="Path 132352"
                                                            d="M14.365,15.188a5.072,5.072,0,0,0-7.165,0L1.059,21.33a3.619,3.619,0,0,0,5.118,5.118l5.63-5.63a2.171,2.171,0,1,0-3.071-3.071L5.054,21.428a.724.724,0,1,0,1.024,1.024l3.682-3.681a.724.724,0,1,1,1.024,1.023l-5.63,5.63a2.171,2.171,0,0,1-3.071-3.071l6.142-6.141a3.619,3.619,0,1,1,5.118,5.118L7.2,27.471a.724.724,0,0,0,1.024,1.024l6.141-6.142a5.066,5.066,0,0,0,0-7.165Z"
                                                            transform="translate(-0.001 -13.707)" fill="#b3212c" />
                                                    </g>
                                                </g>
                                            </svg>
                                            <strong>Choose Files</strong>
                                        </label>
                                        <div class="file-list" id="fileList">
                                            <div class="file-name" class="fileName"></div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="cta_btn bggreen animation_white_line animate_arrow ">
                                    Submit Application
                                    <span class="rgt_arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="7"
                                            viewBox="0 0 16.336 7.913">
                                            <g id="Group_49586" data-name="Group 49586" transform="translate(0 -132)">
                                                <g id="Group_48855" data-name="Group 48855"
                                                    transform="translate(0 132)">
                                                    <path id="Path_127067" data-name="Path 127067"
                                                        d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
                                                        transform="translate(0 -132)" fill="#ffc224"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-12 d-none">
                            <div class="thankyou_msg">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16.062 16.062">
                                        <g data-name="Group 49607" transform="translate(-101 -343)">
                                            <circle id="Ellipse_1" data-name="Ellipse 1" cx="5" cy="5" r="5"
                                                transform="translate(104 345.686)" fill="#fff"></circle>
                                            <path id="Path_120932" data-name="Path 120932"
                                                d="M9.347,1.318A8.031,8.031,0,1,1,1.316,9.349,8.032,8.032,0,0,1,9.347,1.318ZM7.679,11.957,5.713,9.989A.86.86,0,1,1,6.93,8.772L8.316,10.16l3.448-3.448a.86.86,0,1,1,1.217,1.217L8.923,11.986a.862.862,0,0,1-1.217,0l-.027-.029Z"
                                                transform="translate(99.684 341.683)" fill="#4EB96F"
                                                fill-rule="evenodd">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="text">
                                    <h3>Thank you for Applying.</h3>
                                    <p>Our team in {city} has received your enquiry. One of our experts
                                        will review your request and get back to you
                                        shortly with the required assistance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section5" id="section5">
        <div class="common_fullrow">
            <div class="custom_container align-items-start">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">We’re Always Looking for
                        <span class="blue">Emotionally Intelligent Talent</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p>
                        Even if there’s no current opening that matches, feel free to drop your profile. Writers,
                        therapists, educators,
                        speakers, or quiet thinkers—we’re open.
                    </p>
                    <div class="btnrow" data-aos="fade-up" data-aos-duration="1500">
                        <a href="{{url('contact-us')}}" class="cta_btn animation_white_line animate_arrow">
                            Email Us Directly
                            <span class="rgt_arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="7"
                                    viewBox="0 0 16.336 7.913">
                                    <g id="Group_49586" data-name="Group 49586" transform="translate(0 -132)">
                                        <g id="Group_48855" data-name="Group 48855" transform="translate(0 132)">
                                            <path id="Path_127067" data-name="Path 127067"
                                                d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
                                                transform="translate(0 -132)" fill="#ffc224"></path>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </a>
                        <a href="https://www.linkedin.com/company/mindrewire/" target="_blank"
                            class="cta_btn animation_white_line animate_arrow border_btn">
                            Follow Us on LinkedIn
                            <span class="rgt_arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="7"
                                    viewBox="0 0 16.336 7.913">
                                    <g id="Group_49586" data-name="Group 49586" transform="translate(0 -132)">
                                        <g id="Group_48855" data-name="Group 48855" transform="translate(0 132)">
                                            <path id="Path_127067" data-name="Path 127067"
                                                d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
                                                transform="translate(0 -132)" fill="#ffc224"></path>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                    <div class="withpatch">
                        <img src="{{ url('assets/images/careers/img_talent.png')}}" alt="image" />
                        <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                            <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- page_wrap End -->

@stop

@section('footer_script')
<script>

    $(document).ready(function () {
        // accordion js start
        $('.accordion_wrap').find(".accordion_new:first").addClass('active').find(".slidetext").show();
        $(".accordion_new").click(function () {
            $(this).addClass("active");
            $(this).siblings(".accordion_new").removeClass("active");

            $(this).find(".slidetext").slideDown();
            $(this).siblings(".accordion_new").find(".slidetext").slideUp();
        });
        // accordion js end
    });

    // File upload JS Start
    let selectedFile = null; // Hold only one file

    $('.fileInput').on('change', function () {
        const file = this.files[0]; // Get the first file only

        if (!file) return; // If no file selected

        selectedFile = file; // Set the selected file
        updateFileList(); // Show in UI
    });

    function updateFileList() {
        const fileList = $('#fileList');
        fileList.empty(); // Clear existing list

        if (selectedFile) {
            const fileItem = $(`
			<div class="file-item">
				<span class="icon_attachment">
					<img src="{{ url('assets/images/common-images/icon_attachment.svg')}}" alt="attachment" />
				</span>
				<span class="file-name">${selectedFile.name}</span>
				<span class="icon_delete">
					<img src="{{ url('assets/images/common-images/icon_delete_round.svg')}}" alt="delete" />
				</span>
			</div>
		`);

            // Delete button handler
            fileItem.find('.icon_delete').on('click', function () {
                selectedFile = null; // Clear selected file
                updateFileList(); // Refresh UI
            });

            fileList.append(fileItem);
        }

        // Reset input to allow re-selecting same file
        $('.fileInput').val('');
    }
    // File upload JS End

</script>
@stop