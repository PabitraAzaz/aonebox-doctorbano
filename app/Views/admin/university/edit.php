<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Edit University<?= $this->endSection() ?>

<?= $this->section('content') ?>
<main class="container py-4">
  <!-- Flash Messages -->
  <?= $this->include('/admin/components/alert_message'); ?>

  <h2 class="mb-4">Edit University</h2>

  <form method="POST" action="<?= base_url('admin/university/update/' . $university['uni_id']) ?>" autocomplete="off">

    <!-- ===== University Name ===== -->
    <div class="mb-3">
      <label for="uni_name"><strong>University Name *</strong></label>
      <input
        type="text"
        class="form-control"
        name="uni_name"
        id="uni_name"
        value="<?= old('uni_name', $university['uni_name'] ?? '') ?>"
        required>
    </div>

    <!-- ===== Short Description ===== -->
    <div class="mb-3">
      <label for="description"><strong>Description</strong></label>
      <textarea
        class="form-control"
        name="description"
        id="description"
        rows="3"><?= old('description', $university['description'] ?? '') ?></textarea>
    </div>

    <!-- Toggle All Editors -->
    <div class="form-group mb-2">
      <button type="button" onclick="toggleAllEditors()" class="btn btn-secondary">🔁 Toggle Editors</button>
    </div>

    <?php
      // Long/rich sections (exactly as in $allowedFields)
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
          <textarea id="ce_<?= esc($name) ?>" class="form-control richable">
            <?= old($name, $university[$name] ?? '') ?>
          </textarea>
        </div>

        <!-- CodeMirror wrapper (hidden initially) -->
        <div class="code-wrapper" style="display:none;">
          <textarea id="cm_<?= esc($name) ?>" class="form-control codeable"></textarea>
        </div>

        <!-- Hidden final field for submission -->
        <textarea name="<?= esc($name) ?>" id="final_<?= esc($name) ?>" hidden></textarea>
      </div>
    <?php endforeach; ?>

    <button type="submit" class="btn btn-primary mt-3">💾 Save Changes</button>
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
  const ck = {}; // CKEditor instances
  const cm = {}; // CodeMirror instances

  // Initialize CKEditor for each textarea with .richable
  document.querySelectorAll('.richable').forEach((ta) => {
    const field = ta.id.replace('ce_', '');
    ClassicEditor.create(ta).then(editor => {
      ck[field] = editor;
    }).catch(console.error);
  });

  // Toggle between CKEditor and CodeMirror for all rich fields
  function toggleAllEditors() {
    isCodeMode = !isCodeMode;

    document.querySelectorAll('.richable').forEach((ta) => {
      const field = ta.id.replace('ce_', '');
      const ceWrap = ta.closest('.editor-wrapper');
      const cmWrap = ceWrap.nextElementSibling;

      if (isCodeMode) {
        // CKEditor → CodeMirror
        const html = ck[field]?.getData() ?? '';
        ceWrap.style.display = 'none';
        cmWrap.style.display = 'block';

        if (!cm[field]) {
          cm[field] = CodeMirror.fromTextArea(document.getElementById('cm_' + field), {
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
        const html = cm[field]?.getValue() ?? '';
        ck[field]?.setData(html);
        cmWrap.style.display = 'none';
        ceWrap.style.display = 'block';
      }
    });
  }

  // On submit, push editor data into hidden fields
  document.querySelector('form').addEventListener('submit', function () {
    <?php foreach ($longFields as $name => $label): ?>
      (function(field){
        const hidden = document.getElementById('final_' + field);
        hidden.value = isCodeMode
          ? (cm[field] ? cm[field].getValue() : '')
          : (ck[field] ? ck[field].getData() : '');
      })('<?= esc($name) ?>');
    <?php endforeach; ?>
  });
</script>
<?= $this->endSection() ?>
