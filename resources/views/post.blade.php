<x-body>
{{--    <h1> {{ $post->title }}</h1>--}}
{{--    use this when you have a controll over this data--}}
    <h1> {!! $post->title !!}</h1>


    <div>
        {{ $post->body }}
    </div>

    <br>

    <a href="/">Back to all Posts</a>
</x-body>
