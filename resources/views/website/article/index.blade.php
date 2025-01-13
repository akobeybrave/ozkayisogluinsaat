@extends('website.layouts.website')

@section('title', 'Roller')



@section("content")

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex mb-4 align-items-center">
                        <div>
                            <h5 class="mb-0">Makale Listesi</h5>
                        </div>
                        <div class="ms-auto flex-shrink-0">
                            @can("create articles")
                            <a href="{{ route("admin.articles.create") }}" class="btn mb-1 waves-effect waves-light btn-outline-primary">
                                Makale Ekle
                            </a>
                            @endcan
                        </div>
                    </div>



                    <div class="table-responsive rounded-2 mb-4">
                        <table class="table border text-nowrap customize-table mb-0 align-middle">
                            <thead class="text-dark fs-4">
                            <tr>
                                <th><h6 class="fs-4 fw-semibold mb-0 aktext">ID</h6></th>
                                <th><h6 class="fs-4 fw-semibold mb-0 aktext">Title</h6></th>
                                <th><h6 class="fs-4 fw-semibold mb-0 aktext">Text</h6></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($articles->isNotEmpty())
                                @foreach($articles as $item)
                                    <tr>
                                        <td><span class="py-2 aktext fs-2">{{ $item->id }}</span></td>
                                        <td><span class="py-2 aktext fs-2">{{ $item->title }}</span></td>
                                        <td><span class="py-2 aktext fs-2">{{ $item->text }}</span></td>
                                        <td>
                                            <div class="d-flex justify-content-end gap-2">
                                                @can("edit articles")
                                                <a href="{{ route("admin.articles.edit", $item) }}" class="aktext">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(175,114,28,1)"><path d="M16.7574 2.99677L14.7574 4.99677H5V18.9968H19V9.23941L21 7.23941V19.9968C21 20.5491 20.5523 20.9968 20 20.9968H4C3.44772 20.9968 3 20.5491 3 19.9968V3.99677C3 3.44448 3.44772 2.99677 4 2.99677H16.7574ZM20.4853 2.09727L21.8995 3.51149L12.7071 12.7039L11.2954 12.7063L11.2929 11.2897L20.4853 2.09727Z"></path></svg>
                                                </a>
                                                @endcan

                                                    @can("delete articles")
                                                <form method="POST" action="{{ route("admin.articles.destroy", $item) }}">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <a href="#" class="deleteData dropdown-item d-flex align-items-center gap-3 aktext">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(229,20,20,1)"><path d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM18 8H6V20H18V8ZM9 11H11V17H9V11ZM13 11H15V17H13V11ZM9 4V6H15V4H9Z"></path></svg>
                                                    </a>
                                                </form>
                                                    @endcan

                                            </div>
                                        </td>
                                    </tr>

                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>


                    <div class="">
                        {!!  $articles->links() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
