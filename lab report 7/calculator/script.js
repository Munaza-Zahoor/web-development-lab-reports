let displayValue = '';
function appendToDisplay(value) {
    document.getElementById('display').value += value;
    
}
function deleteLast() {
    displayValue = document.getElementById('display').value;
    displayValue = displayValue.slice(0, -1);
    document.getElementById('display').value = displayValue;
}
function clearDisplay() {
    document.getElementById('display').value = '';
}

function calculateResult() {
    try {
        document.getElementById('display').value = eval(document.getElementById('display').value);
    } catch (error) {
        document.getElementById('display').value = 'Error';
    }
    
}

