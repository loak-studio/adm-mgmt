<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReceivedInvoice extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'company_id',
        'issue_date',
        'total_excl_vat',
        'tax',
        'in_falco',
        'file',
    ];

    /**
     * Get the company in relation with the record.
     */
    public function company(): BelongsTo
    {
        return $this->BelongsTo(Company::class);
    }
}
