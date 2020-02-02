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
            <h1>マッチングロジック(結果)</h1>
            <div class="row">
                <div class="col-lg-3">
                    <h3>音楽での一致</h3>
                    <table class="table">
                        @foreach ($musicBuilders as $builder)
                        <tr>
                            <td>
                                {{ $builder->builder->id }}.
                                {{ $builder->builder->name }}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-lg-3">
                    <h3>本での一致</h3>
                    <table class="table">
                        @foreach ($bookBuilders as $builder)
                        <tr>
                            <td>
                                {{ $builder->builder->id }}.
                                {{ $builder->builder->name }}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-lg-3">
                    <h3>ファッションでの一致</h3>
                    <table class="table">
                        @foreach ($fashionBuilders as $builder)
                        <tr>
                            <td>
                                {{ $builder->builder->id }}.
                                {{ $builder->builder->name }}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-lg-3">
                    <h3>映画での一致</h3>
                    <table class="table">
                        @foreach ($movieBuilders as $builder)
                        <tr>
                            <td>
                                {{ $builder->builder->id }}.
                                {{ $builder->builder->name }}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <hr>
                    <h3>マッチング結果</h3>
                    <table class="table">
                        @foreach ($matchings as $matching)
                        <tr>
                            <td>
                                {{ $matching['builder']->id }}.
                                {{ $matching['builder']->name }}
                            </td>
                            <td>
                                <span class="text-danger font-weight-bold">{{ $matching['match'] }}</span>
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
