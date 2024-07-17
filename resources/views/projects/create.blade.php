@extends('layouts.app')

@section('title')
    Comics - Add New
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
            <form class="mt-5" action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="text-white form-group">
                    <label for="title">Titolo</label>
                    <input value="aaaaaa" type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="text-white mt-3 form-group">
                    <label for="description">Descrizione</label>
                    <textarea name="description" id="description" class="form-control" required>aaa</textarea>
                </div>
                <div class="text-white mt-3 form-group">
                    <label for="thumb">Thumb</label>
                    <input value="aaaaaa" type="text" name="thumb" id="thumb" class="form-control" required>
                </div>
                <div class="text-white mt-3 form-group">
                    <label for="price">Prezzo</label>
                    <input value="123" type="number" name="price" id="price" class="form-control" step="0.01"
                        required>
                </div>
                <div class="text-white mt-3 form-group">
                    <label for="series">Serie</label>
                    <input value="aaaaaa" type="text" name="series" id="series" class="form-control" required>
                </div>
                <div class="text-white mt-3 form-group">
                    <label for="sale_date">Data di Vendita</label>
                    <input value="2020-10-10" type="date" name="sale_date" id="sale_date" class="form-control" required>
                </div>
                <div class="text-white mt-3 form-group">
                    <label for="type">Tipo</label>
                    <input
                        value="aaaaaasssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss"
                        type="text" name="type" id="type" class="form-control" required>
                </div>
                <div class="text-white mt-3 form-group">
                    <label for="artists">Artisti (separati da virgola)</label>
                    <input value="aaaaaa" type="text" name="artists" id="artists" class="form-control" required>
                </div>
                <div class="text-white mt-3 form-group">
                    <label for="writers">Scrittori (separati da virgola)</label>
                    <input value="aaaaaa" type="text" name="writers" id="writers" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Create Comic</button>
            </form>
        </div>
    </section>
@endsection
