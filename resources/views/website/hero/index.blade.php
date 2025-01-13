@extends('website.layouts.website')

@section('title', 'Kategoriler')



@section('content')

    <div class="container">

        <div class="d-flex mb-4 align-items-center">
            <div>
                <h5 class="mb-0">Slide Listesi</h5>
            </div>
            <div class="ms-auto flex-shrink-0">
                <a href="{{ route("website.heroes.create") }}" class="btn mb-1 waves-effect waves-light btn-outline-primary">
                    Slide Ekle
                </a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table border table-striped">
                <thead>
                <tr>
                    <th>Resim</th>
                    <th>Başlık</th>
                    <th>Alt Başlık</th>
                    <th>Slogan</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($heroDatas as $item)
                    <tr>
                        <td>
                            @if ($item->hero_image)
                                <img src="{{ asset($item->hero_image) }}" alt="Resim" width="50">
                            @else
                                -
                            @endif
                        </td>
                        <td>{{ $item->hero_title }}</td>
                        <td>{{ $item->hero_subtitle }}</td>
                        <td>{{ $item->hero_slogan }}</td>
                        <td>
                            <a href="{{ route('website.heroes.edit', $item->id) }}" class="btn btn-sm btn-primary">Düzenle</a>

                            <form action="{{ route('website.heroes.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger deleteData">Sil</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    </div>


@endsection
