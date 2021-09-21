<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>User Login</h1>
    <form action="users" method="POST">
        @csrf
        <input type="text" name="name" placeholder="enter name" value="{{old('name')}}"><br>
        <span style="color:red">
            @error('name')
                {{ $message }}
            @enderror</span><br>
        <input type="password" name="password" placeholder="enter password" value="{{old('password')}}"><br>
        <span style="color:red">
            @error('password')
                {{ $message }}
            @enderror</span><br>
        <button type="submit">Login</button>


        {{-- <a href="{{route('secret')}}">Secret</a>
        <h2>Hii {{$name}}</h2>
        <p>{{$data['name']}}</p>
        <p>{{$data['age']}}</p>
        <p>{{$data['email']}}</p> --}}


        {{-- <div>
            {{url()->current()}}
        </div>
        <div>
            {{route('post.comment',['post'=>'Hello-Bros','comment'=>'First-Commnt'])}}
        </div> --}}
    </form>
</body>

</html>
