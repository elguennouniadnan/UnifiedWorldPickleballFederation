<?php include 'partials/header.php'; ?>
<section class="py-5 bg-light" id="contact">
  <div class="container">
  <h2 style="color:#43c463;">Contact Us</h2>
    <?php
    $successMsg = '';
$errorMsg = '';
$nameVal = '';
$emailVal = '';
$messageVal = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nameVal = htmlspecialchars($_POST['name'] ?? '');
    $emailVal = htmlspecialchars($_POST['email'] ?? '');
    $messageVal = htmlspecialchars($_POST['message'] ?? '');
    if ($nameVal && $emailVal && $messageVal) {
        $successMsg = 'Thank you for contacting us, ' . $nameVal . '!';
    } else {
        $errorMsg = 'Please fill in all fields.';
    }
}
if ($successMsg) {
    echo '<div class="alert alert-success mt-3">' . $successMsg . '</div>';
} elseif ($errorMsg) {
    echo '<div class="alert alert-danger mt-3">' . $errorMsg . '</div>';
}
?>
    <form class="row g-3" method="post" action="contact.php" aria-label="Contact form">
      <div class="col-md-6">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required value="<?php echo $nameVal; ?>">
      </div>
      <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required value="<?php echo $emailVal; ?>">
      </div>
      <div class="col-12">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="4" required><?php echo $messageVal; ?></textarea>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Send Message</button>
      </div>
    </form>
  </div>
</section>
<?php include 'partials/footer.php'; ?>
