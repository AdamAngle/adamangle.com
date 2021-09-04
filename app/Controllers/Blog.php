<?php

namespace App\Controllers;

use Parsedown;
use App\Models\BlogPostModel;

class Blog extends BaseController
{
	public function blog()
	{
		//$model = new BerkeleyLogPostModel();
		//$data['posts'] = $model->getPosts();

		return view('blog/BlogHome');
	}

	public function viewPost($id)
	{
		$model = new BlogPostModel();
		$data['blogPost'] = $model->getDetailedPost($id);

		if ($data['blogPost'] != null) {
			$data['blogPost']->postDate = $data['blogPost']->created_at
				->toLocalizedString("MMM d, yyyy 'at' HH:mm z");
			$data['blogPost']->postIso = $data['blogPost']->created_at
				->toDateTimeString();

			if ($data['blogPost']->updated_at) {
				$data['blogPost']->editDate = $data['blogPost']->updated_at
					->toLocalizedString("MMM d, yyyy 'at' HH:mm z");
				$data['blogPost']->editIso = $data['blogPost']->updated_at
					->toDateTimeString();
			}
			
			$data['pd'] = new Parsedown();

			return view('blog/BlogViewPost', $data);
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function viewMarkdown($md)
	{
		$model = new BlogPostModel();
		$data = $model->getDetailedPost($md);

		if ($data != null)
		{
			$this->response->setContentType('text/markdown');
			return $this->response->setBody($data->body);
		} else
		{
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
		
	}
}
