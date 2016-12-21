<?php

use App\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class create_comment_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();

        Comment::create(array(
                'author' => 'Chris Sevilleja',
                'text' => 'Look I am a test comment.'
        ));

        Comment::create(array(
                'author' => 'Nick Cerminara',
                'text' => 'This is going to be super crazy.'
        ));

        Comment::create(array(
                'author' => 'Holly Lloyd',
                'text' => 'I am a master of Laravel and Angular.'
        ));
    }
}
