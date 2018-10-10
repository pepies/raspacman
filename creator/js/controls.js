function move(object) {
    switch (object.direction) {
        case "up":
            object.y -= object.dy
            object.pohlad = 1
            break;
        case "down":
            object.y += object.dy
            object.pohlad = 0
            break;
        case "left":
            object.x -= object.dx
            object.pohlad = 2
            break;
        case "right":
            object.x += object.dx
            object.pohlad = 3
            break;
        case "stop":
            //There is nothing to do
            break;
        default:
            //There is nothing to do
            break;

    }
}

function controlTouch() {

    Hammer(canvas).on("dragup swipeup", function (event) {
        lopta.direction = "up"
    });

    Hammer(canvas).on("dragdown swipedown", function (event) {
        lopta.direction = "down"
    });

    Hammer(canvas).on("dragleft swipeleft", function (event) {
        lopta.direction = "left"
    });

    Hammer(canvas).on("dragright swiperight", function (event) {
        lopta.direction = "right"
    });

}

function doKeyDown(e) {
    if (e.keyCode == 87 || e.keyCode == 38) {
        lopta.direction = "up"
    }

    if (e.keyCode == 83 || e.keyCode == 40) {
        lopta.direction = "down"
    }
    if (e.keyCode == 65 || e.keyCode == 37) {
        lopta.direction = "left"
    }

    if (e.keyCode == 68 || e.keyCode == 39) {
        lopta.direction = "right"
    }
}
