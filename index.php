<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UWPF Website</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'partials/header.php'; ?>

    <!-- Hero Section -->
    <!-- <section class="hero-section text-center" id="home" id="main-content">
    <h1 class="display-4 fw-bold text-shadow" style="color:#ffa726;font-family:'PT Serif', serif;box-shadow: 0 6px 32px rgba(34,34,34,0.7), 0 1px 0 #222;border-radius: 0.5rem;padding: 0.75rem 1.5rem;">Unified World Pickleball Federation</h1>
    <p class="lead mb-4 text-shadow" style="color:#fff;box-shadow: 0 6px 32px rgba(34,34,34,0.7), 0 1px 0 #222;border-radius: 0.5rem;padding: 0.75rem 1.5rem;">Uniting the world for the growth and governance of Pickleball</p>
</section> -->
    <section class="hero-section" id="home" id="main-content" style="padding:0;margin:0;position:relative;overflow:hidden;width:100vw;height:60vh;background:#eee;">
        <div class="video-bg-wrapper" style="position:relative;width:100vw;height:60vh;overflow:hidden;">
            <!-- Left mirrored blurred video -->
            <video autoplay muted loop playsinline style="position:absolute;left:0;top:0;width:35vw;height:80vh;object-fit:cover;filter:blur(16px) brightness(0.8);transform:scaleX(-1);z-index:1;">
                <source src="/video/wpfcontinent_herovideo-compressed.mp4" type="video/mp4">
            </video>
            <!-- Right mirrored blurred video -->
            <video autoplay muted loop playsinline style="position:absolute;right:0;top:0;width:35vw;height:80vh;object-fit:cover;filter:blur(16px) brightness(0.8);transform:scaleX(-1);z-index:1;">
                <source src="/video/wpfcontinent_herovideo-compressed.mp4" type="video/mp4">
            </video>
            <!-- Main video -->
            <div style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:70vw;height:80vh;z-index:2;display:flex;justify-content:center;align-items:center;">
                <video autoplay muted loop playsinline style="width:100%;height:100%;object-fit:cover;border-radius:0.5rem;box-shadow:0 8px 32px rgba(34,34,34,0.18);">
                    <source src="/video/wpfcontinent_herovideo-compressed.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5 bg-light" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h2>About UWPF</h2>
                    <p>The Unified World Pickleball Federation (UWPF) is the global governing body for Pickleball, formed from the merger of the International Pickleball Federation and the World Pickleball Federation. Our mission is to promote, develop, and regulate Pickleball worldwide, fostering unity and excellence in the sport.</p>
                </div>
                <div class="col-md-5 text-center">
                    <img src="/uwpf-logo.png" alt="Pickleball" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section class="py-5 bg-light" id="events">
        <div class="container">
            <h2 class="mb-4">Upcoming Events</h2>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <img src="/img/WPG_logo_72rgb.jpg" class="card-img-top" alt="Event 1" style="padding:30px; border-radius:0.75rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title">World Pickleball Games</h5>
                            <p class="card-text">Join top athletes from every continent in the premier global event for Pickleball.</p>
                            <!-- <a href="#" class="btn btn-primary">Details</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <img src="/img/WPD25-2048x1846.jpg" class="card-img-top" alt="World Pickleball Day 2025" style="padding:16px; padding-top:42px; padding-bottom:72px; border-radius:0.75rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title">World Pickleball Day 10.10.25</h5>
                            <p class="card-text">Celebrate World Pickleball Day with us on October 10, 2025! Join the global movement for Pickleball.</p>
                            <!-- <a href="#" class="btn btn-primary">Details</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="/rules-equipment.php" style="text-decoration:none;color:inherit;">
                        <div class="card h-100 shadow-sm" style="cursor:pointer;">
                            <img src="/img/rulesOfPickleball.png" class="card-img-top" alt="Pickleball Rulebook" style="padding:16px;width:60%;border-radius:0.75rem;display:block;margin-left:auto;margin-right:auto;">
                            <div class="card-body text-center">
                                <h5 class="card-title">Official Pickleball Rules</h5>
                                <p class="card-text">Access the official rules for Pickleball worldwide.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="py-5" id="news">
        <div class="container">
            <h2 class="mb-4">Latest News</h2>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">UWPF Formed</h5>
                            <p class="card-text">The International Pickleball Federation and World Pickleball Federation have united to form UWPF.</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Global Expansion</h5>
                            <p class="card-text">UWPF welcomes new member federations from Asia, Africa, and South America.</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Youth Initiatives</h5>
                            <p class="card-text">New programs launched to support youth Pickleball development worldwide.</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5 bg-light" id="contact">
        <div class="container">
            <h2 class="mb-4">Contact Us</h2>
            <form class="row g-3" aria-label="Contact form">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="col-12">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
            </form>
        </div>
    </section>

    <?php include 'partials/footer.php'; ?>

</body>

</html>