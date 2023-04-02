
<footer>
<p class = "footertext" > &copy;<span id="copyrightyear"></span> Lincs Marigold. All Rights Reserved </p>

<!-- <h2>CLICK TO SEE OVERLAY</h2> -->
<button onclick="showoverlay()">Open Over</button>
<button onclick="hideoverlay()">hide Over</button>

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

