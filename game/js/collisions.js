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

