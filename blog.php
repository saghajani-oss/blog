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
    <nav>
      <div class="container nav__container">
        <a href="index.html" class="nav__logo">WHATSUP</a>
        <ul class="nav__items">
          <li><a href="blog.html">Blog</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="contact.html">Contact</a></li>
          <!-- <li><a href="signin.html">Sign In</a></li> -->
          <li class="nav__profile">
            <div class="avatar">
              <img src="./images/avatar1.jpg" alt="avatar" />
            </div>
            <ul>
              <li><a href="dashboard.html">Dashboard</a></li>
              <li><a href="logout.html">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- ==================================== HAMBURGER MENU FORR MEDIUM & SMALL DEVICES =========================================== -->
      <div class="container hamburger-menu">
        <a href="index.html" class="nav__logo">WHATSUP</a>
        <ul class="hamburger__items">
          <li><a href="blog.html">Blog</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="contact.html">Contact</a></li>
          <!-- <li><a href="signin.html">Sign In</a></li> -->
          <li class="nav__profile">
            <div class="avatar">
              <img src="./images/avatar1.jpg" alt="avatar" />
            </div>
            <ul>
              <li><a href="dashboard.html">Dashboard</a></li>
              <li><a href="logout.html">Logout</a></li>
            </ul>
          </li>
        </ul>
        <!-- MENU FOR MEDIUM & SMALL DEVICES -->
        <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
        <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
      </div>
    </nav>
    <!-- ======================================================== END OF NAV SECTION ======================================================== -->
<section class="search__bar">
    <form action="" class="container search__bar-container">
        <div>
            <i class="uil uil-search"></i>
            <input type="search" name="" placeholder="Search">
        </div>
        <button type="submit" class="btn">Go</button>
    </form>
</section>


    <!-- ======================================================== END OF SEARCH SECTION ======================================================== -->

    <section class="posts">
      <div class="container posts__container">
        <article class="post">
          <div class="post__thumbnail">
            <img src="images/blog2.jpg" alt="technology" />
          </div>
          <div class="post__info">
            <a href="" class="category__button">Technology</a>
            <h3 class="post__title">
              <a href="post.html">Can robots replace humans?</a>
            </h3>
            <p class="post__body">
              Technology has become dishy for the splendidness of its
              advancement and spellbinding charisma. All of us are certainly
              amazed when it comes to robots. The technical feasibilities of
              computer robots are mesmerizing. Still, this must be kept in mind
              that human is the begetter of a tech boot. Can creation replace
              creator? this question itself seems so irrational but humans
              become tedious to rewind this.
            </p>
            <div class="post__author">
              <div class="post__author-avatar">
                <img src="images/avatar3.jpg" alt="author-pic" />
              </div>
              <div class="post__author-info">
                <h5>By: Bardia Moradi</h5>
                <small>July 17, 2023 - 11:40</small>
              </div>
            </div>
          </div>
        </article>
        <article class="post">
          <div class="post__thumbnail">
            <img src="images/blog3.jpg" alt="wild-life" />
          </div>
          <div class="post__info">
            <a href="" class="category__button">Wild Life</a>
            <h3 class="post__title">
              <a href="post.html">What is a chameleon?</a>
            </h3>
            <p class="post__body">
              Chameleons or chamaeleons (family Chamaeleonidae) are a
              distinctive and highly specialized clade of Old World lizards with
              200 species described as of June 2015. The members of this family
              are best known for their distinct range of colors, being capable
              of shifting to different hues and degrees of brightness. The large
              number of species in the family exhibit considerable variability
              in their capacity to change color.
            </p>
            <div class="post__author">
              <div class="post__author-avatar">
                <img src="images/avatar4.jpg" alt="author-pic" />
              </div>
              <div class="post__author-info">
                <h5>By: Mona Saadat</h5>
                <small>June 30, 2023 - 22:15</small>
              </div>
            </div>
          </div>
        </article>
        <article class="post">
          <div class="post__thumbnail">
            <img src="images/blog4.jpg" alt="street party" />
          </div>
          <div class="post__info">
            <a href="" class="category__button">Society</a>
            <h3 class="post__title">
              <a href="post.html">Why do festivals bring joy to humans?</a>
            </h3>
            <p class="post__body">
              The major reason the festivals bring happiness and joy is the
              conditioning of the mind. Since birth, our mind is sync with all
              the known festivals for joy, celebrations, and togetherness.
              Festivities encourage a response in our mind regarding
              celebration, happiness, forgiveness, becoming spiritual, and much
              more. If we are in such a situation, it is natural that our minds
              and soul will celebrate.
            </p>
            <div class="post__author">
              <div class="post__author-avatar">
                <img src="images/avatar5.jpg" alt="author-pic" />
              </div>
              <div class="post__author-info">
                <h5>By: Mia Milani</h5>
                <small>May 03, 2023 - 15:52</small>
              </div>
            </div>
          </div>
        </article>
        <article class="post">
          <div class="post__thumbnail">
            <img src="images/blog5.jpg" alt="art" />
          </div>
          <div class="post__info">
            <a href="" class="category__button">Art</a>
            <h3 class="post__title">
              <a href="post.html">Art for Self-Care and Mental Health</a>
            </h3>
            <p class="post__body">
              Think of something creative that you enjoy doing. Perhaps it’s
              dance, painting, or creating music. How do you feel when you are
              creating art? Some would say calm, happy, relaxed, or inspired.
              Art has an incredible way of connecting the world and allowing us
              to express ourselves. Because of these feel-good effects, art is a
              powerful tool for self-care and mental health.
            </p>
            <div class="post__author">
              <div class="post__author-avatar">
                <img src="images/avatar6.jpg" alt="author-pic" />
              </div>
              <div class="post__author-info">
                <h5>By: Ghazal Saremi</h5>
                <small>May 01, 2023 - 09:06</small>
              </div>
            </div>
          </div>
        </article>
        <article class="post">
          <div class="post__thumbnail">
            <img src="images/blog7.jpg" alt="sailing" />
          </div>
          <div class="post__info">
            <a href="" class="category__button">Travel</a>
            <h3 class="post__title">
              <a href="post.html">Planning a Recreational Boating Travel</a>
            </h3>
            <p class="post__body">
              Perhaps you want to connect with nature and feed your passion. If
              so, a recreational boating trip is the way to go. Whether you are
              a novice or a seasoned handler, every boat trip offers an
              out-of-world experience. You can relax, lower stress levels,
              rejuvenate your senses. And don’t forget the breathtaking views as
              you watch the sun fading down on the beautiful blue waters.
            </p>
            <div class="post__author">
              <div class="post__author-avatar">
                <img src="images/avatar7.jpg" alt="author-pic" />
              </div>
              <div class="post__author-info">
                <h5>By: Leili ZAre</h5>
                <small>April 12, 2023 - 17:36</small>
              </div>
            </div>
          </div>
        </article>
        <article class="post">
          <div class="post__thumbnail">
            <img src="images/blog9.jpg" alt="entertainment" />
          </div>
          <div class="post__info">
            <a href="" class="category__button">Entertainment</a>
            <h3 class="post__title">
              <a href="post.html">About Rubik’s Cube </a>
            </h3>
            <p class="post__body">
              The Rubik’s Cube was invented in 1974 by Ernõ Rubik, a Hungarian
              architecture professor. Rubik later used the Cube as a learning
              exercise to teach his students about 3-dimensional spaces. Little
              did he know his “Magic Cube” (as he originally named it) would
              become one of world’s most famous puzzles of all time!
            </p>
            <div class="post__author">
              <div class="post__author-avatar">
                <img src="images/avatar13.jpg" alt="author-pic" />
              </div>
              <div class="post__author-info">
                <h5>By: Ali Bakhshesh</h5>
                <small>March 25, 2023 - 12:47</small>
              </div>
            </div>
          </div>
        </article>
      </div>
    </section>
    <!-- ======================================================== END OF POSTS SECTION ======================================================== -->

    <section class="category__buttons">
      <div class="container category__buttons-container">
        <a href="" class="category__button">Art</a>
        <a href="" class="category__button">Technology</a>
        <a href="" class="category__button">Wilde Life</a>
        <a href="" class="category__button">Society</a>
        <a href="" class="category__button">Travel</a>
        <a href="" class="category__button">Entertainment </a>
      </div>
    </section>
    <!-- ======================================================== END OF CATEGORY SECTION ======================================================== -->

    <footer>
      <div class="footer__socials">
        <a href="https://youtube.com" target="_blank"><i class="uil uil-youtube"></i></a>
        <a href="https://facebook.com" target="_blank"><i class="uil uil-facebook-f"></i></a>
        <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
        <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
        <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter"></i></a>
      </div>
      <div class="container footer__container">
        <article>
          <h4>Category</h4>
          <ul>
            <li><a href="">Art</a></li>
            <li><a href="">Technology</a></li>
            <li><a href="">Wild Life</a></li>
            <li><a href="">Society</a></li>
            <li><a href="">Travel</a></li>
            <li><a href="">Entertainment</a></li>
          </ul>
        </article>
        <article>
          <h4>Support</h4>
          <ul>
            <li><a href="">Online Support</a></li>
            <li><a href="">Call Numbers</a></li>
            <li><a href="">Emails</a></li>
            <li><a href="">Social Support</a></li>
            <li><a href="">Location</a></li>
          </ul>
        </article>
        <article>
          <h4>Blog</h4>
          <ul>
            <li><a href="">Safety</a></li>
            <li><a href="">Repair</a></li>
            <li><a href="">Recent</a></li>
            <li><a href="">Popular</a></li>
            <li><a href="">Category</a></li>
          </ul>
        </article>
        <article>
          <h4>Permalinks</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </article>
      </div>
      <div class="footer__copyright">
        <small>Copyright &copy;<a href="https://samiraaghajani.ir/" target="_blank"> Samira Aghajani</a> 2023</small>
      </div>
    </footer>
    <!-- ======================================================== END OF FOOTER SECTION ======================================================== -->
    <script src="main.js"></script>
  </body>
</html>
