<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Gabora and Associates</title>
    <meta name="description" content="Learn about Gabora and Associates law firm, our history, values, and dedicated team of legal professionals.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #34495e;
            --accent-color: #e74c3c;
        }
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
        }
        .navbar {
            background-color: var(--primary-color);
            padding: 1rem 0;
        }
        .navbar-brand {
            color: white !important;
            font-weight: bold;
            font-size: 1.5rem;
        }
        .nav-link {
            color: rgba(255,255,255,0.9) !important;
        }
        .about-header {
            background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.9)), url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3') center/cover;
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        .team-member-card {
            transition: transform 0.3s;
            margin-bottom: 30px;
        }
        .team-member-card:hover {
            transform: translateY(-5px);
        }
        .values-section {
            background-color: #f8f9fa;
        }
        .value-card {
            text-align: center;
            padding: 30px;
            height: 100%;
        }
        .testimonial-card {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .footer {
            background-color: var(--primary-color);
            color: white;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Gabora & Associates</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#practice-areas">Practice Areas</a></li>
                    <li class="nav-item"><a class="nav-link active" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Header -->
    <section class="about-header">
        <div class="container">
            <h1 class="display-4 mb-4">About Gabora & Associates</h1>
            <p class="lead">A Legacy of Legal Excellence and Client Dedication</p>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="mb-4">Our Story</h2>
                    <p>Founded in 2000, Gabora & Associates has established itself as a leading law firm committed to providing exceptional legal services to our clients. Our journey began with a simple vision: to offer personalized, professional legal representation while maintaining the highest standards of integrity and excellence.</p>
                    <p>Over the years, we have successfully represented thousands of clients across various practice areas, building a reputation for thorough preparation, skilled advocacy, and unwavering dedication to our clients' interests.</p>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?ixlib=rb-4.0.3" alt="Law Office" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="values-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Core Values</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="value-card">
                        <i class="fas fa-balance-scale fa-3x mb-4 text-primary"></i>
                        <h3>Integrity</h3>
                        <p>We maintain the highest ethical standards in all our dealings, ensuring transparency and honesty in every interaction.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="value-card">
                        <i class="fas fa-handshake fa-3x mb-4 text-primary"></i>
                        <h3>Excellence</h3>
                        <p>We strive for excellence in every aspect of our practice, delivering superior legal services tailored to each client's needs.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="value-card">
                        <i class="fas fa-users fa-3x mb-4 text-primary"></i>
                        <h3>Client Focus</h3>
                        <p>Our clients' success is our priority. We work tirelessly to achieve the best possible outcomes for those we serve.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Leadership Team</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card team-member-card">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3" class="card-img-top" alt="John Gabora">
                        <div class="card-body text-center">
                            <h3 class="card-title">John Gabora</h3>
                            <p class="text-muted">Founding Partner</p>
                            <p>With over 25 years of experience in civil litigation and business law, John leads our firm with expertise and vision.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card team-member-card">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3" class="card-img-top" alt="Sarah Chen">
                        <div class="card-body text-center">
                            <h3 class="card-title">Sarah Chen</h3>
                            <p class="text-muted">Senior Partner</p>
                            <p>Specializing in real estate law and commercial transactions, Sarah brings strategic insight to complex legal matters.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card team-member-card">
                        <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?ixlib=rb-4.0.3" class="card-img-top" alt="Michael Torres">
                        <div class="card-body text-center">
                            <h3 class="card-title">Michael Torres</h3>
                            <p class="text-muted">Partner</p>
                            <p>Michael's expertise in business law and litigation has helped numerous clients achieve their objectives.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Testimonials -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">What Our Clients Say</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="testimonial-card">
                        <p class="mb-3"><i class="fas fa-quote-left text-primary me-2"></i>Gabora & Associates provided exceptional legal guidance during our business acquisition. Their attention to detail and professional approach made a complex process manageable.</p>
                        <strong>- Robert Johnson</strong><br>
                        <small class="text-muted">CEO, Johnson Enterprises</small>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="testimonial-card">
                        <p class="mb-3"><i class="fas fa-quote-left text-primary me-2"></i>The team's expertise in real estate law was invaluable during our property development project. They consistently delivered results while maintaining clear communication throughout.</p>
                        <strong>- Maria Garcia</strong><br>
                        <small class="text-muted">Real Estate Developer</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2023 Gabora and Associates. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>