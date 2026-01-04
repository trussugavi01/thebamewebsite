<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nomination extends Model
{
    protected $fillable = [
        'nominee_first_name',
        'nominee_last_name',
        'nominee_job_title',
        'nominee_company',
        'nominee_city',
        'nominee_county',
        'nominee_email',
        'nominee_contact',
        'nominee_linkedin',
        'nominator_name',
        'nominator_surname',
        'nominator_job_title',
        'nominator_company',
        'nominator_city',
        'nominator_county',
        'nominator_email',
        'nominator_contact',
        'award_category',
        'question_1',
        'question_2',
        'question_3',
        'question_4',
        'terms_accepted',
        'status',
        'admin_notes',
    ];

    protected $casts = [
        'terms_accepted' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function getNomineeFullNameAttribute()
    {
        return $this->nominee_first_name . ' ' . $this->nominee_last_name;
    }

    public function getNominatorFullNameAttribute()
    {
        return $this->nominator_name . ' ' . $this->nominator_surname;
    }

    public function getStatusBadgeAttribute()
    {
        return match($this->status) {
            'pending' => '<span class="px-3 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">Pending</span>',
            'under_review' => '<span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Under Review</span>',
            'shortlisted' => '<span class="px-3 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">Shortlisted</span>',
            'rejected' => '<span class="px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Rejected</span>',
            'winner' => '<span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Winner</span>',
            default => '<span class="px-3 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">Unknown</span>',
        };
    }

    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('award_category', $category);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where(function($q) use ($search) {
            $q->where('nominee_first_name', 'ilike', "%{$search}%")
              ->orWhere('nominee_last_name', 'ilike', "%{$search}%")
              ->orWhere('nominee_email', 'ilike', "%{$search}%")
              ->orWhere('nominee_company', 'ilike', "%{$search}%")
              ->orWhere('award_category', 'ilike', "%{$search}%");
        });
    }
}
