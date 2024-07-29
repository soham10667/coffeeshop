<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Coffee | Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <style>
        .jj {
            background-color: #e3f2fd;
            font-family: 'Lucida Sans Regular';
            color: black !important;
        }

        .aa {
            display: inline-flex;
            /* margin-top: 4%; */
            margin: 5%;
            gap: 2em;
            margin-left: 12%;

        }

        .image-carousel {
            width: 80%;
            height: 80%;
            margin-left: auto;
            margin-right: auto;
        }
        .container{
            border: #0c5183;
        }
        .kk{
            width: 70%;
           
        }
        .parrrot{
            background-color: #ecf59f; ;
        }






    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary jj">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Coffee Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div>
                <img src="icons8-cafe-50.png" alt="Cafe Icon">
            </div>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navbar ended -->

    <div id="carouselExampleIndicators" class="carousel slide ss image-carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cdn.pixabay.com/photo/2015/06/24/01/15/coffee-819362_1280.jpg" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2013/08/11/19/46/coffee-171653_1280.jpg" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2017/10/13/15/29/coffee-2847957_960_720.jpg" class="d-block" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel ended -->

    <center>
        <h1 class="">About</h1>
    </center>
    <div class="aa">
        <div class="card" style="width: 18rem;">
            <img src="https://cdn.pixabay.com/photo/2019/07/17/11/02/neon-sign-4343663_1280.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="antidote coffee">A coffee lover could be called a coffee aficionado, coffeeholic or coffee addict.</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://images.unsplash.com/photo-1495774856032-8b90bbb32b32?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bmV3JTIwYXJyaXZhbHMlMjBmb3IlMjBjb2ZmZWUlMjBzaG9wfGVufDB8fDB8fHww" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Coffee has many benefits. It’s rich in antioxidants, helps to decrease blood pressure, and generally uplifts your mood – there’s nothing like sitting back and enjoying a delicious cup of NESCAFÉ.</p>
            </div>
        </div>
        <div class="card" style="width: 21rem;">
            <img src="https://images.unsplash.com/photo-1453614512568-c4024d13c247?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGNvZmZlZSUyMHNob3B8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Café, small eating and drinking establishment, historically a coffeehouse, usually featuring a limited menu; originally these establishments served only coffee.</p>
            </div>
        </div>
    </div>

    <!-- cards ended  -->


    <div class="kk">
        <h1>Contact Us</h1>
        <form action="form.php" method="post">
            <label for="name"></label>
            <input class="kk" id="name"name="name"  placeholder="name">
            <br>
            <br>
            <label for="email"></label>
            <input class="kk" type="email" id="email" name="email" placeholder="email" required>
            <br>
            <br>
            <label for="subject"></label>
            <input class="kk" id="mobile" name="mobile" placeholder="mobile no." required>
           
            <br>
            <br>
            <!-- <label for="message"></label>
            <textarea class="kk" id="message" name="message" placeholder="message" required></textarea> -->
            <br>
          <button type="submit" value="submit">Send Message</button>
        </form>
    </div>   

<!-- form ended  -->



    
    <!-- Footer -->
    <footer class="bg-dark text-white text-center text-lg-start mt-5">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Company</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#" class="text-white text-decoration-none">About Us</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Careers</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Services</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#" class="text-white text-decoration-none">Web Design</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Development</a></li>
                        <li><a href="#" class="text-white text-decoration-none">SEO</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Follow Us</h5>
                    <a href="#" class="text-white me-4"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-4"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-4"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white me-4"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <div class="text-center p-3 bg-dark text-white">
            © 2024 Coffee Shop
        </div>
    </footer>
   
<!-- footer ended  -->



</body>

</html>












