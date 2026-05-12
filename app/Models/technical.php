<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class technical extends Model
{
    //rows in the technical table that can be mass assigned
    protected $fillable = [
        'name',
        'email',
        'phone',
        'specialty',
        'status',
    ];

    public function reportIssues()
    {
        return $this->hasMany(report_issue::class);
    }
}
