<?if (!$USER->IsAuthorized()) {?>
    <span class="login_btn" id="login_btn"><?=GetMessage("LOGIN")?></span>
<?} else { ?>
    <span class="personal_btn" id="personal_btn"><?=GetMessage("PERSONAL")?></span>

<?};?>
