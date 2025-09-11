<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Add Blog<?= $this->endSection() ?>

<?= $this->section('content') ?>
<main class="container py-4">

  <!-- ✅ Flash Messages -->
  <?= $this->include('/admin/components/alert_message'); ?>

  <h2 class="mb-4">Add New Blog</h2>

  <form method="POST" action="<?= base_url('admin/blog/save') ?>" enctype="multipart/form-data" autocomplete="off">

    <!-- Blog Image Upload -->
    <div class="form-group mb-3">
      <label for="blog_image"><strong>Blog Image</strong></label>
      <input type="file" class="form-control-file" name="blog_image" id="blog_image" accept="image/*" required>
    </div>

    <!-- Blog Title -->
    <div class="form-group mb-3">
      <label for="blog_name"><strong>Blog Title</strong></label>
      <input type="text" class="form-control" name="blog_name" id="blog_name"
        value="<?= old('blog_name') ?>" required>
    </div>

    <!-- Toggle Editor -->
    <div class="form-group mb-2">
      <button type="button" onclick="toggleEditor()" class="btn btn-secondary">🔁 Toggle Editor</button>
    </div>

    <!-- CKEditor Wrapper -->
    <div id="editorWrapper">
      <textarea id="ckeditor" class="form-control"><?= old('description') ?></textarea>
    </div>

    <!-- CodeMirror Wrapper -->
    <div id="codeEditorWrapper">
      <textarea id="codemirrorEditor" class="form-control"></textarea>
    </div>

    <!-- Hidden description field for submission -->
    <textarea name="description" id="finalContent" hidden></textarea>

    <button type="submit" class="btn btn-primary mt-3">💾 Save Blog</button>
  </form>

</main>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<!-- ✅ CKEditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<!-- ✅ CodeMirror -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.9/codemirror.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.9/theme/monokai.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.9/codemirror.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.9/mode/htmlmixed/htmlmixed.min.js"></script>

<style>
  .CodeMirror {
    height: auto;
    min-height: 300px;
    border: 1px solid #ccc;
    margin-top: 10px;
  }

  #codeEditorWrapper {
    display: none;
  }
</style>

<script>
  let isCodeMode = false;
  let ckeditorInstance;
  let codemirrorInstance;

  const editorWrapper = document.getElementById('editorWrapper');
  const codeEditorWrapper = document.getElementById('codeEditorWrapper');
  const finalContent = document.getElementById('finalContent');

  ClassicEditor
    .create(document.querySelector('#ckeditor'))
    .then(editor => {
      ckeditorInstance = editor;
      editorWrapper.style.display = 'block';
    })
    .catch(error => console.error(error));

  function toggleEditor() {
    isCodeMode = !isCodeMode;

    if (isCodeMode) {
      const html = ckeditorInstance.getData();
      editorWrapper.style.display = 'none';
      codeEditorWrapper.style.display = 'block';

      if (!codemirrorInstance) {
        codemirrorInstance = CodeMirror.fromTextArea(document.getElementById('codemirrorEditor'), {
          mode: "htmlmixed",
          theme: "monokai",
          lineNumbers: true,
          lineWrapping: true
        });
      }
      codemirrorInstance.setValue(html);
    } else {
      const html = codemirrorInstance.getValue();
      ckeditorInstance.setData(html);
      codeEditorWrapper.style.display = 'none';
      editorWrapper.style.display = 'block';
    }
  }

  document.querySelector('form').addEventListener('submit', function() {
    finalContent.value = isCodeMode ?
      codemirrorInstance.getValue() :
      ckeditorInstance.getData();
  });
</script>
<?= $this->endSection() ?>