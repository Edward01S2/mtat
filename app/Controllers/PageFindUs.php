<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageFindUs extends Controller
{
  protected $acf = true;

  public function locationLoop() {
    $banner = get_posts([
        'post_type' => 'locations',
    ]);

    return array_map(function ($post) {
        return [
          'name' => get_the_title($post->ID),
          'address' => get_field('address', $post->ID),
          'address2' => get_field('address_2', $post->ID),
          'phone' => get_field('phone', $post->ID),
          'hours' => get_field('hours', $post->ID),
          'primary' => get_field('primary', $post->ID),
          'map' => get_field('map', $post->ID),
        ];
    }, $banner);
}

public function eventLoop() {
  $banner = get_posts([
      'category_name' => 'events',
      'order' => 'DESC',
      'posts_per_page'=>'3',
  ]);

  return array_map(function ($post) {
      return [
        'name' => get_the_title($post->ID),
        'excerpt' => get_the_excerpt($post->ID),
        'url' => get_permalink($post->ID),
      ];
  }, $banner);
}

}
