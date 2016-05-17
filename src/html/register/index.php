<html>
<head>
<?php
  include '../../php/headImport.php';
?>
<link rel='stylesheet' type='text/css' href='/assets/register.css' />
</head>

<body>

<script type='text/javascript'>
  $(document).ready(function() {
  });
</script>
<div id="main">
<div id="body">
<form>
<div id='div1' class='questionContainerDiv currentDiv'>
  <h1>Tell us about you...</h1>
  <span id='popup'>&lt;----- If you want to go back to an already-completed section, you can click the header (like here)</span>
  <div id='questions1' class='questionDiv'>
    <label for="whoWith">Who are you going on DateNight with?</label><input type="text" name="whoWith" /><br/>
    <label for="howLongTogether">How long have you been together?</label><input type="text" name="howLongTogether" /><br/>
    <span>Age range</span>
    <label for="18radio">18-25</label><input type="radio" name="ageRange" value="18" id="18radio" />
    <label for="26radio">26-33</label><input type="radio" name="ageRange" value="26" id="26radio" />
    <label for="34radio">34-44</label><input type="radio" name="ageRange" value="34" id="34radio" />
    <label for="45radio">45-55</label><input type="radio" name="ageRange" value="45" id="45radio" />
    <label for="55radio">55+</label><input type="radio" name="ageRange" value="55" id="55radio" /><br/>
    <label for="howOften">How often do you go on dates together?</label><input type="text" name="howOften" /><br/>
    <span>Do you have children?</span>
    <label for="childrenYes">Yes</label><input type="radio" name="children" value="true" id="childrenYes" />
    <label for="childrenNo">No</label><input type="radio" name="children" value="false" id="childrenNo" /><br/>
    <label for="hobbies">Are there any hobbies that you love to do together?</label><textarea name="hobbies"></textarea><br/>
    <label for="religion">What religion do you practice, if any?</label><input type="text" name="religion" /><br/>
    <label for="occasion">Is this DateNight for a special occasion? If so, what are you celebrating?</label><input type="text" name="occasion" /><br/>
    <label for="postcode">What is your postcode?</label><input type="text" name="postcode" /><br/>
    <input type='button' value='next' data-buttonNum='1' class='nextButton' />
  </div>
</div>

<div id='div2' class='questionContainerDiv'>
  <h1>Tell us what you would like to get out of your DateNight...</h1>
  <div id='questions2' class='questionDiv'>
    <span>More traditional or more adventurous?</span>
    <label for="traditional">Traditional</label><input type="radio" name="traditionalAdventurous" value="traditional" id="traditional" />
    <label for="adventurous">Adventurous</label><input type="radio" name="traditionalAdventurous" value="adventurous" id="adventurous" /><br/>
    <span>Would you like to stay close to home or explore a new area?</span>
    <label for="close">Close to home</label><input type="radio" name="closeOrFar" value="close" id="close" />
    <label for="far">Explore a new area</label><input type="radio" name="closeOrFar" value="far" id="far" />
    <input type='button' value='next' data-buttonNum='2' class='nextButton' />
  </div>
</div>

<div id='div3' class='questionContainerDiv'>
  <h1>Tick all the boxes that apply to you as a couple (or that you would like to apply, but realistically haven't done in years):</h1>
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
    <label for="raving">Raver</label><input type="checkbox" name="interests" value="raving" id="raving" />
    <label for="gigs">Gigger</label><input type="checkbox" name="interests" value="gigs" id="gigs" />
    <label for="art">Art Gallery Wanderer</label><input type="checkbox" name="interests" value="art" id="art" />
    <label for="dance">Dancing Queen</label><input type="checkbox" name="interests" value="dance" id="dance" />
    <label for="cooking">Culinary Wizard</label><input type="checkbox" name="interests" value="cooking" id="cooking" />
    <label for="singing">Singing Sensation</label><input type="checkbox" name="interests" value="singing" id="singing" />
    <label for="fashion">Passsion for Fashion</label><input type="checkbox" name="interests" value="fashion" id="fashion" />
    <label for="romance">True Romantic</label><input type="checkbox" name="interests" value="romance" id="romance" />
    <label for="classicalMusic">Classical Music Aficionado</label><input type="checkbox" name="interests" value="classicalMusic" id="classicalMusic" />
    <label for="travel">Globetrotter</label><input type="checkbox" name="interests" value="travel" id="travel" />
    <label for="sports">Sports Addict</label><input type="checkbox" name="interests" value="sports" id="sports" />
    <label for="speed">Need For Speed</label><input type="checkbox" name="interests" value="speed" id="speed" />
    <label for="books">Bookworm</label><input type="checkbox" name="interests" value="books" id="books" />
    <input type='button' value='next' data-buttonNum='3' class='nextButton' />
  </div>
</div>

<div id='div4' class='questionContainerDiv'>
  <h1>Click the one that most applies to you:</h1>
  <div id='questions4' class='questionDiv'>
    <label for="silly">Silly</label><input type="radio" name="sillySerious" value="silly" id="silly" />
    <label for="serious">Serious</label><input type="radio" name="sillySerious" value="serious" id="serious" /><br/>
    <label for="adventurous">Adventurous</label><input type="radio" name="adventurousTraditional" value="adventurous" id="adventuous" />
    <label for="traditional">Traditional</label><input type="radio" name="adventurousTraditional" value="traditional" id="traditional" /><br/>
    <label for="brave">Brave</label><input type="radio" name="braveCautious" value="brave" id="brave" />
    <label for="cautious">Cautious</label><input type="radio" name="braveCautious" value="cautious" id="cautious" /><br/>
    <label for="active">Active</label><input type="radio" name="activePassive" value="active" id="active" />
    <label for="passive">Passive</label><input type="radio" name="activePassive" value="passive" id="passive" /><br/>
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
    <label for="lastDates">Tell us briefly what you did on your last 3 dates...</label><textarea name="lastDates"></textarea>
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
          '/cgi-bin/register.py',
          {
            'data': $('form').serialize()
          })
      }
    });
});

  // Validates the section of the form in question,
  // and returns whether user should be allowed to continue
  function shouldContinue(e) {
    if (e.attr('data-buttonNum') == '1') {
      radios = ['ageRange','children'];
      other = ['whoWith','howLongTogether','howOften','hobbies','religion','occasion','postcode']
    }

    if (e.attr('data-buttonNum') == '2') {
      radios = ['traditionalAdventurous','closeOrFar'];
      other = []
    }

    if (e.attr('data-buttonNum') == '3') {
      radios = ['interests'];
      other = []
    }

    if (e.attr('data-buttonNum') == '4') {
      radios = ['sillySerious','adventurousTraditional','braveCautious','activePassive','laidBackActive','sociablePrivate'];
      other = []
    }

    if (e.attr('data-buttonNum') == '5') {
      radios = [];
      other = ['allergies','dietary','alcohol','fears','dislikes','lastDates']
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

</div>
</div>
</body>
</html>
