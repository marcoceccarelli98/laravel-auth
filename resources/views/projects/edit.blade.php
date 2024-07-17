@extends('layouts.app')

@section('title')
    Comics - Edit - {{ $comic->id }}
@endsection

@section('main')
    <section>
        <div class="container">
            @if ($errors->any())
                <div class="mt-5 alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="mt-5" action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="text-white form-group">
                    <label for="title">Titolo</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $comic->title }}"
                        required>
                </div>
                <div class="text-white mt-3 form-group">
                    <label for="description">Descrizione</label>
                    <textarea name="description" id="description" class="form-control" required>{{ $comic->description }}</textarea>
                </div>
                <div class="text-white mt-3 form-group">
                    <label for="thumb">Thumb</label>
                    <input type="text" name="thumb" id="thumb" class="form-control" value="{{ $comic->thumb }}"
                        required>
                </div>
                <div class="text-white mt-3 form-group">
                    <label for="price">Prezzo</label>
                    <input type="number" name="price" id="price" class="form-control" step="0.01"
                        value="{{ $comic->price }}" required>
                </div>
                <div class="text-white mt-3 form-group">
                    <label for="series">Serie</label>
                    <input type="text" name="series" id="series" class="form-control" value="{{ $comic->series }}"
                        required>
                </div>
                <div class="text-white mt-3 form-group">
                    <label for="sale_date">Data di Vendita</label>
                    <input type="date" name="sale_date" id="sale_date" class="form-control"
                        value="{{ $comic->sale_date }}" required>
                </div>
                <div class="text-white mt-3 form-group">
                    <label for="type">Tipo</label>
                    <input type="text" name="type" id="type" class="form-control" value="{{ $comic->type }}"
                        required>
                </div>
                <div class="text-white mt-3 form-group">
                    <label for="artists">Artisti (separati da virgola)</label>
                    <input type="text" name="artists" id="artists" class="form-control"
                        value="{{ implode(',', $comic->artists) }}" required>
                </div>
                <div class="text-white mt-3 form-group">
                    <label for="writers">Scrittori (separati da virgola)</label>
                    <input type="text" name="writers" id="writers" class="form-control"
                        value="{{ implode(',', $comic->writers) }}" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Update Comic</button>
            </form>
        </div>
    </section>
@endsection
