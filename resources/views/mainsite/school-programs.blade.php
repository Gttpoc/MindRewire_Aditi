@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>School Mental Wellness Programs | Student Pods, Teacher Training, Audits</title>
<meta name="description"
    content="Mind Rewire provides student therapy pods, teacher workshops, and mental health climate audits for schools. Custom programs that create safe, emotionally resilient learning environments.">
<meta name="keywords"
    content="school mental wellness India, student therapy pods, emotional safety schools, teacher emotional training, school climate audit, school EQ workshops, emotional wellbeing curriculum, teen mental health school, parent workshops education">

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@skybridge" />
<meta name="twitter:creator" content="@skybridge" />
<meta name="twitter:title" content="School Mental Wellness Programs | Student Pods, Teacher Training, Audits">
<meta name="twitter:description"
    content="Mind Rewire provides student therapy pods, teacher workshops, and mental health climate audits for schools. Custom programs that create safe, emotionally resilient learning environments.">
<meta name="twitter:image" content="{{ url('favicon.png') }}">

<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="School Mental Wellness Programs | Student Pods, Teacher Training, Audits" />
<meta property="og:description"
    content="Mind Rewire provides student therapy pods, teacher workshops, and mental health climate audits for schools. Custom programs that create safe, emotionally resilient learning environments." />
@stop

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/school-programs/school-programs.css') }}">
@stop

@section('content')

