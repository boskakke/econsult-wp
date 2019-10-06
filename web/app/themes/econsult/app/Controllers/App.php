<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Seneste artikler', 'sage');
        }
        if (is_archive()) {
            return post_type_archive_title( '', false );
        }
        if (is_search()) {
            return sprintf(__('Resultater for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Ikke fundet', 'sage');
        }
        return get_the_title();
    }
}
