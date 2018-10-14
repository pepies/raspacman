function clear_gameboard() {
  ciarky.splice(0, 9999)
  coiny.splice(0, 9999)
  diamanty.splice(0, 9999)
  priserky.splice(0, 9999)
  pridaj_ciaru(0, 600, 1200, 5)
  pridaj_ciaru(0, 0, 1200, 5)
  pridaj_ciaru(0, 0, 5, 600)
  // pridaj_ciaru(1199, 0, 1, 600)
}

/**
 * @param {bool} setNew - draw new level?
 */
function newLevel(setNew) {
  clear_gameboard()
}
 
// function level_rand_db() {
  
// }

// function level_1() {

//   lopta.x = 50
//   lopta.y = 50

//   //****************
//   pridaj_ciaru(90, 0, 5, 400)
//   pridaj_ciaru(180, 150, 5, 450)
//   pridaj_ciaru(180, 150, 270, 5)
//   pridaj_ciaru(530, 0, 5, 270)
//   pridaj_ciaru(360, 270, 175, 5)

//   pridaj_ciaru(360, 270, 5, 175)
//   pridaj_ciaru(360, 440, 90, 5)
//   pridaj_ciaru(270, 530, 90, 5)
//   pridaj_ciaru(270, 350, 5, 180)
//   pridaj_ciaru(480, 360, 230, 5)

//   pridaj_ciaru(620, 360, 5, 240)
//   pridaj_ciaru(710, 180, 5, 185)

//   pridaj_ciaru(820, 0, 5, 360)
//   pridaj_ciaru(710, 440, 270, 5)
//   pridaj_ciaru(980, 85, 5, 360)

//   pridaj_ciaru(1090, 360, 5, 240)
//   pridaj_ciaru(1090, 0, 5, 180)

//   //--------------------------------------

//   pridaj_coin(50, 280)
//   pridaj_coin(50, 300)
//   pridaj_coin(50, 320)

//   pridaj_coin(150, 100)
//   pridaj_coin(180, 100)
//   pridaj_coin(210, 100)

//   pridaj_coin(320, 460)
//   pridaj_coin(320, 480)
//   pridaj_coin(220, 460)
//   pridaj_coin(220, 480)

//   pridaj_coin(650, 100)
//   pridaj_coin(650, 120)

//   pridaj_coin(765, 300)

//   pridaj_coin(925, 200)
//   pridaj_coin(925, 220)
//   pridaj_coin(925, 240)

//   //------------------------------------

//   pridaj_diamant(100, 550)
//   pridaj_diamant(580, 500)

//   pridaj_diamant(900, 570)
//   pridaj_diamant(800, 570)

//   //------------------------------------

//   pridaj_priserku(100, 500, "left")
//   pridaj_priserku(550, 500, "up")

//   pridaj_priserku(900, 550, "left")
//   pridaj_priserku(800, 570, "right")

// }