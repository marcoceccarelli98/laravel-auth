{{-- @dd($data['projects']) --}}

@extends('layouts.app')

@section('content')
    <section>
        {{-- <div class="add-project">
        <a class="btn btn-primary" href="{{ route('projects.create') }}">ADD NEW project</a>
    </div> --}}
        <div class="projects-list">
            @foreach ($data['projects'] as $project)
                <div class="project-card">
                    <a href="{{ route('projects.show', $project->id) }}">
                        <div class="thumb-container">
                            <img src="{{ $project['images'][0] }}" alt="Thumb not found">
                        </div>
                        <div class="title-container">
                            <p>{{ $project['title'] }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
