@extends('admin.layouts.admin')

@section('title', 'Users')



@section("content")

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex mb-4 align-items-center">
                        <div>
                            <h5 class="mb-0">Users</h5>
                        </div>
                        <div class="ms-auto flex-shrink-0">

                            <a href="{{ route("admin.users.create") }}" class="btn mb-1 waves-effect waves-light btn-outline-primary">
                                User Ekle
                            </a>

                        </div>
                    </div>



                    <div class="table-responsive rounded-2 mb-4">
                        <table class="table border text-nowrap customize-table mb-0 align-middle">


                            @if($users->isNotEmpty())
                                @foreach($users as $user)
                                    <tr>

                                        <td>
                                           <div>
                                               <h5>{{ $user->name }}</h5>
                                               <span>Kullanıcı Adı</span>
                                           </div>
                                        </td>

<td>
    <div class="">
        <h5>{{ $user->panel }}</h5>
        <span>Panel</span>
    </div>

</td>



                                        <td>
                                            @if(Auth::user()->id != $user->id)
                                            <button class="toggle-status btn btn-sm {{ $user->status ? 'btn-success' : 'btn-danger' }}" data-id="{{ $user->id }}">
                                                {{ $user->status ? 'Aktif' : 'Pasif' }}
                                            </button>
                                            @endif
                                        </td>

                                        <td>

                                        <div class="d-flex justify-content-end gap-4">


                                            <a href="{{ route("admin.users.edit", $user) }}" class="justify-content-center btn btn-sm btn-warning d-flex align-items-center gap-2">
                                                <i class="ri-edit-box-line ri-xl"></i>
                                                Düzenle
                                            </a>

                                            <a href="{{ route("admin.users.change-password", $user) }}" class="justify-content-center btn btn-sm btn-danger d-flex align-items-center gap-2">
                                                <i class="ri-lock-fill ri-xl"></i>
                                                Parola
                                            </a>

                                            @if(Auth::user()->id != $user->id)
                                                <form method="POST" action="{{ route("admin.users.destroy", $user) }}">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <a href="#" class="deleteData justify-content-center btn btn-sm d-flex align-items-center gap-2" style="background-color: red; color: white">
                                                        <i class="ri-delete-bin-line ri-xl"></i>
                                                        Sil
                                                    </a>
                                                </form>

                                            @endif


                                        </div>


                                        </td>

                                    </tr>
                                @endforeach
                            @endif

                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>



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




