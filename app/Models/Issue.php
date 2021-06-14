<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subject' ,
        'contact',
        'created_by',
        'source',
        'user_id',
        'priority_id',
        'status_id',
        'company_id',
    ];
}
