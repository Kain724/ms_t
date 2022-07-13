<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */

    /* Because both databases were placed on localhost, without specifying database name, curl request provoced error. Check this on host */

    protected $table = 'products2';
}
