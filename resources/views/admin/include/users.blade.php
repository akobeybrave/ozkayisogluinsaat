
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <div class="d-flex mb-4 align-items-center">
                    <div>
                        <h5 class="mb-0">Users</h5>
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
                                            <span>Kullanıcı</span>
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
                                            <button class="btn btn-sm {{ $user->status ? 'btn-success' : 'btn-danger' }}" style="cursor: context-menu;">
                                                {{ $user->status ? 'Aktif' : 'Pasif' }}
                                            </button>
                                        @endif
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
