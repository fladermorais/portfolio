<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['nome', 'alias'];

    public function updateInfo($data)
    {
        $info = $this->update($data);
        return $info;
    }
}