<?php

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post;
        $post->user_id = 2;
        $post->title = "Growing to the New Normal";
        $post->body = "Shalom! A joyful Sunday to you all!
        Let us worship our faithful God excitedly by singing our hearts out and listening to the preaching of His Word. May this day be a blessing to all.
        1. Share in the group any or a particular area in your life during this New Normal that you have seen God moved and helped your through.
        2. Knowing about these truths from God, how do you think should these change/grow your current situation in this New Normal?";
        $post->link = 'https://www.youtube.com/watch?v=jqUvZmtRwMM';
        $post->save();

        $post = new Post;
        $post->user_id = 2;
        $post->title = "Conquering the New Normal";
        $post->body = "What a wonderful day that God has given to us! He is almighty, unchangeable God, King of kings, Lord of lords, clothed in majesty.
        Let us exalt His Name together. May we be excited in singing praises and worshipping our faithful and sovereign God.
        Here is the link for YouTube in case of technical difficulty or lag in FB premiere.
        Small Group Discussion Questions:
            1. How did the Lord speak to you through the preaching of His Word?
            2. What are the hurdles that you encounter in practicing the winning attitude that Christ had shown?
            3. In your specific relationship, what particular application of Christ's example would you imitate?";
        $post->link = 'https://www.youtube.com/watch?v=ON4fhKPyeyc';
        $post->save();
    }
}
