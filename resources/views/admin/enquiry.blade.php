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
                                        <th>Therapy Request</th>
                                        <th>Enquiry Type</th>
                                        <th>Contact Details</th>
                                        <th>Status</th>
                                        <th class="centerth">Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($enquiry_details as $value)
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
                                                                        ENQUIRY DETAILS
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
                                                                                <td class="PinkText">Phone Number</td>
                                                                                <td>
                                                                                    {{ $value->phone_dial_code . ' ' . $value->phone }}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="PinkText">Email Address</td>
                                                                                <td>{{ $value->email }}</td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td class="PinkText">Therapy Type</td>
                                                                                <td>{{ $value->therapy_requested }}</td>
                                                                            </tr>
                                                                            
                                                                            <tr>
                                                                                <td class="PinkText">Enquiry Type</td>
                                                                                <td>{{ $value->enquiry_type }}</td>
                                                                            </tr>

                                                                            @if ($value->attachment)
                                                                                <tr>
                                                                                    <td class="PinkText">Attachment</td>
                                                                                    <td>
                                                                                        <a
                                                                                            href="{{ url($value->attachment) }}">
                                                                                            Download
                                                                                            Attachment
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                            @endif

                                                                            <tr>
                                                                                <td colspan="2">
                                                                                    {{ $value->description }}
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
                                                        <h5>{{ $value->therapy_requested }}</h5>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="BloggerWrap">
                                                    <div>
                                                        <h5>{{ $value->enquiry_type }}</h5>
                                                    </div>
                                                </div>
                                            </td>


                                            <td>
                                                <div class="ContactDeatilsSection">
                                                    <h4><img src="{{ url('assets/admin/images/registration/ic-mail.svg') }}"
                                                            alt="" />
                                                        {{ $value->email }}</h4>
                                                    <h4><img src="{{ url('assets/admin/images/registration/ic-call.svg') }}"
                                                            alt="" />
                                                        {{ $value->phone_dial_code }}
                                                        {{ $value->phone }}</h4>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="InterestedSection">
                                                    <h4>
                                                        {{ ucfirst($value->status) }}
                                                    </h4>
                                                </div>
                                            </td>

                                            <td align="center">
                                                <div class="d-flex justify-content-center">
                                                    <button type="button" class="btn" data-bs-toggle="modal"
                                                        data-bs-target="#VirtualMeetingModal">
                                                        <img src="{{ url('assets/admin/images/registration/ic-virtual-meeting.svg') }}"
                                                            alt="" data-bs-toggle="tooltip"
                                                            data-bs-placement="bottom" aria-label="Set Status"
                                                            data-bs-original-title="Set Status" />
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- SCHEDULE MEETING SENT OPEN -->
                                        <div class="modal fade CustomModalWrap" id="VirtualMeetingModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
                                            <div class="modal-dialog modal-dialog-centered modal-700">
                                                <div class="modal-content pad-zero BorderRadius">
                                                    <div class="modal-header CustomHeader Frenchise">
                                                        <span>
                                                            <h4 class="modal-title transform-unset mt-minus-14">SET A
                                                                STATUS</h4>
                                                        </span>
                                                        <img src="{{ url('assets/admin/images/registration/ic-mail-big.svg') }}"
                                                            class="me-2" />
                                                        <!-- <button type="button" class="btn-close HideBg" data-bs-dismiss="modal"><img src="images/all-employees-assets/modal-close-icon.svg')}}" alt="" /></button> -->
                                                    </div>

                                                    <div class="modal-body NewBorderBtm mt-3">
                                                        <div class="ContainerModalMd">
                                                            <div class="FormControl">
                                                                <label class="GlobalLabel">Set Status</label>
                                                                <div
                                                                    class="ui search selection dropdown dropdownmenu  widthfull">
                                                                    <input type="hidden" name="status" />
                                                                    <div class="text default">
                                                                        Select Status
                                                                    </div>
                                                                    <div class="menu">
                                                                        <div class="item" data-value="Closed">Closed
                                                                        </div>
                                                                        <div class="item" data-value="Solved">Solved
                                                                        </div>
                                                                        <div class="item" data-value="Converted">
                                                                            Converted</div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-center PB40 mt-5">
                                                                    <button class="CancelBtn"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button
                                                                        onclick="updateStatus({{ $value->id }}, this)"
                                                                        class="SaveBtn" data-bs-dismiss="modal">
                                                                        Update Status
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- SCHEDULE MEETING MODAL CLOSE -->
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
                    @if ($enquiry_details->total() > 0)
                        {{ $enquiry_details->firstItem() }} to {{ $enquiry_details->lastItem() }}
                        of total
                    @endif
                    {{ $enquiry_details->total() }} entries
                </div>
                <div class="d-flex justify-content-center">
                    {!! $enquiry_details->links() !!}
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
