<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Race extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'mod_for',
        'mod_des',
        'mod_cos',
        'mod_int',
        'mod_sag',
        'mod_car'
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
        return $this->hasMany(Hero::class);
    }
}
