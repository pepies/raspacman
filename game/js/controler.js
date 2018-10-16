check_point = function () {

    zvuk_naraz.play()

    //Vykreslovanie obrazku narazu
    rand = Math.random() * 3
    rand = rand.toFixed(0)
    naraz_happened = true
    kde_x = lopta.x
    kde_y = lopta.y

    if (lopta.direction == "left") { lopta.x += 20 }
    if (lopta.direction == "right") { lopta.x -= 20 }
    if (lopta.direction == "up") { lopta.y += 20 }
    if (lopta.direction == "down") { lopta.y -= 20 }

    lopta.direction = "stop"
    lopta.naraz = false
    
    if (lopta.life == 0) {
        level_over()
    } else {
        lopta.life -= 1
    }
}