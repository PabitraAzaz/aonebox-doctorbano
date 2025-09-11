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

    <!-- ===== Description ===== -->
    <div class="mb-3">
      <label for="description"><strong>Description</strong></label>
      <textarea class="form-control" name="description" id="description" rows="3"><?= old('description') ?></textarea>
    </div>

    <!-- Toggle All Editors -->
    <div class="form-group mb-2">
      <button type="button" onclick="toggleAllEditors()" class="btn btn-secondary">🔁 Toggle Editors</button>
    </div>

    <?php
      // Long/rich sections from allowedFields
      $longFields = [
        'overview'             => 'Overview',
        'about'                => 'About',
        'facilities'           => 'Facilities',
        'faculties'            => 'Faculties',
        'eligibility'          => 'Eligibility',
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
          <textarea
            id="ce_<?= esc($name) ?>"
            data-field="<?= esc($name) ?>"
            class="form-control richable"><?= old($name) ?></textarea>
        </div>

        <!-- CodeMirror wrapper (hidden initially) -->
        <div class="code-wrapper" style="display:none;">
          <textarea id="cm_<?= esc($name) ?>" data-field="<?= esc($name) ?>" class="form-control codeable"></textarea>
        </div>

        <!-- Hidden final field for submission -->
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
  const ck = {}; // CKEditor instances keyed by field
  const cm = {}; // CodeMirror instances keyed by field

  // Initialize CKEditor for each .richable
  document.querySelectorAll('.richable').forEach((ta) => {
    const field = ta.dataset.field;
    ClassicEditor.create(ta).then(editor => {
      ck[field] = editor;
    }).catch(console.error);
  });

  // Toggle between CKEditor and CodeMirror for all rich fields
  function toggleAllEditors() {
    isCodeMode = !isCodeMode;

    document.querySelectorAll('.richable').forEach((ta) => {
      const field = ta.dataset.field;
      const ceWrap = ta.closest('.editor-wrapper');
      const cmWrap = ceWrap.nextElementSibling; // .code-wrapper
      const cmTa  = cmWrap.querySelector('.codeable');

      if (isCodeMode) {
        // CKEditor → CodeMirror
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
        // CodeMirror → CKEditor
        const html = cm[field]?.getValue() ?? ta.value ?? '';
        if (ck[field]) ck[field].setData(html);
        cmWrap.style.display = 'none';
        ceWrap.style.display = 'block';
      }
    });
  }

  // On submit, push editor data into hidden fields (works even if editors not ready)
  document.querySelector('form').addEventListener('submit', function (e) {
    document.querySelectorAll('.richable').forEach((ta) => {
      const field  = ta.dataset.field;
      const hidden = document.getElementById('final_' + field);

      const value = isCodeMode
        ? (cm[field] ? cm[field].getValue() : ta.value || '')
        : (ck[field] ? ck[field].getData() : ta.value || '');

      hidden.value = value;
    });
  });
</script>
<?= $this->endSection() ?>
\end{code}