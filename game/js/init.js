// INICIALIZACIA Globálnych premenných
// old practise, --OLD CODE-- I would Do it by constructors 
//and object methods and prototypes now
//Also functions are not in apropriate files.
// trolol combination of OOP with procedural style

function main() {
    animation()
    requestAnimationFrame(main)
}

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
var naraz_happened = false
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

function initAssets() {
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
}

function animation() {
    context.clearRect(0, 0, 5000, 5000)
    lopta_draw()
    priserka_draw()
    scorebar_draw()
    ciara_draw()
    coin_draw()
    diamant_draw()
    naraz_draw(naraz_happened)
}

window.onload = function () {
    
    newLevel(true)
    initAssets()

    canvas.style.backgroundImage = "url('img/bg.jpg')"

    window.onresize = function () {
        canvas.width = window.innerWidth
        canvas.height = window.innerHeight
        context.scale(window.innerWidth / 1200, window.innerHeight / 650)
    }
    $(window).trigger('resize');

    document.onkeydown = function (e) {
        doKeyDown(e)
    }
    controlTouch()

    window.scrollTo(0, 0) //Na odstránenie URL baru z mobilných browserov

    if ($.cookie('highscore') == undefined) { $.cookie('highscore', 0) }

    context.drawImage(intro, 200, 0, 800, 600)
    context.font = "60px Pixelic";
    context.fillStyle = '#101C04'
    context.fillText("Click/touch to PLAY !", 400, 600)

    $("#canvas_id").one("touch", main)
}