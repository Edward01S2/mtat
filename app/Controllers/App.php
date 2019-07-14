<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    protected $acf = true;

    public function bannerLoop() {
        $banner = get_posts([
            'post_type' => 'banner',
            'posts_per_page'=>'1',
        ]);
    
        return array_map(function ($post) {
            return [
                'banner' => get_post_field('post_content', $post->ID),
            ];
        }, $banner);
    }

    public function siteName()
    {
        return get_bloginfo('name');
    }

    public function currentDate()
    {
        $date = date("Y");;
        return $date;
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function featImage() {
        if(has_post_thumbnail()) {
            return get_the_post_thumbnail_url();
        }
        else {
            return false;
        }
    }
}
