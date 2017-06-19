<?php ?>

<body>
    <header id="header">
        <p> DEVELOPPEUR WEB JUNIORS </p>

        <div class="container-fluid">
            <img  class="col-xs-1 img-responsive" src="<?php echo base_url(); ?>web/imgSource/logoHeader.png">
            <h1  class="col-xs-12">Kimbidima Vivien</h1>
        </div>

        <h4 id="miniNav">A propos/Project/Contact</h4>
    </header>
    <section class="sectionAbout container-fluid ">
        <div class="headerAbout col-lg-6 ">
            <h2 class="tipoH2 titelCenterAbout text-center">A propos de moi</h2>
        </div>
        <div  class="col-lg-6 bodyAbout" >
            <div class="row">

                <?php foreach ($abouts as $about) { ?> 
                    <h3 class="tipoText">     
                        <?php echo $about["text"] ?>
                    </h3>  
                <?php } ?>

            </div>
            <div class="row">
                <h4 class="tipoH2">Parcours</h4>
                <div class="marginSectionAbout">
                    <?php foreach ($courses as $course) { ?>  
                        <h3>     
                            <?php echo $course["title_qualification"] ?>
                        </h3> 
                        <p>
                            <?php echo $course["date"] . ' / ' . $course["establishment"] ?>
                        </p>
                        <p>
                            <?php echo $course["description_formation"] ?>
                        </p>
                    <?php } ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <?php if (empty($work) == FALSE) { ?>  
                    <h4 class="tipoH2" >Experience</h4>
                    <div>
                        <?php foreach ($courses as $course) { ?>  
                            <h3>     
                                <?php echo $course["title_qualification"] ?>
                            </h3> 
                            <p>
                                <?php echo $course["date"] . ' / ' . $course["establishment"] ?>
                            </p>
                            <p>
                                <?php echo $course["description_formation"] ?>
                            </p>


                            <p class="tipoText">D'une nature créative, à l'écoute de vos besoins, je sais mettre en œuvre un projet web de l'idée (Mokup) à la version de déploiement suivant vos attentes, tout en mettant en avant une expérience utilisateur innovante, réfléchie. N'hésitez pas à visionner mes projets et à me contacter .</p>

                            <?php
                        }
                    } else {
                        ?>

                        <p class="tipoText">D'une nature créative, à l'écoute de vos besoins, je sais mettre en œuvre un projet web de l'idée (Mokup) à la version de déploiement suivant vos attentes, tout en mettant en avant une expérience utilisateur innovante, réfléchie. N'hésitez pas à visionner mes projets et à me contacter .</p>
                        <?php
                    }
                    ?>


                </div>
                <div class="row">
                    <h4 class="tipoH2" >Skill</h4>
                    <ul>




                        <?php
                        foreach ($skills as $skill) {
                            ?>        

                            <li class="skills">
                                <div class="skill" data-width="<?php echo $skill["percentage"]; ?>"><?php echo $skill["name"]; ?></div>
                            </li>  
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
    </section>
    <section class="sectionProjet container-fluid ">
        <div class="headerProjet col-lg-6 ">
            <h2 class=" tipoH2 titelCenterProjet text-center">Projets</h2>
        </div>
        <div  class="col-lg-6 bodyProjet " id="projetJs" >
            <?php foreach ($projets as $projet) { ?> 
            <a id="projetThumb<?php echo $projet["id"] ?>" href="#projetThumb<?php echo $projet["id"]?>">
                <div class="projetThumb js-scrollTo" style= "
                     background-image:url('<?php echo base_url(); ?>web/imgSource/projet/<?php echo $projet["thumbnail_img"] ?>');">
<!--                     <h3 class="tipoText">     
                     <?php // echo $projet["thumbnail_texte"] ?>
                        
                     </h3>  -->

                </div> 
                <div class="detailOff detail" >
                <p><?php echo $projet["detail_texte"] ?></p>
                <p><?php echo $projet["detail_img"] ?></p>
                <p><?php echo $projet["date"] ?></p>
                <p><?php echo $projet["link"] ?></p>
            </div>
                 </a>
            <?php } ?>
            
        </div>

    </section>
    
    <section class="sectionEnd container-fluid ">
        <div class="header col-lg-6 ">
            <h2 class=" tipoH2  text-center">Contact </h2>
            <p>D'une nature créative, à l'écoute de vos besoins, je sais mettre en œuvre un projet web de l'idée (Mokup) à la version de déploiement suivant vos attentes, tout en mettant en avant une expérience utilisateur innovante, réfléchie. N'hésitez pas à visionner mes projets et à me contacter .</p>
        </div>
         <div class="header col-lg-6 ">
            <h2 class=" tipoH2  text-center">Contact </h2>
                        <p>D'une nature créative, à l'écoute de vos besoins, je sais mettre en œuvre un projet web de l'idée (Mokup) à la version de déploiement suivant vos attentes, tout en mettant en avant une expérience utilisateur innovante, réfléchie. N'hésitez pas à visionner mes projets et à me contacter .</p>

        </div>
    </section>
