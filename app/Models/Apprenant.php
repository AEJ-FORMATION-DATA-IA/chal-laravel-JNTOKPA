<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'mail', 'groupe', 'formation_id'];

    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }
}
