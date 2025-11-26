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
                                        <th>Email</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($newsLetter as $value)
                                        <tr>
                                            <td>
                                                <div class="BloggerWrap">
                                                    <div>
                                                        <h5>{{ $value->full_name }}</h5>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="BloggerWrap">
                                                    <div>
                                                        <h5>{{ $value->email }}</h5>
                                                    </div>
                                                </div>
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
                    @if ($newsLetter->total() > 0)
                        {{ $newsLetter->firstItem() }} to {{ $newsLetter->lastItem() }}
                        of total
                    @endif
                    {{ $newsLetter->total() }} entries
                </div>
                <div class="d-flex justify-content-center">
                    {!! $newsLetter->links() !!}
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
