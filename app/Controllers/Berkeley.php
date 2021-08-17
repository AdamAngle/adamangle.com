<?php

namespace App\Controllers;

use App\Models\BerkeleyLogPostModel;

class Berkeley extends BaseController
{
	public function berkeleyLog()
	{
		$model = new BerkeleyLogPostModel();
		$data['posts'] = $model->getPosts();

		return view('berkeley_log/BerkeleyLog', $data);
	}
}
