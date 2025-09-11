<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;
use App\Models\BlogModel;

class BlogController extends BaseController
{
    public function index()
    {
        $model = new BlogModel();
        $data['blogs'] = $model->orderBy('blog_id', 'DESC')->findAll();
        
        return view('admin/blog/index', $data);
    }

    public function create()
    {
        return view('admin/blog/create');
    }

    public function save()
    {
        helper(['form', 'url']);

        $rules = [
            'blog_name'    => 'required|min_length[3]',
            'description'  => 'required',
            'blog_image'   => 'uploaded[blog_image]|is_image[blog_image]|max_size[blog_image,2048]'
        ];


        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', implode('<br>', $this->validator->getErrors()));
        }

        $file = $this->request->getFile('blog_image');
        $newName = $file->getRandomName();
        $file->move('uploads/blog', $newName);

        $model = new BlogModel();

        $data = [
            'blog_name'   => $this->request->getPost('blog_name'),
            'description' => $this->request->getPost('description'),
            'blog_image'  => $newName,
        ];

        if ($model->save($data)) {
            return redirect()->to(base_url('admin/blog'))->with('success', 'Blog saved successfully.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to save blog.');
        }
    }

    public function edit($id)
    {
        $model = new BlogModel();
        $blog = $model->find($id);

        if (!$blog) {
            return redirect()->to(base_url('admin/blog'))->with('error', 'Blog not found.');
        }

        return view('admin/blog/edit', ['blog' => $blog]);
    }

    public function update($id)
    {
        helper(['form', 'url']);

        $rules = [
            'blog_name'   => 'required|min_length[3]',
            'description' => 'required',
            // blog_image is optional during update, only validate if uploaded
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', implode('<br>', $this->validator->getErrors()));
        }

        $model = new BlogModel();
        $blog = $model->find($id);

        if (!$blog) {
            return redirect()->to(base_url('admin/blog'))->with('error', 'Blog not found.');
        }

        $data = [
            'blog_name'   => $this->request->getPost('blog_name'),
            'description' => $this->request->getPost('description'),
        ];

        $file = $this->request->getFile('blog_image');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Delete old image if exists
            if ($blog['blog_image'] && file_exists('uploads/blog/' . $blog['blog_image'])) {
                unlink('uploads/blog/' . $blog['blog_image']);
            }

            // Save new image
            $newName = $file->getRandomName();
            $file->move('uploads/blog', $newName);
            $data['blog_image'] = $newName;
        }

        if ($model->update($id, $data)) {
            return redirect()->to(base_url('admin/blog'))->with('success', 'Blog updated successfully.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to update blog.');
        }
    }

    public function delete($id)
    {
        $model = new BlogModel();
        $blog = $model->find($id);

        if ($blog && isset($blog['blog_image']) && file_exists('uploads/blog/' . $blog['blog_image'])) {
            unlink('uploads/blog/' . $blog['blog_image']);
        }

        if ($model->delete($id)) {
            return redirect()->to(base_url('admin/blog'))->with('success', 'Blog deleted successfully.');
        } else {
            return redirect()->to(base_url('admin/blog'))->with('error', 'Failed to delete blog.');
        }
    }
}
