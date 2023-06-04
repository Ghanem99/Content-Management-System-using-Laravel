<x-body>
    @foreach($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>

            <div>
                {{--        from user to author: your code now, reflects the way you speak.--}}
                written by <a href="/authors/{{$post->author->id}}">{{ $post->author->name }}</a>
                in <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a>
            </div>

            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-body>
