@extends('layouts.admin-layout')

@section('title', isset($brand) ? 'Редагування бренду' : 'Додавання бренду')

@section('content')

    <div class="container">
        <div style="padding-top:30px;">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}" style="text-decoration: none; color: #000;">Адмін панель</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.brands.index') }}" style="text-decoration: none; color: #000;">Бренди</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@if(isset($brand))Редагування бренду @else Додавання бренду @endif </li>
                </ol>
            </nav>
        </div>
    </div>

    <main class="admin-main" style="flex-grow: 1;">
        <div class="container" style="font-family: 'Open Sans', sans-serif; ">
            <div class="border-bottom" style="margin-bottom: 40px;"></div>
            <form method="POST" action="{{ isset($brand) ? route('admin.brands.update', $brand->id) : route('admin.brands.store') }}" enctype="multipart/form-data">
                @csrf
                @if(isset($brand))
                    @method('PUT')
                @endif
                <div class="row">
                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                        <div class="form-floating gun__add-input">

                            <input class="form-control" placeholder="name@example.com" name="brand_name" @error("brand_name") style="border: 2px solid #dc3545" @enderror @if(isset($brand)) value="{{ $brand->name }}" @endif>
                            <label for="floatingInput">Бренд</label>
                        </div>
                        @error('brand_name')
                            <p style="color: #dc3545; padding-bottom: 10px;">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10"  style="margin-bottom: 30px;">
                        <button type="submit" class="btn btn-danger">@if(isset($brand))Редагувати @else Додати @endif </button>
                    </div>
                </div>
            </form>
        </div>
    </main>

@endsection
