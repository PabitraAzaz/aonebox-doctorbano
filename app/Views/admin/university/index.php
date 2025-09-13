<?= $this->extend('admin/components/assemble') ?>

<?= $this->section('title') ?>Universities<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?php
// Small helper to keep long text short in the table
if (!function_exists('trim_text')) {
    function trim_text(string $text = null, int $limit = 80): string
    {
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
                            <th>Programs & Stats</th>
                            <th>Eligibility (Summary)</th>
                            <th>IELTS</th>
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

                                    <!-- Programs/Stats summary -->
                                    <td>
                                        <ul class="m-0 p-0" style="list-style:none; font-size: 13px;">
                                            <li><strong>Bachelors:</strong> <?= esc($u['bachelors_programs'] ?? '—') ?></li>
                                            <li><strong>Masters:</strong> <?= esc($u['masters_programs'] ?? '—') ?></li>
                                            <li><strong>PhD:</strong> <?= esc($u['phd_programs'] ?? '—') ?></li>
                                            <li><strong>Students:</strong> <?= esc($u['students'] ?? '—') ?></li>
                                        </ul>
                                    </td>

                                    <!-- Eligibility summary -->
                                    <td>
                                        <div style="font-size: 13px;">
                                            <strong>IFP:</strong> <?= esc($u['eligibility_ifp_standard'] ?? '-') ?> (<?= esc($u['eligibility_ifp_percentage'] ?? '-') ?>)<br>
                                            <strong>UG:</strong> <?= esc($u['eligibility_ug_standard'] ?? '-') ?> (<?= esc($u['eligibility_ug_percentage'] ?? '-') ?>)<br>
                                            <strong>PG:</strong> <?= esc($u['eligibility_pg_standard'] ?? '-') ?> (<?= esc($u['eligibility_pg_percentage'] ?? '-') ?>)
                                        </div>
                                    </td>

                                    <!-- IELTS -->
                                    <td>
                                        <div style="font-size: 13px;">
                                            UG: <?= esc($u['ielts_undergraduate'] ?? '-') ?><br>
                                            PG: <?= esc($u['ielts_postgraduate'] ?? '-') ?><br>
                                            PhD: <?= esc($u['ielts_phd'] ?? '-') ?>
                                        </div>
                                    </td>

                                    <td title="<?= esc($u['why_choose_us']) ?>">
                                        <?= esc(trim_text($u['why_choose_us'] ?? '—', 50)) ?>
                                    </td>

                                    <td>
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
                            <th>Programs & Stats</th>
                            <th>Eligibility (Summary)</th>
                            <th>IELTS</th>
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