<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

// Created using `php artisan make:model Job` command
class Job extends Model {
    protected $table = 'job_listings';

    protected $fillable = ['title', 'salary'];
}
