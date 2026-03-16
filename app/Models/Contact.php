<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * Mass assignable attributes (table fields)
     *
     */

    protected $fillable = [
        'given_name',
        'middle_name',
        'family_name',
        'nickname',
        'email',
        'phone',
    ];

    /**
     * Hidden from serialisation attributes (fields)
     *
     */
    protected $hidden = [];

    /**
     * Attribute (type) casting
     */
    protected function casts(): array{
        return [

        ];
    }

}
