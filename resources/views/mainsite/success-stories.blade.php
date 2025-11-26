@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Real Client Transformations | Mind Rewire Testimonials & Case Studies</title>
<meta name="description"
    content="Read real, anonymized success stories from students, parents, professionals, and organizations who’ve experienced emotional healing, career clarity, trauma recovery, and mindset rewiring through Mind Rewire’s therapy and coaching programs.">
<meta name="keywords"
    content="mental health testimonials India, therapy success stories, student counselling case study, burnout recovery story, trauma healing experience, parent-child therapy feedback, corporate mental wellness impact">

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@skybridge" />
<meta name="twitter:creator" content="@skybridge" />
<meta name="twitter:title" content="Real Client Transformations | Mind Rewire Testimonials & Case Studies">
<meta name="twitter:description"
    content="Read real, anonymized success stories from students, parents, professionals, and organizations who’ve experienced emotional healing, career clarity, trauma recovery, and mindset rewiring through Mind Rewire’s therapy and coaching programs.">
<meta name="twitter:image" content="{{ url('favicon.png') }}">

<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Real Client Transformations | Mind Rewire Testimonials & Case Studies" />
<meta property="og:description"
    content="Read real, anonymized success stories from students, parents, professionals, and organizations who’ve experienced emotional healing, career clarity, trauma recovery, and mindset rewiring through Mind Rewire’s therapy and coaching programs." />
@stop

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/success-stories/success-stories.css') }}">
@stop

@section('content')

<!-- page_wrap Start -->
<div class="page_wrap">
    <div class="top_banner">
        <div class="custom_container">
            <div class="textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading white">
                    Healing Is Personal. <br>
                    <span class="lightpink"> But You’re Not Alone.</span>
                </h2>
                <strong class="sub_heading white">
                    Explore Real Transformations From Real People—Guided Through Therapy, Coaching, And Care At Mind
                    Rewire.
                </strong>
                <p>
                    We Believe Stories Speak Louder Than Stats. Every Quote, Every Shift You’ll Read Here Is An
                    Authentic Outcome Of
                    Personalized Emotional Journeys—Led With Empathy, Science, And Connection.
                </p>
                <div class="btnrow">
                    <a href="{{url('contact-us')}}" class="cta_btn animate_arrow animation_white_line bgpink">
                        Begin Your Own Story
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
                    <a href="{{url('book-session')}}" class="cta_btn animate_arrow animation_white_line border_white">
                        Talk to a Therapist
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
            <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ url('assets/images/success-stories/img_top_banner.png')}}" alt="image" />
            </div>
        </div>
    </div>

    <div class="details_wrap" id="details_wrap">
        <div class="custom_container">
            <div class="owl-carousel stories_type" data-aos="fade-up" data-aos-duration="1500">
                <div class="item">
                    <div class="icon">
                        <img src="{{ url('assets/images/success-stories/icon_students.png')}}" alt="icon" />
                    </div>
                    <h3>Students</h3>
                </div>
                <div class="item">
                    <div class="icon">
                        <img src="{{ url('assets/images/success-stories/icon_parents.png')}}" alt="icon" />
                    </div>
                    <h3>Parents</h3>
                </div>
                <div class="item">
                    <div class="icon">
                        <img src="{{ url('assets/images/success-stories/icon_adults.png')}}" alt="icon" />
                    </div>
                    <h3>Adults</h3>
                </div>
                <div class="item">
                    <div class="icon">
                        <img src="{{ url('assets/images/success-stories/icon_corporates.png')}}" alt="icon" />
                    </div>
                    <h3>Corporates</h3>
                </div>
            </div>
            <div class="stories_wrap" data-aos="fade-up" data-aos-duration="1500">
                <div class="stories_box students">
                    <div class="info_row">
                        <div class="imgbox">
                            <img src="{{ url('assets/images/success-stories/icon_students.png')}}" alt="icon">
                        </div>
                        <div class="textbox">
                            <h3>I couldn’t speak in class. Now I lead presentations.</h3>
                            <span class="gtext">Male | 16 Years</span>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <img src="{{ url('assets/images/common-images/icon_location.svg')}}" alt="icon">
                                    </div>
                                    Pune
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="brow">
                        <h4 class="blue">Before</h4>
                        <p>
                            Panic Attacks During Exams | Freeze Response In Classrooms
                        </p>
                    </div>
                    <div class="brow">
                        <h4>After</h4>
                        <p>
                            8 REBT + Somatic Sessions | Exam Confidence Increased | Led Peer Study Circle
                        </p>
                    </div>
                    <a href="#" class="cta_btn animation_white_line animate_arrow border_btn">
                        Read Full Journey
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
                <div class="stories_box parents">
                    <div class="info_row">
                        <div class="imgbox">
                            <img src="{{ url('assets/images/success-stories/icon_parents.png')}}" alt="icon">
                        </div>
                        <div class="textbox">
                            <h3>My daughter talks to me again - and trusts me.</h3>
                            <span class="gtext">Parent Of A 13 Year Old</span>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <img src="{{ url('assets/images/common-images/icon_location.svg')}}" alt="icon">
                                    </div>
                                    Mumbai
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="brow">
                        <h4 class="blue">Before</h4>
                        <p>
                            Emotional Withdrawal | Fights At Home | Lack Of Expression
                        </p>
                    </div>
                    <div class="brow">
                        <h4>After</h4>
                        <p>
                            Joint Parent-Child Therapy+Coaching | Rebuilt Trust | Improved Communication
                        </p>
                    </div>
                    <a href="#" class="cta_btn animation_white_line animate_arrow border_btn">
                        Read Full Journey
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
                <div class="stories_box adults">
                    <div class="info_row">
                        <div class="imgbox">
                            <img src="{{ url('assets/images/success-stories/icon_adults.png')}}" alt="icon">
                        </div>
                        <div class="textbox">
                            <h3>I thought I was just stressed. Turned out, I was silently burned out.</h3>
                            <span class="gtext">Female | 38 Years | Sr. Manager</span>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <img src="{{ url('assets/images/common-images/icon_location.svg')}}" alt="icon">
                                    </div>
                                    Hyderabad
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="brow">
                        <h4 class="blue">Before</h4>
                        <p>
                            Chronic fatigue, emotional shutdown, difficulty sleeping
                        </p>
                    </div>
                    <div class="brow">
                        <h4>After</h4>
                        <p>
                            10 trauma-informed therapy sessions with vagus nerve and somatic work
                        </p>
                    </div>
                    <a href="#" class="cta_btn animation_white_line animate_arrow border_btn">
                        Read Full Journey
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
                <div class="stories_box corporates">
                    <div class="info_row">
                        <div class="imgbox">
                            <img src="{{ url('assets/images/success-stories/icon_corporates.png')}}" alt="icon">
                        </div>
                        <div class="textbox">
                            <h3>I couldn’t speak in class. Now I lead presentations.</h3>
                            <span class="gtext">Female | HR Lead</span>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <img src="{{ url('assets/images/common-images/icon_location.svg')}}" alt="icon">
                                    </div>
                                    New Delhi
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="brow">
                        <h4 class="blue">Before</h4>
                        <p>
                            High attrition, poor morale, no engagement in workshops
                        </p>
                    </div>
                    <div class="brow">
                        <h4>After</h4>
                        <p>
                            3-month wellness intervention + team pods → increased retention + emotional openness
                        </p>
                    </div>
                    <a href="#" class="cta_btn animation_white_line animate_arrow border_btn">
                        Read Full Journey
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
                <div class="stories_box students">
                    <div class="info_row">
                        <div class="imgbox">
                            <img src="{{ url('assets/images/success-stories/icon_students.png')}}" alt="icon">
                        </div>
                        <div class="textbox">
                            <h3>I stopped comparing myself to kids on the internet.</h3>
                            <span class="gtext">Female | 14 Years</span>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <img src="{{ url('assets/images/common-images/icon_location.svg')}}" alt="icon">
                                    </div>
                                    New Delhi
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="brow">
                        <h4 class="blue">Before</h4>
                        <p>
                            Social anxiety, low self-worth, digital overwhelm
                        </p>
                    </div>
                    <div class="brow">
                        <h4>After</h4>
                        <p>
                            EQ coaching, journaling exercises, confidence in class + social settings
                        </p>
                    </div>
                    <a href="#" class="cta_btn animation_white_line animate_arrow border_btn">
                        Read Full Journey
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
            </div>
        </div>
    </div>

    <div class="last_bluebox" id="last_bluebox">
        <div class="common_fullrow">
            <div class="custom_container reverse">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">The Next Transformation <br>
                        <span class="blue">Could Be Yours</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p>
                        Whether you’re navigating anxiety, parenting stress, burnout, or trauma—you don’t have to
                        wait for things to break. Your
                        story of healing can start today.
                    </p>
                    <div class="btnrow">
                        <a href="{{url('book-session')}}" class="cta_btn animate_arrow animation_white_line border_btn">
                            Book a Session With Us
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
                    <img src="{{ url('assets/images/success-stories/img_last_bluebox.png')}}" alt="image" />
                </div>
            </div>
        </div>
        <div class="common_patch" data-aos="fade-up" data-aos-duration="1500">
            <img src="{{ url('assets/images/common-images/patch_pink.svg')}}" alt="image" />
        </div>
    </div>

