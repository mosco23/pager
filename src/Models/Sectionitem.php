<?php

namespace Mosco\Pager\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sectionitem extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_id',
        'article_id',
    ];

    public function article(){
        return $this->belongsTo(Article::class);
    }

    public function section(){
        return $this->belongsTo(Section::class);
    }
}
