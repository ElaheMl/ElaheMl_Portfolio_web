<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Elahe Portfolio</title>


    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">


    <!-- Google Font -->

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">


    <!-- Font Awesome -->

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <!-- MAIN CSS -->

    <link rel="stylesheet"
          href="assets/css/style.css?v=99">


    <!-- RESPONSIVE CSS -->

    <link rel="stylesheet"
          href="assets/css/responsive.css?v=2">


</head>


<body>




    <!-- COMPONENTS -->

    <?php include './components/navbar.php'; ?>

    <?php include './components/hero.php'; ?>

    <?php include './components/stats.php'; ?>

    <?php include './components/about.php'; ?>

    <?php include './components/services.php'; ?>

    <?php include './components/skills.php'; ?>

    <?php include './components/projects.php'; ?>

    <?php include './components/contact.php'; ?>

    <?php include './components/footer.php'; ?>





    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>





    <!-- COPY PHONE -->

    <script>

        function copyPhoneNumber(){

            navigator.clipboard.writeText('+989962262487');

        }

    </script>





<script>

const menuToggle =
document.querySelector('.menu-toggle');

const menuClose =
document.querySelector('.menu-close');

const navMenu =
document.querySelector('.navbar-nav');

const overlay =
document.querySelector('.menu-overlay');

const navLinks =
document.querySelectorAll('.nav-link');


/* RESET ON LOAD */

window.addEventListener('DOMContentLoaded', ()=>{

    navMenu.classList.remove('active');

    menuToggle.classList.remove('active');

    overlay.classList.remove('active');

});


/* OPEN MENU */

menuToggle.addEventListener('click', ()=>{

    navMenu.classList.add('active');

    menuToggle.classList.add('active');

    overlay.classList.add('active');

});


/* CLOSE BUTTON */

menuClose.addEventListener('click', ()=>{

    navMenu.classList.remove('active');

    menuToggle.classList.remove('active');

    overlay.classList.remove('active');

});


/* CLOSE ON OVERLAY */

overlay.addEventListener('click', ()=>{

    navMenu.classList.remove('active');

    menuToggle.classList.remove('active');

    overlay.classList.remove('active');

});


/* CLOSE ON LINK CLICK */

navLinks.forEach(link => {

    link.addEventListener('click', ()=>{

        navMenu.classList.remove('active');

        menuToggle.classList.remove('active');

        overlay.classList.remove('active');

    });

});

</script>

</body>

</html>