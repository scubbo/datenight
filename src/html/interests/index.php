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
    <label for="username">What shall we call you?</label><input type="text" name="username" /><br/>
    <label for="whoWith">Who are you going on DateNight with?</label><input type="text" name="whoWith" /><br/>
    <label for="howLongTogether">How long have you been together?</label><input type="text" name="howLongTogether" /><br/>
    <span>What age would you consider yourself at heart?</span>
    <label for="18radio">18-25</label><input type="radio" name="ageRange" value="18" id="18radio" />
    <label for="26radio">26-33</label><input type="radio" name="ageRange" value="26" id="26radio" />
    <label for="34radio">34-44</label><input type="radio" name="ageRange" value="34" id="34radio" />
    <label for="45radio">45-55</label><input type="radio" name="ageRange" value="45" id="45radio" />
    <label for="55radio">55+</label><input type="radio" name="ageRange" value="55" id="55radio" /><br/>
    <label for="howOften">How often do you go on dates together?</label><input type="text" name="howOften" /><br/>
    <span>What would be your typical date?</span>
    <label for="dinnerDrinksRadio">Dinner and drinks</label><input type="radio" name="typicalDate" value="dinnerDrinks" id="dinnerDrinksRadio" />
    <label for="eventRadio">Event (Theatre, Cinema, Sports, etc.)</label><input type="radio" name="typicalDate" value="event" id="eventRadio" />
    <label for="stayInRadio">Staying In</label><input type="radio" name="typicalDate" value="stayIn" id="stayInRadio" />
    <label for="otherTypicalRadio">Other:</label><input type="radio" name="typicalDate" value="other" id="otherTypicalRadio" /><input type="text" disabled="disabled" name="otherTypicalText" id="otherTypicalText" />
    <label for="hobbies">Are there any hobbies that you love to do together?</label><textarea name="hobbies"></textarea><br/>
    <span>Do you have children?</span>
    <label for="childrenYes">Yes</label><input type="radio" name="children" value="true" id="childrenYes" />
    <label for="childrenNo">No</label><input type="radio" name="children" value="false" id="childrenNo" /><br/>
    <label for="numberOfChildren">If yes, how many?</label><input type="text" name="numberOfChildren" id="numberOfChildren" disabled="disabled"/><br/>
    <label for="occasion">Is this DateNight for a special occasion? If it is, congratulations! What are you celebrating?</label><input type="text" name="occasion" /><br/>
    <label for="postcode">What is your postcode? (We just use this to get you safely to and from home)</label><input type="text" name="postcode" /><br/>
    <input type='button' value='next' data-buttonNum='1' class='nextButton' />
  </div>
</div>

<div id='div2' class='questionContainerDiv'>
  <h1>Tell us what you're hoping for on your DateNight</h1>
  <div id='questions2' class='questionDiv'>

    <span>Would you like to stay close to home or explore a new area?</span>
    <label for="close">Close to home</label><input type="radio" name="closeOrFar" value="close" id="close" />
    <label for="far">Explore a new area</label><input type="radio" name="closeOrFar" value="far" id="far" />

    <span>Would you say you want something...</span>
    <label for="traditional">More Traditional - we want to have some time to talk and connect with each other</label><input type="radio" name="traditionalAdventurous" value="traditional" id="traditional" />
    <label for="adventurous">More Adventurous - we want to experience something new together</label><input type="radio" name="traditionalAdventurous" value="adventurous" id="adventurous" /><br/>

    <span>What is your main reason for choosing DateNight?</span>
    <label for="reasonSurprise">Just the idea of both being taken on a surprise is exciting and different</label><input type="radio" name="reason" value="reasonSurprise" id="reasonSurprise" />
    <label for="noTime">We don't have time to plan something super special and want the stress taken away</label><input type="radio" name="reason" value="noTime" id="noTime" />
    <label for="needIdeas">We're not sure what to do in London and need some ideas</label><input type="radio" name="reason" value="needIdeas" id="needIdeas" />
    <label for="doneEverything">We feel like we've done most things in London</label><input type="radio" name="reason" value="doneEverything" id="doneEverything" />

    <input type='button' value='next' data-buttonNum='2' class='nextButton' />
  </div>
</div>

