<?php
require 'config.php';
// session_start();
$id_client = $_SESSION["id_client"] ; 
if(empty($_SESSION["id_client"])){
	header("Location: login.php");
  }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>The Ultimate Gamers</title>
    <meta content="The Ultimate Gamers" name="description">
    <meta content="The Ultimate Gamers" name="keywords">

    <!-- Favicons -->
    <link href="./assets/img/game-controller.png" rel="icon">
    <link href="./assets/img/game-controller.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
                    <h1 class="logo me-auto me-lg-0"><a href="index.php">TUG</a></h1>
                    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo1.png" alt="" class="img-fluid"></a> -->

                    <nav id="navbar" class="navbar order-last order-lg-0">
                        <ul>
                            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                            <li><a class="nav-link scrollto" href="#about">About</a></li>
                            <li><a class="nav-link scrollto" href="#services">Services</a></li>
                            <li><a class="nav-link scrollto " href="#Profile">Profile</a></li>
                            <li><a class="nav-link scrollto" href="#pricing">Reserve</a></li>
                            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->


                    <a id='logout' href="logout.php" id="submit" name="submit" class="btn btn-danger">Se déconnecter</a>
                </div>
            </div>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <h1>The Ultimate Gamers</h1>
                    <!-- <h2>Dans notre centre de jeux, nous nous efforçons de fournir les meilleurs services et de créer une
                        expérience de jeu exceptionnelle pour tous nos visiteurs. Rejoignez-nous et plongez dans le
                        monde du jeu comme jamais auparavant !</h2> -->
                    <a href="https://www.youtube.com/watch?v=HkTIjetwVFs" class="glightbox play-btn mb-4"></a>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>À propos de nous</h2>
                    <p>Bienvenue dans notre centre de jeu à la pointe de la technologie, où le monde du jeu prend vie !
                        Entrez dans un royaume où les joueurs s'unissent, les compétences sont testées et des
                        expériences inoubliables sont créées. Nous sommes fiers d'être la destination ultime pour tous
                        les passionnés de jeux.</p>
                </div>

                <div class="row content">
                    <div class="col-lg-6">

                        <ul>
                            <li><i class="ri-check-double-line"></i> Chez The Ultimate Gamers, nous sommes animés par
                                une passion profonde pour le jeu. Notre équipe dévouée de
                                joueurs passionnés s'engage à créer une expérience de jeu exceptionnelle pour tous nos
                                visiteurs.</li>
                            <li><i class="ri-check-double-line"></i> Nous sommes fiers de fournir des installations de
                                jeu de qualité supérieure. Notre centre de jeux vidéo est équipé d'une technologie de
                                pointe et des dernières consoles de jeux. Que vous aimiez les jeux de tir à la première
                                personne, les jeux de course ou les aventures de jeu de rôle, nous proposons une large
                                gamme d'options pour satisfaire vos envies de jeu.</li>
                            <li><i class="ri-check-double-line"></i> Nous favorisons une communauté de jeu dynamique et
                                inclusive. Grâce à des tournois réguliers, des événements et des rencontres entre
                                joueurs, nous créons des occasions de rencontres, d'échanges de stratégies et de
                                compétitions avec des joueurs talentueux.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Dans notre centre de jeux, nous avons créé un refuge pour les joueurs occasionnels et
                            compétitifs. Que vous soyez un professionnel chevronné ou que vous débutiez votre parcours
                            de jeu, nous avons quelque chose pour tout le monde. Notre installation de pointe est
                            équipée du matériel de jeu le plus récent, de consoles haut de gamme et de puissants PC de
                            jeu qui vous plongeront dans un monde d'excitation sans précédent.
                        </p>
                        <a href="#" class="btn-learn-more">Voir Plus</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Prestations de service</h2>
                    <p>Dans notre centre de jeux, nous nous efforçons de fournir les meilleurs services et de créer une
                        expérience de jeu exceptionnelle pour tous nos visiteurs. Rejoignez-nous et plongez dans le
                        monde du jeu comme jamais auparavant !</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Équipement de jeu haut de gamme </a></h4>
                            <p> Notre centre de jeu est équipé d'un matériel de jeu
                                haut de gamme, notamment de puissants PC de jeu, des consoles de grandes marques et des
                                écrans haute résolution. Nous fournissons la dernière technologie pour assurer une
                                expérience de jeu fluide et immersive.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Vaste bibliothèque de jeux  </a></h4>
                            <p> Nous proposons une vaste collection de jeux de différents
                                genres, répondant à toutes les préférences de jeu. De l'action, de l'aventure et du
                                sport à la stratégie, aux jeux de rôle et aux jeux de simulation, notre bibliothèque est
                                régulièrement mise à jour avec les dernières versions.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Jeux en ligne  </a></h4>
                            <p> Profitez d'expériences de jeu en ligne fluides grâce à notre connexion
                                Internet haut débit. Affrontez des joueurs du monde entier, faites équipe avec des amis
                                et participez à des batailles multijoueurs palpitantes. Restez connecté et vivez
                                l'excitation du jeu en ligne à son meilleur.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4><a href="">Tournois et événements de jeu </a></h4>
                            <p> Nous organisons régulièrement des tournois et des
                                événements de jeu, offrant aux joueurs occasionnels et compétitifs la possibilité de
                                montrer leurs compétences. Rejoignez nos tournois pour concourir, gagner des prix et
                                faire partie de la communauté de joueurs florissante.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-slideshow"></i></div>
                            <h4><a href="">Environnement de jeu confortable </a></h4>
                            <p> Notre centre de jeu offre un environnement confortable
                                et spacieux pour les amateurs de jeux. Nous fournissons des sièges ergonomiques, des
                                systèmes audio de haute qualité et de grands écrans pour améliorer votre expérience de
                                jeu.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-arch"></i></div>
                            <h4><a href="">Snack Bar </a></h4>
                            <p> Rechargez et faites le plein entre les sessions de jeu dans notre snack bar.
                                Profitez d'une sélection de délicieuses collations, de boissons rafraîchissantes et de
                                boissons énergisantes pour que vos sessions de jeu restent intenses.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->
        <?php
             $id_client = $_SESSION["id_client"] ; 
             $result = mysqli_query($conn, "SELECT * FROM `client` WHERE id = ' $id_client' ");
             if($result){
              $row2 = mysqli_fetch_assoc($result);
              $firstname = $row2["firstname"];
              $lastname = $row2["lastname"];
              $email = $row2["email"];
              $password = $row2["password"];
              $telephone = $row2["telephone"];

            }
