function len(obj) {
    return obj.value.length;
}

let textbox1 = document.querySelectorAll(".textbox")[0];
let textbox2 = document.querySelectorAll(".textbox")[1];
let inp1 = document.querySelectorAll(".inp")[0];
let inp2 = document.querySelectorAll(".inp")[1];

inp1.onchange = function() {
    inp1.value = inp1.value.toUpperCase();
}

function func1(obj1,obj2) {     //When the box is active or on focus
    if(obj1.className=='textbox' && obj2.className=="inp") {
        obj1.className="textbox act";
        obj2.className="inp acti";
    }
}

function func2(e,obj1,obj2) {   //When the box is not active or not on focus
    if(e!=obj1 && e!=obj2 && e!=obj1.children[0]) {
        if(len(obj2)==0) {
            if(obj1.className=='textbox act' && obj2.className=="inp acti") {
                obj1.className="textbox";
                obj2.className="inp";
            }
        }
    }
}

inp1.onfocus = function() {
    func1(textbox1,inp1);
}
inp2.onfocus = function() {
    func1(textbox2,inp2);
}
window.onclick = function(e) {
    func2(e.target,textbox1,inp1);
    func2(e.target,textbox2,inp2);
}