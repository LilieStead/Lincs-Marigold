// counts the amount of charters used in a text input or text area
function charcountupdate(str) {
    var lng = str.length;
    // gets charters from inputs with an id of "counter"
    document.getElementById("counter").innerHTML = lng + '/255'
}