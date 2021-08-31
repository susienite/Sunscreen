
<?php
include("includes/init.php");

// Was the form submitted?
if (isset($_POST['submit'])) {
  // TODO: Assume the order is valid
  $valid_form = TRUE;

  //Require a name
  $your_name = trim( $_POST['your_name'] );
  if ($your_name == '') {
    $valid_form = FALSE;
    $name_error = TRUE;
  }

  // Convert spf number to integers
  $spf_n = filter_input(INPUT_POST, 'spf_n', FILTER_VALIDATE_INT);
  //spf number must be greater than 0 and less than/equal to 100
  if ($spf_n < 0 || $spf_n > 100 || $spf_n == 0) {
    $valid_form = FALSE;
    $spf_number_error = TRUE;
  }
  //Find the range of protection time
  $spf_min = $spf_n * 30;
  $spf_max = $spf_n * 45;

  //Check if a radio button has been checked
  if (!isset($_POST['usage'])) {
    $valid_form = FALSE;
    $usage_error = TRUE;
  }
  //Display messages for the radio options
  $choose_yes = "you never leave home without applying sunscreen.
  I am glad you do so. Keep it up!";
  $choose_no = "you rarely ever apply sunscreen.
  I hope you would start soon.";
  $choose_idk = "you may not have been applying sunscreen constantly in the past,
  but you wish to do so now. I am glad you think so.";


} else {
  // Form was not submitted.
  $spf_n = 0;
}
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Sunscreen</title>

  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
</head>

<body>
  <?php include("includes/header.php");?>

  <div class="content">
    <article id="choosing-content">

      <h1>Choosing SPF</h1>
      <p>SPF stands for sun protection factor. The SPF number is an indication of how long it takes your skin to burn if you were wearing sunscreen versus if you were not. So, a sunscreen with SPF 15 would protect your skin from burning 15 times longer than if you were not wearing sunscreen. </p>
      <p><strong>Warning! </strong> SPF is only a measure of the sunscreen's protection against UVB rays, the ones that affect the surface of the skin and cause burning.</p>

      <h2>Let's learn about you!</h2>

      <?php
      if ( isset($valid_form) && $valid_form) { ?>

      <fieldset>
        <p>Hello <strong><?php echo htmlspecialchars($your_name);?></strong>, <p>
        <p>Thank you for submitting the form! You have choose sunscreen with <strong>SPF <?php echo $spf_n;?></strong>. The time it takes for your skin to burn varies by skin type. But on average, it takes 30-45 minutes under moderate UV light exposure. Based on the sunscreen number, your skin will be protected for <strong><?php echo $spf_min;?> minutes to <?php echo $spf_max;?> minutes</strong>. It is recommended that sunscreen should be reapplied every 2 hours and reapplied after sweating or swimming because the effect of your sunscreen will decrease.
        </p>

        <p>You have indicated that
        <?php if(isset($_POST['usage']) && $_POST['usage']== 1) {echo htmlspecialchars($choose_yes);}
         else if (isset($_POST['usage']) && $_POST['usage']== 2) {echo htmlspecialchars($choose_no);}
         else {echo htmlspecialchars($choose_idk);}?>
        Your skin is worth protecting!
        </p>

        <p> Thank you,</p>
        <p> From the <strong> creater of this site</strong>! </p>
      </fieldset>

      <?php } else { ?>

        <form id="about_you" method="post" action="spf.php">
          <fieldset>
            <p class="form_error <?php if ( !isset($name_error) ) { echo 'hidden'; } ?>">Oh no! Invalid name. Please enter a name.</p>
            <p class="add_space">
              <label for="name_field">Your name:<br></label>
              <input type="text" id="name_field" name="your_name" value = "<?php if( isset($your_name) ) { echo htmlspecialchars($your_name); } ?>"/>
            </p>

            <p class="form_error <?php if ( !isset($spf_number_error) ) { echo 'hidden'; } ?>">That's an unusual SPF number. Please enter a SPF number greater than 0 and below/equal to 100.</p>
            <p class="add_space">
              <label for="spf_number">What is the SPF number on the sunscreen you usually use? Bottles typically display the following numbers: 15, 30, 50, 100. If you do not use sunscreen, please indicate a SPF number you wish to find out about.<br></label>
              <input type="number" id="spf_number" name="spf_n" min="0" max="100" value="<?php echo $spf_n; ?>"/>
            </p>

            <p class="form_error <?php if ( !isset($usage_error) ) { echo 'hidden'; } ?>">Please choose an input.</p>
            <p class="add_space">
              <label for="usage">Do you use sunscreen often?<br></label>
              <input type="radio" id="usage_yes" name="usage" value="1" <?php if(isset($_POST['usage']) && $_POST['usage']== 1) {echo 'checked="checked"';} ?>/>Yes, I never leave home without it.<br>
              <input type="radio" id="usage_no" name="usage" value="2" <?php if(isset($_POST['usage']) &&$_POST['usage']== 2) {echo 'checked="checked"';} ?>/>Never. What even is sunscreen?<br>
              <input type="radio" id="usage_idk" name="usage" value="3" <?php if(isset($_POST['usage']) && $_POST['usage']== 3) {echo 'checked="checked"';} ?>/>I want to start!<br>
            </p>

            <input type="submit" name="submit" value="Submit Form"/>
          </fieldset>
        </form>

      <?php } ?>

    </article>
  </div>

  <?php include("includes/footer.php");?>
</body>

</html>
