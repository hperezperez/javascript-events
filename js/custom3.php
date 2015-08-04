<!DOCTYPE html
	<html>
	<mysql>
<!--begin main content panel-->
<main class="content-main col-xs-12 col-md-9">
	<h2>What is an event?</h2>
<ol>
<li>Something the browser does.</li>
<li>Something the user does.</li>
</ol>
<p>Visit <a href="https://developer.mozilla.org/en-US/docs/Web/Events">MDN</a> for a more complete list.</p>
<h2>Examples</h2>
<h3>Pop Up Box</h3>
<a class="btn btn-primary" id='popUp' onclick="popUp();">Sign Up</a>
<div id="signUp">
	<h3>Sign Up</h3>
<p>Some kind of sign up form.</p>
<div id="closePopUp" onclick="closeSignUp();">X</div>
	</div>
	<p>Click on the button above to sign up for our website via a pop up.</p>
<h3>Some form logic</h3>
<p><input type="checkbox" id="checkbox" value="1" onchange="showMoreInfo();"> Check here to fill out more info. Change your mind? Then uncheck the box.</p>
<div id="moreInfo">
	<textarea cols="150" rows="10"></textarea>
	</div>
	<h2>Prework Examples</h2>
<h3>On Click</h3>
<p>Specifies a JavaScript action when a user clicks on an element.</p>
<div id="click" onclick="clickEvent();">Click Me</div>
<h3>On Mouse Over and On Mouse Out</h3>
<div id="mouse" onmouseover="mouseOver();" onmouseout="mouseOut();">Hover over me.</div>
<h3>Kitty Creator</h3>
<figure>
<img id="kitten" src="http://placekitten.com/g/250/250" />
	<figcaption>Figure 1: Meow</figcaption>
</figure>
<br/>
<p>
<label for="dimension">Dimension</label><br />
	<input id="dimension" name="dimension" type="range" min="0" max="512" value="250" onchange="resizeKitty();" />
	<span id="dimensionValue">Slide to start&hellip;</span>
</p>
</main><!--.content-main-->
</mysql>
	</html>