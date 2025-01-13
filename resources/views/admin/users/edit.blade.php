@extends('admin.layouts.admin')

@section('title', 'User Düzenle')



@section("content")



    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="px-4 py-3 border-bottom">
                    <h5 class="card-title fw-semibold mb-0 aktext">User Düzenle</h5>

                </div>

                <div class="card-body p-4">


                    <form method="post" action="{{ route("admin.users.update", $user) }}" class="mt-6" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")

                        <div class="mb-4">
                            <label for="name" class="form-label fw-semibold aktext">Adı</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label fw-semibold aktext">Email</label>
                            <input type="text" name="email" value="{{ $user->email }}" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-4">
                            <label for="name" class="form-label fw-semibold aktext">Resim</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        {{-- Buttons --}}
                        <div class="d-flex justify-content-between">


                                <a href="{{ url()->previous() }}" class="btn btn-outline-warning px-4 d-flex align-items-center justify-content-between gap-2">
                                    <i class="ri-arrow-go-back-line ri-lg"></i>
                                    <span>Geri</span>
                                </a>


                            <button type="submit" class="btn btn-success font-medium px-4 d-flex align-items-center justify-content-between gap-2">
                                <i class="ri-send-plane-fill ri-lg"></i>
                                <span>Kaydet</span>
                            </button>
                        </div>
                        {{-- Buttons --}}

                    </form>

                </div>
            </div>
        </div>

    </div>



@endsection
