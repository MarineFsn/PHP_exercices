<html>
  <head><title>Hi!</title></head>
  <body>
  <?php $firstname = "Marine" ;
  $age = "34" ;
  $eyescolor = "green";
  $family = array(
    0 => 'logan',
    1 => 'papuche',
    2 => 'Félix',
    3 => 'Paco'); 
   $is_hungry = true;
   $temperature = 16; 
   ?>

    	  <p>Hi ! My name is <?php echo $firstname; ?>.</p>
        <p>I am <?php echo $age; ?> years old.</p>
        <p>My eyes are <?php echo $eyescolor; ?>.</p>
        <p>The first person in my family is <?php echo $family[0]; ?>.</p>
        <p> Are you hungry or not ?  <?php echo $is_hungry ? "yes" : "no";?>.</p>
        <?php if ($temperature >= 15 ) {
                                               $diches= "barbecue, ";
                                               $activities= "apero and pool.";
                                            }else{
                                               $diches= "raclette, ";
                                               $activities= "netflix and chill.";
                                             } ?> 

        <p>what's the plan for today ? <?php echo $diches, $activities ?> </p>
        </body>
</html>