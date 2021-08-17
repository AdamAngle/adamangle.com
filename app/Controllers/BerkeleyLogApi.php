<?php

namespace App\Controllers;

use App\Models\BerkeleyLogPostModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class BerkeleyLogApi extends ResourceController
{
    use ResponseTrait;

	public function index()
	{
		$model = new BerkeleyLogPostModel();
		$data['posts'] = $model->getPosts();
        $data['filteredCount'] = sizeof($data['posts']);
        $data['totalCount'] = $model->totalPostCount();

		return $this->respond($data);
	}
}
