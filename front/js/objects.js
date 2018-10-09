function hrac_constructor() {
    this.level = 0;
}
hrac_constructor.prototype.score = 0
/* skúšal som prototype */

function lopta_constructor() {
    //Constructor loptičky
    this.x = 50
    this.y = 50
    this.dx = 5 //nie vektor pohybu ale rychlost pohybu
    this.dy = 5
    this.naraz = false
    this.pohlad = 0
    this.direction = "stop"
    this.life = 3
    //this.score = 0

}

function ciara_constructor(zac_x, zac_y, end_x, end_y) {

    this.zac_x = zac_x
    this.zac_y = zac_y
    this.end_x = end_x
    this.end_y = end_y

}

function priserka_constructor(x, y, direction) {
    //Constructor monštra :D
    this.dx = 1
    this.dy = 1
    this.x = x
    this.y = y
    this.pohlad = 0
    this.typ = Math.random() * 3
    this.typ = this.typ.toFixed(0)
    this.direction = direction

}
priserka_constructor.prototype.change_direction = function (now) {
    if (now == "down") this.direction = "up"
    if (now == "up") this.direction = "down"
    if (now == "left") this.direction = "right"
    if (now == "right") this.direction = "left"
}



function boss_constructor(x, y) {
    //Constructor boss_constructora
    var smer = new array()
    smer["up", "down", "left", "right"]

    this.x = x
    this.y = y
    this.active = true
    this.dx = 5
    this.dy = 5
    this.typ = Math.random() * 3
    this.typ = this.typ.toFixed(0)
    this.smer = Math.random() * 5
    this.smer = this.smer.toFixed(0)

    boss_constructor.rand_direction = function () {

        smer_rand = Math.random() * 3
        smer_rand = smer_rand.toFixed(0)
        this.direction = smer[smer_rand] // 0,1,2,3
    }
}
function coin_constructor(x, y, active) {
    //Constructor bodov
    this.x = x - 5
    this.y = y - 5
    this.active = true
}
function diamant_constructor(x, y, active) {
    //Constructor bodov
    this.x = x - 15
    this.y = y - 15
    this.active = true
}