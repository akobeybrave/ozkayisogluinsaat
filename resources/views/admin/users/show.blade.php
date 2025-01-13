@extends('admin.layouts.admin')

@section('title', 'Roles Permissions')



@section("content")

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-4 align-items-center">
                        <div>
                            <h4 class="mb-2">{{ $user->name }}</h4>
                            <h5>Roller Ve İzinler</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    {{-- content --}}
                    <div class="">
                        <form method="post" action="{{ route("admin.user-permission-update", $user->id) }}" class="mt-6" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                @if($permissions->isNotEmpty())
                                    @foreach($permissions->chunk(4) as $chunk)
                                        <div class="row mb-4">
                                            @foreach($chunk as $permission)
                                                <div class="col">
                                                    <input type="checkbox"
                                                           {{ ($hasPermissions->contains($permission->name)) ? 'checked' : '' }}
                                                           value="{{ old('permission[]', $permission->name) }}"
                                                           id="permission-{{ $permission->id }}"
                                                           name="permission[]"
                                                           class="form-check-input"
                                                    >
                                                    <label class="form-check-label" style="margin-left: 6px" for="permission-{{ $permission->id }}">{{ $permission->name }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                @endif
                            </div>





                            {{-- Buttons --}}
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-success font-medium px-4 d-flex align-items-center justify-content-between gap-2">
                                    <i class="ri-send-plane-fill ri-lg"></i>
                                    <span>Kaydet</span>
                                </button>
                            </div>
                            {{-- Buttons --}}

                        </form>
                    </div>
                    {{-- content --}}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    {{-- content --}}
                    <div class="">
                        <form method="post" action="{{ route("admin.user-role-update", $user->id) }}" class="mt-6" enctype="multipart/form-data">
                        @csrf

                            <div class="mb-4">
                                @if($roles->isNotEmpty())
                                    @foreach($roles->chunk(3) as $chunk)
                                        <div class="row">
                                            @foreach($chunk as $role)
                                                <div class="col">
                                                    <input type="checkbox"
                                                           {{ ($hasRoles->contains($role->id)) ? 'checked' : '' }}
                                                           value="{{ old('role[]', $role->name) }}"
                                                           id="role-{{ $role->id }}"
                                                           name="role[]"
                                                           class="form-check-input"
                                                    >
                                                    <label class="form-check-label" for="role-{{ $role->id }}">{{ $role->name }}</label>
                                                </div>
                                            @endforeach
                                        </div>

                                    @endforeach
                                @endif
                            </div>


                            {{-- Buttons --}}
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-success font-medium px-4 d-flex align-items-center justify-content-between gap-2">
                                    <i class="ri-send-plane-fill ri-lg"></i>
                                    <span>Kaydet</span>
                                </button>
                            </div>
                            {{-- Buttons --}}

                        </form>
                    </div>
                    {{-- content --}}

                    <div class="d-flex justify-content-between"></div>
                </div>
            </div>
        </div>
    </div>




    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <a href="{{ url()->previous() }}" class="btn btn-outline-warning px-4 d-flex align-items-center justify-content-between gap-2">
                            <i class="ri-arrow-go-back-line ri-lg"></i>
                            <span>Geri</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
