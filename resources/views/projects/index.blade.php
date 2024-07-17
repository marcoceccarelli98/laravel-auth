{{-- @dd($data) --}}

@extends('layouts.app')

@section('title')
    Comics
@endsection

@section('main')
    <section>
        <div class="add-comic">
            <a class="btn btn-primary" href="{{ route('comics.create') }}">ADD NEW COMIC</a>
        </div>
        <div class="comics-list">
            @foreach ($data['comics'] as $comic)
                <div class="comic-card">
                    <a href="{{ route('comics.show', $comic->id) }}">
                        <div class="thumb-container">
                            <img src="{{ $comic['thumb'] }}" alt="Thumb not found">
                        </div>
                        <div class="title-container">
                            <p>{{ $comic['series'] }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
