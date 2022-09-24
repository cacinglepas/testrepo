<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table            = 'blog_single';
    protected $primaryKey       = 'id';
    protected $useTimestamps    = true;
    protected $useSoftDeletes   = true;
}
?>