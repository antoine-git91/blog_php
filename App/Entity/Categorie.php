<?php

namespace App\Entity;

use App\App;
use App\Table;

class Categorie extends Table
{

    protected static $table = "categories";

    public function getUrl()
    {
        return "index.php?p=categorie&id=" . $this->id;
    }

}