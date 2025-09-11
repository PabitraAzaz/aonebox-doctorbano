<?php

namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\UniversityModel;

class Home extends BaseController
{
    public function index()
    {
        return view('web/index');
    }

    public function about()
    {
        return view('web/about');
    }

    public function contact()
    {
        return view('web/contact');
    }

    public function universities()
    {

        $uniM = new UniversityModel;
        $uniData = $uniM->findAll(8);

        // echo '<pre>';print_r($uniData);exit;

        return view('web/universities', ['uniData' => $uniData]);
    }

    public function singleUniversity()
    {
        return view('web/single_university');
    }

    public function blogs()
    {
        return view('web/blogs');
    }

    public function single_blog($id)
    {
        $blogsModel = new BlogModel();
        $single_blog = $blogsModel->where('blog_id', $id)->first();

        if ($single_blog) {
            return view('web/single_blog', [
                'singleBlog' => $single_blog
            ]);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function faq()
    {
        return view('web/faq');
    }

    public function privacyPolicy()
    {
        return view('web/privacy_policy');
    }

    public function termsConditions()
    {
        return view('web/terms_conditions');
    }

    public function paymentRefund()
    {
        return view('web/payment_refund');
    }
}
