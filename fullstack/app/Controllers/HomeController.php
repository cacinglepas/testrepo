<?php

namespace App\Controllers;
// use App\Models\BlogModel;
// use App\Models\EventModel;
// use App\Models\PortfolioModel;
// use App\Models\PagesAdminModel;

class HomeController extends BaseController
{
    // protected $blog_model;
    // protected $event_model;
    // protected $portfolio_model;
    // protected $PagesAdminModel;
    public function __construct()
    {
        // $this->blog_model=new BlogModel();
        // $this->event_model=new EventModel();
        // $this->portfolio_model=new PortfolioModel();
        // $this->Pages_Admin_model=new PagesAdminModel();
    }
    
    public function index ()
    {
       $data = [
        'title'=>'Home | CV. GemilangPermata',
        'number' => 1,
        'partners' => [
            [
                'logo' => '/assets/img/clients/goods.png',
                'link' => 'link',
            ],
            [
                'logo' => '/assets/img/clients/fraser-sudirman.png',
                'link' => 'link2',
            ],
            [
                'logo' => '/assets/img/clients/fave-gatsu.png',
                'link' => 'link2',
            ],
            [
                'logo' => '/assets/img/clients/fraser-menteng.png',
                'link' => 'link2',
            ],
            [
                'logo' => '/assets/img/clients/motion-blue.png',
                'link' => 'link2',
            ],
            [
                'logo' => '/assets/img/clients/fraser-palace.png',
                'link' => 'link2',
            ],
            [
                'logo' => '/assets/img/clients/delta-mas.png',
                'link' => 'link2',
            ],
            [
                'logo' => '/assets/img/clients/aikawa.png',
                'link' => 'link2',
            ],
            [
                'logo' => '/assets/img/clients/shapphire-sky.png',
                'link' => 'link2',
            ],
            [
                'logo' => '/assets/img/clients/pola.png',
                'link' => 'link2',
            ],
            [
                'logo' => '/assets/img/clients/wyndham.png',
                'link' => 'link2',
            ],
            [
                'logo' => '/assets/img/clients/liberta.png',
                'link' => 'link2',
            ]
        ]
       ];
       
       return view('pages/home',$data) ;
    }

    public function sendEmail()
    {
        //include helper form
        helper(['form', 'text', 'email']);

        //set rules validation form
        $rules = [
            'name' => [
                'label' => 'Name',
                'rules' => 'required|min_length[3]|max_length[255]'
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|min_length[3]|max_length[255]'
            ],
            'subject' => [
                'label' => 'Subject',
                'rules' => 'required|min_length[3]|max_length[255]'
            ],
            'message' => [
                'label' => 'Message',
                'rules' => 'required'
            ],
        ];

        if(!$this->validate($rules)){
            return redirect()->to('/contact/#SendEmail')->withInput();
        }

        $email = service('email');
        $email->setFrom($this->request->getVar('email'), $this->request->getVar('name'));
        $email->setTo('mataintancorp@gmail.com');
        $email->setSubject($this->request->getVar('subject'));
        $email->setMessage($this->request->getVar('message'));//your message here
            
        $email->send();
        
        session()->setFlashdata('success', 'Message has been sent');
        return redirect()->to('/contact/#SendEmail');
    }
    
}
?>
  