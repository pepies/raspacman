function menu_draw(){
	context.font="30px Karma";
  context.fillStyle = '#101C04'
	context.fillText("Skore: ",50,640)
  context.fillStyle = 'black';
  context.fillText(hrac.score,140,640)
  context.fillStyle = '#101C04'
	context.fillText("ZivOtY:", 210,640)


if(lopta.life >= 1){
            context.drawImage(life ,300, 610, 35, 35)
            context.fill()

            if(lopta.life >= 2){
                        
                        context.drawImage(life ,340, 610, 35, 35)
                        context.fill()

                    
                          if(lopta.life == 3){

                                      context.drawImage(life ,380, 610, 35, 35)
                                      context.fill()

                                      }else{
                                        context.drawImage(life_empty ,380, 610, 35, 35)
                                      context.fill()
                                      }
                      	}else{
                          context.drawImage(life_empty ,340, 610, 35, 35)
                          context.drawImage(life_empty ,380, 610, 35, 35)
                          context.fill()
                        }
            }else{
            context.drawImage(life_empty ,300, 610, 35, 35)
            context.drawImage(life_empty ,340, 610, 35, 35)
            context.drawImage(life_empty ,380, 610, 35, 35)
            context.fill()
            }

  context.fillStyle = '#101C04'
  context.fillText("Highscore: ", 430,640)
  context.fillStyle = 'black'
  context.fillText($.cookie('highscore'), 590,640)

  context.fillStyle = '#101C04'
  context.fillText("LEVEL "+ (hrac.level+1) +"-->", 1060, 300)
}