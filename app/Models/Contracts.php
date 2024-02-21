<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contracts extends Model
{
    use HasFactory;

    protected $fillable = [
        'contractId',
        'msaId',
        'added_by',
        'contractType',
        'dateOfSignature',
        'remarks',
        'startDate',
        'endDate',
        'estimated_amount',
        'doc_link',
        'projectTerm',
        'is_active'

    ];


}
