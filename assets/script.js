const map1 = new Map()
map1.set("1", ["1986", "excel/novenyes/novenyes_feladat.pdf"])
map1.set("2", ["1986", "excel/novenyes/novenyek_forras.txt"])
map1.set("3", ["2112", "excel/arak/arak_feladat.pdf"])
map1.set("4", ["2112", "excel/arak/arak_nyers.xlsx"])
map1.set("5", ["7895", "excel/ittas/baleseti_statisztika_feladat.pdf"])
map1.set("6", ["7895", "excel/ittas/baleseti_statisztika_forras.xlsx"])
map1.set("7", ["5456", "excel/lotto5/lotto5_feladat.pdf"])
map1.set("8", ["5456", "excel/lotto5/lotto5_forras.xlsx"])
var current_obj = null

function unlock(obj) {
    doorkeeper = document.getElementById("doorkeeper")
    doorkeeper.style.display = "block"
    current_obj = obj
    if (current_obj.href.length > 0) {
        doorkeeper.style.display = "none"
    } else {
        pin = document.getElementById("pin")
        pin.focus();
    }
}

function reveal() {
    if (pin.value.length == 4) {
        item = map1.get(current_obj.id)

        if (pin.value == item[0]) {
            pin.value = ""
            current_obj.href = item[1]
        }
        pin.value = ""
        doorkeeper = document.getElementById("doorkeeper")
        doorkeeper.style.display = "none"
    }
}