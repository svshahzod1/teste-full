@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Барча Овкатлар</span>
                        <a href="{{ route('admin/blogs/create') }}" class="btn btn-success"> Янги Яратиш</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Sana</th>
                                <th scope="col">Muallif</th>
                                <th scope="col">Qisqacha</th>
                                <th scope="col" width="10%">Rasm</th>
                                <th scope="col">Amaliyotlar</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach($blog as $item)
                                    <tr>
                                        <th>{{ $item->id }}</th>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->author }}</td>
                                        <td>{{ $item->short }}</td>
                                        <td>
                                            <img src="{{ $item->image }}" width="100%" alt="">
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-around">
                                                <a href="{{ route('admin/blogs/edit', $item->id) }}" class="btn btn-primary">O`zgartirish</a>
                                                <form action="{{ route('admin/blogs/destroy', $item->id) }}" method="POST">
                                                    @csrf @method('DELETE')
                                                    <button class="btn btn-danger">O`chirish</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $blog->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection