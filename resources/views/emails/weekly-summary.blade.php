<h1>Weekly summary: {{$subscriber->email}}</h1>
@foreach($posts as $post)
    <div>
        <img src="{{asset($post->medium)}}" alt="{{$post->title}}">
        <h3><a href="{{route('public.post.show', $post->slug)}}">{{$post->title}}</a></h3>
    </div>
@endforeach

<a href="{{route('public.subscriber.destroy', ['token' => $subscriber->token])}}">Unsubscribe</a>