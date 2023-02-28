<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsAddonsModel extends Model
{
    use HasFactory;

    protected $table = 'products_addons';
    protected $primaryKey = 'products_addons_id';
}
