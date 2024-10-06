<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandFranchiseProposal extends Model
{
    protected $table = 'brand_franchise_proposals';

    protected $fillable = [
        'owner_name',
        'phone_number',
        'email',
        'organisation_name',
        'address',
        'proposal_details',
        'attachment_name',
        'attachments',
    ];

    /**
     * Get the attachments as an array (stored as JSON).
     *
     * @param  string  $value
     * @return array
     */
    public function getAttachmentsAttribute($value)
    {
        return json_decode($value, true);
    }

    /**
     * Set the attachments as JSON before saving to the database.
     *
     * @param  array  $value
     * @return void
     */
    public function setAttachmentsAttribute($value)
    {
        $this->attributes['attachments'] = json_encode($value);
    }
}
