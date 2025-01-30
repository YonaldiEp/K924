<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model
{
    protected $table = 'payments';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'total_amount', 'payment_method', 'payment_status', 'created_at'];
}