</div>
<!-- page_wrap End -->

@stop

@section('footer_script')
<script src="{{ version_url('assets/js/owl.carousel.js') }}"></script>
<script>
    $(document).ready(function () {
        // commoncarousel js Start
        function commoncarouseljs(selector, itemsToShow, margin, responsiveSettings, autoplay = false, autoplaySpeed = 3000, loop = false) {
            $(selector).each(function () {
                var owl = $(this).owlCarousel({
                    items: itemsToShow,
                    nav: true,
                    loop: loop,
                    autoplay: autoplay,
                    autoplayTimeout: autoplaySpeed,
                    autoplayHoverPause: false,
                    margin: margin,
                    responsive: responsiveSettings
                });

                // Check if the carousel needs navigation
                owl.on('initialized.owl.carousel changed.owl.carousel', function (event) {
                    var totalItems = event.item.count;
                    var itemsVisible = event.page.size;

                    if (totalItems > itemsVisible) {
                        $(this).find('.owl-nav').show();
                    } else {
                        $(this).find('.owl-nav').hide();
                    }
                });
            });
        }
        // commoncarousel js End

        // stories_type js Start
        commoncarouseljs('.stories_type', 5, 5, {
            0: {
                items: 1
            },
            500: {
                items: 2
            },
            768: {
                items: 3
            },
            1200: {
                items: 4
            },
        }, true, 5000, false); // autoplay/loop


        // Filter js 
        $('.stories_box').show();
        $('.stories_type .item').click(function () {
            $('.stories_type .item').removeClass('active');
            $(this).addClass('active');
            let filterClass = $(this).find('h3').text().trim().toLowerCase();
            $('.stories_box').hide();
            $('.stories_box.' + filterClass).show();
        });
        // stories_type js End

    });

</script>
@stop