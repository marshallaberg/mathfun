/**
 * Created by Marshall on 12/3/2015.
 */
function add() {
    var a = parseFloat($("#a").val());
    var b = parseFloat($("#b").val());
    var c = parseFloat($("#c").val());
    var y = (parseFloat(a) + parseFloat(b));

    if (c==y){
        alert("Great!");
        var z = document.getElementById("correct").value;
        z += " \n"+a+" + "+b;
        document.getElementById("correct").value = z;
        document.getElementById("sf").setAttribute("style", "display:none");
        document.getElementById("hf").setAttribute("style", "display:inline");
    } else{
        alert("Don't worry. I am adding this to your practice list!");
        var z = document.getElementById("needsimprovemnt").value;
        z += " \n"+a+" + "+b;
        document.getElementById("needsimprovemnt").value = z;
        document.getElementById("sf").setAttribute("style", "display:inline");
        document.getElementById("hf").setAttribute("style", "display:none");
        y = parseFloat(y).toFixed(0);
        document.getElementById("result").innerHTML = "The Correct Answer is: "+y;
    }//endif
}//end function
function subtract() {
    var a = parseFloat($("#a").val());
    var b = parseFloat($("#b").val());
    var c = parseFloat($("#c").val());
    var y = (parseFloat(a) - parseFloat(b));

    if (c==y){
        alert("Great!");
        var z = document.getElementById("correct").value;
        z += " \n"+a+" - "+b;
        document.getElementById("correct").value = z;
        document.getElementById("sf").setAttribute("style", "display:none");
        document.getElementById("hf").setAttribute("style", "display:inline");

    } else{
        alert("Don't worry. I am adding this to your practice list!");
        var z = document.getElementById("needsimprovemnt").value;
        z += " \n"+a+" - "+b;
        document.getElementById("needsimprovemnt").value = z;
        document.getElementById("sf").setAttribute("style", "display:inline");
        document.getElementById("hf").setAttribute("style", "display:none");
        y = parseFloat(y).toFixed(0);
        document.getElementById("result").innerHTML = "The Correct Answer is: "+y;
    }//endif
}//end function
function mymult() {
    var a = parseFloat($("#a").val());
    var b = parseFloat($("#b").val());
    var c = parseFloat($("#c").val());
    var y = (parseFloat(a) * parseFloat(b));
    var sym = '\xD7';
    var str1 = ' \n ';

    if (c==y){
        alert("Great!");
        var z = document.getElementById("correct").value;
        z += (" \n"+a).concat(" ",sym," ",b);
        document.getElementById("correct").value = z;
        document.getElementById("sf").setAttribute("style", "display:none");
        document.getElementById("hf").setAttribute("style", "display:inline");
    } else{
        alert("Don't worry. I am adding this to your practice list!");
        var z = document.getElementById("needsimprovemnt").value;
        z += (" \n"+a).concat(" ",sym," ",b);
        document.getElementById("needsimprovemnt").value = z;
        document.getElementById("sf").setAttribute("style", "display:inline");
        document.getElementById("hf").setAttribute("style", "display:none");
        y = parseFloat(y).toFixed(0);
        document.getElementById("result").innerHTML = "The Correct Answer is: "+y;
    }//endif
}//end function
function mydivide() {
    var a = parseFloat($("#a").val());
    var b = parseFloat($("#b").val());
    var c = parseFloat($("#c").val());
    var y = (parseFloat(a) / parseFloat(b));
    var cround= Math.round(c * 10)/10;
    var yround= Math.round(y * 10)/10;
//    var op = '%F7';
    var sym = '\xF7';
    var str1 = ' \n ';

    if (cround==yround){
        alert("Great!");
        var z = document.getElementById("correct").value;
        z += (" \n"+a).concat(" ",sym," ",b);
        document.getElementById("correct").value = z;
        document.getElementById("sf").setAttribute("style", "display:none");
        document.getElementById("hf").setAttribute("style", "display:inline");
    } else{
        alert("Don't worry. I am adding this to your practice list!");
        var z = document.getElementById("needsimprovemnt").value;
        z += (" \n"+a).concat(" ",sym," ",b);
        document.getElementById("needsimprovemnt").value = z;
        document.getElementById("sf").setAttribute("style", "display:inline");
        document.getElementById("hf").setAttribute("style", "display:none");
        y = parseFloat(y).toFixed(1);
        document.getElementById("result").innerHTML = "The Correct Answer is: "+ y;
    }//endif
}//end function