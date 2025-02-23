const map1 = new Map()
map1.set("1", ["1986", "./novenyes/novenyes_feladat.pdf"])
map1.set("2", ["1986", "./novenyes/novenyek_forras.txt"])
map1.set("3", ["2112", "./arak/arak_feladat.pdf"])
map1.set("4", ["2112", "./arak/arak_nyers.xlsx"])
var current_obj = null

function unlock(obj) {
    doorkeeper = document.getElementById("doorkeeper")
    doorkeeper.style.display = "block"
    current_obj = obj
    if (current_obj.href.length > 0) {
        doorkeeper.style.display = "none"
    }
}

function reveal() {
    pin = document.getElementById("pin")
    console.log(pin.value)
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