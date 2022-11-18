<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "title" => "First Post",
            "slug" => "first-post",
            "author" => "Myunghao",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cupiditate, asperiores repellat nostrum esse assumenda dolor laudantium unde corporis voluptas eos maxime ducimus odio voluptate suscipit nemo exercitationem quam repellendus quos voluptatibus eum quisquam, beatae facilis! Soluta eos molestias quae harum laudantium, incidunt voluptate nihil doloremque dicta cum corporis cumque, ad nisi! Recusandae nostrum repellendus ducimus officia earum amet alias cum enim distinctio magnam atque error ea explicabo, id quod obcaecati asperiores, dolor, at vero vitae quis sit. Odit, non?"
        ],
        [
            "title" => "Second Post",
            "slug" => "second-post",
            "author" => "Joshua",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum accusamus asperiores consequuntur dolore molestias, cupiditate consectetur vitae nisi voluptatem aspernatur dolores omnis ea distinctio totam id, vel dicta maxime voluptate officia inventore odio. Saepe debitis nemo quod esse id! Ab, sint tempore quo quae maxime quas accusantium vitae vel velit sequi autem vero minima aliquam iusto voluptas quam officia numquam maiores ea eveniet ipsum fugit porro ducimus laudantium! Architecto culpa, quo cum facilis eos perspiciatis accusantium. Eligendi sint repudiandae reprehenderit placeat eum error, excepturi itaque dolorem nihil vel dolore odit nulla consequuntur quis fugiat illum facere unde. Temporibus, nesciunt rem?"
        ],
    ];

    public static function all(){
        return self::$blog_posts;
    }

    public static function find($slug){
        $posts = self::$blog_posts;
        $post= [];
        foreach($posts as $p){
            if($p['slug'] === $slug){
            $post = $p;
            }
        }
        return $post;
    }
}
