<?php ?>

<div id="login">
    <form class ="form_user form-horizontal" method="post" action="">
        <h4>Connexion espace admin</h4>
        <div class="control-group">
            <label class="control-label" for="email">Email</label>
            <div class="controls">
                <input class="validate[required,custom[email]]" type="text" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
                <?php echo form_error('email'); ?>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="mdp">Mot de passe</label>
            <div class="controls">
                <input class="validate[required]" type="password" id="inputPassword" placeholder="Password" name="mdp">
                <?php echo form_error('mdp'); ?>
            </div>
        </div>

        <button class="btn btn-large btn-primary" type="submit">Valider</button>

    </form>


