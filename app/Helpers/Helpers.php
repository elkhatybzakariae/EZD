<?php

namespace App\Helpers;

use App\Models\Admin;
use App\Models\Categorie;
use App\Models\Client;
use App\Models\Product;
use App\Models\Project;
use App\Models\Ville;
use Illuminate\Support\Str;

class Helpers
{
    public static function generateIdPr()
    {
        $id_Pr = Str::random(15);
        while (Project::where('id_Pr', $id_Pr)->exists()) {
            $id_Pr = Str::random(15);
        }
        return $id_Pr;
    }

}
