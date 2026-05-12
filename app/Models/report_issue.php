<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class report_issue extends Model
{
    //
    protected $table = 'report_issue';
    protected $fillable = [
        'id',
        'desktop_id',
        'technical_id',
        'title',
        'description',
        'priority',
        'status',
        'resolved_at'
    ];

    public function desktop()
    {
        return $this->belongsTo(Desktop::class, 'desktop_id');
    }

    public function technical()
    {
        return $this->belongsTo(Technical::class, 'technical_id');
    }

}
