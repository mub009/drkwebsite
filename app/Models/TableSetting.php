<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TableSetting extends Model
{
    protected $table = 'table_settings';

    protected $primaryKey = 'id';

    protected $fillable = ['type', 'content'];
}
