@extends('layouts.admin-layout')

@section('title', isset($categories) ? 'Редагування категорії' : 'Додавання категорії')

@section('content')

    <div class="container">
        <div style="padding-top:30px;">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}" style="text-decoration: none; color: #000;">Адмін панель</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}" style="text-decoration: none; color: #000;">Категорії</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@if(isset($categories))Редагування категорії @else Додавання категорії @endif</li>
                </ol>
            </nav>
        </div>
    </div>

    <main class="admin-main" style="flex-grow: 1;">
        <div class="container" style="font-family: 'Open Sans', sans-serif; ">
            <div class="border-bottom" style="margin-bottom: 40px;"></div>
            <form method="POST" action="{{ isset($categories) ? route('admin.category.update', $categories->id) : route('admin.category.store') }}" enctype="multipart/form-data">
                @csrf
                @if(isset($categories))
                    @method('PUT')
                @endif
                <div class="row">
                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                        <div class="form-floating gun__add-input">

                            <input class="form-control" placeholder="name@example.com" name="category_name" @error("category_name") style="border: 2px solid #dc3545" @enderror @if(isset($categories)) value="{{ $categories->name }}" @endif>
                            <label for="floatingInput">Категорія</label>
                        </div>
                        @error('category_name')
                            <p style="color: #dc3545; padding-bottom: 10px;">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10"  style="margin-bottom: 30px;">
                        <button type="submit" class="btn btn-danger">@if(isset($categories))Редагувати @else Додати @endif </button>
                    </div>
                </div>
            </form>
        </div>
    </main>

@endsection
