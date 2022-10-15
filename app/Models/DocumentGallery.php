<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentGallery extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
