<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Wall') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>GG pour le wall</p>
                    {!! Form::open(['route'=> 'post_create']) !!}
                    {!! Form::text('content') !!}
                    {!! Form::submit('Post') !!}
                    {!! Form::close() !!}
                    <br>
                    <ul>
                        @foreach ($posts as $post)
                        <li>{{$post->content}}</li>
                        {{$post->created_at}} by {{$post->user->name}}
                        [<a href="{{route('post_update', $post->id)}}">update</a>]
                        [<a href="{{route('post_delete', $post->id)}}">delete</a>]
                        @endforeach
                    </ul>
                    <br>
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>