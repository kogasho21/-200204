<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>マッチングサンプル</title>
    </head>
    <body>
        <div class="container-fluid">
            <h1>マッチングロジック</h1>
            <div class="row">
                <div class="col-lg-12">
                    <h3>利用者</h3>
                    <table class="table">
                        <tr>
                            <td>名前</td>
                            <td>音楽</td>
                            <td>本</td>
                            <td>ファッション</td>
                            <td>映画</td>
                            <td>マッチング実行</td>
                        </tr>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>
                                @foreach ($user->musicUsers as $music)
                                {{ $music->music->name }}
                                @endforeach
                            </td>
                            <td>
                                @foreach ($user->bookUsers as $book)
                                {{ $book->book->name }}
                                @endforeach
                            </td>
                            <td>
                                @foreach ($user->fashionUsers as $fashion)
                                {{ $fashion->fashion->name }}
                                @endforeach
                            </td>
                            <td>
                                @foreach ($user->movieUsers as $movie)
                                {{ $movie->movie->name }}
                                @endforeach
                            </td>
                            <td>
                                <a href="{{ route('matching.result', $user) }}" class="btn btn-success">実行</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
