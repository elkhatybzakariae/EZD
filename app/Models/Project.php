<?php

namespace App\Models;

use App\Helpers\Helpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $primaryKey = 'id_Pr';
    public $incrementing = false;
    public $timestamps = true;
    protected $fillable = ['id_Pr','pic','title','description'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            if (empty($project->id_Pr)) {
                $project->id_Pr = Helpers::generateIdPr();
            }
        });
    }
}
