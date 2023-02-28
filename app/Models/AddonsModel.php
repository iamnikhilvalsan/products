<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddonsModel extends Model
{
    use HasFactory;

    protected $table = 'addons';
    protected $primaryKey = 'addons_id';
}
