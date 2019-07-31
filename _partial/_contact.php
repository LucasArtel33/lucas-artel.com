<div class="contactTitle">
    <h2> Me Contacter</h2>
</div>
<div class="svgParcoursTop">
    <svg viewBox="0 0 200 15">
        <polygon points="0 0, 200 0, 200 15" fill="#466289"/>
    </svg>
    <div class="formulaire wrapper">
        <?php if (array_key_exists('errors', $_SESSION)): ?>
            <div class="alertErrors">
                <?= implode('<br>', $_SESSION['errors']); ?>
            </div>
        <?php endif;?>
        <?php if (array_key_exists('success', $_SESSION)): ?>
            <div class="alertSuccess">
               <p>Votre message a bien été envoyé.</p>
            </div>
        <?php endif;?>
        <form action="postContact.php" method="post">
            <div class="formRow">
                <div class="formItem">
                    <label for="name">Nom Prénom / Société</label>
                    <input required type="text" name="name" id="name" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
                </div>
                <div class="formItem">
                    <label for="mail" >Email</label>
                    <input required type="email" name="mail" id="mail" value="<?= isset($_SESSION['inputs']['mail']) ? $_SESSION['inputs']['mail'] : ''; ?>">
                </div>
            </div>
            <div class="formItem">
                <label for="sujet">Sujet</label>
                <input required type="text" name="sujet" id="sujet" value="<?= isset($_SESSION['inputs']['sujet']) ? $_SESSION['inputs']['sujet'] : ''; ?>">
            </div>
            <div class="formItem">
                <label for="message">Votre message</label>
                <textarea required name="message" id="message" cols="30" rows="10"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
            </div>
            <div class="formItem">
                <button id="btnContact" type="submit"> Envoyer </button>
            </div>
        </form>
    </div>
</div>

<?php
    unset($_SESSION['inputs']);
    unset($_SESSION['success']);
    unset($_SESSION['errors']);
?>