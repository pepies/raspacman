function relMouseCoords(event) {
    var totalOffsetX = 0
    var totalOffsetY = 0
    var canvasX = 0
    var canvasY = 0
    var currentElement = this

    do {
        totalOffsetX += currentElement.offsetLeft - currentElement.scrollLeft
        totalOffsetY += currentElement.offsetTop - currentElement.scrollTop
    }
    while (currentElement = currentElement.offsetParent)

    canvasX = event.pageX - totalOffsetX
    canvasY = event.pageY - totalOffsetY

    return { x: canvasX, y: canvasY }
}
HTMLCanvasElement.prototype.relMouseCoords = relMouseCoords

// change view

function add_monster_h(x, y) {
    pridaj_priserku(x, y, "left")
}

function add_monster_v(x, y) {
    pridaj_priserku(x, y, "up")
}

function change_starting_pos(x, y) {
    lopta.x = x
    lopta.y = y
}

function add_diamant(x, y) {
    pridaj_diamant(x, y)
}

function add_coin(x, y) {
    pridaj_coin(x, y)
}

let lineStart;
function start_line(x, y) {
    $(".controls").hide();
    lineStart = {x, y}
}

function end_line(x, y) {
    $(".controls").show();
    pridaj_ciaru(lineStart.x, lineStart.y, x-lineStart.x, y-lineStart.y)
    lineStart = null;
}

// click handling to canvas

$("#canvas_id").click(function () {
    coords = canvas.relMouseCoords(event)
    if (typeof selected == "undefined") {
        window.alert("Choose one option above")
        selected = ""
    }
    switch (selected) {
        case "add_monster_h":
            add_monster_h(coords.x, coords.y)
            break;
        case "add_monster_v":
            add_monster_v(coords.x, coords.y)
            break;
        case "change_starting_pos":
        change_starting_pos(coords.x, coords.y)
            break;
        case "add_diamant":
            add_diamant(coords.x, coords.y)
            break;
        case "add_coin":
            add_coin(coords.x, coords.y)
            break;
        case "add_line":
            start_line(coords.x, coords.y)
            selected = "end_line"
            break;
        case "end_line":
            end_line(coords.x, coords.y)
            selected = "add_line"
            break;
        default:
    }
})

//selecteds select in HTML

$('.monster_v').click(function () {
    selected = "add_monster_v"
    $("div").removeClass('active');
    $(this).addClass("active")
})

$('.monster_h').click(function () {
    selected = "add_monster_h"
    $("div").removeClass('active');
    $(this).addClass("active")
})

$('.starting_pos').click(function () {
    selected = "change_starting_pos"
    $("div").removeClass('active');
    $(this).addClass("active")
})
$('.diamant').click(function () {
    selected = "add_diamant"
    $("div").removeClass('active');
    $(this).addClass("active")
})
$('.coin').click(function () {
    selected = "add_coin"
    $("div").removeClass('active');
    $(this).addClass("active")
})
$('.line').click(function () {
    selected = "add_line"
    $("div").removeClass('active');
    $(this).addClass("active")
})

// handle send function

$('.save').click(function () {
    $(this).addClass("active")    
    sendToServer({
        priserky,
        coiny,
        diamanty,
        ciarky,
        start: {
            x: lopta.x,
            y: lopta.y
        }
    })   
})

function sendToServer(data) {
    $.ajax({
        type: "POST",
        url: 'https://raspacman.brecska.sk/back/src/api/create.php',
        data: data,
        success: function (response) {
            console.table(response)
            window.alert("Succesfully sent")
        },
        error: function () {
            window.alert("error")
        },
        dataType: 'json'
      });
}