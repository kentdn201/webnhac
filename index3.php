<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Static Site </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <!-- Custom CSS -->
        <link rel = "stylesheet" href = "main.css">
        <!-- Slick CSS files -->
        <link rel = "stylesheet" href = "slick-1.8.1/slick/slick.css">
        <link rel = "stylesheet" href = "slick-1.8.1/slick/slick-theme.css">
    </head>
    <body>
        <!-- header -->
        <header class = "header" id = "home">
            <div class = "header-wrapper">
                <!-- navbar -->
                <div class = "navbar-wrapper">
                    <nav class = "navbar container">
                        <div class = "brand-and-toggler container">
                            <a href = "index.html" class = "navbar-brand">dirEngine.</a>
                            <button type = "button" class = "navbar-toggler" id = "navbar-toggler">
                                <span><i class = "fas fa-bars"></i> MENU</span>
                            </button>
                        </div>

                        <div class = "navbar-collapse">
                            <ul class = "navbar-nav container">
                                <li class = "nav-item">
                                    <a href = "#home" class = "nav-link">Home</a>
                                </li>
                                <li class = "nav-item">
                                    <a href = "#about" class = "nav-link">About</a>
                                </li>
                                <li class = "nav-item">
                                    <a href = "#featured" class = "nav-link">Featured</a>
                                </li>
                                <li class = "nav-item">
                                    <a href = "#tour" class = "nav-link">Tour</a>
                                </li>
                                <li class = "nav-item">
                                    <a href = "#blog" class = "nav-link">Blog</a>
                                </li>
                                <li class = "nav-item">
                                    <a href = "#contact" class = "nav-link">Contact</a>
                                </li>
                                <li class = "nav-item special-nav-btn">
                                    <a href = "#" class = "nav-link">Add listing</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class = "banner">
                    <div class = "container">
                        <h1 class = "banner-title">
                            <span>Explore</span> your amazing city
                        </h1>
                        <p class = "banner-text">Find great palces to stay, eat, shop, or visit from local experts</p>

                        <form class = "banner-form">
                            <div class = "form-element">
                                <input type = "text" class = "form-control" placeholder="Ex:food, service, hotel">
                            </div>
                            <div class = "form-element">
                                <select name = "places" class = "form-control">
                                    <option value = "where">Where</option>
                                    <option value = "USA">San Francisco USA</option>
                                    <option value = "Germany">Berline Germany</option>
                                    <option value = "UK">London United Kingdom</option>
                                    <option value = "Italy">Paris Italy</option>
                                </select>
                            </div>
                            <div class = "form-element">
                                <input type = "submit" class = "banner-btn" value = "Search">
                            </div>
                        </form>
                        <p class = "banner-text">Or browse the highlights</p>
                        <div class = "banner-btns">
                            <button type = "button" class = "banner-btn">
                                <span><i class = "fas fa-utensils"></i></span> Restaurant
                            </button>
                            <button type = "button" class = "banner-btn">
                                <span><i class = "fas fa-hotel"></i></span> Hotel
                            </button>
                            <button type = "button" class = "banner-btn">
                                <span><i class = "fas fa-map-marker-alt"></i></span> Places
                            </button>
                            <button type = "button" class = "banner-btn">
                                <span><i class = "fas fa-shopping-cart"></i></span> Shopping
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end of header -->

        <!-- about section -->
        <section class = "about section-py" id = "about">
            <div class = "container">
                <span class = "section-name">
                    About
                </span>
                <h2 class = "section-title">
                    <span>About </span> Our Reputation
                </h2>
                <div class = "about-wrapper">
                    <div class = "single-about">
                        <span><i class = "fas fa-award"></i></span>
                        <h2 class = "normal-title">Best Price Guarantee</h2>
                        <p class = "normal-para">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi nobis atque minima. Sapiente optio dolorem voluptatibus rerum veniam deserunt officiis!
                        </p>
                    </div>

                    <div class = "single-about">
                        <span><i class = "fas fa-heart"></i></span>
                        <h2 class = "normal-title">Travellers Love Us</h2>
                        <p class = "normal-para">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi nobis atque minima. Sapiente optio dolorem voluptatibus rerum veniam deserunt officiis!
                        </p>
                    </div>

                    <div class = "single-about">
                        <span><i class = "fas fa-passport"></i></span>
                        <h2 class = "normal-title">Best Travel Agent</h2>
                        <p class = "normal-para">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi nobis atque minima. Sapiente optio dolorem voluptatibus rerum veniam deserunt officiis!
                        </p>
                    </div>

                    <div class = "single-about">
                        <span><i class = "fas fa-cog"></i></span>
                        <h2 class = "normal-title">Our Dedicated Support</h2>
                        <p class = "normal-para">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi nobis atque minima. Sapiente optio dolorem voluptatibus rerum veniam deserunt officiis!
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of about section -->

        <!-- featured section -->
        <section class = "featured section-py" id = "featured">
            <div class = "container">
                <span class = "section-name">
                    Featured
                </span>
                <h2 class = "section-title">
                    <span>Featured </span> Destination
                </h2>

                <div class = "gallery">
                    <div class = "single-place">
                        <div class = "single-place-img">
                            <img src = "images/place-1.jpg" alt = "places">
                            <span class = "display-icon">
                                <i class = "fas fa-search"></i>
                            </span>
                        </div>
                        <div class = "single-place-info">
                            <p>Paris, France</p>
                            <p>4 Listing</p>
                        </div>
                    </div>

                    <div class = "single-place">
                        <div class = "single-place-img">
                            <img src = "images/place-2.jpg" alt = "places">
                            <span class = "display-icon">
                                <i class = "fas fa-search"></i>
                            </span>
                        </div>
                        <div class = "single-place-info">
                            <p>Australia</p>
                            <p>13 Listing</p>
                        </div>
                    </div>

                    <div class = "single-place">
                        <div class = "single-place-img">
                            <img src = "images/place-3.jpg" alt = "places">
                            <span class = "display-icon">
                                <i class = "fas fa-search"></i>
                            </span>
                        </div>
                        <div class = "single-place-info">
                            <p>San Francisco, USA</p>
                            <p>20 Listing</p>
                        </div>
                    </div>

                    <div class = "single-place">
                        <div class = "single-place-img">
                            <img src = "images/place-4.jpg" alt = "places">
                            <span class = "display-icon">
                                <i class = "fas fa-search"></i>
                            </span>
                        </div>
                        <div class = "single-place-info">
                            <p>London, UK</p>
                            <p>4 Listing</p>
                        </div>
                    </div>

                    <div class = "single-place">
                        <div class = "single-place-img">
                            <img src = "images/place-5.jpg" alt = "places">
                            <span class = "display-icon">
                                <i class = "fas fa-search"></i>
                            </span>
                        </div>
                        <div class = "single-place-info">
                            <p>Bangkok, Thailand</p>
                            <p>11 Listing</p>
                        </div>
                    </div>

                    <div class = "single-place">
                        <div class = "single-place-img">
                            <img src = "images/place-6.jpg" alt = "places">
                            <span class = "display-icon">
                                <i class = "fas fa-search"></i>
                            </span>
                        </div>
                        <div class = "single-place-info">
                            <p>Rome, Italy</p>
                            <p>3 Listing</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of featured section -->

        <!-- tour section -->
        <section class = "tour section-py" id = "tour">
            <div class = "container">
                <span class = "section-name">
                    Special Offers
                </span>
                <h2 class = "section-title">
                    <span>Top</span> Tour Packages
                </h2>

                <div class = "tour-wrapper">
                    <!-- single tour card -->
                    <div class = "card">
                        <img src = "images/place-7.jpg" alt = "tour places">
                        <div class = "card-body">
                            <div class = "tour-place">
                                <h2 class = "normal-text">Paris, France</h2>
                                <h2 class = "tour-price">$200</h2>
                            </div>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span> 
                                8
                            </div>
                            <h6 class = "rating-text">Rating</h6>
                            <p class = "normal-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt incidunt quam consequuntur quia beatae minima quos non?</p>
                            <p class = "normal-para">2 days 3 nights</p>
                            <hr>
                        </div>
                        <div class = "card-footer">
                            <span class = "normal-para">
                                <i class = "fas fa-map"></i> Paris, France
                            </span>
                            <button class = "btn-green">
                                Discover
                            </button>
                        </div>
                    </div>
                    <!-- end of single tour card -->

                    <!-- single tour card -->
                    <div class = "card">
                        <img src = "images/place-8.jpg" alt = "tour places">
                        <div class = "card-body">
                            <div class = "tour-place">
                                <h2 class = "normal-text">Berlin, Germany</h2>
                                <h2 class = "tour-price">$200</h2>
                            </div>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span> 
                                8
                            </div>
                            <h6 class = "rating-text">Rating</h6>
                            <p class = "normal-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt incidunt quam consequuntur quia beatae minima quos non?</p>
                            <p class = "normal-para">2 days 3 nights</p>
                            <hr>
                        </div>
                        <div class = "card-footer">
                            <span class = "normal-para">
                                <i class = "fas fa-map"></i> Berlin, Germany
                            </span>
                            <button class = "btn-green">
                                Discover
                            </button>
                        </div>
                    </div>
                    <!-- end of single tour card -->

                    <!-- single tour card -->
                    <div class = "card">
                        <img src = "images/place-9.jpg" alt = "tour places">
                        <div class = "card-body">
                            <div class = "tour-place">
                                <h2 class = "normal-text">Roma, Italy</h2>
                                <h2 class = "tour-price">$200</h2>
                            </div>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span> 
                                8
                            </div>
                            <h6 class = "rating-text">Rating</h6>
                            <p class = "normal-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt incidunt quam consequuntur quia beatae minima quos non?</p>
                            <p class = "normal-para">2 days 3 nights</p>
                            <hr>
                        </div>
                        <div class = "card-footer">
                            <span class = "normal-para">
                                <i class = "fas fa-map"></i> Roma, Italy
                            </span>
                            <button class = "btn-green">
                                Discover
                            </button>
                        </div>
                    </div>
                    <!-- end of single tour card -->
                    <!-- single tour card -->
                    <div class = "card">
                        <img src = "images/place-10.jpg" alt = "tour places">
                        <div class = "card-body">
                            <div class = "tour-place">
                                <h2 class = "normal-text">Paris, France</h2>
                                <h2 class = "tour-price">$200</h2>
                            </div>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span> 
                                8
                            </div>
                            <h6 class = "rating-text">Rating</h6>
                            <p class = "normal-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt incidunt quam consequuntur quia beatae minima quos non?</p>
                            <p class = "normal-para">2 days 3 nights</p>
                            <hr>
                        </div>
                        <div class = "card-footer">
                            <span class = "normal-para">
                                <i class = "fas fa-map"></i> Paris, France
                            </span>
                            <button class = "btn-green">
                                Discover
                            </button>
                        </div>
                    </div>
                    <!-- end of single tour card -->
                    <!-- single tour card -->
                    <div class = "card">
                        <img src = "images/place-11.jpg" alt = "tour places">
                        <div class = "card-body">
                            <div class = "tour-place">
                                <h2 class = "normal-text">Leshan, China</h2>
                                <h2 class = "tour-price">$200</h2>
                            </div>
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span> 
                                8
                            </div>
                            <h6 class = "rating-text">Rating</h6>
                            <p class = "normal-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt incidunt quam consequuntur quia beatae minima quos non?</p>
                            <p class = "normal-para">2 days 3 nights</p>
                            <hr>
                        </div>
                        <div class = "card-footer">
                            <span class = "normal-para">
                                <i class = "fas fa-map"></i> Leshan, China
                            </span>
                            <button class = "btn-green">
                                Discover
                            </button>
                        </div>
                    </div>
                    <!-- end of single tour card -->
                </div>
            </div>
        </section>
        <!-- end of tour section -->

        <!-- numscroller -->
        <section class = "facts section-py">
            <div class = "container">
                <h2>Some Fun Facts</h2>
                <p class = "normal-para">More than 6000 websites hosted</p>
                <div class = "fact-wrapper">
                    <div class = "single-data">
                        <span class='numscroller' data-min='1' data-max='6000' data-delay='20' data-increment='5'>0</span>
                        <span class = "numscroller-text">Happy Customers</span>
                    </div>
                    <div class = "single-data">
                        <span class='numscroller' data-min='1' data-max='9600' data-delay='20' data-increment='5'>0</span>
                        <span class = "numscroller-text">Destination</span>
                    </div>
                    <div class = "single-data">
                        <span class='numscroller' data-min='1' data-max='12000' data-delay='20' data-increment='5'>0</span>
                        <span class = "numscroller-text">Hotels</span>
                    </div>
                    <div class = "single-data">
                        <span class='numscroller' data-min='1' data-max='5550' data-delay='20' data-increment='5'>0</span>
                        <span class = "numscroller-text">Restaurants</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of numscroller -->

        <!-- blog section -->
        <section class = "blog section-py" id = "blog">
            <div class = "container">
                <span class = "section-name">
                    Recent Blog
                </span>
                <h2 clas = "section-title">
                    <span>Tips</span> & Articles
                </h2>

                <div class = "blog-wrapper">
                    <!-- single blog card -->
                    <div class = "card">
                        <img src = "images/blog-img-1.jpg" alt = "blog image">
                        <div class = "card-body">
                            <p class = "normal-text">Tips, Travel</p>
                            <a href = "#" class = "normal-title blog-link">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam, exercitationem repudiandae? Ad!</a>
                            <p class = "normal-text">August 12, 2018 Guest Author</p>
                            <span class = "normal-text">
                                <i class = "fas fa-comment-alt"></i> 3
                            </span>
                        </div>
                    </div>
                    <!-- end of single blog card -->
                    <!-- single blog card -->
                    <div class = "card">
                        <img src = "images/blog-img-2.jpg" alt = "blog image">
                        <div class = "card-body">
                            <p class = "normal-text">Tips, Travel</p>
                            <a href = "#" class = "normal-title blog-link">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam, exercitationem repudiandae? Ad!</a>
                            <p class = "normal-text">August 12, 2018 Guest Author</p>
                            <span class = "normal-text">
                                <i class = "fas fa-comment-alt"></i> 3
                            </span>
                        </div>
                    </div>
                    <!-- end of single blog card -->
                    <!-- single blog card -->
                    <div class = "card">
                        <img src = "images/blog-img-3.jpg" alt = "blog image">
                        <div class = "card-body">
                            <p class = "normal-text">Tips, Travel</p>
                            <a href = "#" class = "normal-title blog-link">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam, exercitationem repudiandae? Ad!</a>
                            <p class = "normal-text">August 12, 2018 Guest Author</p>
                            <span class = "normal-text">
                                <i class = "fas fa-comment-alt"></i> 3
                            </span>
                        </div>
                    </div>
                    <!-- end of single blog card -->
                    <!-- single blog card -->
                    <div class = "card">
                        <img src = "images/blog-img-4.jpg" alt = "blog image">
                        <div class = "card-body">
                            <p class = "normal-text">Tips, Travel</p>
                            <a href = "#" class = "normal-title blog-link">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam, exercitationem repudiandae? Ad!</a>
                            <p class = "normal-text">August 12, 2018 Guest Author</p>
                            <span class = "normal-text">
                                <i class = "fas fa-comment-alt"></i> 3
                            </span>
                        </div>
                    </div>
                    <!-- end of single blog card -->
                </div>
            </div>
        </section>
        <!-- end of blog section -->

        <!-- newsletter section -->
        <section class = "newsletter section-py">
            <div class = "container">
                <div class = "newsletter-wrapper">
                    <h2>Subscribe to our Newsletter</h2>
                    <p class = "normal-para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae enim praesentium culpa laborum fuga dicta voluptatem voluptate minima voluptatum maiores accusamus reiciendis veniam omnis eos voluptates, magnam veritatis doloribus velit!</p>
                    <form class = "subscribe-form">
                        <div class = "form-element">
                            <input type = "email" class = "form-control" placeholder="Enter email address">
                        </div>
                        <div class = "form-element">
                            <input type = "submit" class = "form-control" value = "Subscribe">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- end of newsletter section -->

        <!-- testimonial section -->
        <section class = "testimonial section-py">
            <div class = "container">
                <div class = "testimonial-wrapper">
                    <!-- testimonial left -->
                    <div class = "testimonial-left">
                        <span class = "section-name">Best Directory Website</span>
                        <h2 class = "section-title">
                            <span>Why</span> Choose Us?
                        </h2>
                        <p class = "normal-para">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ipsum iusto fugit architecto nesciunt recusandae, officia, maiores possimus, soluta eos non dolor hic accusamus? Libero dolor vero odit, cupiditate aliquam ipsa non optio quaerat voluptates rerum deleniti ducimus dicta veniam?
                        </p>
                        <p class = "normal-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt exercitationem pariatur nostrum laudantium repudiandae quis?</p>
                        <button type = "button" class = "btn-circle">Read More</button>
                    </div>
                    <!-- testimonial right -->
                    <div class = "testimonial-right">
                        <span class = "section-name">Testimony</span>
                        <h2 class = "section-title">
                            <span>Our</span> Guests Says
                        </h2>
                        <div class = "test-slider">
                            <!-- single testimonial -->
                            <div class = "test-single">
                                <div class = "test-img">
                                    <img src = "images/person-1.jpg" alt = "guest person">
                                    <span class = "quote-icon">
                                        <i class = "fas fa-quote-left"></i>
                                    </span>
                                </div>
                                <div class = "text-content">
                                    <p class = "normal-para">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quasi iure iste consequuntur reprehenderit neque obcaecati voluptatibus eaque explicabo? Doloremque?
                                    </p>
                                    <div class = "about-guest">
                                        <p>Dennis Green</p>
                                        <p>Guest from America</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end of single testimonial -->
                            <!-- single testimonial -->
                            <div class = "test-single">
                                <div class = "test-img">
                                    <img src = "images/person-2.jpg" alt = "guest person">
                                    <span class = "quote-icon">
                                        <i class = "fas fa-quote-left"></i>
                                    </span>
                                </div>
                                <div class = "text-content">
                                    <p class = "normal-para">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quasi iure iste consequuntur reprehenderit neque obcaecati voluptatibus eaque explicabo? Doloremque?
                                    </p>
                                    <div class = "about-guest">
                                        <p>Dennis Green</p>
                                        <p>Guest from America</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end of single testimonial -->
                            <!-- single testimonial -->
                            <div class = "test-single">
                                <div class = "test-img">
                                    <img src = "images/person-3.jpg" alt = "guest person">
                                    <span class = "quote-icon">
                                        <i class = "fas fa-quote-left"></i>
                                    </span>
                                </div>
                                <div class = "text-content">
                                    <p class = "normal-para">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quasi iure iste consequuntur reprehenderit neque obcaecati voluptatibus eaque explicabo? Doloremque?
                                    </p>
                                    <div class = "about-guest">
                                        <p>Dennis Green</p>
                                        <p>Guest from America</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end of single testimonial -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of testimonial section -->

        <!-- footer -->
        <footer class = "footer section-py" id = "contact">
            <div class = "container">
                <div class = "footer-wrapper">
                    <div class = "footer-div footer-div-1">
                        <h2 class = "normal-title">dirEngine</h2>
                        <p class = "normal-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, magnam animi eligendi fugit beatae sint magni perspiciatis minus tempore eveniet commodi ea, impedit voluptates! Iusto odit nesciunt sunt architecto est?</p>
                        <div class = "social-icons">
                            <a href = "#">
                                <span><i class = "fab fa-twitter"></i></span>
                            </a>
                            <a href = "#">
                                <span><i class = "fab fa-facebook"></i></span>
                            </a>
                            <a href = "#">
                                <span><i class = "fab fa-instagram"></i></span>
                            </a>
                        </div>
                    </div>

                    <div class = "footer-div footer-div-2">
                        <h2 class = "normal-title">Information</h2>
                        <ul class = "footer-links">
                            <li><a href = "#">About</a></li>
                            <li><a href = "#">Service</a></li>
                            <li><a href = "#">Terms and Conditions</a></li>
                            <li><a href = "#">Become a partner</a></li>
                            <li><a href = "#">Best Price Guarantee</a></li>
                            <li><a href = "#">Privacy and Policy</a></li>
                        </ul>
                    </div>

                    <div class = "footer-div footer-div-3">
                        <h2 class = "normal-title">Customer Support</h2>
                        <ul class = "footer-links">
                            <li><a href = "#">FAQ</a></li>
                            <li><a href = "#">Payment Option</a></li>
                            <li><a href = "#">Booking Tips</a></li>
                            <li><a href = "#">How it works</a></li>
                            <li><a href = "#">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class = "footer-div footer-div-4">
                        <h2 class = "normal-title">Have a Question?</h2>
                        <ul class = "footer-links">
                            <li class = "contact-single">
                                <span>
                                    <i class = "fas fa-map-marker-alt"></i>
                                </span>
                                <span>203 Fake St. Mountain View, San Francisco, California, USA</span>
                            </li>
                            <li class = "contact-single">
                                <span>
                                    <i class = "fas fa-phone"></i>
                                </span>
                                <span>+ 3844 2783 283</span>
                            </li>
                            <li class = "contact-single">
                                <span>
                                    <i class = "fas fa-envelope"></i>
                                </span>
                                <span>info@yourdomain.com</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class = "copyright-text">
                    <p>Copyright &copy; 2020 All rights reserved | This template is made with the help of Colorlib</p>
                </div>
            </div>
        </footer>
        <!-- end of footer -->

        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <!-- numscroller -->
        <script src = "numscroller-gh-pages/numscroller-1.0.js"></script>
        <!-- Slick JS file -->
        <script src = "slick-1.8.1/slick/slick.min.js"></script>
        <!-- Custom JS -->
        <script src = "script.js"></script>
    </body>
</html>
