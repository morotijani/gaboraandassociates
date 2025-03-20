<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gabora and Associates - Professional Law Firm</title>
    <meta name="description" content="Gabora and Associates is a trusted law firm providing expert legal services with dedication and integrity.">
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
        .hero {
            background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.9)), url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3') center/cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .practice-area-card {
            transition: transform 0.3s;
            margin-bottom: 20px;
        }
        .practice-area-card:hover {
            transform: translateY(-5px);
        }
        .contact-info {
            background-color: var(--secondary-color);
            color: white;
            padding: 40px 0;
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
            <a class="navbar-brand" href="#">Gabora & Associates</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#practice-areas">Practice Areas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#attorneys">Attorneys</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <h1 class="display-4 mb-4">Expert Legal Representation</h1>
            <p class="lead mb-4">Dedicated to protecting your rights and securing your future</p>
            <a href="#contact" class="btn btn-danger btn-lg">Free Consultation</a>
        </div>
    </section>

    <!-- Practice Areas -->
    <section id="practice-areas" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Practice Areas</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card practice-area-card">
                        <div class="card-body text-center">
                            <i class="fas fa-balance-scale fa-3x mb-3 text-primary"></i>
                            <h3 class="card-title">Civil Litigation</h3>
                            <p class="card-text">Expert representation in complex civil matters and disputes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card practice-area-card">
                        <div class="card-body text-center">
                            <i class="fas fa-home fa-3x mb-3 text-primary"></i>
                            <h3 class="card-title">Real Estate Law</h3>
                            <p class="card-text">Comprehensive legal services for all real estate transactions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card practice-area-card">
                        <div class="card-body text-center">
                            <i class="fas fa-briefcase fa-3x mb-3 text-primary"></i>
                            <h3 class="card-title">Business Law</h3>
                            <p class="card-text">Strategic legal counsel for businesses of all sizes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Attorneys Section -->
    <section id="attorneys" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Our Attorneys</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3" class="card-img-top" alt="Attorney">
                        <div class="card-body text-center">
                            <h3 class="card-title">John Gabora</h3>
                            <p class="card-text">Managing Partner</p>
                            <p class="card-text">Specializing in Civil Litigation and Business Law</p>
                        </div>
                    </div>
                </div>
                <!-- Add more attorney profiles as needed -->
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="mb-4">Need Legal Assistance?</h2>
            <p class="lead mb-4">Our team of experienced attorneys is here to help you with your legal matters.</p>
            <a href="contact.php" class="btn btn-danger btn-lg">Contact Us Today</a>
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