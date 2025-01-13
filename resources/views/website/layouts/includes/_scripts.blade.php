

<!-- Import Js Files -->
<script src="{{ asset("backend/js/jquery.min.js") }}"></script>
<script src="{{ asset("backend/js/bootstrap.bundle.min.js") }}"></script>



<!-- core files -->
<script src="{{ asset("backend/js/app.min.js") }}"></script>
<script src="{{ asset("backend/js/app.dark.init.js") }}"></script>
<script src="{{ asset("backend/js/sidebarmenu.js") }}"></script>
<script src="{{ asset("backend/js/custom.js") }}"></script>






<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

    $('.deleteData').click(function(event) {

        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();

        Swal.fire({
            title: `DİKKAT`,
            text: "Silmek İstediğinize Eminmisiniz?",
            icon: "warning",
            showCancelButton: true,
            cancelButtonText: "Hayır Silme",
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Evet Sil"
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });

    });
</script>


