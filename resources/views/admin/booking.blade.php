@extends('layouts.admin')

@section('favicon')

@stop

@section('title')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mind Rewire Booking</title>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css" />

    <link rel="stylesheet" type="text/css" href="{{ version_url('assets/admin/css/registration/course-registration.css') }}">
@stop

@section('content')

    <div class="main_dashboard_body assgnedLead enquiry_wrap RemovePaddLR pt-4">
        <!-- card box -->
        <div class="">
            <div class="row">
                <div class="col-12">
                    <div class="TabWrapper">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="LeftPaddd">Name</th>
                                        <th>Therapy Type</th>
                                        <th>Session Mode</th>
                                        <th>Time Slot</th>
                                        <th>Contact Details</th>
                                        <th>Payment Status</th>
                                        <th class="centerth">Payment Details</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($booking_details as $value)
                                        <tr>
                                            <td data-bs-toggle="modal" data-bs-target="#ProfileModal_{{ $value->id }}">
                                                <div class="NameSection">
                                                    <div>
                                                        <h4>{{ $value->full_name }} </h4>
                                                        <p> {{ date('d F, Y', strtotime($value->created_at)) }}
                                                            <button class="viewbtn">
                                                                <img src="{{ url('assets/admin/images/registration/ic-view.svg') }}"
                                                                    alt="" />
                                                                VIEW
                                                            </button>
                                                        </p>
                                                    </div>
                                                </div>

                                                <!-- PROFILE MODAL OPEN -->
                                                <div class="modal fade CustomModalWrap"
                                                    id="ProfileModal_{{ $value->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-700">
                                                        <div class="modal-content pad-zero BorderRadius">
                                                            <div class="modal-header CustomHeader Frenchise">
                                                                <span>
                                                                    <h4 class="modal-title transform-unset mt-minus-14">
                                                                        Therapy Booking Details
                                                                    </h4>
                                                                    <h2 class="subtitle">
                                                                        {{ $value->full_name }}
                                                                    </h2>
                                                                </span>
                                                            </div>
                                                            <div class="modal-body NewBorderBtm mt-3">
                                                                <div class="ContainerModalMd RemPadd">
                                                                    <div class="EnquiryTop">
                                                                        <h4>{{ $value->full_name }}
                                                                        </h4>
                                                                        <p><img
                                                                                src="{{ url('assets/admin/images/registration/ic-cal.svg') }}" />
                                                                            {{ date('l, d F, Y', strtotime($value->created_at)) }}
                                                                        </p>
                                                                    </div>

                                                                    <div class="GrayCard">
                                                                        <table>
                                                                            <tr>
                                                                                <td class="PinkText">Full Name</td>
                                                                                <td>{{ $value->full_name }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="PinkText">Email Address</td>
                                                                                <td>{{ $value->email }}</td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td class="PinkText">Phone Number</td>
                                                                                <td>
                                                                                    {{ $value->phone_code . ' ' . $value->phone_number }}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="PinkText">Time Slot</td>
                                                                                <td>
                                                                                    {{ $value->bookedTimeSlots->booking_date_for_user }}
                                                                                    {{ $value->bookedTimeSlots->booking_time }}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="PinkText">Session Mode</td>
                                                                                <td>
                                                                                    {{ $value->bookedTimeSlots->therapy_mode_for_user }}
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td class="PinkText">Therapy Type</td>
                                                                                <td>
                                                                                    {{ $value->therapyCategory->therapy_name }}
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td class="PinkText">Country</td>
                                                                                <td>
                                                                                    {{ $value->countryDetails->name }}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="PinkText">State</td>
                                                                                <td>
                                                                                    {{ $value->stateDetails->name }}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="PinkText">City</td>
                                                                                <td>
                                                                                    {{ $value->city }}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="PinkText">Address Line 1</td>
                                                                                <td>
                                                                                    {{ $value->address_line_1 }}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="PinkText">Address Line 2</td>
                                                                                <td>
                                                                                    {{ $value->address_line_2 }}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">
                                                                                    {{ $value->brief }}
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>

                                                                    <div class="text-center PB40 mt-5">
                                                                        <button class="SaveBtnPurple"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- PROFILE MODAL CLOSE -->
                                            </td>

                                            <td>
                                                <div class="BloggerWrap">
                                                    <div>
                                                        <h5>{{ $value->therapyCategory->therapy_name }}</h5>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="BloggerWrap">
                                                    <div>
                                                        <h5>{{ $value->bookedTimeSlots->therapy_mode_for_user }}</h5>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="ContactDeatilsSection">
                                                    <h4>
                                                        {{ $value->bookedTimeSlots->booking_date_for_user }}
                                                    </h4>
                                                    <h4>
                                                        {{ $value->bookedTimeSlots->booking_time }}
                                                    </h4>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="ContactDeatilsSection">
                                                    <h4><img src="{{ url('assets/admin/images/registration/ic-mail.svg') }}"
                                                            alt="" />
                                                        {{ $value->email }}</h4>
                                                    <h4><img src="{{ url('assets/admin/images/registration/ic-call.svg') }}"
                                                            alt="" />
                                                        {{ $value->phone_code }}
                                                        {{ $value->phone_number }}</h4>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="InterestedSection">
                                                    <h5>
                                                        @if ($value->payment_status == 'paid')
                                                            <span class="badge badge-pill badge-primary"
                                                                style="background-color: #28a745;">
                                                                {{ ucfirst($value->payment_status) }}
                                                            </span>
                                                        @else
                                                            <span class="badge badge-pill badge-primary"
                                                                style="background-color: #dc3545;">
                                                                {{ ucfirst($value->payment_status) }}
                                                            </span>
                                                        @endif
                                                    </h5>
                                                </div>
                                            </td>

                                            <td align="center"
                                                @if ($value->payment_status == 'paid') data-bs-toggle="modal"
                                                data-bs-target="#payment_modal_{{ $value->id }}" @endif>
                                                <div class="d-flex justify-content-center">
                                                    @if ($value->payment_status == 'paid')
                                                        View Payment Details
                                                    @else
                                                        --
                                                    @endif
                                                </div>

                                                @if ($value->payment_status == 'paid')
                                                    <div class="modal fade CustomModalWrap"
                                                        id="payment_modal_{{ $value->id }}" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-700">
                                                            <div class="modal-content pad-zero BorderRadius">
                                                                <div class="modal-header CustomHeader Frenchise">
                                                                    <span>
                                                                        <h4 class="modal-title transform-unset mt-minus-14">
                                                                            Therapy Booking Payment Details
                                                                        </h4>
                                                                        <h2 class="subtitle">
                                                                            {{ $value->full_name }}
                                                                        </h2>
                                                                    </span>
                                                                </div>
                                                                <div class="modal-body NewBorderBtm mt-3">
                                                                    <div class="ContainerModalMd RemPadd">
                                                                        <div class="EnquiryTop">
                                                                            <h4>
                                                                                {{ $value->full_name }}
                                                                            </h4>
                                                                        </div>

                                                                        <div class="GrayCard">
                                                                            <table>
                                                                                <tr>
                                                                                    <td class="PinkText">Amount</td>
                                                                                    <td>{{ $value->payment_amount }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="PinkText">Payment Status</td>
                                                                                    <td>{{ $value->payment_status }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="PinkText">RazorPay Order Id
                                                                                    </td>
                                                                                    <td>{{ $value->razorpay_order_id }}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="PinkText">
                                                                                        Razorpay Payment/Transaction Id
                                                                                    </td>
                                                                                    <td>
                                                                                        {{ $value->razorpay_payment_id }}
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>

                                                                        <div class="text-center PB40 mt-5">
                                                                            <button class="SaveBtnPurple"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>No Data Found</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class='mt-3'>
                    Showing
                    @if ($booking_details->total() > 0)
                        {{ $booking_details->firstItem() }} to {{ $booking_details->lastItem() }}
                        of total
                    @endif
                    {{ $booking_details->total() }} entries
                </div>
                <div class="d-flex justify-content-center">
                    {!! $booking_details->links() !!}
                </div>
            </div>
        </div>
    </div>


@endsection


@section('footer_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"></script>

    <script>
        $('.dropdownmenu').dropdown({
            allowAdditions: true, // allows user to add custom input
            // forceSelection: false // allows unlisted values to remain
        });


        function updateStatus(id, thiss) {

            let status = $(thiss).closest('.ContainerModalMd').find('input[name="status"]').val();

            console.log(status);

            $.ajax({
                url: "{{ url('admin/enquiry/update') }}",
                type: "POST",
                data: {
                    id: id,
                    status: status,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.status == 'success') {
                        location.reload();
                    } else {

                    }
                }
            });
        }
    </script>

@stop
