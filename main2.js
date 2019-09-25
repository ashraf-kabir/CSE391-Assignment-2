var input = document.getElementById('input');
var result = document.getElementById('result');
var inputType = document.getElementById('inputType');
var resultType = document.getElementById('resultType');
var inputTypeValue, resultTypeValue;

// now add listener
input.addEventListener("keyup", myResult);
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
        //this is meter to kilometer formula
        result.value = Number(input.value) * 0.4356;
    } else if (inputTypeValue === "pound" && resultTypeValue === "pound") {
        //this is meter to meter formula
        result.value = input.value
    }


    if (inputTypeValue === "kilogram" && resultTypeValue === "pound") {
        //this is kilometer to meter formula
        result.value = Number(input.value) * 2.205;
    } else if (inputTypeValue === "kilogram" && resultTypeValue === "kilogram") {
        //this is kilometer to kilometer formula
        result.value = input.value
    }


}
