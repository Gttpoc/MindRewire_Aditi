@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Mind Rewire Therapy Plans | Flexible Pricing for Healing</title>
    <meta name="description"
        content="Choose from affordable therapy plans at Mind Rewire—monthly or annual. Start with one session or begin your full journey to clarity and emotional healing.">
    <meta name="keywords"
        content="therapy pricing India, mental health plans, Mind Rewire packages, affordable therapy, trauma recovery cost, therapy session rates, emotional healing plan, monthly therapy, annual mental wellness plan, therapy investment, mental health support cost">

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@skybridge" />
    <meta name="twitter:creator" content="@skybridge" />
    <meta name="twitter:title" content="Mind Rewire Therapy Plans | Flexible Pricing for Healing">
    <meta name="twitter:description"
        content="Choose from affordable therapy plans at Mind Rewire—monthly or annual. Start with one session or begin your full journey to clarity and emotional healing.">
    <meta name="twitter:image" content="{{ url('favicon.png') }}">

    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Mind Rewire Therapy Plans | Flexible Pricing for Healing" />
    <meta property="og:description"
        content="Choose from affordable therapy plans at Mind Rewire—monthly or annual. Start with one session or begin your full journey to clarity and emotional healing." />
@stop

@section('css')
    <link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
    <link rel="stylesheet" href="{{ version_url('assets/css/plans-pricing/plans-pricing.css') }}">
@stop

