<?php

namespace App\Controllers;
use App\Models\BlogModel;
use App\Models\EventModel;
use App\Models\PortfolioModel;
use App\Models\PagesAdminModel;

class PagesController extends BaseController
{
    protected $blog_model;
    protected $event_model;
    protected $portfolio_model;
    protected $PagesAdminModel;
    public function __construct()
    {
        $this->blog_model=new BlogModel();
        $this->event_model=new EventModel();
        $this->portfolio_model=new PortfolioModel();
        $this->Pages_Admin_model=new PagesAdminModel();
    }
    
    public function index ()
    {
       $data = [
        'title'=>'Home | CV. GemilangPermata',
        'number' => 1,
        'partners' => [
            [
                'logo' => '/assets/img/clients/fraserplace menteng.png',
                'link' => 'link',
            ],
            [
                'logo' => '/assets/img/clients/aston.png',
                'link' => 'link2',
            ]
        ]
       ];
       
       return view('pages/home',$data) ;
    }

    public function event ()
    {
        $data = [
            'title'=> 'Event'
        ];

        $event= $this->event_model->findAll();
        $data['event']=$event;

        $blogs= $this->blog_model->findAll();
        $data['blogs']= $blogs;
        
        return view('pages/event',$data) ;
    }

    public function eventsingle ()
    {
        $data = [
            'title'=>'Event single'
        ];

        $event= $this->event_model->findAll();
        $data["event"]= $event;

        return view('pages/event-single',$data);
    }

    public function blog ()
    {
        $data = [
            'title'=> 'blog'
        ];

        $blogs= $this->blog_model->findAll();
        $data['blogs']= $blogs;

        return view('pages/blog',$data);
    }

    public function blogsingle ()
    {
        $data = [
            'title'=> 'blog single'
        ];

        $blogs= $this->blog_model->findAll();
        $data['blogs']= $blogs;
        
        return view('pages/blog-single',$data) ;
    }

    public function portfolio ()
    {
        $data =[
            'title'=>'portfolio'
        ];

        $portfolio= $this->portfolio_model->findAll();
        $data['portfolio']= $portfolio;

        return view('pages/portfolio', $data);
    }

    public function pagesadmin()
    {
        $data=[
            'title'=>'PagesAdmin'
        ];
        
        $PagesAdminModel= $this->PagesAdminModel->findAll();
        $data['Admin']= $PagesAdminModel;

        return view('pages/pagesadmin', $data);
    }
    
}
?>
  