<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelTrip extends Model
{
   protected $fillable = [
    'title',
    'titleDetail',
    'titleName',
    'titleLocation',
    'content',
    'image',
    'figcaption'
   ];
}
