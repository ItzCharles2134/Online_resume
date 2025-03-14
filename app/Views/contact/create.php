<h2>Contact Us</h2>
<link rel="stylesheet" href="<?= base_url('backend/css/contact.css') ?>">

<form action="<?= site_url('contact/store') ?>" method="post">
    <input type="text" name="name" placeholder="Your Name" required><br><br>
    <input type="email" name="email" placeholder="Your Email" required><br><br>
    <textarea name="message" placeholder="Your Message" required></textarea><br><br>
    <button type="submit">Send</button>
</form>

<br>
<a href="<?= site_url('contact') ?>">View Messages</a>
