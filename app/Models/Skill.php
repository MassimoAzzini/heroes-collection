<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Skill extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'slug',
        'description',
        'peculiar_skill'
    ];

    public static function generateSlug($string)
    {
        $slug = Str::slug($string, '-');
        $original_slug = $slug;
        $exists = Hero::where('slug', $slug)->first();
        $c = 1;

        while ($exists) {
            $slug = $original_slug . '-' . $c;
            $exists = Hero::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
    }


    public function heroes()
    {
        return $this->belongsToMany(Hero::class);
    }
}
