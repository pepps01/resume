<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
  
     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $connection = 'sqlite';


     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contacts';


    public function setUp()
    {
        return 1;
    }
}
