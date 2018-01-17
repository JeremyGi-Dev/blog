<?php

namespace App\Controller;

use Query;

class DemoController extends AppController {

    public function index(){

        require ROOT . '/Query.php';

        echo Query::select('id', 'titre', 'contenu')
            ->from('articles', 'Post')
            ->where('Post.category_id = 1')
            ->where('Posts.date > NOW()');
    }
}