<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class assignated_desktop extends Model
{
    //
    protected $table = 'assignated_desktop';
    protected $fillable = [
        'id',
        'desktop_id',
        'technical_id',
        'assigned_date',
        'returned_date',
        'status',
    ];
    
    public function desktop()
    {
        return $this->belongsTo(Desktop::class, 'desktop_id');
    }

    public function technical()
    {
        return $this->belongsTo(Technical::class, 'technical_id');
    }

    public function scopeAssigned($query)
    {
        return $query->where('status', 'assigned');
    }
}
