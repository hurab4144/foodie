<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online meals | myonlinemeals.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width : 1270px)" href="css/phone.css">
<link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav id="nav">
        <div id="logo">
            <h1>foodie</h1>
        </div>
        <ul>
            <li class="item"><a href=#home >HOME</a></li>
            <li class="item"><a href=#client-section >OUR  CLIENTS</a></li>
            <li class="item"><a href=#services-cont >SERVICES</a></li>
            <li class="item"><a href=#contact >CONTACT US</a></li>
        </ul>
    </nav>
    <section id="home">
        <h1 class="h-primary">Welcome To MyMeals</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum veritatis harum minima.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <button class="btn">Order food</button>
    </section>
    <section id="services-cont">
        <h1 class="h-primary-center">Our Services</h1>
        <div id="services">
            <div class="box">
                <img src="img/img.jpg" alt="">
                <h2 class="h-sec center">Food Ordering</h2>
                <p class="center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, aliquid. Cum esse reiciendis, quos tempora accusamus qui iusto quod doloribus sed vero. Suscipit, sit ratione. Dolorum earum modi inventore debitis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente excepturi consequatur voluptatum iure et, veniam quasi veritatis deserunt eligendi atque quis tenetur amet?  </p>
            </div>
            <div class="box">
                <img src="img/img5.jpg" alt="">
                <h2 class="h-sec center">Food Catering</h2>
                <p class="center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, aliquid. Cum esse reiciendis, quos tempora accusamus qui iusto quod doloribus sed vero. Suscipit, sit ratione. Dolorum earum modi inventore debitis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio tempore fuga perspiciatis amet, nisi saepe nulla ad corporis et? Adipisci labore reiciendis omnis?</p>
            </div>
            <div class="box">
                <img src="img/img1.jpg" alt="">
                <h2 class="h-sec center">Bulk Ordering</h2>
                <p class="center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, aliquid. Cum esse reiciendis, quos tempora accusamus qui iusto quod doloribus sed vero. Suscipit, sit ratione. Dolorum earum modi inventore debitis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque excepturi debitis, fugiat rerum repellat similique repudiandae sequi. Debitis quisquam nam dolor doloribus numquam.</p>
            </div>
        </div>
    </section>
    <section id="client-section">
        <h1 class="h-primary-center">Our Clients</h1>
        <div id="clients">
            <div class="clients-items">
                <img src="img/logo1.jpg" alt="our clients">
            </div>
            <div class="clients-items">
                <img src="img/logo2.jpg" alt="our clients">
            </div>
            <div class="clients-items">
                <img src="img/logo3.jpg" alt="our clients">
            </div>
            <div class="clients-items">
                <img src="img/logo5.jpg" alt="our clients">
            </div>
            <div class="clients-items">
                <img src="img/logo.jpg" alt="our clients">
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <h1 class="h-primary-center">Contact Us</h1>
        <div id="contact-box" class="contact-box">
            <form action="/" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="phone" name="contact" id="phone" placeholder="Enter Your Number">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea name="msj" id="message" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-dark ">submit</button>
            </form>
        </div> 
       
    </section>
    <footer>
        <div class="center">
            copyright &copy; www.MyMeals.com.  All Rights Reserved!
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>