<?php

namespace App\Controllers;
use App\Models\BlogModel;

class BlogController extends BaseController
{
    protected $blog_model;
    public function __construct()
    {
        $this->blog_model=new BlogModel();
    }

    public function index ()
    {
        $data = [
            'title'=> 'blog'
        ];

        $blogs= $this->blog_model->findAll();
        $data['blogs']= $blogs;

        return view('pages/blog',$data);
    }

    public function detail ()
    {
        $data = [
            'title'=> 'blog single'
        ];

        $blogs= $this->blog_model->findAll();
        $data['blogs']= $blogs;
        
        return view('pages/blog-single',$data) ;
    }
}
?>
  