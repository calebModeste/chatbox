<?php  
     while($_GET['subject']){
        $chatline = $connect->exePrepaQuery($chat->getSujetMessages($_GET['subject']));
        break;
     }
      
      foreach($chatline as $info):
          if(!empty($info)):
              if ($info['username']==$userLock):
  ?> 
              <div class="row justify-content-end">
                  <div class="card text-bg-dark m-2 col-5" >
                      <div class="card-header"><b><?=$info['username']?></b></div>
                     <div class="card-body">
                         <p class="card-text"><?=$info['message']?></p>
                     </div>
                      <div class="card-footer">
                          <p class="card-texte">le <?=$info['date']?> à <?=$info['time']?></p>
                      </div>
                  </div>
              </div>    
  <?php 
              endif;
              if ($info['username']!=$userLock):   
  ?>
              <div class="row justify-content-start">
                  <div class="card text-bg-dark m-4 col-5" >
                      <div class="card-header"><b><?=$info['username']?></b></div>
                      <div class="card-body">
                          <p class="card-text"><?=$info['message']?></p>
                      </div>
                      <div class="card-footer">
                          <p class="card-texte">le <?=$info['date']?> à <?=$info['time']?></p>
                      </div>
                  </div>
              </div> 

  <?php 
              endif;
          endif;
          
      endforeach; 
      
  ?>