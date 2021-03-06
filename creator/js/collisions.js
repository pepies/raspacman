function lopta.check_point() {

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
    
}

function CiarkyVsLopta(ciara) {
    if (((lopta.x - 15) < (ciara.end_x + ciara.zac_x) && (lopta.x + 15) > ciara.zac_x)
        &&
        ((lopta.y - 15) < (ciara.end_y + ciara.zac_y) && (lopta.y + 15) > ciara.zac_y)) {
        lopta.naraz = true
    }
}

function PrisekyVsLopta(priserka) {
    if (
        (lopta.x + 15 >= priserka.x) && (lopta.x <= priserka.x + 15) &&
        (lopta.y + 15 >= priserka.y) && (lopta.y <= priserka.y + 15)
    ) {
        zvuk_monster.play()
        lopta.check_point()
    }
}

function CoinVsLopta(coina) {

    if ((lopta.x + 15 >= coina.x
        &&
        lopta.x <= coina.x + 20
        &&
        (lopta.y + 15 >= coina.y
            &&
            lopta.y <= coina.y + 25
        )) && coina.active == true) {
        coina.active = false
        hrac.score++
        zvuk_coin.current = 0
        zvuk_coin.play()
    }
}

function DiamantyVsLopta(diam) {
    if ((((lopta.x + 18) > diam.x)
        &&
        (lopta.x < (diam.x + 18))
        &&
        (((lopta.y + 18) > diam.y)
            &&
            (lopta.y < (diam.y + 18))) && diam.active == true)
    ) {
        diam.active = false
        hrac.score += 5
        zvuk_diam.play()
    }
}

function CiarkyVsPriserky(priserka) {
    for (i in ciarky) {
        var ciara = ciarky[i]

        if ((((priserka.x - 15) <= (ciara.end_x + ciara.zac_x)) && ((priserka.x + 15) >= ciara.zac_x))
            &&
            (((priserka.y - 15) <= (ciara.end_y + ciara.zac_y)) && ((priserka.y + 15) >= ciara.zac_y))) {
            priserka.change_direction(priserka.direction)
        }
    }
}

