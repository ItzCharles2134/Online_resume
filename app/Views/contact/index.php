<h2>Contact Messages</h2>
<link rel="stylesheet" href="<?= base_url('backend/css/contactindex.css') ?>">
<ul>
    <?php if (!empty($contacts)): ?>
        <?php foreach ($contacts as $contact): ?>
            <li>
                <strong>Name:</strong> <?= $contact['name'] ?><br>
                <strong>Email:</strong> <?= $contact['email'] ?><br>
                <strong>Message:</strong> <?= $contact['message'] ?><br>
                <a href="<?= site_url('contact/delete/'.$contact['id']) ?>" onclick="return confirm('Are you sure you want to delete this?')">Delete</a>
                <hr>
            </li>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No messages found.</p>
    <?php endif; ?>
</ul>

<br>
<a href="<?= site_url('contact/create') ?>">Go Back to Contact Form</a>
