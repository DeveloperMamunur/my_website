<script src="{{asset('assets/plugin/sweetalert2.js')}}"></script>
@if (session('success'))
    <script>
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-right',
        iconColor: 'white',
        customClass: {
            popup: 'colored-toast',
        },
        showConfirmButton: false,
        timer: 2500,
        timerProgressBar: true,
        });
        Toast.fire({
            icon: 'success',
            title: '{{session('success')}}',
        })
    </script>
@endif
