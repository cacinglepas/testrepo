<?php 

namespace App\Models;

use CodeIgniter\Model;

class PagesAdminModel extends Model
{
    protected $table            =  'Pages_Admin_model';
    protected $primaryKey       =  'id';
    protected $useTimestamps    =   true;
    protected $useSoftDeletes   =   true;
}

?>