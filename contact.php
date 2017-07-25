<!doctype html>
<html lang="en-us">

<head>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact | Your Name</title>
  <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

  <?php require "include/header.php" ?>

  <div id="main-container" class="container">
    <section class="main-section">
      <h1>Contact</h1>

      <form id="contact-form">
        <ul>
          <li>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="John Smith" required="required">
          </li>
          <li>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="example@gmail.com" required="required">
          </li>
          <li>
            <label for="message">Message</label>
            <textarea id="message" name="message" required="required"></textarea>
          </li>
        </ul>
        <input type="submit">
      </form>

    </section>

    <?php require "include/sidebar.php" ?>
    
  </div>

  <?php require "include/footer.php" ?>

</body>

</html>