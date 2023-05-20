// counts the amount of charters used in a text input or text area
function charcountupdate(str) {
    // gets charters from inputs with an id of "counter"
    var lng = str.length;
    // changes value of element with the id of counter
    document.getElementById("counter").innerHTML = lng + '/255'
}