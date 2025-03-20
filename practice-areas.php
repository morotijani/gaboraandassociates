<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Areas - Gabora and Associates</title>
    <meta name="description" content="Explore our comprehensive legal services including civil litigation, real estate law, business law, and more at Gabora and Associates.">
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
        .practice-header {
            background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.9)), url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3') center/cover;
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        .practice-area-card {
            border: none;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 30px;
            height: 100%;
        }
        .practice-area-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .practice-area-icon {
            font-size: 3rem;
            color: var(--accent-color);
            margin-bottom: 1rem;
        }
        .case-study-card {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
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
                    <li class="nav-item"><a class="nav-link active" href="practice-areas.php">Practice Areas</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Practice Areas Header -->
    <section class="practice-header">
        <div class="container">
            <h1 class="display-4 mb-4">Our Practice Areas</h1>
            <p class="lead">Comprehensive Legal Solutions for Your Needs</p>
        </div>
    </section>

    <!-- Main Practice Areas -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card practice-area-card">
                        <div class="card-body text-center">
                            <i class="fas fa-balance-scale practice-area-icon"></i>
                            <h3 class="card-title">Civil Litigation</h3>
                            <p class="card-text">Expert representation in complex civil disputes, including contract disputes, property litigation, and tort claims. We provide strategic advocacy to protect your interests in court.</p>
                            <ul class="list-unstyled">
                                <li>Contract Disputes</li>
                                <li>Property Litigation</li>
                                <li>Personal Injury Claims</li>
                                <li>Commercial Disputes</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card practice-area-card">
                        <div class="card-body text-center">
                            <i class="fas fa-building practice-area-icon"></i>
                            <h3 class="card-title">Real Estate Law</h3>
                            <p class="card-text">Comprehensive legal services for all aspects of real estate transactions and disputes. We handle both residential and commercial real estate matters.</p>
                            <ul class="list-unstyled">
                                <li>Property Transactions</li>
                                <li>Lease Agreements</li>
                                <li>Title Disputes</li>
                                <li>Development Projects</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card practice-area-card">
                        <div class="card-body text-center">
                            <i class="fas fa-briefcase practice-area-icon"></i>
                            <h3 class="card-title">Business Law</h3>
                            <p class="card-text">Strategic legal counsel for businesses of all sizes. From formation to complex transactions, we help protect and grow your business interests.</p>
                            <ul class="list-unstyled">
                                <li>Business Formation</li>
                                <li>Contract Negotiation</li>
                                <li>Mergers & Acquisitions</li>
                                <li>Corporate Governance</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Recent Success Stories</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="case-study-card">
                        <h3>Complex Commercial Litigation</h3>
                        <p>Successfully represented a major corporation in a multi-million dollar contract dispute, achieving a favorable settlement through strategic negotiation and litigation expertise.</p>
                        <div class="text-muted">
                            <strong>Result:</strong> Favorable Settlement
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="case-study-card">
                        <h3>Real Estate Development Project</h3>
                        <p>Provided comprehensive legal guidance for a large-scale commercial development project, ensuring compliance with regulations and successful project completion.</p>
                        <div class="text-muted">
                            <strong>Result:</strong> Project Success
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Consultation CTA -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">Need Legal Assistance?</h2>
            <p class="lead mb-4">Contact us today for a consultation about your legal needs.</p>
            <a href="contact.php" class="btn btn-primary btn-lg">Schedule a Consultation</a>
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