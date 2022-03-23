<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
        'comorbidity',
        'unique_person_id',
        'registered',
        'pwd',
        'lastname',
        'firstname',
        'middlename',
        'suffix',
        'contact',
        'region',
        'province',
        'municipality',
        'barangay',
        'sex',
        'birthdate',
        'deferral',
        'deferral_reason',
        'vaccination_date',
        'vaccine_manufacturer_name',
        'batch_number',
        'lot_no',
        'bakuna_center_cbr_id',
        'vaccinator_name',
        '1st_dost',
        '2nd_dose',
        'booster_dose',
        'adverse_event',
        'adverse_event_condition'
    ];
}
