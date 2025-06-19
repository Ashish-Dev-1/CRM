<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorksCategory extends Model
{
    protected $table = 'works_category';
    protected $primaryKey = 'works_category_id';
    public $timestamps = false;

    protected $fillable = [
        'works_category_name',
        'works_category_description',
    ];

    /**
     * Get the works with this category.
     */
    public function works(): HasMany
    {
        return $this->hasMany(Works::class, 'works_category', 'works_category_id');
    }
}