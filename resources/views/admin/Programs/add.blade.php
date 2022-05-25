@extends('layouts.admin-layout')

@section('title', isset($progrmas) ? 'Редагування програми' : 'Додавання програми')

@section('content')

    <div class="container">
        <div style="padding-top:30px;">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}" style="text-decoration: none; color: #000;">Адмін панель</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.programs.index') }}" style="text-decoration: none; color: #000;">Категорії</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@if(isset($programs))Редагування програми @else Додавання програми @endif</li>
                </ol>
            </nav>
        </div>
    </div>

    <main class="admin-main" style="flex-grow: 1;">
        <div class="container" style="font-family: 'Open Sans', sans-serif; ">
            <div class="border-bottom" style="margin-bottom: 40px;"></div>
            <form method="POST" class="row needs-validation" action="{{ isset($programs)? route('admin.programs.update', $programs->id) : route('admin.programs.store') }}" style="margin: 0 auto;" enctype="multipart/form-data">
                @csrf
                @if(isset($programs))
                    @method('PUT')
                @endif
                <div class="col-md-12">
                    <label for="nameID" class="form-label">Назва</label>
                    <input type="text" class="form-control" placeholder="Назва" id="nameID" name="name" required @if(isset($programs)) value="{{ $programs->name }}") @endif>
                    <div class="valid-feedback">
                        Все добре!
                    </div>
                </div>
                <div style="margin-bottom: 20px;"></div>
                <div class="col-md-8">
                    <label for="aboutID" class="form-label">Опис</label>
                    <textarea class="form-control" rows="14" aria-label="With textarea" id="aboutID" name="about">@if(isset($programs)){{ $programs->about }}@endif</textarea>
                </div>

                <div class="col-md-4">
                    <label for="photoID" class="form-label">Фотографія</label>
                    <div></div>
                    <img @if(isset($programs) && $programs->photo) src={{ asset("/storage/instructor/".$programs->photo) }} @else src="" @endif class="img-thumbnail" alt="..." id="blah" style="min-width: 400px; max-width: 400px; max-height: 300px; min-height: 300px;">
                    <div style="margin-bottom: 20px"></div>
                    <input type="file" class="form-control" id="photoID" name="photo" >
                </div>

                <div style="margin-bottom: 20px;"></div>


                <div class="col-md-3">
                    <label for="priceID" class="form-label">Ціна</label>
                    <input type="text" class="form-control" placeholder="Ціна" id="priceID" name="price" required @if(isset($programs)) value="{{ $programs->price }}") @endif>
                    <div class="valid-feedback">
                        Все добре!
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="lessonsID" class="form-label">Кі-сть уроків</label>
                    <input type="text" class="form-control" placeholder="Кількість уроків" id="lessonsID" name="lessons" required @if(isset($programs)) value="{{ $programs->lessons }}") @endif>
                    <div class="valid-feedback">
                        Все добре!
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="categoryID" class="form-label">Категорія</label>
                    <select id="categoryID" name="category" class="form-select">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"@if(isset($programs)) @if($programs->category_id == $category->id) selected @endif @endif>{{ $category->name }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="instructorID" class="form-label">Інструктор</label>
                    <select id="instructorID" name="instructor" class="form-select">
                        @foreach($instructors as $instructor)
                            <option value="{{ $instructor->id }}" @if(isset($programs)) @if($programs->instructor_id == $instructor->id) selected @endif @endif>{{ $instructor->name }} </option>
                        @endforeach
                    </select>
                </div>

                <div style="margin-bottom: 20px;"></div>

                <div class="col-8">
                    <button class="btn btn-danger" type="submit">@if(isset($programs))Редагувати @else Додати @endif</button>
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
