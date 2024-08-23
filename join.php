<?php
/*
Template Name: Join Page
*/
?>
<?php get_header(); ?>

<h1 id="e_ch">Join iCode Guru</h1>
<div class="con_ta">
  <form id="join-form" method="post">
    <label for="first-name">First Name:</label><br>
    <input type="text" id="first-name" name="first_name" placeholder="john" required>
    <label for="last-name">Last Name:</label>
    <input type="text" id="last-name" name="last_name" placeholder="Doe" required><br>
    <label for="email">Email:</label><br>
    <input style="width: 100%;" type="email" id="email" name="email" placeholder="email@example.com" required><br>
    <label for="phone">WhatsApp Phone Number (with country code):</label><br>
    <input type="number" id="phone" name="phone" placeholder="+92 334 0000000" required>
    <label for="university">University/Company:</label><br>
    <input style="width: 100%;" type="text" id="university" name="university" placeholder="University of Arlington" required><br>
    <label for="linkedin">LinkedIn URL:</label><br>
    <input type="url" id="linkedin" name="linkedin" placeholder="https://www.linkedin.com/in/username" required><br>
    <button type="submit" id="btn">Submit</button>
    <button type="Reset" id="btn">Reset</button>
  </form>
  <div id="flash-msg"></div> <!-- For displaying messages -->
</div>

<!-- Video Tutorial Section -->
<div class="contain_er">
  <h1 id="e_ch">Watch video tutorial</h1>
  <p id="pa_ra" style="color: #000;">Our moderator has clearly explained the steps you need to take in order to join us.</p>
  <div class="video-wrapper">
    <iframe src="https://www.youtube.com/embed/JC9A8bvJMWQ" title="Join iCodeGuru Slack tutorial" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </div>
</div>

<?php get_footer(); ?>
