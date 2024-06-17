<?php
$errors = $_SESSION['form_errors'] ?? [];
unset($_SESSION['form_errors']);
?>

<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="form">
    <div class="horizontal-information">
        <div class="name">
            <label for="name">Nom complet*</label>
            <input type="text" name="name" id="name" placeholder="Luca Lemaire" required>
            <?php if (!empty($errors)): ?>
                <p class="form-error"><?php echo $errors['nom'] ?? ''; ?></p>
            <?php endif; ?>
        </div>
        <div class="mail">
            <label for="mail">Adresse mail*</label>
            <input type="text" name="mail" id="mail" placeholder="lucalemaire@hotmail.fr" required>
            <?php if (!empty($errors)): ?>
                <p class="form-error"><?php echo $errors['email'] ?? ''; ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="message">
        <label for="message">Votre Message*</label>
        <textarea name="message" id="message" cols="38" rows="5" placeholder="j'aimerai bien collaboré avec toi..." required></textarea>
        <?php if (!empty($errors)): ?>
            <p class="form-error"><?php echo $errors['message'] ?? ''; ?></p>
        <?php endif; ?>
    </div>
    <div class="submit">
        <input type="submit" name="Envoyez">
    </div>
</form>