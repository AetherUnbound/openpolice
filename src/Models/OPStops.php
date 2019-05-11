<?php namespace Storage\App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class OPStops extends Model
{
    protected $table      = 'OP_Stops';
    protected $primaryKey = 'StopID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'StopEventSequenceID', 
		'StopStatedReasonDesc', 
		'StopSubjectAskedToLeave', 
		'StopSubjectStatementsDesc', 
		'StopEnterPrivateProperty', 
		'StopEnterPrivatePropertyDesc', 
		'StopPermissionEnter', 
		'StopPermissionEnterGranted', 
		'StopRequestID', 
		'StopRefuseID', 
		'StopRequestOfficerID', 
		'StopOfficerRefuseID', 
		'StopSubjectFrisk', 
		'StopSubjectHandcuffed', 
		'StopStopSubjectHandcuffInjYN', 
		'StopSubjectHandcuffInjury', 
		'StopDuration', 
		'StopBreathAlcohol', 
		'StopBreathAlcoholFailed', 
		'StopBreathCannabis', 
		'StopBreathCannabisFailed', 
		'StopSalivaTest', 
		'StopSobrietyOther', 
		'StopSobrietyOtherDescribe', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
