<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class MortgageSubjectMortgage extends Model
{
    protected $table = 'mortage_subject_mortgage';
    protected $fillable = ["order_id", "order_task_id", "deleted",  "sm_lien_position","sm_recorded_county", "sm_document_type", "sm_execution_date", "sm_recorded_date", "sm_instrument", "sm_book", "sm_page", "sm_loan_amount", "sm_maturity_date", "sm_grantor", "sm_trustee", "sm_beneficiary", "sm_min", "sm_assignor",'sm_assignee','sm_document_type_new'];

    protected $appends = ['sm_document_type_name'];

    public function getSmExecutionDateAttribute($value)
    {
        if (strlen($value)) {
            return Carbon::parse($value)->format('m/d/Y');
        } else {
            return null;
        }
    }

    public function getSmRecordedDateAttribute($value)
    {
        if (strlen($value)) {
            return Carbon::parse($value)->format('m/d/Y');
        } else {
            return null;
        }
    }

    public function getSmMaturityDateAttribute($value)
    {
        if (strlen($value)) {
            return Carbon::parse($value)->format('m/d/Y');
        } else {
            return null;
        }
    }

    public function getSmDocumentTypeNameAttribute()
    {
        if($this->sm_document_type != '' && $this->sm_document_type > 0) {
            return DB::table('mortage_mortgage_doc_types')->find($this->sm_document_type)->type;
        } else {
            return null;
        }
    }
}

