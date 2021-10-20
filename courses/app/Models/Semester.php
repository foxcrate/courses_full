<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'duration',
    ];

    public function course(){
        $this->hasMany('App\Models\Course','semester_id','course_id');
    }

    public function project(){
        $this->belongsTo('App\Models\Project','semester_id','project_id');
    }

    public function research(){
        $this->hasOne('App\Models\Research','semester_id','research_id');
    }

    public function uploaded_research(){
        return $this->hasMany( 'UploadedResearch::class','semester_id','uploaded_research_id');
    }
    
}
