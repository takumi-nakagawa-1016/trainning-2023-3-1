<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Departmentモデル　部署に関するモデル
 * @param string $name 名前
 * @param string $maneger_name
 */
class Department extends Model
{
    use HasFactory;

    public function contact()
    {
        return $this->hasMany(Contact::class);
    }
}
