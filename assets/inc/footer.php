
<footer id=footerid>
    <!-- used to show copyright information  -->
  <p class = "footertext" > &copy;<span id="copyrightyear"></span> Lincs Marigold. All Rights Reserved </p>

  <div id="footercontent">

    <!-- Aa div used to store buttons -->
    <div id="overlaysettings">
        <!-- buttons used to open and close overlay -->
        <button class="overlaybutton" onclick="toggletext()">Text size</button>
        <button class="overlaybutton" onclick="toggleoverlay()">Overlay</button>
        <input  id="colourchange" onchange="changecolour()" type="color" value="#add8e6">
    </div>

  </div>

</footer>


<script>
  // overlay toggle on and off  
  let overlayActive = false;

  

  function toggleoverlay() {
    // if not false change to true on click 
    if(!overlayActive)
    {
      
      overlayActive = true;
      // makes element visible 
      document.getElementById("overlay").style.display = "block";

    }
    else{
      overlayActive = false;
      // makes element hidden
      document.getElementById("overlay").style.display = "none";

    }
  }
  // END OF OVERLAY TOGGLE 


// used to change the colour of the overlay
  function changecolour(){
    var colourinput = document.getElementById("colourchange");
    // sotres uses value
    var colour = colourinput.value;
    // aplays the value to the overlay
    document.getElementById("overlay").style.backgroundColor=colour;
  }
  // END OF OVERLAY COLOUR CHANGE 


  // Java script used to get the year 
    document.getElementById("copyrightyear").innerHTML = new Date().getFullYear();
  // END OF GET YEAR 

    // used to store the original size of font 
  let originalFontSize;
  // used to determent if text size is on or off 
  let textsize = false;

// used to toggle font size
function toggletext() {
  const paragraphs = document.querySelectorAll("p");
  var footer = document.querySelector("#footerid");

  // if text is false chnage to true 
  if (!textsize) {
    textsize = true;
    footer.classList.add("footersize");
    
    // changes back to original font size 
    if (!originalFontSize) {
      
      originalFontSize = [];
      paragraphs.forEach(p => {
        originalFontSize.push(p.style.fontSize);
      });
    }
    // for each p tag change the font size 
    paragraphs.forEach(p => {
      p.style.fontSize = "1.3em"; // update font size to 20px
    });
  } else {
    // remove the class from the footer as font is back to its original size
    footer.classList.remove("footersize");
    textsize = false;
    // change p tags to original size 
    paragraphs.forEach((p, index) => {
      p.style.fontSize = originalFontSize[index]; // revert to original font size
    });
  }
}
// END OF FONT CHANGE 


</script>

