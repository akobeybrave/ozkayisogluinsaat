@extends('admin.layouts.admin')

@section('title', 'User Parola Değiştir')



@section("content")


    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="px-4 py-3 border-bottom">
                    <h5 class="card-title fw-semibold mb-0 aktext">User Parola Değiştir</h5>
                </div>
                <div class="card-body p-4">


                    <form method="post" action="{{ route("admin.users.update-password", $user->id) }}" class="mt-6" enctype="multipart/form-data">
                        @csrf




                        <div class="mb-4">
                            <label for="current_password" class="form-label fw-semibold">Geçerli Parola</label>
                            <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror">
                            @error('current_password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="new_password" class="form-label fw-semibold">Parola</label>
                            <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror">
                            @error('new_password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-4">
                            <label for="new_password_confirmation" class="form-label fw-semibold">Parola Doğrula</label>
                            <input type="password" name="new_password_confirmation" class="form-control @error('new_password_confirmation') is-invalid @enderror">
                            @error('new_password_confirmation')
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
