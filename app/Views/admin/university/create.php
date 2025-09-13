<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Add University<?= $this->endSection() ?>

<?= $this->section('content') ?>
<main class="container py-4">

  <!-- Flash Messages -->
  <?= $this->include('/admin/components/alert_message'); ?>

  <h2 class="mb-4">Add New University</h2>

  <form method="POST" action="<?= base_url('admin/university/save') ?>" enctype="multipart/form-data" autocomplete="off">
    <?= csrf_field() ?>

    <!-- ===== University Name ===== -->
    <div class="mb-3">
      <label for="uni_name"><strong>University Name *</strong></label>
      <input type="text" class="form-control" name="uni_name" id="uni_name" value="<?= old('uni_name') ?>" required>
    </div>

    <!-- ===== Short Description ===== -->
    <div class="mb-3">
      <label for="description"><strong>Description</strong></label>
      <textarea class="form-control" name="description" id="description" rows="3"><?= old('description') ?></textarea>
    </div>

    <!-- ===== Counter Section ===== -->
    <h4 class="mt-4">📊 Counters</h4>
    <div class="row g-3">
      <?php
      $counters = [
        'bachelors_programs'      => "Bachelor's Programs",
        'masters_programs'        => "Master's Programs",
        'specialist_programs'     => "Specialist Programs",
        'phd_programs'            => "PhD Programs",
        'english_taught_programs' => "English-taught Programs",
        'majors'                  => "Majors",
        'students'                => "Students",
        'departments_count'       => "Departments",
        'institutions_count'      => "Institutions"
      ];
      ?>
      <?php foreach ($counters as $name => $label): ?>
        <div class="col-md-4">
          <label class="form-label"><strong><?= esc($label) ?></strong></label>
          <input type="text" class="form-control form-control-sm" name="<?= esc($name) ?>" value="<?= old($name) ?>">
        </div>
      <?php endforeach; ?>
    </div>

    <!-- ===== Eligibility Section ===== -->
    <h4 class="mt-5">📋 Eligibility</h4>
    <div class="table-responsive">
      <table class="table table-bordered text-center align-middle">
        <thead class="table-light">
          <tr>
            <th>Field</th>
            <th>IFP</th>
            <th>Undergraduate</th>
            <th>Postgraduate</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Standard</strong></td>
            <td><input type="text" class="form-control form-control-sm" name="eligibility_ifp_standard" value="<?= old('eligibility_ifp_standard') ?>"></td>
            <td><input type="text" class="form-control form-control-sm" name="eligibility_ug_standard" value="<?= old('eligibility_ug_standard') ?>"></td>
            <td><input type="text" class="form-control form-control-sm" name="eligibility_pg_standard" value="<?= old('eligibility_pg_standard') ?>"></td>
          </tr>
          <tr>
            <td><strong>Percentage Accepted</strong></td>
            <td><input type="text" class="form-control form-control-sm" name="eligibility_ifp_percentage" value="<?= old('eligibility_ifp_percentage') ?>"></td>
            <td><input type="text" class="form-control form-control-sm" name="eligibility_ug_percentage" value="<?= old('eligibility_ug_percentage') ?>"></td>
            <td><input type="text" class="form-control form-control-sm" name="eligibility_pg_percentage" value="<?= old('eligibility_pg_percentage') ?>"></td>
          </tr>
          <tr>
            <td><strong>Boards Accepted</strong></td>
            <td><input type="text" class="form-control form-control-sm" name="eligibility_ifp_boards" value="<?= old('eligibility_ifp_boards') ?>"></td>
            <td><input type="text" class="form-control form-control-sm" name="eligibility_ug_boards" value="<?= old('eligibility_ug_boards') ?>"></td>
            <td><input type="text" class="form-control form-control-sm" name="eligibility_pg_boards" value="<?= old('eligibility_pg_boards') ?>"></td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- ===== IELTS Section ===== -->
    <h4 class="mt-5">📝 IELTS Requirements</h4>
    <div class="table-responsive">
      <table class="table table-bordered text-center align-middle">
        <thead class="table-light">
          <tr>
            <th>Test</th>
            <th>Undergraduate</th>
            <th>Postgraduate</th>
            <th>PhD</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>IELTS</strong></td>
            <td><input type="text" class="form-control form-control-sm" name="ielts_undergraduate" value="<?= old('ielts_undergraduate') ?>"></td>
            <td><input type="text" class="form-control form-control-sm" name="ielts_postgraduate" value="<?= old('ielts_postgraduate') ?>"></td>
            <td><input type="text" class="form-control form-control-sm" name="ielts_phd" value="<?= old('ielts_phd') ?>"></td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Toggle All Editors -->
    <div class="form-group mb-2">
      <button type="button" onclick="toggleAllEditors()" class="btn btn-secondary">🔁 Toggle Editors</button>
    </div>

    <?php
    // Long/rich sections
    $longFields = [
      'overview'             => 'Overview',
      'about'                => 'About',
      'facilities'           => 'Facilities',
      'faculties'            => 'Faculties',
      'document_criteria'    => 'Document Criteria',
      'admission_procedures' => 'Admission Procedures',
      'departments'          => 'Departments',
      'why_choose_us'        => 'Why Choose Us',
      'conclusion'           => 'Conclusion',
    ];
    ?>

    <?php foreach ($longFields as $name => $label): ?>
      <div class="mb-3">
        <label class="form-label"><strong><?= esc($label) ?></strong></label>
        <!-- CKEditor wrapper -->
        <div class="editor-wrapper">
          <textarea id="ce_<?= esc($name) ?>" data-field="<?= esc($name) ?>" class="form-control richable"><?= old($name) ?></textarea>
        </div>
        <!-- CodeMirror wrapper -->
        <div class="code-wrapper" style="display:none;">
          <textarea id="cm_<?= esc($name) ?>" data-field="<?= esc($name) ?>" class="form-control codeable"></textarea>
        </div>
        <!-- Hidden final field -->
        <textarea name="<?= esc($name) ?>" id="final_<?= esc($name) ?>" hidden></textarea>
      </div>
    <?php endforeach; ?>

    <button type="submit" class="btn btn-primary mt-3">💾 Save University</button>
  </form>

