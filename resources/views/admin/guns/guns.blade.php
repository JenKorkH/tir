@extends('layouts.admin-layout')

@section('title', 'Админ панель')

@section('content')

    <div class="container">
        <div style="padding-top:30px;">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}" style="text-decoration: none; color: #000;">Админ панель</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.guns.index') }}" style="text-decoration: none; color: #000;">Оружие</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Добавление оружия</li>
                </ol>
            </nav>
        </div>
    </div>

    <main class="admin-main" style="flex-grow: 1;">
        <div class="container" style="font-family: 'Open Sans', sans-serif; ">
            <div class="border-bottom" style="margin-bottom: 40px;"></div>
            <form method="POST" action="{{ route('admin.guns.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <h5 class="h5 mb-3 fw-normal">Общая информация</h5>
                    <div class="col-xl col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="form-floating gun__add-input">
                            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="name@example.com" name="brand" @error("brand") style="border: 2px solid #dc3545" @enderror>
                            <label for="floatingInput">Бренд</label>
                            <datalist id="datalistOptions">
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->name }}">
                                @endforeach
                            </datalist>
                        </div>
                        @error('brand')
                            <p style="color: #dc3545">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                        <div class="form-floating gun__add-input">
                            <input class="form-control" placeholder="name@example.com" name="model" @error("model") style="border: 2px solid #dc3545" @enderror>
                            <label for="floatingInput">Модель</label>
                        </div>
                        @error('model')
                            <p style="color: #dc3545">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                        <div class="form-floating gun__add-input">
                            <input class="form-control" placeholder="name@example.com" name="caliber" @error("caliber") style="border: 2px solid #dc3545" @enderror>
                            <label for="floatingInput">Калибр</label>
                        </div>
                        @error('caliber')
                            <p style="color: #dc3545">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <h5 class="h5 mb-3 fw-normal">Дополнительная информация</h5>
                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                        <div class="form-floating gun__add-input">
                            <input class="form-control" placeholder="name@example.com" name="clip" @error("clip") style="border: 2px solid #dc3545" @enderror>
                            <label for="floatingInput">Магазин</label>
                        </div>
                        @error('clip')
                            <p style="color: #dc3545">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                        <div class="form-floating gun__add-input">
                            <input class="form-control" placeholder="name@example.com" name="barrel_length" @error("barrel_length") style="border: 2px solid #dc3545" @enderror>
                            <label for="floatingInput">Длина ствола</label>
                        </div>
                        @error('barrel_length')
                            <p style="color: #dc3545">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                        <div class="form-floating gun__add-input">
                            <input class="form-control" placeholder="name@example.com" name="barrel_cutting" @error("barrel_cutting") style="border: 2px solid #dc3545" @enderror>
                            <label for="floatingInput">Нарезка ствола</label>
                        </div>
                        @error('barrel_cutting')
                            <p style="color: #dc3545">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10 gun__add-input">
                        <h5 class="h5 mb-3 fw-normal">Тип оружия</h5>
                        <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="type" @error("type") style="border: 2px solid #dc3545" @enderror>
                            <option value="1" selected>Пистолет</option>
                            <option value="2">Дробовик</option>
                            <option value="3">Автомат</option>
                            <option value="4">Карабин</option>
                        </select>
                        @error('type')
                            <p style="color: #dc3545">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10 gun__add-input">
                        <h5 class="h5 mb-3 fw-normal">Фотографии (не больше 3)</h5>
                        <input type="file" multiple name="photos[]" size='3'/>
                    </div>

                </div>
                <div class="row">
                    <h5 class="h5 mb-3 fw-normal">Вес</h5>
                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                        <div class="form-floating gun__add-input">
                            <input class="form-control" placeholder="name@example.com" name="weight_wo_bullet" @error("weight_wo_bullet") style="border: 2px solid #dc3545" @enderror>
                            <label for="floatingInput">Вес без патронов</label>
                        </div>
                        @error('weight_wo_bullet')
                            <p style="color: #dc3545">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                        <div class="form-floating gun__add-input">
                            <input class="form-control" placeholder="name@example.com" name="weight_bullet" @error("weight_bullet") style="border: 2px solid #dc3545" @enderror>
                            <label for="floatingInput">Вес с патронами</label>
                        </div>
                        @error('weight_bullet')
                            <p style="color: #dc3545">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <h5 class="h5 mb-3 fw-normal">Размеры</h5>
                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                        <div class="form-floating gun__add-input">
                            <input class="form-control" placeholder="name@example.com" name="height" @error("height") style="border: 2px solid #dc3545" @enderror>
                            <label for="floatingInput">Высота</label>
                        </div>
                        @error('height')
                            <p style="color: #dc3545">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                        <div class="form-floating gun__add-input">
                            <input class="form-control" placeholder="name@example.com" name="width" @error("width") style="border: 2px solid #dc3545" @enderror>
                            <label for="floatingInput">Ширина</label>
                        </div>
                        @error('length')
                            <p style="color: #dc3545">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                        <div class="form-floating gun__add-input">
                            <input class="form-control" placeholder="name@example.com" name="length" @error("length") style="border: 2px solid #dc3545" @enderror>
                            <label for="floatingInput">Длина</label>
                        </div>
                        @error('length')
                            <p style="color: #dc3545">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <h5 class="h5 mb-3 fw-normal">Описание</h5>
                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                        <div class="form-floating gun__add-input">
                            <div class="mb-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="about"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10"  style="margin-bottom: 30px;">
                        <button type="submit" class="btn btn-danger">Добавить</button>
                        <button type="reset" class="btn btn-danger">Очистить</button>
                    </div>
                </div>
            </form>
        </div>
    </main>

@endsection
