<?php 
include "partials/header.php"
?>
    <!-- ======================================================== END OF HEADER SECTION ======================================================== -->
    <section class="dashboard">
      <div class="container dashboard__container">
        <div class="sidebar__toggle-btns">
          <button id="show__sidebar-btn" class="sidebar__toggle">
            <i class="uil uil-angle-right-b"></i>
          </button>
          <button id="close__sidebar-btn" class="sidebar__toggle">
            <i class="uil uil-angle-left-b"></i>
          </button>
        </div>
        <aside>
          <ul>
            <li>
              <a href="add-post.php"
                ><i class="uil uil-postcard"></i>
                <h5>Add Post</h5></a
              >
            </li>
            <li>
              <a href="index.php" class="active"
                ><i class="uil uil-file-edit-alt"></i>
                <h5>Manage Posts</h5></a
              >
            </li>
            <li>
              <a href="add-user.php"
                ><i class="uil uil-user-plus"></i>
                <h5>Add User</h5></a
              >
            </li>
            <li>
              <a href="manage-users.php"
                ><i class="uil uil-users-alt"></i>
                <h5>Manage User</h5></a
              >
            </li>
            <li>
              <a href="add-category.php"
                ><i class="uil uil-edit"></i>
                <h5>Add Category</h5></a
              >
            </li>
            <li>
              <a href="manage-categories.php"
                ><i class="uil uil-clipboard-notes"></i>
                <h5>Manage Categories</h5></a
              >
            </li>
          </ul>
        </aside>
        <main>
          <h2>Manage Posts</h2>
          <table>
            <thead>
              <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>What is Street Art?</td>
                <td>Art</td>
                <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                <td>
                  <a href="delete.category.php" class="btn sm danger"
                    >Delete</a
                  >
                </td>
              </tr>
              <tr>
                <td>What is a chameleon?</td>
                <td>Wild life</td>
                <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                <td>
                  <a href="delete.category.php" class="btn sm danger"
                    >Delete</a
                  >
                </td>
              </tr>
              <tr>
                <td>Why do festivals bring joy to humans?</td>
                <td>Society</td>
                <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                <td>
                  <a href="delete.category.php" class="btn sm danger"
                    >Delete</a
                  >
                </td>
              </tr>
            </tbody>
          </table>
        </main>
      </div>
    </section>
    <!-- ======================================================== MANAGE CATEGORIES SECTION ======================================================== -->

    <?php 
    include "../partials/footer.php"
    ?>
    <!-- ======================================================== END OF FOOTER SECTION ======================================================== -->
    