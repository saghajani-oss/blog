<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Multipage Blog Website</title>
    <!-- GOOGLE FONT (MONTSERRAT) -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <!-- ICON -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
    />
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section class="form__section">
      <div class="container form__section-container">
        <h2>Edit User</h2>
        <form action="" enctype="multipart/form-data">
          <input type="text" placeholder="First Name" />
          <input type="text" placeholder="Last Name" />
          <label for="user-role">User Role</label>
          <select id="user-role">
            <option value="0">Author</option>
          <option value="1">Admin</option>
          </select>
          <button type="submit" class="btn">Update User</button>
        </form>
      </div>
    </section>
  </body>
</html>
