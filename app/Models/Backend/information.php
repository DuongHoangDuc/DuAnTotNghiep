<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class information extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'product_id','warranty','series','part_number','generation',
        'cpu','graphics','ram','screen',
        'archive','maximum_archive','slot_type','screen_output',
        'connecting','connection_not_wire','keyboard','system',
        'size','pin','weight','led'
    ]; 

    protected $primaryKey = 'id';
    protected $table = 'information';
}
