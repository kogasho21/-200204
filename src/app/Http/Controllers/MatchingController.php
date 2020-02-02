<?php

namespace App\Http\Controllers;

use App\User;
use App\Builder;
use App\BookBuilder;
use App\MovieBuilder;
use App\MusicBuilder;
use App\FashionBuilder;

use Illuminate\Http\Request;

class MatchingController extends Controller
{

    public function index()
    {

        $users = User::all();
        return view('matching.index', compact('users'));
    }

    public function result(User $user)
    {
        // 利用者の音楽情報を取得
        $music = $user->musicUsers->first()->music;
        // 利用者の本情報を取得
        $book = $user->bookUsers->first()->book;
        // 利用者のファッション情報を取得
        $fashion = $user->fashionUsers->first()->fashion;
        // 利用者の映画情報を取得
        $movie = $user->movieUsers->first()->movie;

        // 音楽IDを利用して設定している建築者を取得
        $musicBuilders = MusicBuilder::where('music_id', $music->id)->get();
        // 本IDを利用して設定している建築者を取得
        $bookBuilders = BookBuilder::where('book_id', $book->id)->get();
        // ファッションIDを利用して設定している建築者を取得
        $fashionBuilders = FashionBuilder::where('fashion_id', $fashion->id)->get();
        // 映画IDを利用して設定している建築者を取得
        $movieBuilders = MovieBuilder::where('movie_id', $movie->id)->get();

        $datas = [];
        $datas[] = $musicBuilders;
        $datas[] = $bookBuilders;
        $datas[] = $fashionBuilders;
        $datas[] = $movieBuilders;

        $results = [];

        foreach ($musicBuilders as $builder) {
            $this->create($builder, $results);
        }
        foreach ($bookBuilders as $builder) {
            $this->create($builder, $results);
        }
        foreach ($fashionBuilders as $builder) {
            $this->create($builder, $results);
        }
        foreach ($movieBuilders as $builder) {
            $this->create($builder, $results);
        }
        arsort($results);
        $matchings = [];
        foreach ($results as $key => $value) {
            $matchings[] = array('builder' => Builder::find($key), 'match' => $value);
        }

        return view('matching.result', compact('matchings', 'bookBuilders', 'movieBuilders', 'musicBuilders', 'fashionBuilders'));
    }

    private function create($builder, &$results)
    {
        if (!isset($results[$builder->id])) {
            $results[$builder->id] = 0;
        } else {
        }
        $results[$builder->id]++;
    }
}
