<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserContribution extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contribution()
    {
        return $this->belongsTo(Contribution::class);
    }

    public function created_by()
    {
        return $this->belongsTo(User::class);
    }
}
