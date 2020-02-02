<?php

use Illuminate\Database\Seeder;
use App\Music;
use App\MusicUser;
use App\Book;
use App\BookUser;
use App\Fashion;
use App\FashionUser;
use App\Movie;
use App\MovieUser;
use App\BuildingUser;

use App\MusicBuilder;
use App\BookBuilder;
use App\FashionBuilder;
use App\MovieBuilder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MatchingTestSeeder::class);
    }
}

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        for ($i = 1; $i <= 10; $i++) {
            $d = str_pad($i, 4, '0', STR_PAD_LEFT);
            factory(App\User::class, 1)->create([]);
        }
    }
}

class MatchingTestSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        for ($i = 1; $i <= 100; $i++) {
            $d = str_pad($i, 4, '0', STR_PAD_LEFT);
            factory(App\User::class, 1)->create([]);
        }
        DB::table('builders')->delete();
        for ($i = 1; $i <= 100; $i++) {
            $d = str_pad($i, 4, '0', STR_PAD_LEFT);
            factory(App\Builder::class, 1)->create([]);
        }

        DB::table('musics')->delete();
        Music::create(['name' => 'J-POP', 'order_num' => 1]);
        Music::create(['name' => 'アニメ', 'order_num' => 2]);
        Music::create(['name' => '洋楽', 'order_num' => 3]);
        Music::create(['name' => 'K-POP', 'order_num' => 4]);
        Music::create(['name' => 'ジャズ', 'order_num' => 5]);
        Music::create(['name' => 'クラシック', 'order_num' => 6]);

        DB::table('books')->delete();
        Book::create(['name' => '小説', 'order_num' => 1]);
        Book::create(['name' => '漫画', 'order_num' => 2]);
        Book::create(['name' => '実用', 'order_num' => 3]);
        Book::create(['name' => 'ビジネス', 'order_num' => 4]);
        Book::create(['name' => '児童書', 'order_num' => 5]);
        Book::create(['name' => '専門書', 'order_num' => 6]);

        DB::table('fashions')->delete();
        Fashion::create(['name' => 'フェミニン', 'order_num' => 1]);
        Fashion::create(['name' => 'コンサバ', 'order_num' => 2]);
        Fashion::create(['name' => 'エレガント', 'order_num' => 3]);
        Fashion::create(['name' => 'ロック', 'order_num' => 4]);
        Fashion::create(['name' => 'ビジュアル', 'order_num' => 5]);
        Fashion::create(['name' => 'レトロ', 'order_num' => 6]);
        Fashion::create(['name' => 'ガーリッシュ', 'order_num' => 7]);

        DB::table('movies')->delete();
        Movie::create(['name' => 'ドラマ', 'order_num' => 1]);
        Movie::create(['name' => 'サスペンス', 'order_num' => 2]);
        Movie::create(['name' => 'コメディー', 'order_num' => 3]);
        Movie::create(['name' => 'ホラー', 'order_num' => 4]);
        Movie::create(['name' => 'SF', 'order_num' => 5]);
        DB::table('music_users')->delete();
        for ($i = 1; $i <= 100; $i++) {
            MusicUser::create(['user_id' => $i, 'music_id' => rand(1, 6)]);
        }
        DB::table('book_users')->delete();
        for ($i = 1; $i <= 100; $i++) {
            BookUser::create(['user_id' => $i, 'book_id' => rand(1, 6)]);
        }
        DB::table('fashion_users')->delete();
        for ($i = 1; $i <= 100; $i++) {
            FashionUser::create(['user_id' => $i, 'fashion_id' => rand(1, 7)]);
        }
        DB::table('movie_users')->delete();
        for ($i = 1; $i <= 100; $i++) {
            MovieUser::create(['user_id' => $i, 'movie_id' => rand(1, 5)]);
        }
        DB::table('music_builders')->delete();
        for ($i = 1; $i <= 100; $i++) {
            MusicBuilder::create(['builder_id' => $i, 'music_id' => rand(1, 6)]);
        }
        DB::table('book_builders')->delete();
        for ($i = 1; $i <= 100; $i++) {
            BookBuilder::create(['builder_id' => $i, 'book_id' => rand(1, 6)]);
        }
        DB::table('fashion_builders')->delete();
        for ($i = 1; $i <= 100; $i++) {
            FashionBuilder::create(['builder_id' => $i, 'fashion_id' => rand(1, 7)]);
        }
        DB::table('movie_builders')->delete();
        for ($i = 1; $i <= 100; $i++) {
            MovieBuilder::create(['builder_id' => $i, 'movie_id' => rand(1, 5)]);
        }
    }
}
