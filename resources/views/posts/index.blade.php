<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All posts</h1>
    <ul>
        @foreach($allPosts as $post)
        <li>
            Title: {{$post->title}} <br>
            Content: {{$post->content}} <br>
            <a href="/posts/{{$post->id}}">Show</a>
        </li>
        @endforeach
    </ul>

    <h1>Single post view</h1>
    <p>Title: {{$post->title}}</p>
    <p>Content: {{$post -> content}}</p>
   
</body>
</html>