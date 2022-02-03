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
                        <form action="/admin/chefs/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Ismi</label>
                                <input type="text" name="name" class="form-control my-2">
                            </div>
                            <div class="form-group">
                                <label for="">Ishi</label>
                                <input type="text" name="job" class="form-control my-2">
                            </div>
                            <div class="form-group">
                                <label for="">Rasm yuklash</label>
                                <input type="file" name="img" class="form-control my-2">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">O`zi xaqida</label>
                                <textarea name="bio" class="form-control my-2" id="" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 col-4 offset-8">Yaratish</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection