
<footer>
  <!-- used to show copyright information  -->
<p class = "footertext" > &copy;<span id="copyrightyear"></span> Lincs Marigold. All Rights Reserved </p>



<!-- Aa div used to store buttons -->
<div id="overlaysettings">
  <!-- buttons used to open and close overlay -->
  <button class="overlaybutton" onclick="showoverlay()">Open Overlay</button>
  <button class="overlaybutton" onclick="hideoverlay()">Hide Overlay</button>
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
</script>

