<?php
 include("includes/header.php");
?>

<?php
  include("includes/nav.php");
?>

<body>
  <div class="contact-form">
    <h2>Contact Us</h2>
    <form action="submit_form.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <button type="submit">Submit</button>
    </form>
  </div>

</body>

<?php
 include("includes/footer.php");
?>

</html>