?>
        <!-- ======= Profile Section ======= -->
        <section id="Profile" class="Profile">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Profile</h2>
                </div>
                <div class="container">
                    <div class="row gutters">
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="account-settings">
                                        <div class="user-profile">
                                            <div class="user-avatar">
                                                <img src="assets/img/PROFILE1.png" alt="">
                                            </div>

                                            <h5 class="user-name"><span><?php echo $firstname; ?></span>
                                                <?php echo $lastname; ?></h5>
                                            <h6 class="user-email"><?php echo $email; ?></h6>
                                            <!-- <h6 class="user-email"><?php echo $telephone; ?></h6> -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row gutters">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h6 class="mb-3">Détails personnels</h6>
                                        </div>

                                        <?php
   if(isset($_POST['update'])) {

      // Retrieve the form values
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $telephone = $_POST['telephone'];

      if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($telephone)) {
        echo '<div class="alert alert-danger" role="alert">Veuillez remplir tous les champs</div>';
     } else {
        $sql = "UPDATE client SET firstname='$firstname', lastname='$lastname', email='$email', password='$password' , telephone='$telephone'";
        // Execute the update query
        if(mysqli_query($conn, $sql)) {
           // Update successful
           echo '<div class="alert alert-success" role="alert">Les données de lutilisateur ont été mises à jour avec succès</div>';
        } else {
           // Update failed
           echo '<div class="alert alert-danger" role="alert">Une erreur sest produite lors de la mise à jour des données de lutilisateur : ' . mysqli_error($conn) . '</div>';
        }
     }
   }
