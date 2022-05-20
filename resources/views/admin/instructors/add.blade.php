@extends('layouts.admin-layout')

@section('title', isset($instructors) ? 'Редагування існтруктора' : 'Додавання інструктора')

@section('content')

    <div class="container">
        <div style="padding-top:30px;">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}" style="text-decoration: none; color: #000;">Адмін панель</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.instructors.index') }}" style="text-decoration: none; color: #000;">Категорії</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@if(isset($instructors))Редагування інструктора @else Додавання інструктора @endif</li>
                </ol>
            </nav>
        </div>
    </div>

    <main class="admin-main" style="flex-grow: 1;">
        <div class="container" style="font-family: 'Open Sans', sans-serif; ">
            <div class="border-bottom" style="margin-bottom: 40px;"></div>
            <form method="POST" class="row needs-validation" action="{{ isset($gun)? route('admin.guns.update', $gun->id) : route('admin.guns.store') }}" style="margin: 0 auto;">
                @csrf
                @if(isset($gun))
                    @method('PUT')
                @endif
                <div class="col-md-5">
                    <label for="caliber" class="form-label">Калібр</label>
                    <input type="text" class="form-control" placeholder="Калібр" id="caliberID" name="caliber" required @if(isset($gun)) value="{{ $gun->caliber }}") @endif>
                    <div class="valid-feedback">
                        Все добре!
                    </div>
                </div>
                <div class="col-md-5">
                    <label for="clipID" class="form-label">Магазин</label>
                    <input type="number" class="form-control" id="clipID" name="clip" required @if(isset($gun)) value="{{ $gun->clip }}") @endif>
                    <div class="valid-feedback">
                        Все добре!
                    </div>
                </div>

                <div style="margin-bottom: 20px;"></div>

                <div class="col-md-3">
                    <label for="weight_bulletID" class="form-label">Вага з</label>
                    <input type="number" class="form-control" id="weight_bulletID" name="weight_bullet" required @if(isset($gun)) value="{{ $gun->weight_bullet }}") @endif>
                    <div class="valid-feedback">
                        Все добре!
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="weight_wo_bulletID" class="form-label">Вага без</label>
                    <input type="number" class="form-control" id="weight_wo_bulletID" name="weight_wo_bullet" required @if(isset($gun)) value="{{ $gun->weight_wo_bullet }}") @endif>
                    <div class="valid-feedback">
                        Все добре!
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="widthID" class="form-label">Ширина</label>
                    <input type="number" class="form-control" id="widthID" name="width" required @if(isset($gun)) value="{{ $gun->width }}") @endif>
                    <div class="valid-feedback">
                        Все добре!
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="heightID" class="form-label">Висота</label>
                    <input type="number" class="form-control" id="heightID" name="height" required @if(isset($gun)) value="{{ $gun->height }}") @endif>
                    <div class="valid-feedback">
                        Все добре!
                    </div>
                </div>

                <div style="margin-bottom: 20px;"></div>

                <div class="col-md-3">
                    <label for="barrel_lengthID" class="form-label">Довжина ствола</label>
                    <input type="number" class="form-control" id="barrel_lengthID" name="barrel_length" required required @if(isset($gun)) value="{{ $gun->barrel_length }}") @endif>
                    <div class="valid-feedback">
                        Все добре!
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="barrel_cuttingID" class="form-label">Розріз ствола</label>
                    <input type="number" class="form-control" id="barrel_cuttingID" name="barrel_cutting" required @if(isset($gun)) value="{{ $gun->barrel_cutting }}") @endif>
                    <div class="valid-feedback">
                        Все добре!
                    </div>
                </div>

                <div style="margin-bottom: 20px;"></div>

                <div class="col-md-12">
                    <label for="aboutID" class="form-label">Опис</label>
                    <textarea class="form-control" rows="10" aria-label="With textarea" id="aboutID" name="about">@if(isset($gun)) {{ $gun->about }} @endif</textarea>
                </div>

                <div style="margin-bottom: 20px;"></div>

                <div class="col-12">
                    <button class="btn btn-danger" type="submit">Додати</button>
                </div>
            </form>
        </div>
    </main>

@endsection
