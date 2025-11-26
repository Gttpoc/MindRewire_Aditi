<aside id="aside">
    <a class="mob_close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path
                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
        </svg></a>
    <img src="{{ url('assets/admin/images/side-menu-assets/admin-logo-2.jpg') }}" alt="Logo" class="sidenav_logo" />

    @php
        $segments = request()->segments();
    @endphp

    <button class="sidenav_btn" type="button">
        <a href="{{ url('home') }}">
            <img src="{{ url('assets/admin/images/side-menu-assets/sidenav-1.png') }}" alt="" />
            <span class="">Dashboard</span>
        </a>
    </button>

    @php
        $auth_user = auth()->user();
    @endphp

    <div class="accordion-item">
        <h2 class="accordion-header" id="pr_packages">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#prPackages" aria-expanded="false" aria-controls="collapseFour">
                <img src="{{ url('assets/admin/images/side-menu-assets/sidenav-4.png') }}" alt="" />
                <span>Enquires</span>
            </button>
        </h2>
        <div id="prPackages" class="accordion-collapse collapse" aria-labelledby="pr_packages"
            data-bs-parent="#sidenavLink">
            <div class="accordion-body">
                <a href="{{ url('admin/enquiry') }}">Enquiry</a>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="newsletter">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#newsletter_sub" aria-expanded="false" aria-controls="collapseFour">
                <img src="{{ url('assets/admin/images/side-menu-assets/sidenav-4.png') }}" alt="" />
                <span>News Letter</span>
            </button>
        </h2>
        <div id="newsletter_sub" class="accordion-collapse collapse" aria-labelledby="newsletter"
            data-bs-parent="#sidenavLink">
            <div class="accordion-body">
                <a href="{{ url('admin/news-letter') }}">News Letter</a>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="mr_booking">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#mrBooking" aria-expanded="false" aria-controls="collapseFour">
                <img src="{{ url('assets/admin/images/side-menu-assets/sidenav-4.png') }}" alt="" />
                <span>Therapy Booking</span>
            </button>
        </h2>
        <div id="mrBooking" class="accordion-collapse collapse" aria-labelledby="mr_booking"
            data-bs-parent="#sidenavLink">
            <div class="accordion-body">
                <a href="{{ url('admin/therapy/booking') }}">Therapy Booking</a>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="mr_pricing">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#mrPricing" aria-expanded="false" aria-controls="collapseFour">
                <img src="{{ url('assets/admin/images/side-menu-assets/sidenav-4.png') }}" alt="" />
                <span>Pricing</span>
            </button>
        </h2>
        <div id="mrPricing" class="accordion-collapse collapse" aria-labelledby="mr_pricing"
            data-bs-parent="#sidenavLink">
            <div class="accordion-body">
                <a href="{{ url('admin/therapy/pricing') }}">Update Price</a>
            </div>
        </div>
    </div>
</aside>

@push('scripts')
    <script>
        $(document).ready(function() {
            // Handle parent accordion click
            $(".multi-accordion .accordion-button").click(function() {
                let parentAccordion = $(this).closest(".multi-accordion");

                // Close all parent accordions except the clicked one
                $(".multi-accordion .accordion-collapse").not(parentAccordion.find(".accordion-collapse"))
                    .collapse('hide');
            });

            // Handle child accordion click
            $(".multi-accordion .accordion-body .accordion-button").click(function(e) {
                let childAccordion = $(this).closest(".accordion-item");

                // Close all child accordions except the clicked one
                childAccordion.siblings().find(".accordion-collapse").collapse('hide');
            });


            $(".accordion-header .accordion-button").click(function() {
                if (!$(this).closest(".multi-accordion").length) {
                    let clickedAccordion = $(this).closest(".accordion-item");
                    // Collapse all other parent accordions except the clicked one
                    $(".accordion-item").not(clickedAccordion).find(".accordion-collapse").collapse('hide');
                }
            });
        });
    </script>
@endpush
