<?php

namespace App\Controllers;

use App\Models\BlogPostModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class BlogApi extends ResourceController
{
    use ResponseTrait;

	public function index()
	{
		$model = new BlogPostModel();
		$data['posts'] = $model->getPosts();
        $data['filteredCount'] = sizeof($data['posts']);
        $data['totalCount'] = $model->totalPostCount();

		return $this->respond($data);
	}

	public function getPost($id)
	{
		$model = new BlogPostModel();
		$data = $model->getDetailedPost($id);

		return $this->respond($data);
	}
}
