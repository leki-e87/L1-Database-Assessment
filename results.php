<?php
    while($find_rs=mysqli_fetch_assoc($find_query))

        {

            ?>

            <div class="results common">

            <?php

            // Image setup
            $image = $find_rs['Image'];
            $image_location = "images/".$image;
            $instrument_name = $find_rs['Instrument_Name'];
            
            // Extra link setup
            $google_base = "https://www.google.com/search?q=";
            $google_search = str_replace(' ', '+', $instrument_name);
            $google_url = $google_base.$google_search;
        
            $wiki_base = "https://en.wikipedia.org/wiki/";
            $wiki_search = str_replace(' ', '_', $instrument_name);
            $wiki_url = $wiki_base.$wiki_search;

            ?>

                <img class="instrument-illustration" src="<?php echo $image_location; ?>"
                alt="<?php echo $instrument_name; ?>">

                <div class="heading-block">
                    <!-- Instrument name and section -->

                    <div class="tag"><?php echo $find_rs['Cost']; ?></div>
                
                    <b>
                        <?php echo $instrument_name; ?>
                        (<?php echo $find_rs['Section']; ?>)
                    </b>

                    <p>
                        <?php echo $find_rs['Description']; ?>
                    </p>

                <p>
                    For more information, you could try searching through <a href="<?php echo $google_url; ?>">Google</a> or <a href="<?php echo $wiki_url; ?>">Wikipedia.</a>
                </p>

            </div>  <!-- individual result box -->

            <br>

            <?php

        }   // end of while 

?>