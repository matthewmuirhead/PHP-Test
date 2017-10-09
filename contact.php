<?php
  require 'head.php';
?>

<main class="main"><!-- Main content -->
  <div class="form-container">
    <form>
      <h3 class="form-title">Send me a message</h3>
      <!-- Text Input -->
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-name">
      </div>
      <!-- Text Input -->
      <div class="form-group">
        <label>E-mail address</label>
        <input type="email" class="form-name">
      </div>
      <!-- Text Area -->
      <div class="form-group">
        <label>Message</label>
        <textarea rows="4" cols="25"></textarea>
      </div>
      <button type="button" name="submit-button" class="submit-button">Submit</button>
    </form>
  </div>
</main>
</div>
<nav class="nav">
<div class="header">
  <div class="logo-container">
    <a href="index.html"><img src="images/favicon.png" alt="logo" class="logo"></a><!-- Logo -->
  </div>
  <div class="title-container">
    <h3>Contact Me</h3><!-- Page title -->

<?php
  require 'foot.php';
?>
