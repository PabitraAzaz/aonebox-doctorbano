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

    public function singleUniversity($id = null)
    {
        $blogModel = new BlogModel();
        $uniModel  = new \App\Models\UniversityModel();

        // Fetch recent blogs
        $blogs = $blogModel->orderBy('blog_id', 'DESC')->findAll(8);

        // Fetch single university
        $university = $uniModel->find($id);

        if (!$university) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("University not found");
        }

        return view('web/single_university', [
            'blogs'      => $blogs,
            'university' => $university
        ]);
    }

    public function blogs()
    {
        $blogModel = new BlogModel();

        // Get search keyword from query string
        $search = $this->request->getGet('search');

        $builder = $blogModel;

        if (!empty($search)) {
            $builder = $builder->groupStart()
                ->like('blog_name', $search)
                ->orLike('description', $search)
                ->groupEnd();
        }

        // Trending (latest 2 blogs, always newest first)
        $trend = $blogModel->orderBy('created_at', 'DESC')->findAll(2);

        // Recent (always newest first)
        $recent = $builder->orderBy('created_at', 'DESC')->paginate(5, 'blogs');
        $pager  = $blogModel->pager;

        return view('web/blogs', [
            'trend'  => $trend,
            'recent' => $recent,
            'pager'  => $pager,
            'search' => $search,
        ]);
    }

    public function singleBlog($id)
    {
        $blogsModel = new BlogModel();
        $singleBlog = $blogsModel->where('blog_id', $id)->first();
        if (!$singleBlog) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $otherBlogs = $blogsModel->where('blog_id !=', $id)->orderBy('blog_id', 'DESC')->findAll(8);
        return view('web/single_blog', ['singleBlog' => $singleBlog, 'blogs' => $otherBlogs]);
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
