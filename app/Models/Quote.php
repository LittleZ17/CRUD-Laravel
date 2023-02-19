<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Quote
 *
 * @property $id
 * @property $prhase
 * @property $author
 * @property $img
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Quote extends Model
{
    
    static $rules = [
		'prhase' => 'required',
		'author' => 'required',
		'img' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['prhase','author','img'];



}
