<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories'; //явно указываем  к какой таблице привязана данная модель
    protected $guarded = false; //означает что все поля модели разрешены для массового заполнения

}
