<?php namespace Storage\App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class OPArrests extends Model
{
    protected $table      = 'OP_Arrests';
    protected $primaryKey = 'ArstID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'ArstEventSequenceID', 
		'ArstChargesFiled', 
		'ArstStatedReason', 
		'ArstStatedReasonDesc', 
		'ArstMiranda', 
		'ArstSITA', 
		'ArstNoChargesFiled', 
		'ArstStrip', 
		'ArstStripSearchDesc', 
		'ArstChargesOther', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
