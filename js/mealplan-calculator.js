function change() {
    var select = document.getElementById("slct");
    var divv = document.getElementById("container");
    var value = select.value;
    if (value == 1) {
        toAppend = "<input type='textbox' >"; divv.innerHTML=toAppend; return;
        }
        if (value == 2) {
            toAppend = "<input type='textbox' >&nbsp;<input type='textbox' >";divv.innerHTML = toAppend;  return;
        }
        if (value = 3) {
            toAppend = "<input type='textbox' >&nbsp;<input type='textbox' >&nbsp;<input type='textbox' >";divv.innerHTML = toAppend;  return;

        }
 }