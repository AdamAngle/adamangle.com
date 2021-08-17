<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class BerkeleyLogPostModel extends Model
{
    protected $table = 'berkeley_log';

    public function getPosts($slug = null) {
        if (!$slug) {
            return $this->findAll();
        }

        return $this->asArray()->where(['slug' => $slug])->first();
    }

    public function totalPostCount() {
        return $this->countAllResults();
    }
}