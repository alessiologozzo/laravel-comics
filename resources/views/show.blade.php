@extends('layouts.template')

@section('title')
    {{ $comic['title'] }}
@endsection

@section('content')
    <main class="al-bg-white">
        <div class="al-jumbo"></div>
        <div class="al-blue-jumbo">
            <div class="container position-relative">
                <img src="{{ $comic['thumb'] }}" alt="err">
            </div>
        </div>

        <div class="container py-5 al-p">
            <h2 class="py-3 text-center">{{ $comic['title'] }}</h2>
            <p>{{ $comic['description'] }}</p>

            <div class="row">
                <h3 class="text-center pt-5 pb-3">Talents</h3>

                <div class="col-3">
                    <strong>Art by:</strong>
                </div>

                <div class="col-9 d-flex justify-content-end flex-wrap">
                    @for ($i = 0; $i < count($comic['artists']); $i++)
                        <span class="al-blue">{{ $comic['artists'][$i] }}</span>
                        @if ($i + 1 < count($comic['artists']))
                            <span class="al-ps pe-2">, </span>
                        @endif
                    @endfor
                </div>

                <div class="col-3 pt-3">
                    <strong>Written by:</strong>
                </div>
    
                <div class="col-9 d-flex justify-content-end flex-wrap pt-3">
                    @for ($i = 0; $i < count($comic['writers']); $i++)
                        <span class="al-blue">{{ $comic['writers'][$i] }}</span>
                        @if ($i + 1 < count($comic['writers']))
                            <span class="al-ps pe-2">, </span>
                        @endif
                    @endfor
                </div>

            </div>

            <h3 class="pt-5 text-center">Specs</h3>
            <div class="row">
                <div class="col-5 pt-3">
                    <strong>Series: </strong>
                </div>
                <div class="col-7 pt-3">
                    <div class="d-flex justify-content-end">{{$comic["series"]}}</div>
                </div>

                <div class="col-5 pt-3">
                    <strong>U.S. Price: </strong>
                </div>
                <div class="col-7 pt-3">
                    <div class="d-flex justify-content-end">{{$comic["price"]}}</div>
                </div>

                <div class="col-5 pt-3">
                    <strong>On sale date: </strong>
                </div>
                <div class="col-7 pt-3">
                    <div class="d-flex justify-content-end">{{$comic["sale_date"]}}</div>
                </div>
            </div>
        </div>
    </main>
@endsection
