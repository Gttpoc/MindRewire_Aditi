@extends('layouts.admin')

@section('favicon')

@stop

@section('title')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Therapy Pricing</title>
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
                                        <th class="LeftPadd">Plan Name</th>
                                        {{-- <th>Currency</th> --}}
                                        <th>Price</th>
                                        <th class="centerth">Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($pricing as $value)
                                        <tr>
                                            <td>
                                                <div class="NameSection">
                                                    <img src="{{ url($value->therapy_image) }}" alt=""
                                                        class="Bnner" style="width: 50px;" />
                                                    <h4>{{ $value->therapy_name }}</h4>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="InterestedSection">
                                                    <h4>
                                                        {{ $value->currency }}
                                                        {{ $value->price }}
                                                    </h4>
                                                </div>
                                            </td>

                                            <td align="center">
                                                <div class="d-flex justify-content-center">
                                                    <button type="button" class="btn" data-bs-toggle="modal"
                                                        data-bs-target="#VirtualMeetingModal_{{$value->id}}">
                                                        <img src="{{ url('assets/admin/images/registration/ic-virtual-meeting.svg') }}"
                                                            alt="" data-bs-toggle="tooltip"
                                                            data-bs-placement="bottom" aria-label="Set Status"
                                                            data-bs-original-title="Set Status" />
                                                        Update Price
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- SCHEDULE MEETING SENT OPEN -->
                                        <div class="modal fade CustomModalWrap" id="VirtualMeetingModal_{{$value->id}}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
                                            <div class="modal-dialog modal-dialog-centered modal-700">
                                                <div class="modal-content pad-zero BorderRadius">
                                                    <div class="modal-header CustomHeader Frenchise">
                                                        <span>
                                                            <h4 class="modal-title transform-unset mt-minus-14">
                                                                Update Price
                                                            </h4>
                                                        </span>
                                                    </div>

                                                    <div class="modal-body NewBorderBtm mt-3">
                                                        <div class="ContainerModalMd">
                                                            <div class="FormControl">
                                                                <label class="GlobalLabel">
                                                                    Set New Price
                                                                </label>

                                                                <div class="ui input focus">
                                                                    <input type="text" value="{{ $value->price }}"
                                                                        name="new_price">
                                                                </div>

                                                                <div class="text-center PB40 mt-5">
                                                                    <button class="CancelBtn"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button onclick="updatePrice({{ $value->id }}, this)"
                                                                        class="SaveBtn" data-bs-dismiss="modal">
                                                                        Update Price
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                    @if ($pricing->total() > 0)
                        {{ $pricing->firstItem() }} to {{ $pricing->lastItem() }}
                        of total
                    @endif
                    {{ $pricing->total() }} entries
                </div>
                <div class="d-flex justify-content-center">
                    {!! $pricing->links() !!}
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
        });


        function updatePrice(id, thiss) {

            let new_price = $(thiss).closest('.ContainerModalMd').find('input[name="new_price"]').val();

            $.ajax({
                url: "{{ url('admin/price/update') }}",
                type: "POST",
                data: {
                    id: id,
                    new_price: new_price,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.status == 'success') {

                        showSwalToast('success', response.message);
                        location.reload();
                    } else {
                        showSwalToast('error', response.message);
                    }
                }
            });
        }
    </script>
@stop
