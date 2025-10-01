<html>
<body>


<?php echo $_POST["name"]; ?><?php if (($_POST["three_writers"] != "on" && (!empty($_POST["more_writers"])))){echo ("en "); echo $_POST["more_writers"];} ?>, <i><?php echo $_POST["title"]; ?></i> <?php if (!empty($_POST["translator"])){echo ("vert. "); echo $_POST["translator"];} ?> <?php echo $_POST["serie"]; ?><?php if (!empty($_POST["editor"])){echo $_POST["editor"]; echo (" ed.");} ?>(<?php if (!empty($_POST["druk"])){echo $_POST["druk"]; echo ("e druk;");} ?> <?php echo $_POST["place"];?><?php if (($_POST["three_places"] != "on")){echo ("; "); echo $_POST["second_place"];} ?><?php if (($_POST["three_places"] == "on")){echo (" enz.");}?><?php if (empty($_POST["place"])){echo ("z.p");} ?> <?php echo $_POST["year"]; ?>) <?php echo $_POST["page"]; ?>

<br> <br> 

<button onclick="history.back()">Go Back</button>

<form action="https://www.paypal.com/donate" method="post" target="_top">
<input type="hidden" name="hosted_button_id" value="LJKWCH85RA5WA" />
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
<img alt="" border="0" src="https://www.paypal.com/en_NL/i/scr/pixel.gif" width="1" height="1" />
</form>

</body>
</html>	