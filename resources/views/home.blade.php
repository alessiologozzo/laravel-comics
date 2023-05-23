@extends('layouts.template')

@section('title')
    Home
@endsection

@section('content')
    <div class="al-jumbo"></div>

    <div class="container al-cur-ser position-relative py-5">

        <div class="row">

            @for ($i = 0; $i < count($comics); $i++)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 py-4">
                    <a href="{{route('show', $i)}}" class="al-card d-flex flex-column gap-2">
                        <img src="{{ $comics[$i]['thumb'] }}" alt="err">
                        <strong class="text-center">{{ $comics[$i]['title'] }}</strong>
                    </a>
                </div>
            @endfor

        </div>

    </div>

    <div class="al-bg-blue">
        <div class="container d-flex justify-content-center align-items-center">

            <div class="row al-categories">
                @foreach ($categories as $category)
                    <div class="col-12 col-sm-6 col-md-4 al-col-lg py-3 d-flex justify-content-center align-items-center gap-2">
                        <img src="{{ Vite::asset($category['source']) }}" alt="err">
                        <span class="text-uppercase">{{ $category['name'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
