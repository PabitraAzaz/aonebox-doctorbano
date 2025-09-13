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
        $uniModel = new UniversityModel();
        $uniData  = $uniModel->findAll(8);

        $blogModel = new BlogModel();
        $blogs = $blogModel->orderBy('blog_id', 'DESC')->findAll(8);

        return view('web/universities', [
            'uniData' => $uniData,
            'blogs'   => $blogs
        ]);
    }

    public function singleUniversity($key = null)
    {
        $blogModel = new BlogModel();
        $blogs = $blogModel->orderBy('blog_id', 'DESC')->findAll(8);

        return view('web/single_university', [
            'blogs' => $blogs
        ]);
    }

    public function blogs()
    {
        $blogModel = new BlogModel();

        // Trending: latest 3 blogs
        $trend = $blogModel->orderBy('blog_id', 'DESC')->findAll(2);

        // Recent: paginate all blogs
        $recent = $blogModel->orderBy('blog_id', 'DESC')->paginate(5, 'blogs');
        $pager  = $blogModel->pager;

        return view('web/blogs', [
            'trend'  => $trend,
            'recent' => $recent,
            'pager'  => $pager
        ]);
    }

    public function singleBlog($id)
    {
        $blogsModel = new BlogModel();

        $singleBlog = $blogsModel->where('blog_id', $id)->first();

        if (!$singleBlog) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $otherBlogs = $blogsModel
            ->where('blog_id !=', $id)
            ->orderBy('blog_id', 'DESC')
            ->findAll(8);

        return view('web/single_blog', [
            'singleBlog' => $singleBlog,
            'blogs'      => $otherBlogs
        ]);
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
