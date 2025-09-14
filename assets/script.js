const map1 = new Map([
    ["1", ["1986", "excel/novenyes/novenyes_feladat.pdf"]],
    ["2", ["1986", "excel/novenyes/novenyek_forras.txt"]],
    ["3", ["2112", "excel/arak/arak_feladat.pdf"]],
    ["4", ["2112", "excel/arak/arak_nyers.xlsx"]],
    ["5", ["7895", "excel/ittas/baleseti_statisztika_feladat.pdf"]],
    ["6", ["7895", "excel/ittas/baleseti_statisztika_forras.xlsx"]],
    ["7", ["5456", "excel/lotto5/lotto5_feladat.pdf"]],
    ["8", ["5456", "excel/lotto5/lotto5_forras.xlsx"]],
    ["9", ["5555", "prog/pico8/pico-8_0.2.7_amd64.zip"]],
    ["10", ["5555", "prog/pico8/pico-8_0.2.7_windows.zip"]]
]);

let currentObj = null;
const PIN_LENGTH = 4;
let errorTimeout = null;

function showError() {
    const errorDialog = document.getElementById('pin-error');
    const doorkeeper = document.getElementById("doorkeeper");
    errorDialog.style.display = 'block';
    
    // Clear any existing timeout
    if (errorTimeout) {
        clearTimeout(errorTimeout);
    }
    
    // Hide the error after 2 seconds
    errorTimeout = setTimeout(() => {
        errorDialog.style.display = 'none';
        doorkeeper.style.display = "none";
    }, 2000);
}

function unlock(obj) {
    const doorkeeper = document.getElementById("doorkeeper");
    const pin = document.getElementById("pin");
    
    if (obj.href && obj.href.length > 0) {
        return;
    }
    
    currentObj = obj;
    doorkeeper.style.display = "block";
    pin.value = "";
    pin.focus();
}

function reveal() {
    const pin = document.getElementById("pin");
    const doorkeeper = document.getElementById("doorkeeper");
    
    if (!currentObj || !pin.value || pin.value.length !== PIN_LENGTH) {
        return;
    }

    const item = map1.get(currentObj.id);
    if (!item) {
        console.error('Invalid ID:', currentObj.id);
        return;
    }

    const [correctPin, resourcePath] = item;
    
    if (pin.value === correctPin) {
        currentObj.href = resourcePath;
        currentObj.click();
        pin.value = "";
        doorkeeper.style.display = "none";
        currentObj = null;
    } else {
        showError();
        pin.value = "";
        pin.focus();
    }
}