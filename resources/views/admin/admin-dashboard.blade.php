@extends('admin.layouts.admin')

@section('title', 'Admin Yönetim Paneli')



@section("content")

    @include("admin.include.users")


@endsection



@push('javascript')
    <script>
        $(document).ready(function() {
            $('.toggle-status').click(function() {
                var button = $(this);
                var userId = button.data('id');
                $.ajax({
                    url: "{{ route('admin.users.toggle-status', '') }}/" + userId,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            if (response.status) {
                                button.removeClass('btn-danger').addClass('btn-success');
                                button.text('Aktif');
                            } else {
                                button.removeClass('btn-success').addClass('btn-danger');
                                button.text('Pasif');
                            }
                        }
                    },
                    error: function(xhr, status, error) {
                        // Hata olduğunda mesajı göster
                        var errorMessage = xhr.status + ': ' + xhr.statusText;
                        $('#error-message').text('Bir hata oluştu: ' + errorMessage).show();
                    }
                });

            })
        });
    </script>
@endpush




