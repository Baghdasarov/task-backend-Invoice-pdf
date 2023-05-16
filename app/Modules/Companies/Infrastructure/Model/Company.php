<?php

declare(strict_types=1);

namespace App\Modules\Companies\Infrastructure\Model;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Company extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id';
}
