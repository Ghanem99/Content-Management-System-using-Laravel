<x-body>
{{--    <h1> {{ $post->title }}</h1>--}}
{{--    use this when you have a controll over this data--}}
    <h1> {!! $post->title !!}</h1>
    <div>
{{--        from user to author: your code now, reflects the way you speak.--}}
        written by <a href="">{{ $post->author->name }}</a>
        in <a href="">{{ $post->category->name }}</a>
    </div>
    <br>


    <div>
        {{ $post->body }}
    </div>

    <br>

    <a href="/">Back to all Posts</a>
</x-body>
