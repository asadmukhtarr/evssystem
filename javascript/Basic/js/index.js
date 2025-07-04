function abc(v) {
    if (v == "c") {
        document.getElementById("result").value = null;
    } else if (v == "=") {
        var already_value = document.getElementById("result").value;
        document.getElementById("result").value = eval(already_value);
    } else {
        var already_value = document.getElementById("result").value;
        var current_value = already_value + v;
        document.getElementById("result").value = current_value;
    }
}
var name = "Asad";
var name2 = "Musa";
var x = 2332;
var y = 8;
console.log(x + y);
/// web page is called document ..
// Element means that tag of html ..