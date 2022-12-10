<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $table = 'projects';
    protected $primaryKey="projectID";
    protected $keyType ="integer";
    public $timestamps=false;
    use HasFactory;
}
