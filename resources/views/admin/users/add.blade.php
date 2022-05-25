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
            <form method="POST" class="row needs-validation" action="{{ isset($instructors)? route('admin.instructors.update', $instructors->id) : route('admin.instructors.store') }}" style="margin: 0 auto;" enctype="multipart/form-data">
                @csrf
                @if(isset($instructors))
                    @method('PUT')
                @endif
                <div class="col-md-12">
                    <label for="nameID" class="form-label">ПІБ</label>
                    <input type="text" class="form-control" placeholder="Калібр" id="nameID" name="name" required @if(isset($instructors)) value="{{ $instructors->name }}") @endif>
                    <div class="valid-feedback">
                        Все добре!
                    </div>
                </div>
                <div style="margin-bottom: 20px;"></div>
                <div class="col-md-8">
                    <label for="aboutID" class="form-label">Опис</label>
                    <textarea class="form-control" rows="14" aria-label="With textarea" id="aboutID" name="about">@if(isset($instructors)) {{ $instructors->about }} @endif</textarea>
                </div>

                <div class="col-md-4">
                    <label for="photoID" class="form-label">Фотографія</label>
                    <div></div>

                    <img @if(isset($instructors) && $instructors->photo) src="{{ asset("/storage/app/public/instructor/".$instructors->photo)}} " @else src="" @endif class="img-thumbnail" alt="..." id="blah" style="min-width: 400px; max-width: 400px; max-height: 300px; min-height: 300px;">
                    <div style="margin-bottom: 20px"></div>
                    <input type="file" class="form-control" id="photoID" name="photo" >
                </div>

                <div style="margin-bottom: 20px;"></div>

                <div class="col-8">
                    <button class="btn btn-danger" type="submit">Додати</button>
                </div>
            </form>
        </div>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#photoID").change(function() {
            readURL(this);
        });
    </script>

@endsection
