<?php include 'header.php' ?>
<link rel="stylesheet" href="style2.css">
<div class="container">
    <form>
      <div class="form-group">
        <label for="firstName">First Name</label>
        <input type="text" class="form-control" id="firstName" placeholder="Enter your first name">
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email address">
      </div>

      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
      </div>

      <button type="submit">Send Message</button>
    </form>

    
  </div>
<?php include 'footer.php' ?>