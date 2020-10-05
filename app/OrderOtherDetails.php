<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderOtherDetail extends Model {
    protected $table = 'orders_other_details';
    protected $fillable = ['order_id', 'transaction_type', 'borrower1_firstname', 'borrower1_lastname', 'borrower1_ssn',
        'borrower2_firstname', 'borrower2_lastname', 'borrower2_ssn', 'primary_property_addr', 'city', 'zip',
        'created_at', 'updated_at', 'app_last', 'app_first', 'coapp_first', 'coapp_last', 'mort_amount', 'mort_date',
        'borrower_ssn', 'customer_line_1', 'customer_line_2', 'customer_line_3', 'customer_line_4', 'co_borrower_ssn',
        'customer_line_5','rv_started_date','rv_borrower','rv_searched_ran','rv_pde_searched_ran', 'report_type',
        'rv_breakdown_documents','rv_search_notes','rv_platmap','rv_platmap','rv_tax_notes',
        'rv_platmap_add_field_value' ,'rv_effective_date','team','tax_lender_name','tax_order_type',
        'loan_or_account_number','client_account_no','legal_notes', 'service_number','seller_loan_number',
        'pool_id','orginal_loan_amount','origination_date','origination_lien_amount','loan_purpose'
    ];
}
