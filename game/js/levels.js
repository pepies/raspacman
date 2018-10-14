function level_passed() {

  lopta.direction = "stop";
  newLevel(true)
}

function level_over() {

  lopta.direction = "stop"

  if ($.cookie('highscore') < hrac.score) { $.cookie('highscore', hrac.score) }

  lopta.life = 3
  hrac.score -= 10
  if (hrac.score < 0) hrac.score = 0

  newLevel(false)
}

function clear_gameboard() {
  ciarky.splice(0, 9999)
  coiny.splice(0, 9999)
  diamanty.splice(0, 9999)
  priserky.splice(0, 9999)
  pridaj_ciaru(0, 600, 1200, 5)
  pridaj_ciaru(0, 0, 1200, 5)
  pridaj_ciaru(0, 0, 5, 600)
}

/**
 * @param {bool} setNew - draw new level?
 */
function newLevel(setNew) {
  clear_gameboard()

  if (setNew) {
    hrac.level++
  }

  if (hrac.level == 1) {
    level_1()
  } else {
    level_rand_db()
  }
}

function level_rand_db() {
  clear_gameboard()
  $.ajax({
    type: "GET",
    dataType: "json",
    url: "https://raspacman.brecska.sk/back/src/api/get.php",
    success: function (result) {
      lopta.x = result[0].character.x
      lopta.y = result[0].character.y
      $.each( result[0].lines, function (index) {
        let l = result[0].lines[index];
        pridaj_ciaru(l.start_x, l.start_y, l.end_x, l.end_y)
      })
      $.each( result[0].monsters, function (index) {
        let m = result[0].monsters[index];
        pridaj_priserku(m.x, m.y, m.direction)
      })
      $.each( result[0].diamonds, function (index) {
        let d = result[0].diamonds[index];
        pridaj_diamant(d.x, d.y)
      })
      $.each( result[0].coins, function (index) {
        let c = result[0].coins[index];
        pridaj_diamant(c.x, c.y)
      })
    },
    error: function () {
      console.log('error getting level')
    }
  })
}

function level_1() {

  lopta.x = 50
  lopta.y = 50

  //****************
  pridaj_ciaru(90, 0, 5, 400)
  pridaj_ciaru(180, 150, 5, 450)
  pridaj_ciaru(180, 150, 270, 5)
  pridaj_ciaru(530, 0, 5, 270)
  pridaj_ciaru(360, 270, 175, 5)

  pridaj_ciaru(360, 270, 5, 175)
  pridaj_ciaru(360, 440, 90, 5)
  pridaj_ciaru(270, 530, 90, 5)
  pridaj_ciaru(270, 350, 5, 180)
  pridaj_ciaru(480, 360, 230, 5)

  pridaj_ciaru(620, 360, 5, 240)
  pridaj_ciaru(710, 180, 5, 185)

  pridaj_ciaru(820, 0, 5, 360)
  pridaj_ciaru(710, 440, 270, 5)
  pridaj_ciaru(980, 85, 5, 360)

  pridaj_ciaru(1090, 360, 5, 240)
  pridaj_ciaru(1090, 0, 5, 180)

  //--------------------------------------

  pridaj_coin(50, 280)
  pridaj_coin(50, 300)
  pridaj_coin(50, 320)

  pridaj_coin(150, 100)
  pridaj_coin(180, 100)
  pridaj_coin(210, 100)

  pridaj_coin(320, 460)
  pridaj_coin(320, 480)
  pridaj_coin(220, 460)
  pridaj_coin(220, 480)

  pridaj_coin(650, 100)
  pridaj_coin(650, 120)

  pridaj_coin(765, 300)

  pridaj_coin(925, 200)
  pridaj_coin(925, 220)
  pridaj_coin(925, 240)

  //------------------------------------

  pridaj_diamant(100, 550)
  pridaj_diamant(580, 500)

  pridaj_diamant(900, 570)
  pridaj_diamant(800, 570)

  //------------------------------------

  pridaj_priserku(100, 500, "left")
  pridaj_priserku(550, 500, "up")

  pridaj_priserku(900, 550, "left")
  pridaj_priserku(800, 570, "right")

}