<?php
ob_start();
;?>
   <form action="?submit_form=galery" method="post" enctype="multipart/form-data" id="galery-form" class="form-galery">
      <label for="galery-imgs">Envoyer des images</label>
      <input type="file" name="galery-imgs[]" id="galery-imgs" accept="image/png, image/jpg, image/jpeg, image/gif, image/webp" multiple required>
      <input type="submit" value="Envoyer" id="galery-submit">
      <div id="galery-preview" class="preview-imgs">
      </div>
   </form>
<?php
$form_galery = ob_get_clean();
;?>