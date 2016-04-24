<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Categories_tbl';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_name', 'category_slug', 'parent_id', 'created_by', 'edited_by', 'display_order'
    ];


}
