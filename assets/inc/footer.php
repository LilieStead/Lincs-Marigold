
<footer>
    <!-- used to show copyright information  -->
  <p class = "footertext" > &copy;<span id="copyrightyear"></span> Lincs Marigold. All Rights Reserved </p>

  <div id="footercontent">

    <!-- Aa div used to store buttons -->
    <div id="overlaysettings">
        <!-- buttons used to open and close overlay -->
        <button class="overlaybutton" onclick="toggletext()">Text size</button>
        <button class="overlaybutton" onclick="toggleoverlay()">Toggle Overlay</button>
        <input  id="colourchange" onchange="changecolour()" type="color" value="#add8e6">
    </div>

  </div>

</footer>


<script>
  let overlayActive = false;

  function toggleoverlay() {
    
    if(!overlayActive)
    {
      
      overlayActive = true;
      document.getElementById("overlay").style.display = "block";

    }
    else{
      overlayActive = false;
      document.getElementById("overlay").style.display = "none";

    }
  }
// used to change the colour of the overlay
  function changecolour(){
    var colourinput = document.getElementById("colourchange");
    var colour = colourinput.value;
    document.getElementById("overlay").style.backgroundColor=colour;
  }
//   Java script used to get the year 
    document.getElementById("copyrightyear").innerHTML = new Date().getFullYear();
  
    let originalFontSize;
let textsize = false;

function toggletext() {
  const paragraphs = document.querySelectorAll("p");
  
  if (!textsize) {
    textsize = true;
    
    // Store the original font size if not already stored
    if (!originalFontSize) {
      originalFontSize = [];
      paragraphs.forEach(p => {
        originalFontSize.push(p.style.fontSize);
      });
    }
    
    paragraphs.forEach(p => {
      p.style.fontSize = "1.3em"; // Update font size to 20px
    });
  } else {
    textsize = false;
    
    paragraphs.forEach((p, index) => {
      p.style.fontSize = originalFontSize[index]; // Revert to original font size
    });
  }
}


</script>

