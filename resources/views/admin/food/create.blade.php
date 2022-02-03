@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Барча Овкатлар</span>
                        <a href="{{ route('admin/foods/index') }}" class="btn btn-success"> Ортга</a>
                    </div>
                    <div class="card-body">
                        <form action="/admin/foods/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nomi</label>
                                <input type="text" class="form-control my-2" name="nomi">
                            </div>
                            <div class="form-group">
                                <label for="">Kategoriyani tanlang</label>
                                <select type="text" class="form-select my-2" name="categoriy_id">
                                    <option value="">Tanlang</option>
                                    @forelse($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @empty
                                        <option value="">Kategoriyalar mavjud emas</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Narxi</label>
                                <input type="number" class="form-control my-2" name="narxi">
                            </div>
                            <div class="form-group">
                                <label for="">Retsepti</label>
                                <input type="text" class="form-control my-2" name="retsept">
                            </div>
                            <div class="form-group">
                                <label for="">Rasmi</label>
                                <input type="file" class="form-control my-2" name="image">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 col-4 offset-8">Yaratish</button>
                        </form>                          
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection