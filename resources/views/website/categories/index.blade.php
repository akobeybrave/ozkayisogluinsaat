@extends('website.layouts.website')

@section('title', 'Kategoriler')



@section('content')

<div class="container">

    <div class="d-flex mb-4 align-items-center">
        <div>
            <h5 class="mb-0">Kategori Listesi</h5>
        </div>
        <div class="ms-auto flex-shrink-0">
            {{--            <a href="{{ route("website.categories.create") }}" class="btn mb-1 waves-effect waves-light btn-outline-primary">--}}
            {{--                Kategori Ekle--}}
            {{--            </a>--}}
        </div>
    </div>



    <div class="table-responsive">
        <table class="table border table-striped">
            <thead>
                <tr>
                    <th>Ad</th>
                    <th>Resim</th>
                    <th>İşlemler</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>
                    @if ($category->image)
                        <img src="{{ asset($category->image) }}" alt="Resim" width="50">
                    @else
                        -
                    @endif
                </td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="{{ route('website.categories.edit', $category->id) }}" class="btn btn-sm btn-primary">Düzenle</a>
{{--                    <form action="{{ route('website.categories.destroy', $category->id) }}" method="POST" style="display: inline-block;">--}}
{{--                        @csrf--}}
{{--                        @method('DELETE')--}}
{{--                        <button type="submit" class="btn btn-sm btn-danger deleteData">Sil</button>--}}
{{--                    </form>--}}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>


</div>


@endsection
