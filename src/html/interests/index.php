<html>
<head>
<?php
  include '../../php/headImport.php';
?>
<link rel='stylesheet' type='text/css' href='/assets/register.css' />
</head>

<body>

<div id="main">
<div id="body">
<?php
if(isset($_COOKIE['userId'])) {
echo <<<EOF
<form>
<div id='div1' class='questionContainerDiv currentDiv'>
  <h1>Tell us about you so we can plan a DateNight we know you'll love</h1>
  <span id='popup'>&lt;----- If you want to go back to an already-completed section, you can click the header (like here)</span>
  <div id='questions1' class='questionDiv'>
    <label for="username">What shall we call you?<input type="text" name="username" /></label>
    <label for="email">And what's your email address?<input type="text" name="email" /></label>
    <label for="whoWith">Who are you going on DateNight with?<input type="text" name="whoWith" /></label>
    <label for="howLongTogether">How long have you been together?<input type="text" name="howLongTogether" /></label>
    <span>What age would you consider yourself at heart?</span><br/>
    <label for="18radio"><input type="radio" name="ageRange" value="18" id="18radio" />18-25</label>
    <label for="26radio"><input type="radio" name="ageRange" value="26" id="26radio" />26-33</label>
    <label for="34radio"><input type="radio" name="ageRange" value="34" id="34radio" />34-44</label>
    <label for="45radio"><input type="radio" name="ageRange" value="45" id="45radio" />45-55</label>
    <label for="55radio"><input type="radio" name="ageRange" value="55" id="55radio" />55+</label>
    <label for="howOften">How often do you go on dates together?<input type="text" name="howOften" /></label>
    <span>What would be your typical date?</span>
    <label for="dinnerDrinksRadio"><input type="radio" name="typicalDate" value="dinnerDrinks" id="dinnerDrinksRadio" />Dinner and drinks</label>
    <label for="eventRadio"><input type="radio" name="typicalDate" value="event" id="eventRadio" />Event (Theatre, Cinema, Sports, etc.)</label>
    <label for="stayInRadio"><input type="radio" name="typicalDate" value="stayIn" id="stayInRadio" />Staying In</label>
    <label for="otherTypicalRadio"><input type="radio" name="typicalDate" value="other" id="otherTypicalRadio" />Other:<input type="text" disabled="disabled" name="otherTypicalText" id="otherTypicalText" /></label>
    <label for="hobbies">Are there any hobbies that you love to do together?<textarea name="hobbies"></textarea></label>
    <span>Do you have children?</span>
    <label for="childrenYes"><input type="radio" name="children" value="true" id="childrenYes" />Yes</label>
    <label for="childrenNo"><input type="radio" name="children" value="false" id="childrenNo" />No</label>
    <label for="numberOfChildren">If yes, how many?<input type="text" name="numberOfChildren" id="numberOfChildren" disabled="disabled"/></label>
    <label for="occasion">Is this DateNight for a special occasion? If it is, congratulations! What are you celebrating?<input type="text" name="occasion" /></label>
    <label for="postcode">What is your postcode? (We just use this to get you safely to and from home)<input type="text" name="postcode" /></label>
    <input type='button' value='next' data-buttonNum='1' class='nextButton' />
  </div>
</div>

<div id='div2' class='questionContainerDiv'>
  <h1>Tell us what you're hoping for on your DateNight</h1>
  <div id='questions2' class='questionDiv'>

    <span>Would you like to stay close to home or explore a new area?</span>
    <label for="close"><input type="radio" name="closeOrFar" value="close" id="close" />Close to home</label>
    <label for="far"><input type="radio" name="closeOrFar" value="far" id="far" />Explore a new area</label>

    <span>Would you say you want something...</span>
    <label for="traditional"><input type="radio" name="traditionalAdventurous" value="traditional" id="traditional" />More Traditional - we want to have some time to talk and connect with each other</label>
    <label for="adventurous"><input type="radio" name="traditionalAdventurous" value="adventurous" id="adventurous" />More Adventurous - we want to experience something new together</label>

    <span>What is your main reason for choosing DateNight?</span>
    <label for="reasonSurprise"><input type="radio" name="reason" value="reasonSurprise" id="reasonSurprise" />Just the idea of both being taken on a surprise is exciting and different</label>
    <label for="noTime"><input type="radio" name="reason" value="noTime" id="noTime" />We don't have time to plan something super special and want the stress taken away</label>
    <label for="needIdeas"><input type="radio" name="reason" value="needIdeas" id="needIdeas" />We're not sure what to do in London and need some ideas</label>
    <label for="doneEverything"><input type="radio" name="reason" value="doneEverything" id="doneEverything" />We feel like we've done most things in London</label>

    <input type='button' value='next' data-buttonNum='2' class='nextButton' />
  </div>
</div>

<div id='div3' class='questionContainerDiv'>
  <h1>Tick all the boxes that apply to you as a couple (or that you would like to apply, but realistically haven't done in years - we've all been there):</h1>
  <div id='questions3' class='questionDiv'>
    <label for="culture"><input type="checkbox" name="interests" value="culture" id="culture" />Culture Vulture</label>
    <label for="animals"><input type="checkbox" name="interests" value="animals" id="animals" />Animal Lover</label>
    <label for="theatre"><input type="checkbox" name="interests" value="theatre" id="theatre" />Theatre Habitu&eacute;</label>
    <label for="cocktails"><input type="checkbox" name="interests" value="cocktails" id="cocktails" />Cocktail Connoisseur</label>
    <label for="food"><input type="checkbox" name="interests" value="food" id="food" />Foody</label>
    <label for="film"><input type="checkbox" name="interests" value="film" id="film" />Film Buff</label>
    <label for="physical"><input type="checkbox" name="interests" value="physical" id="physical" />Physically Active</label>
    <label for="adrenaline"><input type="checkbox" name="interests" value="adrenaline" id="adrenaline" />Adrenaline Junkie</label>
    <label for="gaming"><input type="checkbox" name="interests" value="gaming" id="gaming" />Gaming Enthusiast</label>
    <label for="raving"><input type="checkbox" name="interests" value="raving" id="raving" />Raver and Misbehaver</label>
    <label for="gigs"><input type="checkbox" name="interests" value="gigs" id="gigs" />Gigger</label>
    <label for="art"><input type="checkbox" name="interests" value="art" id="art" />Art Gallery Wanderer</label>
    <label for="dance"><input type="checkbox" name="interests" value="dance" id="dance" />Dancing Queen</label>
    <label for="cooking"><input type="checkbox" name="interests" value="cooking" id="cooking" />Culinary Wizard</label>
    <label for="singing"><input type="checkbox" name="interests" value="singing" id="singing" />Singing Sensation</label>
    <label for="fashion"><input type="checkbox" name="interests" value="fashion" id="fashion" />Passion for Fashion</label>
    <label for="romance"><input type="checkbox" name="interests" value="romance" id="romance" />True Romantic</label>
    <label for="classicalMusic"><input type="checkbox" name="interests" value="classicalMusic" id="classicalMusic" />Classical Music Aficionado</label>
    <label for="travel"><input type="checkbox" name="interests" value="travel" id="travel" />Globetrotter</label>
    <label for="sports"><input type="checkbox" name="interests" value="sports" id="sports" />Sports Addict</label>
    <label for="books"><input type="checkbox" name="interests" value="books" id="books" />Bookworm</label>
    <label for="gym"><input type="checkbox" name="interests" value="gym" id="gym" />Gym Bunny</label>
    <input type='button' value='next' data-buttonNum='3' class='nextButton' />
  </div>
</div>

<div id='div4' class='questionContainerDiv'>
  <h1>Pick the one that most applies to you:</h1>
  <div id='questions4' class='questionDiv'>
    <label for="silly"><input type="radio" name="sillySerious" value="silly" id="silly" />Silly</label>
    <label for="serious"><input type="radio" name="sillySerious" value="serious" id="serious" /><br/>Serious</label>

    <label for="brave"><input type="radio" name="braveCautious" value="brave" id="brave" />Brave</label>
    <label for="cautious"><input type="radio" name="braveCautious" value="cautious" id="cautious" />Cautious</label><br/>

    <label for="laidBack"><input type="radio" name="laidBackActive" value="laidBack" id="laidBack" />Laid Back</label>
    <label for="activeNotLaidBack"><input type="radio" name="laidBackActive" value="activeNotLaidBack" id="activeNotLaidBack" />Active</label><br/>

    <label for="sociable"><input type="radio" name="sociablePrivate" value="sociable" id="sociable" />Sociable</label>
    <label for="private"><input type="radio" name="sociablePrivate" value="private" id="private" />Private</label>

    <input type='button' value='next' data-buttonNum='4' class='nextButton' />
  </div>
</div>

<div id='div5' class='questionContainerDiv'>
  <h1>Now for the factual bit...</h1>
  <div id='questions5' class='questionDiv'>
    <label for="allergies">Any allergies?<input type="text" name="allergies" /></label>
    <label for="dietary">Any dietary restrictions?<input type="text" name="dietary" /></label>
    <label for="alcohol">Do you both drink alcohol?<input type="text" name="alcohol" /></label>
    <label for="fears">Any fears? E.g. heights, animals, commitment (there's nothing we can do about this last one)<input type="text" name="fears" /></label>
    <label for="dislikes">Any strong dislikes?<input type="text" name="dislikes" /></label>
    <label for="religion">What religion do you practice, if any?<input type="text" name="religion" /><br/></label>
  </div>
  <input type="button" value="Done" data-buttonNum='5' id="submitButton" />
</div>

</form>

<script type='text/javascript'>
  $(document).ready(function() {

    $('.nextButton').click(function() {
      if(shouldContinue($(this))) {
        parentQuestionDiv = $(this).parent();
        parentQuestionDiv.slideUp();
        parentQuestionDiv.parent().removeClass('currentDiv');
        nextDiv = parentQuestionDiv.parent().next();
        nextDiv.slideDown();
        nextDiv.addClass('currentDiv');
        $(this).hide();
        if ($(this).attr('data-buttonNum') == '1') {
          $('#popup').fadeIn().delay(1000).fadeOut();
        }
      }
    })

    $('h1').click(function() {
      if (!$(this).parent().hasClass('currentDiv')) {
        $('.currentDiv > .questionDiv').slideUp();
        $('.currentDiv').removeClass('currentDiv');
        $(this).parent().addClass('currentDiv');
        $(this).siblings('.questionDiv').slideDown();
      }
    });

    $('#submitButton').click(function() {
      if (shouldContinue($(this))) {

        $.ajax({
          type: 'POST',
          url: '/cgi-bin/updateUser.py',
          data: $('form').serialize(),
          success: window.location.assign('/alldone/'),
          dataType: 'json'
        });

      }
    });

    $('input[name="typicalDate"]').change(function() {
      $('#otherTypicalText').prop('disabled', $('input[name="typicalDate"]:checked').val() != 'other');
    });

    $('input[name="children"]').change(function() {
      $('#numberOfChildren').prop('disabled', $('input[name="children"]:checked').val() != 'true');
    });
});

  // Validates the section of the form in question,
  // and returns whether user should be allowed to continue
  function shouldContinue(e) {
    if (e.attr('data-buttonNum') == '1') {
      radios = ['ageRange','children'];
      other = ['username','email','whoWith','howLongTogether','howOften','hobbies','occasion','postcode']
    }

    if (e.attr('data-buttonNum') == '2') {
      radios = ['traditionalAdventurous','closeOrFar','reason'];
      other = []
    }

    if (e.attr('data-buttonNum') == '3') {
      radios = ['interests'];
      other = []
    }

    if (e.attr('data-buttonNum') == '4') {
      radios = ['sillySerious','braveCautious','laidBackActive','sociablePrivate'];
      other = []
    }

    if (e.attr('data-buttonNum') == '5') {
      radios = [];
      other = ['allergies','dietary','alcohol','fears','dislikes','religion']
    }

    if (!(
          (radios.length == 0 || radios.map(function(i){return $('[name=' + i + ']:checked').val();}).reduce(function(l,r) {return l && r;})) &&
          (other.length == 0 || other.map(function(i){return $('[name=' + i + ']').val();}).reduce(function(l,r) {return l && r;}))
        )) {
      setTimeout(function() {alert("Whoops! You missed some data!");}, 1);
      return false;
    } else {
      return true;
    }
  }

</script>
EOF;
} else {
  echo "<h1>Something has gone wrong!</h1><h2>Please report this to scubbojj+datenight@gmail.com</h2><h3>Thanks!</h3>";
}
?>

</div>
</div>
</body>
</html>
