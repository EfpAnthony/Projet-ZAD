<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Fournimat Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">
    
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
    
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    
        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">F</span>ournimat</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Rechercher des produits">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="wishlist.html" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="cart.html" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Catégories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Rouleaux <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="Catégorie.html" class="dropdown-item">Bois</a>
                                <a href="" class="dropdown-item">Silicone</a>  
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Moule à chocolat</a>
                        <a href="" class="nav-item nav-link">Plaque à pain</a>
                        <a href="" class="nav-item nav-link">Chariots</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">F</span>ournimat</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="shop.html" class="nav-item nav-link">Shop</a>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <a href="login.php" class="nav-item nav-link">Se connecter</a>
                            <a href="register.php" class="nav-item nav-link">S'inscrire</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 150px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Détail</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Détail</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <?php
    // Require the config file. It contains
    // the database connection
    require ('pdo.php');

    // Prepare a SQL statement
    $statement = $pdo->prepare('SELECT * FROM product');

    // Execute the statement
    $statement->execute(array());

    // Iterate over the array
    foreach($statement as $row) {


 echo"  <!-- Shop Detail Start -->
    <div class='container-fluid py-5'>
        <div class='row px-xl-5'>
            <div class='col-lg-5 pb-5'>
                <div id='product-carousel' class='carousel slide' data-ride='carousel'>
                    <div class='carousel-inner border'>
                        <div class='carousel-item active'>
                            <img class='w-100 h-100' src='".$row['photo'] . "' alt='".$row['name'] . "'>
                        </div>
                        <div class='carousel-item'>
                            <img class='w-100 h-100' src='".$row['photo'] . "' alt='".$row['name'] . "'>
                        </div>
                    </div>
                    <a class='carousel-control-prev' href='#product-carousel' data-slide='prev'>
                        <i class='fa fa-2x fa-angle-left text-dark'></i>
                    </a>
                    <a class='carousel-control-next' href='#product-carousel' data-slide='next'>
                        <i class='fa fa-2x fa-angle-right text-dark'></i>
                    </a>
                </div>
            </div>

            <div class='col-lg-7 pb-5'>
                <h3 class='font-weight-semi-bold'>".$row['name'] . "</h3>
                <div class='d-flex mb-3'>
                    <div class='text-primary mr-2'>";

                    if ($row['rate'] == 1 || $row['rate'] == 2) {
                        echo" 
                                <small class='fas fa-star'></small>
                                <small class='far fa-star'></small>
                                <small class='far fa-star'></small>
                                <small class='far fa-star'></small>
                                <small class='far fa-star'></small>
                          ";
                    }
                    
                    elseif ($row['rate'] == 3 || $row['rate'] == 4) {
                        echo" 
                                <small class='fas fa-star'></small>
                                <small class='fas fa-star'></small>
                                <small class='far fa-star'></small>
                                <small class='far fa-star'></small>
                                <small class='far fa-star'></small>
                          ";
                    }
                    
                    elseif ($row['rate'] == 5 || $row['rate'] == 6) {
                        echo" 
                                <small class='fas fa-star'></small>
                                <small class='fas fa-star'></small>
                                <small class='fas fa-star'></small>
                                <small class='far fa-star'></small>
                                <small class='far fa-star'></small>
                          ";
                    }
                    
                    elseif ($row['rate'] == 7 || $row['rate'] == 8) {
                        echo" 
                                <small class='fas fa-star'></small>
                                <small class='fas fa-star'></small>
                                <small class='fas fa-star'></small>
                                <small class='fas fa-star'></small>
                                <small class='far fa-star'></small>
                          ";
                    }
                    
                    elseif ($row['rate'] == 9 || $row['rate'] == 10){
                        echo" 
                                <small class='fas fa-star'></small>
                                <small class='fas fa-star'></small>
                                <small class='fas fa-star'></small>
                                <small class='fas fa-star'></small>
                                <small class='fas fa-star'></small>
                          ";
                    }

                    echo"</div>
                    <small class='pt-1'>(1 Reviews)</small>
                </div>
                <h3 class='font-weight-semi-bold mb-4'>".$row['price'] . "€</h3>
                <p class='mb-4'>".$row['smalldescription'] . "</p>
                <div class='d-flex mb-3'>
                    <p class='text-dark font-weight-medium mb-0 mr-3'>Tailles:</p>
                    <form>
                        <div class='custom-control custom-radio custom-control-inline'>
                            <input type='radio' class='custom-control-input' id='size-1' name='size'>
                            <label class='custom-control-label' for='size-1'>20cm</label>
                        </div>
                        <div class='custom-control custom-radio custom-control-inline'>
                            <input type='radio' class='custom-control-input' id='size-2' name='size'>
                            <label class='custom-control-label' for='size-2'>25cm</label>
                        </div>
                        <div class='custom-control custom-radio custom-control-inline'>
                            <input type='radio' class='custom-control-input' id='size-3' name='size'>
                            <label class='custom-control-label' for='size-3'>30cm</label>
                        </div>
                        <div class='custom-control custom-radio custom-control-inline'>
                            <input type='radio' class='custom-control-input' id='size-4' name='size'>
                            <label class='custom-control-label' for='size-4'>35cm</label>
                        </div>
                        <div class='custom-control custom-radio custom-control-inline'>
                            <input type='radio' class='custom-control-input' id='size-5' name='size'>
                            <label class='custom-control-label' for='size-5'>40cm</label>
                        </div>
                    </form>
                </div>
                <div class='d-flex mb-4'>
                    <p class='text-dark font-weight-medium mb-0 mr-3'>Couleur:</p>
                    <form>
                        <div class='custom-control custom-radio custom-control-inline'>
                            <input type='radio' class='custom-control-input' id='color-1' name='color'>
                            <label class='custom-control-label' for='color-1'>Brun</label>
                        </div>
                        <div class='custom-control custom-radio custom-control-inline'>
                            <input type='radio' class='custom-control-input' id='color-2' name='color'>
                            <label class='custom-control-label' for='color-2'>Blanc</label>
                        </div>
                        <div class='custom-control custom-radio custom-control-inline'>
                            <input type='radio' class='custom-control-input' id='color-3' name='color'>
                            <label class='custom-control-label' for='color-3'>Brun foncé</label>
                        </div>
                    </form>
                </div>
                <div class='d-flex align-items-center mb-4 pt-2'>
                    <div class='input-group quantity mr-3' style='width: 130px;'>
                        <div class='input-group-btn'>
                            <button class='btn btn-primary btn-minus' >
                            <i class='fa fa-minus'></i>
                            </button>
                        </div>
                        <input type='text' class='form-control bg-secondary text-center' value='1'>
                        <div class='input-group-btn'>
                            <button class='btn btn-primary btn-plus'>
                                <i class='fa fa-plus'></i>
                            </button>
                        </div>
                    </div>
                    <button class='btn btn-primary px-3'><i class='fa fa-shopping-cart mr-1'></i> Ajouter au panier</button>
                </div>
            </div>
        </div>
        <div class='row px-xl-5'>
            <div class='col'>
                <div class='nav nav-tabs justify-content-center border-secondary mb-4'>
                    <a class='nav-item nav-link active' data-toggle='tab' href='#tab-pane-1'>Descritpion</a>
                    <a class='nav-item nav-link' data-toggle='tab' href='#tab-pane-2'>Information</a>
                    <a class='nav-item nav-link' data-toggle='tab' href='#tab-pane-3'>Reviews (1)</a>
                </div>
                <div class='tab-content'>
                    <div class='tab-pane fade show active' id='tab-pane-1'>
                        <h4 class='mb-3'>Description produit</h4>
                        <p>".$row['description'] . "</p>
                        </div>
                    <div class='tab-pane fade' id='tab-pane-2'>
                        <h4 class='mb-3'>Informations</h4>
                        <p>".$row['information'] . "</p>
                        
                    </div>
                    <div class='tab-pane fade' id='tab-pane-3'>
                        <div class='row'>
                            <div class='col-md-6'>
                                <h4 class='mb-4'>1 review pour 'Rouleau en bois'</h4>
                                <div class='media mb-4'>
                                    <img src='img/user.jpg' alt='Image' class='img-fluid mr-3 mt-1' style='width: 45px;'>
                                    <div class='media-body'>
                                        <h6>Boull Anger<small> - <i>01 Jan 2023</i></small></h6>
                                        <div class='text-primary mb-2'>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star-half-alt'></i>
                                            <i class='far fa-star'></i>
                                        </div>
                                        <p>Très bon</p>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-6'>
                                <h4 class='mb-4'>Laisser une review</h4>
                                <small>Votre email ne sera pas publié. Les champs nécessaire son marqué *</small>
                                <div class='d-flex my-3'>
                                    <p class='mb-0 mr-2'>Votre évaluation * :</p>
                                    <div class='text-primary'>
                                        <i class='far fa-star'></i>
                                        <i class='far fa-star'></i>
                                        <i class='far fa-star'></i>
                                        <i class='far fa-star'></i>
                                        <i class='far fa-star'></i>
                                    </div>
                                </div>
                                <form>
                                    <div class='form-group'>
                                        <label for='message'>Vos commentaires *</label>
                                        <textarea id='message' cols='30' rows='5' class='form-control'></textarea>
                                    </div>
                                    <div class='form-group'>
                                        <label for='name'>Votre nom *</label>
                                        <input type='text' class='form-control' id='name'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='email'>Votre email *</label>
                                        <input type='email' class='form-control' id='email'>
                                    </div>
                                    <div class='form-group mb-0'>
                                        <input type='submit' value='laisser votre Review' class='btn btn-primary px-3'>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->
";
break;
}
?> 


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">F</span>ournimat</h1>
                </a>
                <p>Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no sit erat lorem et magna ipsum dolore amet erat.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Efp Uccle, Bruxelles</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@exemple.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+32 22 22 222</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Liens rapide</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Shop</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Panier</a>
                            <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">Fournimat</a>. Tout droits réservé.
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>