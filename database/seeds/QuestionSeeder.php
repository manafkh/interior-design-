<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $question1=  \App\Question::create([
            'subject'=> "كم عدد ايام الاسبوع ؟؟",
        ]);
      $question1->answers()->create([
          'answer_title'=>'7',
          'answer_correct'=>true,
          'point'=> 5
      ]);
        $question1->answers()->create([
            'answer_title'=>'8',
            'answer_correct'=>false
        ]);
        $question1->answers()->create([
            'answer_title'=>'6',
            'answer_correct'=>false
        ]);


        $question2=  \App\Question::create([
            'subject'=> "كم عدد اشهر السنة",
        ]);
        $question2->answers()->create([
            'answer_title'=>'18',
            'answer_correct'=>false
        ]);
        $question2->answers()->create([
            'answer_title'=>'11',
            'answer_correct'=>false
        ]);
        $question2->answers()->create([
            'answer_title'=>'12',
            'answer_correct'=>true,
            'point'=>5
        ]);

        $question3=  \App\Question::create([
            'subject'=> "كم عدد لاعبين في مبارة كرة القدم ؟؟",
        ]);
        $question3->answers()->create([
            'answer_title'=>'18',
            'answer_correct'=>false,

        ]);
        $question3->answers()->create([
            'answer_title'=>'10',
            'answer_correct'=>true,
            'point'=> 5
        ]);
        $question3->answers()->create([
            'answer_title'=>'12',
            'answer_correct'=>false
        ]);

    }
}
