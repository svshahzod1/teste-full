@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Барча Поврлар</span>
                        <a href="{{ route('admin/chefs/index') }}" class="btn btn-outline-success"> Ортга</a>
                    </div>
                    <div class="card-body">
                        <form action="/admin/chefs/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                            @csrf @method('PATCH')
                            <div class="form-group my-2">
                                <label for="">Ismi</label>
                                <input type="text" class="form-control my-2" name="name" value="{{ $item->name }}">
                            </div>
                            <div class="form-group my-2">
                                <label for="">Ishi</label>
                                <input type="text" class="form-control my-2" name="job" value="{{ $item->job }}">
                            </div>
                            <div class="form-group my-2">
                                <img src="{{ $item->img }}" alt="" width="10%">
                                <label for="">Ayni damdagi rasmi</label>
                            </div>
                            <div class="form-group my-2">
                                <label for="">Rasm yuklash</label>
                                <input type="file" class="form-control my-2" name="img" value="{{ $item->img }}">
                            </div>
                            <div class="form-group my-2">
                                <label for="">O`zi xaqida</label>
                                <textarea name="bio" class="form-control my-2" rows="3">
                                    {{ $item->bio }}
                                </textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 col-4 offset-8">Озгартириш</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection