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
    <section class="singlepost">
      <div class="container singlepost__container">
        <h2>Can robots replace humans?</h2>
        <div class="post__author">
          <div class="post__author-avatar">
            <img src="images/avatar3.jpg" alt="author-pic" />
          </div>
          <div class="post__author-info">
            <h5>By: Bardia Moradi</h5>
            <small>July 17, 2023 - 11:40</small>
          </div>
        </div>
        <div class="singlepost__thumbnail">
          <img src="images/blog2.jpg" alt="wild-life" />
        </div>
        <p>
          Technology has become dishy for the splendidness of its advancement
          and spellbinding charisma. All of us are certainly amazed when it
          comes to robots. The technical feasibilities of computer robots are
          mesmerizing. Still, this must be kept in mind that human is the
          begetter of a tech boot. Can creation replace creator? this question
          itself seems so irrational but humans become tedious to rewind this.
        </p>
        <p>
          A robot can replace humans in a workplace where programmed memory,
          ultrahigh-speed, rigorous accuracy, literal precision, and quick work
          service are required. In certain jobs, technical pieces of equipment
          did replace humans in agriculture, construction industries for basics.
          But robots can never replace humans solely. Humans are the most
          innovative irreplaceable creatures because of their creative thinking,
          curiosity, decisiveness, flexibility, liveliness, sensuality, and
          intellect. These traits made humans dominant over all power domains of
          the world.
        </p>
        <p>
          ‘Robots can rule the world’ is a pseudo narrative. Some rate them
          super-intelligent and over-smart on basis of strength, handling
          tedium, speed, and programmed memory but this isn’t a proof scale to
          assume them future dominators ,because these traits ain’t a measure
          for “intellect”.
        </p>
        <p>
          The processing device used in robots is not even comparable to the
          complex wonder organ, the human brain. Thus robots are overrated for
          their capabilities.
        </p>
        <p>
          A robot grounds on technology but a human ground on chemistry. This
          world exists in the nature of human cueing chemistry. whilst chemistry
          says like dissolve like. So, only humans can dissolve the mysteries of
          this world, and hence is only specie being crowned with charge and
          control which can never be in a circle of intellectual approach for a
          programmed, uncreative, inflexible, lifeless, and prompt machine.
        </p>
      </div>
    </section>

    <!-- ======================================================== END OF SINGLE POST SECTION ======================================================== -->

    <footer>
      <div class="footer__socials">
        <a href="https://youtube.com" target="_blank"
          ><i class="uil uil-youtube"></i
        ></a>
        <a href="https://facebook.com" target="_blank"
          ><i class="uil uil-facebook-f"></i
        ></a>
        <a href="https://instagram.com" target="_blank"
          ><i class="uil uil-instagram"></i
        ></a>
        <a href="https://linkedin.com" target="_blank"
          ><i class="uil uil-linkedin-alt"></i
        ></a>
        <a href="https://twitter.com" target="_blank"
          ><i class="uil uil-twitter"></i
        ></a>
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
        <small
          >Copyright &copy;<a href="https://samiraaghajani.ir/" target="_blank">
            Samira Aghajani</a
          >
          2023</small
        >
      </div>
    </footer>
    <!-- ======================================================== END OF FOOTER SECTION ======================================================== -->
    <script src="main.js"></script>
  </body>
</html>
