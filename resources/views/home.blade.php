@extends('layouts.main-layout')

@section('content')

    <div class="text-center">
        <h1>Users</h1>
        <ul class="list-unstyled">
            @foreach ($users as $user)
                <li>
                    <h4>
                        {{ $user -> name }}
                    </h4>
                    <img src="{{ $user -> userDetail -> avatar }}">
                    <p>
                        Email: {{ $user -> email }}
                        <br>
                        Phone: {{ $user -> userDetail -> phone }}
                        <br>
                        Address: {{ $user -> userDetail -> address }}
                    </p>
                    <h5>Posts: {{ count($user -> posts) }}</h5>
                    <ul>
                        @foreach ($user -> posts as $post)
                            <li>
                                <a href="{{ route('post.show', $post -> id) }}">
                                    {{ $post -> title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
