<script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(".sidebar-control").click(function() {
        $("aside").toggleClass("close");
        $("header").toggleClass("expand_header");
        $("aside").addClass("mob_aside_open");
        // $("aside").removeClass("mob_aside_close");
    });
    // sidenav mob close
    $(".mob_close").click(function() {
        $("aside").removeClass("mob_aside_open");
        // $("header").toggleClass("expand_header");
    });

    function showSwalToast(type, msg) {
        Swal.fire({
            toast: true,
            icon: type,
            title: msg,
            iconColor: 'white',
            customClass: {
                popup: 'colored-toast'
            },
            position: 'top-right',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
        });
    }
</script>
