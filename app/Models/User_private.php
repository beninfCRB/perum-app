<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_private extends Model
{
    use HasFactory;
    use Uuid;

    protected $guarded =[];
}