<div id='div3' class='questionContainerDiv'>
  <h1>Tick all the boxes that apply to you as a couple (or that you would like to apply, but realistically haven't done in years - we've all been there):</h1>
  <div id='questions3' class='questionDiv'>
    <label for="culture">Culture Vulture</label><input type="checkbox" name="interests" value="culture" id="culture" />
    <label for="animals">Animal Lover</label><input type="checkbox" name="interests" value="animals" id="animals" />
    <label for="theatre">Theatre Habitu&eacute;</label><input type="checkbox" name="interests" value="theatre" id="theatre" />
    <label for="cocktails">Cocktail Connoisseur</label><input type="checkbox" name="interests" value="cocktails" id="cocktails" />
    <label for="food">Foody</label><input type="checkbox" name="interests" value="food" id="food" />
    <label for="film">Film Buff</label><input type="checkbox" name="interests" value="film" id="film" />
    <label for="physical">Physically Active</label><input type="checkbox" name="interests" value="physical" id="physical" />
    <label for="adrenaline">Adrenaline Junkie</label><input type="checkbox" name="interests" value="adrenaline" id="adrenaline" />
    <label for="gaming">Gaming Enthusiast</label><input type="checkbox" name="interests" value="gaming" id="gaming" />
    <label for="raving">Raver and Misbehaver</label><input type="checkbox" name="interests" value="raving" id="raving" />
    <label for="gigs">Gigger</label><input type="checkbox" name="interests" value="gigs" id="gigs" />
    <label for="art">Art Gallery Wanderer</label><input type="checkbox" name="interests" value="art" id="art" />
    <label for="dance">Dancing Queen</label><input type="checkbox" name="interests" value="dance" id="dance" />
    <label for="cooking">Culinary Wizard</label><input type="checkbox" name="interests" value="cooking" id="cooking" />
    <label for="singing">Singing Sensation</label><input type="checkbox" name="interests" value="singing" id="singing" />
    <label for="fashion">Passion for Fashion</label><input type="checkbox" name="interests" value="fashion" id="fashion" />
    <label for="romance">True Romantic</label><input type="checkbox" name="interests" value="romance" id="romance" />
    <label for="classicalMusic">Classical Music Aficionado</label><input type="checkbox" name="interests" value="classicalMusic" id="classicalMusic" />
    <label for="travel">Globetrotter</label><input type="checkbox" name="interests" value="travel" id="travel" />
    <label for="sports">Sports Addict</label><input type="checkbox" name="interests" value="sports" id="sports" />
    <label for="books">Bookworm</label><input type="checkbox" name="interests" value="books" id="books" />
    <label for="gym">Gym Bunny</label><input type="checkbox" name="interests" value="gym" id="gym" />
    <input type='button' value='next' data-buttonNum='3' class='nextButton' />
  </div>
</div>

<div id='div4' class='questionContainerDiv'>
  <h1>Pick the one that most applies to you:</h1>
  <div id='questions4' class='questionDiv'>
    <label for="silly">Silly</label><input type="radio" name="sillySerious" value="silly" id="silly" />
    <label for="serious">Serious</label><input type="radio" name="sillySerious" value="serious" id="serious" /><br/>

    <label for="brave">Brave</label><input type="radio" name="braveCautious" value="brave" id="brave" />
    <label for="cautious">Cautious</label><input type="radio" name="braveCautious" value="cautious" id="cautious" /><br/>

    <label for="laidBack">Laid Back</label><input type="radio" name="laidBackActive" value="laidBack" id="laidBack" />
    <label for="activeNotLaidBack">Active</label><input type="radio" name="laidBackActive" value="activeNotLaidBack" id="activeNotLaidBack" /><br/>

    <label for="sociable">Sociable</label><input type="radio" name="sociablePrivate" value="sociable" id="sociable" />
    <label for="private">Private</label><input type="radio" name="sociablePrivate" value="private" id="private" />

    <input type='button' value='next' data-buttonNum='4' class='nextButton' />
  </div>
</div>

<div id='div5' class='questionContainerDiv'>
  <h1>Now for the factual bit...</h1>
  <div id='questions5' class='questionDiv'>
    <label for="allergies">Any allergies?</label><input type="text" name="allergies" />
    <label for="dietary">Any dietary restrictions?</label><input type="text" name="dietary" />
    <label for="alcohol">Do you both drink alcohol?</label><input type="text" name="alcohol" />
    <label for="fears">Any fears? E.g. heights, animals, commitment (there's nothing we can do about this last one)</label><input type="text" name="fears" />
    <label for="dislikes">Any strong dislikes?</label><input type="text" name="dislikes" />
    <label for="religion">What religion do you practice, if any?</label><input type="text" name="religion" /><br/>
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
        $.post(
          '/cgi-bin/updateUser.py',
          {
            'data': $('form').serialize()
          })
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
      other = ['username','whoWith','howLongTogether','howOften','hobbies','occasion','postcode']
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
