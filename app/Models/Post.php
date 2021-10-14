<?php

namespace App\Models;


class Post 
{
    private static $blog_posts =
    [
        [
            "title" => "Judul Post Pertama",
            "author" => "Silvi Fitriawati",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus omnis aspernatur adipisci pariatur magni? Reiciendis quas, consectetur vitae tenetur corporis deleniti assumenda rerum numquam quisquam nesciunt provident consequuntur, voluptate autem animi, sapiente eum odio dolore veniam exercitationem magni illo. Ex itaque quaerat blanditiis non eius possimus expedita! Cum officia quia cumque, obcaecati vel quo voluptas odio ipsum error nesciunt illo necessitatibus deleniti voluptatibus maiores assumenda deserunt beatae tenetur ab reiciendis quas ex qui! Tempora sequi officiis doloremque odio incidunt iste?"
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Kartika Retnowati",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus omnis aspernatur adipisci pariatur magni? Reiciendis quas, consectetur vitae tenetur corporis deleniti assumenda rerum numquam quisquam nesciunt provident consequuntur, voluptate autem animi, sapiente eum odio dolore veniam exercitationem magni illo. Ex itaque quaerat blanditiis non eius possimus expedita! Cum officia quia cumque, obcaecati vel quo voluptas odio ipsum error nesciunt illo necessitatibus deleniti voluptatibus maiores assumenda deserunt beatae tenetur ab reiciendis quas ex qui! Tempora sequi officiis doloremque odio incidunt iste? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, ad aspernatur nam quod illum, ducimus facilis eveniet enim omnis beatae asperiores dolor, libero fugit quibusdam deleniti. Amet, aliquam nemo. Necessitatibus earum voluptates minus exercitationem sit cum nulla! Placeat nulla fugit assumenda quidem repudiandae? Modi tenetur itaque consectetur aut voluptatum veritatis harum quia deserunt cupiditate, architecto quaerat iste recusandae veniam! Doloremque aliquam corrupti, enim eos quasi saepe rerum non? Repellendus distinctio modi, dicta beatae nihil illum itaque ex eius deleniti neque, voluptates, voluptatem perspiciatis. Architecto ad distinctio perferendis labore quidem! Atque eligendi voluptatem mollitia autem placeat natus reiciendis, ratione quisquam veniam?"
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