@section('content')

    <!-- page_wrap Start -->
    <div class="page_wrap">

        <div class="top_banner">
            <div class="custom_container">
                <div class="textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading white center">
                        Invest in Healing,
                        <span class="lightpink"> Not Guesswork.</span>
                    </h2>
                    <strong class="sub_heading white center">
                        Whether One Session Or A Deeper Journey—There’s A Path For You.
                    </strong>
                </div>
            </div>
        </div>

        <div class="pricing_wrap">
            <div class="custom_container">
                <div class="price_tab d-none" data-aos="fade-up" data-aos-duration="1500">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="pill" href="#monthly">Monthly</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-bs-toggle="pill" href="#monthly">Annually</a>
                        </li>
                    </ul>
                </div>
                <div class="price_content tab-content">
                    <div class="tab-pane active" id="monthly">
                        <div class="commonbox_wrap">
                            <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                                <div class="roundicon">
                                    <img src="{{ url('assets/images/plans-pricing/icon_essential.png') }}" alt="icon" />
                                </div>
                                <div class="topbox">
                                    <h3>Essential Support Plan</h3>
                                    <div class="price">
                                        {{-- ₹ 5,000 <small>Per Month</small> --}}
                                    </div>
                                    <div class="animate_border"></div>
                                    <ul>
                                        <li>Foundational support for everyday mental wellness</li>
                                        <li>24/7 confidential mental health helpline</li>
                                        <li>Access to emergency psychological support</li>
                                        <li>Self-help resources curated by licensed therapists</li>
                                        {{-- <li>Anonymous usage insights for HR review</li> --}}
                                        <li>Easy onboarding & employee access</li>
                                    </ul>
                                </div>
                                <div class="btmbox">
                                    <a href="https://razorpay.me/@sumedhaanandsingh"
                                        class="cta_btn animation_white_line animate_arrow bggreen">
                                        Pay Now
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
                                    </a>
                                </div>
                            </div>
                            <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                                <div class="roundicon">
                                    <img src="{{ url('assets/images/plans-pricing/icon_pro.png') }}" alt="icon" />
                                </div>
                                <div class="topbox">
                                    <h3>Pro Care Plan</h3>
                                    <div class="price">
                                        {{-- ₹ 7,000 <small>Per Month</small> --}}
                                    </div>
                                    <div class="animate_border"></div>
                                    <ul>
                                        <li>Structured one-on-one care with expert guidance</li>
                                        <li>Everything in the Essential Support Plan</li>
                                        <li>1:1 therapy sessions every 6 months (virtual or in-person)</li>
                                        <li>Therapist-matching and secure booking system</li>
                                        <li>Check-in reminders & session summaries</li>
                                        <li>Priority response for acute support cases</li>
                                    </ul>
                                </div>
                                <div class="btmbox">
                                    <a href="https://razorpay.me/@sumedhaanandsingh"
                                        class="cta_btn animation_white_line animate_arrow bggreen">
                                        Pay Now
                                        <span class="rgt_arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="7"
                                                viewBox="0 0 16.336 7.913">
                                                <g id="Group_49586" data-name="Group 49586"
                                                    transform="translate(0 -132)">
                                                    <g id="Group_48855" data-name="Group 48855"
                                                        transform="translate(0 132)">
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
                            <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                                <div class="roundicon">
                                    <img src="{{ url('assets/images/plans-pricing/icon_growth.png') }}" alt="icon" />
                                </div>
                                <div class="topbox">
                                    <h3>Wellness Growth Plan</h3>
                                    <div class="price">
                                        {{-- ₹ 8,500 <small>Per Month</small> --}}
                                    </div>
                                    <div class="animate_border"></div>
                                    <ul>
                                        <li>Holistic care with community and insight-driven tools</li>
                                        <li>Everything in the Pro Care Plan</li>
                                        <li>Monthly group therapy sessions or wellness workshops</li>
                                        <li>Burnout and stress risk screening (quarterly)</li>
                                        <li>Team wellness insights & anonymized trends</li>
                                        <li>Wellness tips & habit trackers integrated into your workflow</li>
                                    </ul>
                                </div>
                                <div class="btmbox">
                                    <a href="https://razorpay.me/@sumedhaanandsingh"
                                        class="cta_btn animation_white_line animate_arrow bggreen">
                                        Pay Now
                                        <span class="rgt_arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="7"
                                                viewBox="0 0 16.336 7.913">
                                                <g id="Group_49586" data-name="Group 49586"
                                                    transform="translate(0 -132)">
                                                    <g id="Group_48855" data-name="Group 48855"
                                                        transform="translate(0 132)">
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
                            <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                                <div class="roundicon">
                                    <img src="{{ url('assets/images/plans-pricing/icon_resilience.png') }}"
                                        alt="icon" />
                                </div>
                                <div class="topbox">
                                    <h3>Enterprise Resilience Plan</h3>
                                    <div class="price">
                                        {{-- ₹ 10,000<small>Per Month</small> --}}
                                    </div>
                                    <div class="animate_border"></div>
                                    <ul>
                                        <li>Custom enterprise-grade mental wellness infrastructure</li>
                                        <li>Everything in the Wellness Growth Plan</li>
                                        <li>Dedicated on-site or embedded psychologists</li>
                                        <li>Long-term therapy tracks & progress plans</li>
                                        <li>Quarterly mental health assessments</li>
                                        <li>HR analytics dashboard with real-time anonymized insights</li>
                                        <li>Custom integrations with your HRIS or intranet</li>
                                    </ul>
                                </div>
                                <div class="btmbox">
                                    <a href="https://razorpay.me/@sumedhaanandsingh"
                                        class="cta_btn animation_white_line animate_arrow bggreen">
                                        Pay Now
                                        <span class="rgt_arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="7"
                                                viewBox="0 0 16.336 7.913">
                                                <g id="Group_49586" data-name="Group 49586"
                                                    transform="translate(0 -132)">
                                                    <g id="Group_48855" data-name="Group 48855"
                                                        transform="translate(0 132)">
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
                    <div class="tab-pane" id="annually">Annually</div>
                    <div class="common_patch lftpath" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{ url('assets/images/common-images/common_patch.svg') }}" alt="image" />
                    </div>
                    <div class="common_patch rgtpath" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{ url('assets/images/common-images/common_patch.svg') }}" alt="image" />
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- page_wrap End -->
@stop

@section('footer_script')
    <script></script>
@stop
