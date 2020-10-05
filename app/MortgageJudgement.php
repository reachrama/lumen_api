<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class MortgageJudgment extends Model
{
    protected $table = 'mortage_judgment_lien';
    protected $fillable = ["order_id", "order_task_id", "deleted", "jd_document_type", "jd_execution_date",
        "jd_recorded_date", "jd_instrument", "jd_book", "jd_page", "jd_lien_amount", "jd_grantor", "jd_beneficiary"];

    protected $appends = ['jd_document_type_name'];

    public function getJdExecutionDateAttribute($value)
    {
        if (strlen($value)) {
            return Carbon::parse($value)->format('m/d/Y');
        } else {
            return null;
        }
    }

    public function getJdRecordedDateAttribute($value)
    {
        if (strlen($value)) {
            return Carbon::parse($value)->format('m/d/Y');
        } else {
            return null;
        }
    }

    public function getJdDocumentTypeNameAttribute()
    {
        if($this->jd_document_type != '' && $this->jd_document_type > 0) {
            $data = DB::table('mortage_lien_doc_types')->find($this->jd_document_type);
            if($data) {
                return $data->type;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }
}
