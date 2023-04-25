
<footer>
  <!-- used to show copyright information  -->
<p class = "footertext" > &copy;<span id="copyrightyear"></span> Lincs Marigold. All Rights Reserved </p>

<div id="footercontent">

  <!-- Aa div used to store buttons -->
  <div id="overlaysettings">
    <!-- buttons used to open and close overlay -->
    <button class="overlaybutton" onclick="showoverlay()">Open Overlay</button>
    <button class="overlaybutton" onclick="hideoverlay()">Hide Overlay</button>
  </div>

<<<<<<< Updated upstream
=======
<!-- Aa div used to store buttons -->
<div id="overlaysettings">
  <!-- buttons used to open and close overlay -->
  <button class="overlaybutton" onclick="showoverlay(); document.cookie = 'show_overlay=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;'">Open Overlay</button>
  <button class="overlaybutton" onclick="hideoverlay()">Hide Overlay</button>
>>>>>>> Stashed changes
</div>

</footer>


<script>
    // used to display overlay 
    function showoverlay() {
    document.getElementById("overlay").style.display = "block";
  }
//   used to get rid of overlay
  function hideoverlay() {
    document.getElementById("overlay").style.display = "none";
  }
//   Java script used to get the year 
    document.getElementById("copyrightyear").innerHTML = new Date().getFullYear();
  

    if (document.cookie.indexOf("show_overlay=true") !== -1) {
    // display the overlay
    showoverlay();
  }
  
</script>

