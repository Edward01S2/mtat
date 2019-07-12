<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
  protected $acf = true;

  public function testimonyLoop() {
    $testimonies = get_posts([
        'post_type' => 'testimonial',
        'posts_per_page'=>'3',
        'meta_key' => 'class_year',
        'orderby' => 'meta_value',
        'order'=> 'DESC',
    ]);

    return array_map(function ($post) {
        return [
            'title' => get_the_title($post->ID),
            'year' => get_field("class_year", $post->ID),
            'school' => get_field("school", $post->ID),
            'image' => get_field("image", $post->ID),
            'testimony' => get_field("testimony", $post->ID),
        ];
    }, $testimonies);
  }

  public function announcementLoop() {
    $announce = get_posts([
      'post_type' => 'announcements',
      'posts_per_page'=>'3',
      'order'=> 'DESC',
    ]);

    return array_map(function ($post) {
      return [
          'title' => get_the_title($post->ID),
          'content' => get_field('content', $post->ID),
          'link' => get_field("link", $post->ID),
          
      ];
  }, $announce);
  }
}