</main>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<!-- CKEditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<!-- CodeMirror -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.9/codemirror.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.9/theme/monokai.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.9/codemirror.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.9/mode/htmlmixed/htmlmixed.min.js"></script>

<style>
  .CodeMirror {
    height: auto;
    min-height: 260px;
    border: 1px solid #ccc;
    margin-top: 10px;
  }
</style>

<script>
  let isCodeMode = false;
  const ck = {};
  const cm = {};

  // Init CKEditor
  document.querySelectorAll('.richable').forEach((ta) => {
    const field = ta.dataset.field;
    ClassicEditor.create(ta).then(editor => {
      ck[field] = editor;
    }).catch(console.error);
  });

  // Toggle all editors
  function toggleAllEditors() {
    isCodeMode = !isCodeMode;
    document.querySelectorAll('.richable').forEach((ta) => {
      const field = ta.dataset.field;
      const ceWrap = ta.closest('.editor-wrapper');
      const cmWrap = ceWrap.nextElementSibling;
      const cmTa = cmWrap.querySelector('.codeable');

      if (isCodeMode) {
        // CK → CM
        const html = ck[field]?.getData() ?? ta.value ?? '';
        ceWrap.style.display = 'none';
        cmWrap.style.display = 'block';
        if (!cm[field]) {
          cm[field] = CodeMirror.fromTextArea(cmTa, {
            mode: 'htmlmixed',
            theme: 'monokai',
            lineNumbers: true,
            lineWrapping: true
          });
        }
        cm[field].setValue(html);
        cm[field].refresh();
      } else {
        // CM → CK
        const html = cm[field]?.getValue() ?? ta.value ?? '';
        if (ck[field]) ck[field].setData(html);
        cmWrap.style.display = 'none';
        ceWrap.style.display = 'block';
      }
    });
  }

  // On submit → push values to hidden
  document.querySelector('form').addEventListener('submit', function() {
    document.querySelectorAll('.richable').forEach((ta) => {
      const field = ta.dataset.field;
      const hidden = document.getElementById('final_' + field);
      hidden.value = isCodeMode ?
        (cm[field] ? cm[field].getValue() : ta.value || '') :
        (ck[field] ? ck[field].getData() : ta.value || '');
    });
  });
</script>
<?= $this->endSection() ?>