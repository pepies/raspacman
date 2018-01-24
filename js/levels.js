function clear_lvl(){
                ciarky.splice(0,9999)
                coiny.splice(0,9999)
                diamanty.splice(0,9999)
                priserky.splice(0,9999)
}

function level(vykresli_novy){
    clear_lvl()
    
     if(vykresli_novy){
          hrac.level++
     }
 
                    pridaj_ciaru(0, 600, 1200, 5)
                    pridaj_ciaru(0, 0, 1200, 5)
                    pridaj_ciaru(0, 0, 5, 600)
                
/*
level1.loop = true
level2.loop = true
level3.loop = true*/
     switch(hrac.level){
          case 1:
            level_1()
          //level1.play()
          break;
          case 2:
            level_2()
        // level1.loop = false
         // level1.currentTime = 500
      //    level2.play()
          break;
          case 3:
        // level2.loop = false
          //level2.currentTime = 500
         // level3.play()
           level_3()
          break;
          case 4:
            level_4()
          break;
          default:
          hrac.level = 0
           alert("Prešiel si celú hru. \n Skóre:" + hrac.score)
          break;
     }
                   
  }
  function level_1(){   
/* a = lavy hony roh - x
 * b = lavhy horny roh - y
 * c = sirka
 * d = vyska
 */                 lopta.x = 50
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

                    pridaj_coin(50,280)
                    pridaj_coin(50,300)
                    pridaj_coin(50,320)

                    pridaj_coin(150,100)
                    pridaj_coin(180,100)
                    pridaj_coin(210,100)

                    pridaj_coin(320,460)
                    pridaj_coin(320,480)
                    pridaj_coin(220,460)
                    pridaj_coin(220,480)

                    pridaj_coin(650,100)
                    pridaj_coin(650,120)

                    pridaj_coin(765,300)

                    pridaj_coin(925,200)
                    pridaj_coin(925,220)
                    pridaj_coin(925,240)

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

function level_2(){
                   lopta.x = 100
                   lopta.y = 300

                    pridaj_ciaru(150, 120, 5, 380)  


                    pridaj_ciaru(250, 0, 5, 270)    

                    pridaj_ciaru(250, 270, 400, 5)     
                    for (var i = 0; i < 20; i++) {
                         pridaj_coin((15*i)+250,295)    
                  }           
                    pridaj_ciaru(250, 320, 400, 5)
                    
                    pridaj_ciaru(250, 320, 5, 280)  

                    // --------------------------------
                    for(i=0; i <18;i++){
                        pridaj_priserku( 305+(i*20), (5*i) + 50, "down")
                        pridaj_priserku( 305+(i*20), (5*i) + 450, "up")
                    }
                    
                    pridaj_diamant(310,450)
                    pridaj_diamant(310,150)

                    pridaj_ciaru(800, 0, 5, 500)
                    pridaj_ciaru(1000, 100, 5, 500)

}
function level_3(){
                    lopta.x = 35
                    lopta.y = 35

                    // --------------------------------

                  for (var i = 0; i < 13; i++) {
                   var iks = 40 + (Math.random()*990)
                      pridaj_priserku( iks , yps, "down")
                      var iks = 40 + (Math.random()*990)
                      pridaj_priserku( iks , yps, "up")
                   var yps = 40+(Math.random()*540)      
                      pridaj_priserku( iks, yps, "left")
                       var yps = 40+(Math.random()*540)      
                      pridaj_priserku( iks, yps, "right")
                  }

                  for (var i = 0; i < 4; i++) {
                   var iks = 40 + (Math.random()*1000)
                      pridaj_coin( iks , yps)
                   var yps = 40+(Math.random()*500)      
                      pridaj_coin( iks, yps)
                  }
                   pridaj_ciaru(1050, 0, 5, 500)
                   pridaj_ciaru(1150, 300, 5, 400)
}

function level_4(){
  lopta.x = 65
  lopta.y = 45

for(i=0;i<12;i++){
  for(j=0; j<9;j++){
    pridaj_ciaru( 30+(i*90), 30+(j*90),15, 15)
  }
}

for(i=0;i<6;i++){
  for(j=0; j<4;j++){
    pridaj_coin( 80+(i*180), 80+(j*160))
  }
}
for(i=0; i <11;i++){
                        pridaj_priserku( 90+(i*90), 120, "down")
          
                        pridaj_priserku( 90+(i*90), 60, "down")
                    }
}