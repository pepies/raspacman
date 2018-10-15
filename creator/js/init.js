// INICIALIZACIA Globálnych premenných
var canvas
var context
var levels = []
var pohlad = [3]
var naraz_image = [3]

var ciarky = []
var coiny = []
var diamanty = []
var priserky = []

var priserky_img = []

//Vykreslovanie obrazku narazu
var draw = false
var rand = 0
var inc = 0
var kde_x = 0
var kde_y = 0

var lopta = new lopta_constructor()
var hrac = new hrac_constructor()


function pridaj_ciaru(x, y, w, h) {
    ciarky.push(new ciara_constructor(x, y, w, h))
}

function pridaj_coin(x, y) {
    coiny.push(new coin_constructor(x, y))
}

function pridaj_diamant(x, y) {
    diamanty.push(new diamant_constructor(x, y))
}

function pridaj_priserku(x, y, direction) {
    priserky.push(new priserka_constructor(x, y, direction))
}

//**********************************************************


function init() {

    //PRELOAD prostredia pre canvas
    newLevel(true)

    //načítanie obrázkov
    pohlad[0] = document.getElementById('front')
    pohlad[1] = document.getElementById('back')
    pohlad[2] = document.getElementById('left')
    pohlad[3] = document.getElementById('right')

    naraz_image[0] = document.getElementById('naraz_1')
    naraz_image[1] = document.getElementById('naraz_2')
    naraz_image[2] = document.getElementById('naraz_3')
    naraz_image[3] = document.getElementById('naraz_4')

    priserky_img[0] = document.getElementById('enemy_0')
    priserky_img[1] = document.getElementById('enemy_1')
    priserky_img[2] = document.getElementById('enemy_2')
    priserky_img[3] = document.getElementById('enemy_3')

    prek_bg = document.getElementById('prek_bg')

    life = document.getElementById('life')

    img_diamant = document.getElementById('img_diamant')
    img_coin = document.getElementById('img_coin')

    //SOUND
    zvuk_naraz = document.getElementById("zvuk_naraz")
    zvuk_diam = document.getElementById("zvuk_diam")
    zvuk_coin = document.getElementById("zvuk_coin")
    zvuk_power = document.getElementById("zvuk_power")
    zvuk_monster = document.getElementById("zvuk_monster")

    canvas = document.getElementById('canvas_id')
    context = canvas.getContext('2d')

    window.onresize = function () {
        updateScreenSize()
    }

    function updateScreenSize() {
        canvas.width = 1200
        canvas.height =  650
        //context.scale(canvas.width / 1200, canvas.height / 650)
    }
    updateScreenSize()
    canvas.style.backgroundImage = "url('img/bg.jpg')"

}

function main() {
    animation()
    requestAnimationFrame(main)
}

function animation() {
    context.clearRect(0, 0, 5000, 5000)

    lopta_draw()
    priserka_draw()
    ciara_draw()
    coin_draw()
    diamant_draw()

    if (draw) {
        context.drawImage(naraz_image[rand], kde_x - (inc * 2), kde_y - (inc * 2), inc * 5, inc * 4)
        inc++
        if (inc > 20) {
            draw = false
            inc = 0
        }
    }
}

window.onload = function () {
    init()
    document.onkeydown = function (e) {
        doKeyDown(e)
    }
    controlTouch()

    window.scrollTo(0, 0) //Na odstránenie URL baru z mobilných browserov

    if ($.cookie('highscore') == undefined) { $.cookie('highscore', 0) }

    main()
}