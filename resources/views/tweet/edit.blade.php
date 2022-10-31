<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>



</head>

<body class="antialiased bg-blue-900 text-blue-100 pt-20">

    <div class="max-w-5xl mx-auto">
        @if (session('success'))
            <p style="color: green">Succefully Edited</p>
        @endif

        {{-- Form to create a tweet --}}
        <div>
            <form action="{{route('create.edit.process', ['id' => $tweets->id])}}" method="POST">
                @csrf
                <input type="text" name="tweet" value="{{$tweets->body}}" class="w-full p-2 border-2 border-blue-500" value="">

                <button type="submit">Tweet</button>
            </form>
        </div>

    </div>

</body>

</html>
