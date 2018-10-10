function lopta_draw() {

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

function scorebar_draw() {
    // context.font = "30px Pixelic";
    // context.fillStyle = '#101C04'
    // context.fillText("Skore: ", 50, 640)
    // context.fillStyle = 'black';
    // context.fillText(hrac.score, 140, 640)
    // context.fillStyle = '#101C04'
    // context.fillText("ZivOtY:", 210, 640)


    // if (lopta.life >= 1) {
    //     context.drawImage(life, 300, 610, 35, 35)
    //     context.fill()

    //     if (lopta.life >= 2) {

    //         context.drawImage(life, 340, 610, 35, 35)
    //         context.fill()


    //         if (lopta.life == 3) {

    //             context.drawImage(life, 380, 610, 35, 35)
    //             context.fill()

    //         } else {
    //             context.drawImage(life_empty, 380, 610, 35, 35)
    //             context.fill()
    //         }
    //     } else {
    //         context.drawImage(life_empty, 340, 610, 35, 35)
    //         context.drawImage(life_empty, 380, 610, 35, 35)
    //         context.fill()
    //     }
    // } else {
    //     context.drawImage(life_empty, 300, 610, 35, 35)
    //     context.drawImage(life_empty, 340, 610, 35, 35)
    //     context.drawImage(life_empty, 380, 610, 35, 35)
    //     context.fill()
    // }

    // context.fillStyle = '#101C04'
    // context.fillText("Highscore: ", 430, 640)
    // context.fillStyle = 'black'
    // context.fillText($.cookie('highscore'), 590, 640)

    // context.fillStyle = '#101C04'
    // context.fillText("LEVEL " + (hrac.level + 1) + "-->", 1060, 300)
}

