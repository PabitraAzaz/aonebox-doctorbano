<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Blogs<?= $this->endSection() ?>
<?= $this->section('content') ?>

<main>
    <?= $this->include('/admin/components/alert_message'); ?>

    <div>
        <a href="<?= base_url('admin/blog/create') ?>">
            <button type="button" class="btn btn-primary m-2">Add Blog</button>
        </a>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Blog List</h3>
            </div>

            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Blog Image</th>
                            <th>Blog Name</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($blogs as $blog): ?>
                            <tr>
                                <td><?= esc($blog['blog_id']) ?></td>

                                <!-- ✅ Blog Image Column -->
                                <td>
                                    <img src="<?= base_url('uploads/blog/' . $blog['blog_image']) ?>"
                                         alt="Blog Image"
                                         style="height: 60px; width: 60px; object-fit: cover; border-radius: 5px;">
                                </td>

                                <td><?= esc($blog['blog_name']) ?></td>

                                <td>
                                    <a href="<?= base_url("single_blog/" . $blog['blog_id']) ?>" target="_blank" class="btn btn-info btn-sm">
                                        View
                                    </a>
                                </td>

                                <td>
                                    <a href="<?= base_url("admin/blog/edit/" . $blog['blog_id']) ?>" class="btn btn-success btn-sm text-white">
                                        Edit
                                    </a>
                                </td>

                                <td>
                                    <a href="<?= base_url("admin/blog/delete/" . $blog['blog_id']) ?>" class="btn btn-danger btn-sm"
                                       onclick="return confirm('Are you sure you want to delete this blog?')">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Blog Image</th>
                            <th>Blog Name</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection() ?>
