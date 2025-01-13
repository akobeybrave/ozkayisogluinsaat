@extends('admin.layouts.admin')

@section('title', 'User Ekle')



@section("content")


    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="px-4 py-3 border-bottom">
                    <h5 class="card-title fw-semibold mb-0 aktext">User Ekle Sayfası</h5>
                </div>
                <div class="card-body p-4">


                    <form method="post" action="{{ route("admin.users.store") }}" class="mt-6" enctype="multipart/form-data">
                        @csrf


                        <div class="mb-4">
                            <label for="name" class="form-label fw-semibold">İsim</label>
                            <input type="text" name="name" value="{{ old("name") }}" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="text" name="email" value="{{ old("email") }}" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold">Parola</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label fw-semibold">Parola Doğrula</label>
                            <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror">
                            @error('confirm_password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>



                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label fw-semibold">Panel</label>
                            <select name="panel" class="form-select" aria-label="Default select example">
                                <option value="Admin" selected="">Admin</option>
                                <option value="Website">Website</option>
                            </select>
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
