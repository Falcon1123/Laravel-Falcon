<?php 
namespace furbook;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model {
    protected $timestamps = false;
    public function cats(){
        return $this->hasMany('Furbook\Cat');
    }
}
?>
