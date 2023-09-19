<?php 
include "partials/header.php"
?>
    <!-- ======================================================== END OF HEADER SECTION ======================================================== -->
    <section class="form__section">
      <div class="container form__section-container">
        <h2>Edit Post</h2>
        <form action="" enctype="multipart/form-data">
          <input type="text" placeholder="Title" />
          <select>
            <option value="1">Travel</option>
            <option value="1">Art</option>
            <option value="1">Technology</option>
            <option value="1"></option>
            <option value="1"></option>
            <option value="1"></option>
          </select>
          <textarea rows="10" placeholder="Body"></textarea>
          <div class="form__control inline">
            <input type="checkbox" id="is__featured" checked>
            <label for="is__featured">Featured</label>
          </div>
          <div class="form__control">
            <label for="thumbnail">Update Thumbnail</label>
            <input type="file" id="thumbnail">
          </div>
          <button type="submit" class="btn">Edit Post</button>
        </form>
      </div>
    </section>
   

    <?php 
    include "../partials/footer.php"
    ?>
    <!-- ======================================================== END OF FOOTER SECTION ======================================================== -->
  