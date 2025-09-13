<?php
?>
<a href="#main-content" class="visually-hidden-focusable bg-primary text-white px-3 py-2" style="position:absolute;top:0;left:0;z-index:1000;" tabindex="0">Skip to main content</a>
<?php
// UWPF Header Partial
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unified World Pickleball Federation (UWPF)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        html, body {
          margin: 0 !important;
          padding: 0 !important;
          height: 100%;
          width: 100%;
          box-sizing: border-box;
        }
        .navbar {
          min-height: 80px;
          box-shadow: 0 2px 8px rgba(0,0,0,0.07);
          background: linear-gradient(90deg, #b6f5c9 60%, #ffe0b2 100%);
        }
        .navbar-brand {
          color: #43c463 !important;
          font-size: 2.2rem;
        }
        .nav-link {
          color: #222 !important;
          font-weight: 500;
        }
        .nav-link.active, .nav-link:focus, .nav-link:hover {
          color: #ffa726 !important;
        }
        .hero-section {
          margin: 0 !important;
          padding: 0 !important;
          border: none !important;
          background: none !important;
          min-height: 0 !important;
        }
        .video-bg-wrapper {
          margin: 0 !important;
          padding: 0 !important;
          border: none !important;
        }
        .hero-section .container {
          position: relative;
          z-index: 2;
        }
        .hero-section .container h1 {
          color: #ffa726;
          text-shadow: 0 4px 24px rgba(34,34,34,0.7), 0 1px 0 #222;
          background: none;
          border-radius: 0;
          padding: 0.75rem 1.5rem;
          display: inline-block;
          font-family: 'Montserrat', 'Segoe UI', Arial, sans-serif;
          font-weight: 700;
        }
        .hero-section .container h2 {
          color: #fff;
          text-shadow: 0 4px 24px rgba(34,34,34,0.7), 0 1px 0 #222;
          background: none;
          border-radius: 0;
          padding: 0.75rem 1.5rem;
          display: inline-block;
          font-family: 'Montserrat', 'Segoe UI', Arial, sans-serif;
          font-weight: 700;
        }
        h1, h2, h3, h4, h5 {
          font-family: 'Montserrat', 'Segoe UI', Arial, sans-serif;
          font-weight: 700;
        }
        .card {
          border-radius: 1rem;
          box-shadow: 0 2px 12px rgba(182,245,201,0.08);
          transition: box-shadow 0.2s, transform 0.2s;
        }
        .card:hover {
          box-shadow: 0 4px 24px rgba(255,224,178,0.18);
          transform: translateY(-4px) scale(1.03);
        }
        .btn-primary {
          background-color: #b6f5c9;
          border-color: #b6f5c9;
          color: #222;
        }
        .btn-primary:hover, .btn-primary:focus {
          background-color: #ffe0b2;
          border-color: #ffe0b2;
          color: #222;
        }
        .btn-outline-primary {
          color: #b6f5c9;
          border-color: #b6f5c9;
        }
        .btn-outline-primary:hover, .btn-outline-primary:focus {
          color: #222;
          background-color: #ffe0b2;
          border-color: #ffe0b2;
        }
        .footer {
          background: #222;
          color: #fff;
          padding: 2rem 0;
        }
        .footer a {
          color: #fff;
          text-decoration: none;
        }
        .footer a:hover {
          text-decoration: underline;
        }
    </style>
    <style>
      /* Center country cards and flags for member federations */
      .country-card {
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
        justify-content: center !important;
        text-align: center !important;
      }
      .country-flag {
        display: block;
        margin-left: auto;
        margin-right: auto;
      }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top" aria-label="Main navigation">
  <div class="container">
    <a class="navbar-brand fw-bold d-flex align-items-center" href="/" aria-label="Unified World Pickleball Federation Home" style="padding-top:12px;padding-bottom:12px;">
      <img src="/uwpf-logo.png" alt="UWPF Logo" style="height:60px;width:auto;margin-right:18px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="/index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="/leadership.php">Leadership & Board</a></li>
        <li class="nav-item"><a class="nav-link" href="/member-federations.php">Member Federations</a></li>
        <li class="nav-item"><a class="nav-link" href="/rules-equipment.php">Rules & Equipment</a></li>
        <li class="nav-item"><a class="nav-link" href="/events.php">Events</a></li>
        <li class="nav-item"><a class="nav-link" href="/news.php">News</a></li>
        <li class="nav-item"><a class="nav-link" href="/resources.php">Resources</a></li>
        <li class="nav-item"><a class="nav-link" href="/contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
