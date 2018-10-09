function lopta_draw() {

    if (lopta.x > 1200) { level_passed() }

    context.beginPath()
    if (lopta.pohlad == 0) { context.drawImage(pohlad[0], lopta.x - 15, lopta.y - 15, 30, 30) }
    if (lopta.pohlad == 1) { context.drawImage(pohlad[1], lopta.x - 15, lopta.y - 15, 30, 30) }
    if (lopta.pohlad == 2) { context.drawImage(pohlad[2], lopta.x - 15, lopta.y - 15, 30, 30) }
    if (lopta.pohlad == 3) { context.drawImage(pohlad[3], lopta.x - 15, lopta.y - 15, 30, 30) }

    context.closePath()

    if (lopta.naraz == false) {
        move(lopta)
    } else {
        check_point()
    }
}

function ciara_draw() {

    for (i in ciarky) {
        var ciara = ciarky[i]
        CiarkyVsLopta(ciara) //collision

        context.beginPath();
        context.rect(ciara.zac_x, ciara.zac_y, ciara.end_x, ciara.end_y);
        var pat = context.createPattern(prek_bg, "repeat");
        context.fillStyle = pat
        context.fill()
        context.closePath()
    }
}

function coin_draw() {

    for (i in coiny) {
        var coina = coiny[i]
        CoinVsLopta(coina) //collision

        if (coina.active == true) { //ak som coin este nezobral tak ho vykreslim
            context.beginPath();
            context.drawImage(img_coin, coina.x, coina.y)
            context.fill()
            context.closePath()
        }
    }
}

function diamant_draw() {

    for (i in diamanty) {
        var diam = diamanty[i]

        if (diam.active == true) { //ak som coin este nezobral tak ho vykreslim

            DiamantyVsLopta(diam)

            context.beginPath();
            context.drawImage(img_diamant, diam.x - 15, diam.y - 15, 30, 30)
            context.fill()
            context.closePath()
        }
    }

}

function priserka_draw() {

    for (i in priserky) {
        var priserka = priserky[i]
        PrisekyVsLopta(priserka) //collision
        CiarkyVsPriserky(priserka) //collision, the most bandwidth for count

        move(priserka)

        context.beginPath();
        context.drawImage(priserky_img[priserka.typ], priserka.x - 10, priserka.y - 10, 20, 20)
        context.fill()
        context.closePath()
    }
}