<!-- page_wrap Start -->
<div class="page_wrap">

    <div class="top_banner">
        <div class="custom_container">
            <div class="textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading white">
                    Emotionally Safe Schools <br>
                    <span class="lightpink"> Nurture Empowered Students</span>
                </h2>
                <strong class="sub_heading white">
                    Support Your Students, Teachers, And Families With A Mental Wellness Ecosystem That’s
                    Proactive—Not Reactive.
                </strong>
                <p>
                    Today’s Classrooms Need More Than Discipline And Grades—They Need Emotional Literacy,
                    Trauma-Informed Response, And Safe
                    Spaces For Students To Be Heard. Mind Rewire Partners With Schools To Build That Culture.
                </p>
                <div class="btnrow">
                    <a href="{{url('book-session')}}" class="cta_btn animate_arrow animation_white_line bgpink">
                        Build a Supportive School Culture
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
                <img src="{{ url('assets/images/school-programs/img_top_banner.png')}}" alt="image" />
            </div>
        </div>
    </div>

    <div class="section1" id="section1">
        <div class="common_fullrow">
            <div class="custom_container">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">When Schools Feel Safe, <br>
                        <span class="blue">Students Thrive</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p>
                        <strong>Common Challenges :</strong>
                    </p>
                    <ul class="with_bullet pt-0">
                        <li>
                            Behavioral outbursts misread as disobedience
                        </li>
                        <li>Anxiety, perfectionism, or shutdown during exams</li>
                        <li>Peer pressure and social comparison</li>
                        <li>Trauma backgrounds that affect classroom response</li>
                        <li>Teachers overwhelmed with emotional support roles they weren’t trained for</li>
                    </ul>
                    <p>
                        <strong>Our Core Belief:</strong><br>
                        A mentally healthy student body starts with emotionally equipped schools—students, teachers,
                        and parents working in
                        aligned emotional frameworks.
                    </p>
                </div>
                <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                    <div class="withpatch">
                        <img src="{{ url('assets/images/school-programs/img_students_thrive.png')}}" alt="image" />
                        <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                            <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section2" id="section2">
        <div class="custom_container">
            <div class="top_textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading center">Wellness Isn’t Just a Talk.
                    <span class="blue">It’s a Framework.</span>
                </h2>
                <div class="animate_border center"></div>
            </div>
            <div class="boxwrap">
                <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/school-programs/img_framework1.png')}}" alt="image">
                    <div class="overlay customscroll">
                        <h3>Student Counselling <br>Pods</h3>
                        <div class="hovertext">
                            <ul>
                                <li>Safe group or 1:1 sessions for students needing support</li>
                                <li>Topics: Anxiety, peer conflict, exam pressure, self-esteem</li>
                                <li>On-campus or virtual options</li>
                                <li>Progress tracking + anonymized feedback to school</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/school-programs/img_framework2.png')}}" alt="image">
                    <div class="overlay customscroll">
                        <h3>Teacher Emotional <br>Training</h3>
                        <div class="hovertext">
                            <ul>
                                <li>Trauma-informed teaching practices</li>
                                <li>Managing student meltdowns and non-verbal cues</li>
                                <li>Self-regulation tools for teachers</li>
                                <li>Interactive, scenario-based learning</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/school-programs/img_framework3.png')}}" alt="image">
                    <div class="overlay customscroll">
                        <h3>Emotional Climate <br>Audits</h3>
                        <div class="hovertext">
                            <ul>
                                <li>Assessment of emotional culture in classrooms</li>
                                <li>Anonymous surveys for students + staff</li>
                                <li>Custom report with insights + suggested interventions</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/school-programs/img_framework4.png')}}" alt="image">
                    <div class="overlay customscroll">
                        <h3>Parent Engagement <br>Programs</h3>
                        <div class="hovertext">
                            <ul>
                                <li>Workshops on emotional parenting, child anxiety, digital stress</li>
                                <li>Parent-child alignment sessions available post-program</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="image">
                </div>
            </div>
            <div class="btnrow center center" data-aos="fade-up" data-aos-duration="1500">
                <a href="{{url('contact-us')}}" class="cta_btn animation_white_line animate_arrow">
                    Request a School Collaboration Kit
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

    <div class="section3" id="section3">
        <div class="common_fullrow">
            <div class="custom_container">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">No Two Schools Are the Same - <br>
                        <span class="blue">So Neither Are Our Programs</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p>
                        <strong>We Tailor By :</strong>
                    </p>
                    <ul class="with_bullet pt-0">
                        <li>
                            <strong>School Type:</strong> Pre-primary, primary, high school, college
                        </li>
                        <li>
                            <strong>Delivery Model:</strong> One-time event, series, semester-long program
                        </li>
                        <li>
                            <strong>Mode:</strong> On-site, online, hybrid
                        </li>
                        <li>
                            <strong>Need Area:</strong> Academic stress, bullying, self-harm prevention, emotional
                            literacy
                        </li>
                    </ul>
                    <p>
                        <strong>Add-Ons :</strong>
                    </p>
                    <ul class="with_bullet pt-0">
                        <li>Emotional literacy week</li>
                        <li>Co-branded awareness campaigns</li>
                        <li>Long-term monitoring and re-engagement</li>
                    </ul>
                    <div class="quote">
                        One Emotionally Aware Teacher Can Change The Trajectory Of 30 Students.
                    </div>
                </div>
                <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                    <div class="withpatch">
                        <img src="{{ url('assets/images/school-programs/img_our_programs.png')}}" alt="image" />
                        <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                            <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section4" id="section4">
        <div class="common_fullrow">
            <div class="custom_container reverse">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">Transformations That <br>
                        <span class="blue">Start in Classrooms</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p>
                        <strong>School Success Metrics :</strong>
                    </p>
                    <ul class="with_bullet pt-0">
                        <li>40–70% drop in behavioral escalations within 2 months</li>
                        <li>Stronger teacher-student relationships reported by staff</li>
                        <li>Increased student confidence and participation</li>
                        <li>Better emotional vocabulary and peer communication</li>
                        <li>Shift from discipline to dialogue in conflict resolution</li>
                    </ul>
                    <p>
                        <strong>Feedback Snapshot :</strong>
                    </p>
                    <div class="quote">
                        The difference in student engagement was visible. Teachers felt more in control emotionally,
                        and parents actually
                        thanked us.
                    </div>
                    <div class="btnrow" data-aos="fade-up" data-aos-duration="1500">
                        <a href="{{url('success-stories')}}" class="cta_btn animation_white_line animate_arrow">
                            See More Case Examples
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
                        <img src="{{ url('assets/images/school-programs/img_classrooms.png')}}" alt="image" />
                        <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                            <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="last_bluebox" id="last_bluebox">
        <div class="custom_container">
            <div class="common_textbox textbox full" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading white center">You Focus on Learning. <br>
                    <span class="lightpink">We’ll Help With the Emotional Foundation.</span>
                </h2>
                <p>
                    If Your Students Aren’t Okay Emotionally, They Can’t Perform Academically.<br>
                    Let’s Build A School Culture Where Both Thrive—Together.
                </p>
                <div class="btnrow center">
                    <a href="{{url('book-session')}}" class="cta_btn animate_arrow animation_white_line bgpink">
                        Build a Supportive School Culture
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
                    <a href="{{url('contact-us')}}" class="cta_btn animate_arrow animation_white_line border_white">
                        Talk to a Program Expert
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
        <div class="common_patch" data-aos="fade-up" data-aos-duration="1500">
            <img src="{{ url('assets/images/common-images/patch_pink.svg')}}" alt="image" />
        </div>
    </div>

</div>
<!-- page_wrap End -->

@stop

@section('footer_script')
<script>

</script>
@stop