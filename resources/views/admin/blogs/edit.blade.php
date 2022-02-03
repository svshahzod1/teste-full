@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Барча Овкатлар</span>
                        <a href="{{ route('admin/blogs/index') }}" class="btn btn-outline-success"> Ортга</a>
                    </div>
                    <div class="card-body">
                        <form action="/admin/blogs/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                            @csrf @method('PATCH')
                            <div class="form-group">
                                <label for="">Sana</label>
                                <input type="text" class="form-control my-2" name="date" value="{{ $item->date }}">
                            </div>
                            <div class="form-group">
                                <label for="">Muallif</label>
                                <input type="text" class="form-control my-2" name="author" value="{{ $item->author }}">
                            </div>
                            <div class="form-group">
                                <label for="">Qisqacha</label>
                                <input type="text" class="form-control my-2" name="short" value="{{ $item->short }}">
                            </div>
                            <div class="form-group">
                                <img src="{{ $item->image }}" width="10%" alt="">
                                <label for="">Ayni damdagi rasm</label>
                            </div>
                            <div class="form-group">
                                <label for="">Rasmi</label>
                                <input type="file" class="form-control my-2" name="image" value="{{ $item->image }}">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 col-4 offset-8">Озгартириш</button>
                        </form>   
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection