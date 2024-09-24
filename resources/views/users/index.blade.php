<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            .antialiased{
                max-width: 80%;
                margin: 0 auto;
            }
            #button-addon5{
                width: 30px;
                height: 30px;
                border-radius: unset;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-left:10px; 
                cursor: pointer;
            }
            .search{
                display: flex;
            }
            .user-card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            max-width: 300px;
            margin: 10px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .user-info p {
            font-size: 14px;
            line-height: 1.6;
            margin: 5px 0;
        }
        .user-info strong {
            color: #333;
        }
        .list-user{
            display: flex;
            flex-wrap:wrap; 
        }
        </style>
    </head>
    <body class="antialiased">
        <div class="search-intro">
            <h1>  TÌM KIẾM</h1>
        </div>
        <form action="{{route('users.index')}}" method="GET">
            @csrf
            <div class="search-input">
                <div class="search-bar">
                    <div class="search">
                        <input type="text" class="form-control" id="search-bar" input-id="2" placeholder="Tìm kiếm" name="keyword" value="{{ request('keyword') }}">
                        <button id="button-addon5" type="submit" class="btn"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30">
                            <path d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z"></path>
                            </svg></button>
                    </div> 
                    @if(request('keyword'))<p >{{count($users)}} kết quả được tìm thấy với từ khóa "<strong class="">{{request('keyword')}}</strong>"</p>@endif
                </div>
            </div>
        </form>
        <div class="list-user">
            @foreach($users as $user)
            <div class="user-card">
                <div class="user-info" id="user-info">
                    <p><strong>ID:</strong> {{ $user->id}}</p>
                    <p><strong>Tên:</strong> {{$user->name}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </body>
</html>


