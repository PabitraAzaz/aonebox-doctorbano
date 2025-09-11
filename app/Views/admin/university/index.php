<?= $this->extend('admin/components/assemble') ?>

<?= $this->section('title') ?>Universities<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?php
    // Small helper to keep long text short in the table
    if (!function_exists('trim_text')) {
        function trim_text(string $text = null, int $limit = 80): string {
            $text = (string) $text;
            $text = strip_tags($text);
            return (mb_strlen($text) > $limit) ? mb_substr($text, 0, $limit) . '…' : $text;
        }
    }
?>

<main>
    <?= $this->include('/admin/components/alert_message'); ?>

    <div>
        <a href="<?= base_url('admin/university/create') ?>">
            <button type="button" class="btn btn-primary m-2">Add University</button>
        </a>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">University List</h3>
            </div>

            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>University Name</th>
                            <th>Overview</th>
                            <th>Eligibility</th>
                            <th>Why Choose Us</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if (!empty($universities)): ?>
                            <?php foreach ($universities as $u): ?>
                                <tr>
                                    <td><?= esc($u['uni_id']) ?></td>

                                    <td><?= esc($u['uni_name']) ?></td>

                                    <td title="<?= esc($u['overview']) ?>">
                                        <?= esc(trim_text($u['overview'] ?? '—', 60)) ?>
                                    </td>

                                    <td title="<?= esc($u['eligibility']) ?>">
                                        <?= esc(trim_text($u['eligibility'] ?? '—', 50)) ?>
                                    </td>

                                    <td title="<?= esc($u['why_choose_us']) ?>">
                                        <?= esc(trim_text($u['why_choose_us'] ?? '—', 50)) ?>
                                    </td>

                                    <td>
                                        <!-- Public detail page if you have one; adjust route/slug as needed -->
                                        <a href="<?= base_url('university/' . $u['uni_id']) ?>"
                                           target="_blank"
                                           class="btn btn-info btn-sm">
                                            View
                                        </a>
                                    </td>

                                    <td>
                                        <a href="<?= base_url('admin/university/edit/' . $u['uni_id']) ?>"
                                           class="btn btn-success btn-sm text-white">
                                            Edit
                                        </a>
                                    </td>

                                    <td>
                                        <a href="<?= base_url('admin/university/delete/' . $u['uni_id']) ?>"
                                           class="btn btn-danger btn-sm"
                                           onclick="return confirm('Are you sure you want to delete this university?')">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>University Name</th>
                            <th>Overview</th>
                            <th>Eligibility</th>
                            <th>Why Choose Us</th>
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
