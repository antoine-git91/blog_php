<?php

namespace App\Controller;

use Core\Database\QueryBuilder;

class DemoController
{
    public function index()
    {
        $query = new QueryBuilder();
        $query
            ->select('id', 'title', 'content')
            ->from('posts')
            ->where('id = 1')
            ->where('posts.date > NOW()')
            ->getQuery();
    }
}