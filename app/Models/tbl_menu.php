<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_menu extends Model
{
    use HasFactory;

    protected $table = 'tbl_menus';
    protected $primaryKey = 'menu_id';
}
