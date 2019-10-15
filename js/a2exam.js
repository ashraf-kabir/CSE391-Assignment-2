var input = document.getElementById('input');
var result = document.getElementById('result');
var inputType = document.getElementById('inputType');
var resultType = document.getElementById('resultType');
var inputTypeValue, resultTypeValue;

// now add listener
input.addEventListener("onclick", myResult);
inputType.addEventListener("change", myResult);
resultType.addEventListener("change", myResult);

// taking initial value
inputTypeValue = inputType.value;
resultTypeValue = resultType.value;

function myResult() {

// when we change the input and output type vale we need to updata the
// inputTypeValue and resultTypeValue

    inputTypeValue = inputType.value;
    resultTypeValue = resultType.value;


// now compare the input and resultType value and add formula

    if (inputTypeValue === "pound" && resultTypeValue === "kilogram") {
        //this is pound to kilogram formula
        result.value = Number(input.value) * 0.4356;
        document.getElementById('result2').innerHTML = result.value + " kgs";
    } else if (inputTypeValue === "pound" && resultTypeValue === "pound") {
        //this is pound to pound formula
        result.value = input.value;
        document.getElementById('result2').innerHTML = result.value + " lbs";
    }


    if (inputTypeValue === "kilogram" && resultTypeValue === "pound") {
        //this is kilogram to pound formula
        result.value = Number(input.value) * 2.205;
        document.getElementById('result2').innerHTML = result.value + " lbs";

    } else if (inputTypeValue === "kilogram" && resultTypeValue === "kilogram") {
        //this is kilogram to kilogram formula
        result.value = input.value;
        document.getElementById('result2').innerHTML = result.value + " kgs";
    }

}
