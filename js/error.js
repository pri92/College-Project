function stopErrorMessages(){
     $(document).error(function(){
         return false;
     })
}