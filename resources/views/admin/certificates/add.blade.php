@extends('layouts.admin-layout')

@section('title', isset($certificate) ? 'Редгування сертифікату' : 'Додавання сертифікату')

@section('content')

    <div class="container">
        <div style="padding-top:30px;">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}" style="text-decoration: none; color: #000;">Адмін панель</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.certificates.index') }}" style="text-decoration: none; color: #000;">Сертифікати</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@if(isset($certificate))Редагування сертифікату @else Додавання сертифікату @endif</li>
                </ol>
            </nav>
        </div>
    </div>

    <main class="admin-main" style="flex-grow: 1;">
        <div class="container" style="font-family: 'Open Sans', sans-serif; ">
            <div class="border-bottom" style="margin-bottom: 40px;"></div>
            <form method="POST" class="row needs-validation" action="{{ isset($certificate)? route('admin.certificates.update', $certificate->id) : route('admin.certificates.store') }}" style="margin: 0 auto;" enctype="multipart/form-data">
                @csrf
                @if(isset($certificate))
                    @method('PUT')
                @endif
                <div class="col-md-4">
                    <label for="nameID" class="form-label">Назва</label>
                    <input type="text" class="form-control" placeholder="Назва" id="nameID" name="name" required @if(isset($certificate)) value="{{ $certificate->name }}") @endif>
                    <div class="valid-feedback">
                        Все добре!
                    </div>
                </div>

                <div style="margin-bottom: 20px;"></div>

                <div class="col-md-12">
                    <label for="slugID" class="form-label">Слог</label>
                    <textarea class="form-control" rows="3" aria-label="With textarea" id="slugID" name="slug">@if(isset($certificate)) {{ $certificate->slug }} @endif</textarea>
                </div>

                <div style="margin-bottom: 20px;"></div>

                <div class="col-md-3">
                    <label for="priceID" class="form-label">Ціна</label>
                    <input type="number" class="form-control" id="priceID" name="price" required @if(isset($certificate)) value="{{ $certificate->price }}") @endif>
                    <div class="valid-feedback">
                        Все добре!
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="maxPersonsID" class="form-label">Кількість людей</label>
                    <input type="number" class="form-control" id="maxPersonsID" name="maxPersons" required @if(isset($certificate)) value="{{ $certificate->maxPersons }}") @endif>
                    <div class="valid-feedback">
                        Все добре!
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="durationID" class="form-label">Тривалість</label>
                    <input type="number" class="form-control" id="durationID" name="duration" required @if(isset($certificate)) value="{{ $certificate->duration }}") @endif>
                    <div class="valid-feedback">
                        Все добре!
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="photoID" class="form-label">Фотографія</label>
                    <div></div>
                    <img @if(isset($certificate) && $certificate->photo) src={{ asset("/storage/certificates/".$certificate->photo) }} @else src="" @endif class="img-thumbnail" alt="..." id="blah" style="min-width: 300px; max-width: 300px; max-height: 200px; min-height: 200px;">
                    <div style="margin-bottom: 20px"></div>
                    <input type="file" class="form-control" id="photoID" name="photo" >
                </div>
                <div style="margin-bottom: 20px;"></div>

                <div class="col-md-4">
                    <label for="gunsID" class="form-label">Зброя</label>
                    <input class="form-control" list="datalistOptions" id="gunsID" placeholder="Оружие" name="guns">
                    <datalist id="datalistOptions">
                        @foreach($guns as $gun)
                            <option value="{{ $gun->name }}">
                        @endforeach
                    </datalist>
                    <button type="button" class="btn btn-danger" style="margin-top: 20px" id="buttonAdd" onclick="addGun();">Додати до списку</button>
                </div>
                <div class="col-md-8">
                    <label for="gunAreaID" class="form-label">Вся зброя</label>
                    <textarea class="form-control  gun__add-input" id="gunAreaID" rows="5" name="gunArea" ></textarea>
                </div>

                <div style="margin-bottom: 20px;"></div>


                <div style="margin-bottom: 20px;"></div>

                <div class="col-md-12">
                    <label for="aboutID" class="form-label">Опис</label>
                    <textarea class="form-control" rows="10" aria-label="With textarea" id="aboutID" name="about">@if(isset($certificate)){{ $certificate->about }}@endif</textarea>
                </div>

                <div style="margin-bottom: 20px;"></div>

                <div class="col-12">
                    <button class="btn btn-danger" type="submit">@if(isset($certificate))Редагувати @else Додати @endif</button>
                </div>
                <div style="margin-bottom: 20px;"></div>

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
