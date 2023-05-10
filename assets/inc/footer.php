
<footer>
    <!-- used to show copyright information  -->
  <p class = "footertext" > &copy;<span id="copyrightyear"></span> Lincs Marigold. All Rights Reserved </p>

  <div id="footercontent">

    <!-- Aa div used to store buttons -->
    <div id="overlaysettings">
        <!-- buttons used to open and close overlay -->
        <button class="overlaybutton" onclick="toggleOverlay()">Toggle Overlay</button>
        <input  id="colourchange" onchange="changecolour()" type="color" value="#add8e6">
    </div>

  </div>

</footer>


<script>
  overlayActive = false;
    // used to display overlay 
    function showoverlay() {
     document.getElementById("overlay").style.display = "block";
  }
//   used to get rid of overlay
  function hideoverlay() {
      document.getElementById("overlay").style.display = "none";
  }

  function toggleOverlay() {
    
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
  

  
</script>

