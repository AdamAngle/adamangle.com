<?php namespace App\Models;
 
use CodeIgniter\Model;
use App\Entities\BlogPostItem;
 
class BlogPostModel extends Model
{
    protected $table = 'blog';
    protected $returnType = 'App\Entities\BlogPostListItem';

    public function getPosts($slug = null) {
        $posts = $this->asArray()->findAll();
        foreach ($posts as $key => $value) {
            unset($posts[$key]['body']);
        }
        return $posts;
    }

    public function getDetailedPost($id) {
        return $this->asObject('App\Entities\BlogPostItem')->where(['id' => $id])->first();
    }

    public function totalPostCount() {
        return $this->countAllResults();
    }
}