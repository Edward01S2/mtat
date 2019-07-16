<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateTesting extends Controller
{
  protected $acf = true;
  
  public function testData()
  {
      $test = "TEST VALUES";
      return $test;
  }
  // public function testsLoop() {
  //   $testimonies = ;

  //   return array_map(function ($post) {
  //       return [
  //           'title' => get_the_title($post->ID),
  //           'year' => get_field("class_year", $post->ID),
  //           'school' => get_field("school", $post->ID),
  //           'image' => get_field("image", $post->ID),
  //           'testimony' => get_field("testimony", $post->ID),
  //       ];
  //   }, $testimonies);
  // }
}
