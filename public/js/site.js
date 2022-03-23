//Start/controller function
function getValues() {
    let startValue = document.querySelector('#startValue').value;
    let endValue = document.querySelector('#endValue').value;

    //Validate input
    startValue = parseInt(startValue);
    endValue = parseInt(endValue);

    if (Number.isInteger(startValue) && Number.isInteger(endValue)) {
        let numbersArray = generateNumbers(startValue, endValue);
        displayNumbers(numbersArray);
    } else {
        alert('Only integers are valid!');
    }

}

//Logic function
function generateNumbers(start, end) {
    let numbers = [];

    for (let index = start; index <= end; index++) {
        numbers.push(index);
    }

    return numbers;
}

//Display/view function
function displayNumbers(numbers) {
    let templateRows = "";
    let className;

    for (let i = 0; i < numbers.length; i++) {
        let number = numbers[i];

        if (number % 2 == 0) {
            className = "even";
        } else {
            className = "odd"
        }

        templateRows += `<tr><td class="${className}">${number}</td></tr>`;
    }

    document.querySelector('#results').innerHTML = templateRows;
}