<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {

// }


class Post_
{
    private static
        $blog_posts = [
            [
                'judul' => 'Post 1',
                'slug' => 'post_1',
                'pembuat' => 'anwi',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio temporibus numquam, quod, dolores consequatur, autem accusantium ea obcaecati earum velit distinctio. Blanditiis enim, temporibus cum reprehenderit natus nobis minima odio quidem voluptatibus animi est esse, vero distinctio ad quos magnam modi saepe quia dicta eos rerum numquam! Nam, autem ea!'
            ],
            [
                'judul' => 'Post 2',
                'slug' => 'post_2',
                'pembuat' => 'anwi',
                'deskripsi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt aliquid quo impedit aut quaerat odit aperiam debitis at dolore quos sequi, fugit eveniet, sit delectus dicta facilis magnam corrupti et! Quaerat maxime, recusandae a vitae neque dignissimos repudiandae modi nam at voluptas eius. Hic veniam minus cumque voluptatum, eligendi cum autem nam quae repudiandae.'
            ]
        ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
