<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casbon extends Model
{
    const STATUS_PENDING  = 'pending';
    const STATUS_APPROVED = 'approved';
    const STATUS_REJECTED = 'rejected';

    const LABEL_PENDING = 'Menunggu';
    const LABEL_APPROVED = 'Disetujui';
    const LABEL_REJECTED = 'Ditolak';

    use HasFactory;

    public $table = 'casbons';

    protected $fillable = [
        'user_id',
        'date',
        'nominal',
        'status',
        'refund_attachment',
        'application_attachment',
        'description',
        'created_by',
        'updated_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getStatus($value)
    {
        if ($value == self::STATUS_PENDING) {
            return self::LABEL_PENDING;
        } elseif ($value == self::STATUS_APPROVED) {
            return self::LABEL_APPROVED;
        } elseif ($value == self::STATUS_REJECTED) {
            return self::LABEL_REJECTED;
        }
    }
}