?>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <form action="#Profile" method="POST">
                                                    <label for="FIRSTNAME">Prénom</label>
                                                    <input type="text" class="form-control" id="FIRSTNAME"
                                                        name="firstname" placeholder="<?php echo $firstname; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="LAST NAME">Nom de famille</label>
                                                <input type="LAST NAME" class="form-control" id="LAST NAME"
                                                    name="lastname" placeholder="<?php echo $lastname; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="email">email</label>
                                                <input type="text" class="form-control" id="email" name="email"
                                                    placeholder="<?php echo $email; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="password">Mot de passe</label>
                                                <input type="password" class="form-control" id="Password"
                                                    name="password" placeholder="******">
                                            </div>
                                            <div class="form-group">
                                                <label for="telephone">Telephone</label>
                                                <input type="telephone" class="form-control" id="telephone"
                                                    name="telephone" placeholder="<?php echo $telephone; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gutters">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="text-right">
                                                <button type="submit" id="update" name="update"
                                                    class="btn btn-primary">Mise à jour</button>
                                                <a id='logout' href="logout.php" id="submit" name="submit"
                                                    class="btn btn-danger">Se déconnecter</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


        </section><!-- End Profile Section -->
        <!-- ======= reservation Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Reservation</h3>
                        <p>Sécurisez votre expérience de jeu - Réservez votre place dans notre centre de jeu dès
                            aujourd'hui !</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#pricing">Réserve</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">
       

                <div class="section-title">
                    <h2>Reserve</h2>
                </div>
                <div class="cardd">
                    <div class="card-body">
                        <form method="POST" action="reservation.php">
                            <div class="form-groupp">
                                <label class="label" for="datetime1">Date de début</label>
                                <input type="datetime-local" class="form-control" id="datetime1"
                                    placeholder="Date de début" name="date_debut">
                            </div>

                            <div class="form-group">
                                <label class="label" for="datetime2">Date de fin</label>
                                <input type="datetime-local" class="form-controll" id="datetime2"
                                    placeholder="Date de fin" name="date_fin">
                            </div>

                            <div class="form-group">
                                <label class="label" for="select1">Type d'appareil</label>
                                <select class="custom-select" id="select1" onchange="show()" name="device">
                                    <option selected>Choisissez votre appareil</option>
                                    <option value="PC">PC</option>
                                    <option value="PS4">PS4</option>
                                    <option value="PS5">PS5</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="label" id="nombre" for="select2">Nombre de place</label>
                                <select class="custom-select" id="select2" name="nombre_de_joueur">
                                    <option selected>choisissez combien de joueurs</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </div>
                            <input type="hidden" id="datetimeCurrent" name="datetimeCurrent">
                            <div class="text-center">
                                <p></p>
                                <button type="submit" id="button" class="btn btn-primary" name="done">Réserve</button>
                                <p></p>
                            </div>
                        </form>

                    </div>
                </div>
                <script>
                    function show(){
                        var select = document.getElementById("select2");
                        var label = document.getElementById("nombre");
                        var btn = document.getElementById("select1").value;

                        if(btn === "PC"){

                            select.style.display="none";
                            label.style.display="none";
                        }else{
                            select.style.display="block";
                            label.style.display="block";
                        }
                    }
                    
                </script>

                <style>
                .cardd {
                    width: 800px;
                    margin: 0 auto;
                    padding: 20px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                }

                .form-groupp {
                    margin-bottom: 20px;
                }

                .label {
                    font-weight: bold;
                }

                input[type="datetime-local"],
                select.custom-select {
                    width: 100%;
                    padding: 10px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                }

                #button[type="submit"] {
                    background: linear-gradient(to right, blue, cyan);
                    border: 0;
                    padding: 10px 30px;
                    color: #fff;
                    transition: 0.4s;
                    border-radius: 50px;
                }

                #button[type="submit"]:hover {
                    background: linear-gradient(to right, cyan, blue);
                }
                
                    /* Add custom CSS for phones */
                    @media only screen and (max-width: 767px) {
                        .cardd {
                            width: auto;
                            margin: 0;
                        }
                        .form-control,
                        select.custom-select {
                            width: 100%;
                        }
                    }
              
                </style>

                <main id="main">
                    <section class="tables-page-section"="service">
                        <section id="history" class="history">
                            <div class="container">
                                <div class="section-title">
                                    <h2>Réservation</h2>
                                </div>
                                <div>

                                    <?php

                                            // Fetch data from the database......
                                            $sql = "SELECT reservation.*, client.firstname AS firstname, client.lastname AS lastname
                                                    FROM reservation
                                                    JOIN client ON reservation.`id_client` = client.id where id = '$id_client'";
                                            $result = $conn->query($sql);

                                    ?>


                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="section_title text-center">
                                                    <div class="brand_border">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                        <i class="fas fa-handshake"></i>
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <th>#</th>

                                                            <th>Date Réservation</th>
                                                            <th>Date Debut</th>
                                                            <th>Date Fin</th>
                                                            <th>Etat</th>
                                                            <th>Nombre de joueur</th>
                                                            <th>Post</th>
                                                            <th>Nom et Prénom</th>
                                                            <th>Actions</th>
                                                        </thead>

                                                        <tbody>

                                                            <?php
                                                
                        if ($result->num_rows > 0) {
                            $index = 1; // Initialize index variable

                           
                            while ($row = $result->fetch_assoc()) {
                               
                                echo "<tr>";
                                echo "<th>" . $index . "</th>";
                                echo "<td>" . $row['date_reservation'] . "</td>";
                                echo "<td>" . $row['date_debut'] . "</td>";
                                echo "<td>" . $row['date_fin'] . "</td>";
                                echo "<td>" . $row['etat'] . "</td>";
                                echo "<td>" . $row['nombre_de_joueur'] . "</td>";
                                echo "<td>" . $row['id_post'] . "</td>";
                                echo "<td>" . $row['firstname'] . " " . $row['lastname'] . "</td>";
                                echo "<td>";
                                echo "<form method='POST' action='delet.php'>";
                                echo "<input type='hidden' name='reservation_id' value='" . $row['id_reservation'] . "'>";
                                if ($row['etat'] == 'en attente') {
                                    echo "<button type='submit' name='delete_reservation' class='btn btn-danger'>Supprimer</button>";
                                }elseif($row['etat'] == 'en cours') {
                                    echo '<p></p>';
                                }elseif($row['etat'] == 'confirmer'){
                                    echo '<p></p>';
                                }
                                echo "</form>";
                                echo "</td>";
                                echo "</tr>";

                                $index++;
                            }
                        } else {
                            echo "<tr><td colspan='9'>Aucune donnée disponible.</td></tr>";
                        }
                        

                        $conn->close();
                        ?>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    </tbody>
                                    </table>

                                    </tr>
                                    </table>
                                </div>

                            </div>
            </div>
            </div>
        </section>
        </div>


        </section>
    </main><!-- End #main -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
            </div>
        </div>

        <div class="container">

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="ri-map-pin-line"></i>
                            <h4>Localisation:</h4>
                            <p>Rue d'Egypte 9, Tangier 90000 Morocco</p>
                        </div>

                        <div class="email">
                            <i class="ri-mail-line"></i>
                            <h4>Email:</h4>
                            <p>haitamsouiri3@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="ri-phone-line"></i>
                            <h4>Appel:</h4>
                            <p>+212 694535165</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="https://sheetdb.io/api/v1/em72ry0vcty09" method="post" role="form" id="sheetdb-form"
                        name="sheetdb-form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="data[Full Name]" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="data[Email]" id="emails"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="data[Subject]" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="data[Message]" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="success-message"></div>
                            <div class="sent-message"></div>
                        </div>
                        <div class="text-center"><button type="submit">Envoyer le message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

    </main><!-- End #main -->


    <div class="modal" tabindex="-1" id="msgTrue">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Votre message a été envoyée</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal" tabindex="-1" id="delet">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">supprimer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Votre reservation</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="reservation">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Les postes sont reservee</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="reservationTRUE">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reservation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Vous avez reservee le post avec reuissir.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>The Ultimate Gamers</h3>

            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>The Ultimate Gamers</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                developed by <a href="">ALpha</a>
            </div>
        </div>
    </footer><!-- End Footer -->
   

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
    var form = document.getElementById('sheetdb-form');
    form.addEventListener("submit", e => {
        e.preventDefault();
        fetch(form.action, {
                method: "POST",
                body: new FormData(form),
            })
            .then(response => response.json())
            .then(data => {
                if (data) {

                    window.open("index.php?msg=false");
                }

            });
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            const url = new URLSearchParams(window.location.search);
            const openMsg = url.get("msg");
            if (openMsg === "false") {
                $("#msgTrue").modal("show");

            }
        });

        $(document).ready(function() {
            $('body').on('click', function() {
                if (window.location.search.includes('msg=false')) {
                    history.replaceState({}, document.title, window.location.pathname);
                }
            });
        });

        $(document).ready(function() {
            const url = new URLSearchParams(window.location.search);
            const openMsg = url.get("reservation");
            if (openMsg === "false") {
                $("#reservation").modal("show");

            }
        });

        $(document).ready(function() {
            $('body').on('click', function() {
                if (window.location.search.includes('reservation=false')) {
                    history.replaceState({}, document.title, window.location.pathname);
                }
            });
        });

        $(document).ready(function() {
            const url = new URLSearchParams(window.location.search);
            const openMsg = url.get("reservation");
            if (openMsg === "true") {
                $("#reservationTRUE").modal("show");

            }
        });

        $(document).ready(function() {
            $('body').on('click', function() {
                if (window.location.search.includes('reservation=true')) {
                    history.replaceState({}, document.title, window.location.pathname);
                }
            });
        });
        $(document).ready(function() {
            const url = new URLSearchParams(window.location.search);
            const openMsg = url.get("delet");
            if (openMsg === "true") {
                $("#delet").modal("show");

            }
        });
        $(document).ready(function() {
            $('body').on('click', function() {
                if (window.location.search.includes('delet=true')) {
                    history.replaceState({}, document.title, window.location.pathname);
                }
            });
        });
        
    </script>
    
</body>

</html>