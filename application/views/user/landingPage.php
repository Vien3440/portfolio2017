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
        <div  class="col-lg-6 bodyProjet" >
            <div class="row">
                <h4>Parcours</h4>
                <p></p>
            </div>
            <div class="row">
                <h4>Experience</h4>
                <p>
                    <?php
                    foreach ($courses as $course) {
                        ?>  
                    <h3></h3>      
                    <p>
                        <?php echo $course["detail"]; ?>
                    </p>
                    <?php
                }
                ?>
                </p>
            </div>
            <div class="row">
                <h4>Skill</h4>
                <ul>
                    <?php
                    foreach ($skills as $skill) {
                        ?>        
                        <li>
                            <?php echo $skill["name"]; ?>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a viverra mi. Praesent suscipit varius felis sed viverra. Aenean auctor malesuada commodo. Quisque vel egestas tellus. Morbi in auctor erat, non consequat arcu. Etiam quis rutrum enim. In rhoncus mi in faucibus venenatis. Morbi tincidunt fermentum ornare. Etiam tincidunt condimentum massa sit amet posuere.

                Suspendisse suscipit hendrerit vestibulum. Fusce rutrum magna ac vulputate convallis. Duis viverra dapibus diam, sit amet viverra orci ultrices in. Etiam auctor augue non dolor condimentum interdum. Nullam semper suscipit commodo. Aliquam ut rhoncus dolor. Quisque id luctus est. Integer imperdiet porta lorem, ut rutrum nisl dignissim id. Aliquam molestie nibh ante, finibus sagittis lectus porta non. Nam luctus metus id suscipit tempus. Proin ut ligula odio. Suspendisse pellentesque mollis ipsum, a bibendum nisl maximus vel.

                Vivamus dignissim, justo nec commodo varius, felis dui venenatis neque, vulputate molestie orci nulla vel mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac ipsum ac dui convallis cursus. Aliquam venenatis sagittis feugiat. Vivamus quis ornare risus. Mauris blandit, sem at maximus eleifend, turpis sem blandit mi, suscipit luctus leo justo eu augue. Pellentesque quis convallis orci. Nulla justo velit, vulputate sed lobortis eu, dignissim nec magna. Quisque mauris arcu, mattis id tristique sodales, porta ac urna. In id imperdiet mauris. Maecenas at purus id augue convallis viverra. Etiam dolor ipsum, semper luctus posuere a, scelerisque id turpis. Etiam odio metus, lobortis nec quam eu, pulvinar accumsan lacus. Ut efficitur interdum bibendum. Vestibulum scelerisque non sapien nec malesuada. Sed nec massa neque.

                Duis ut nibh et lorem placerat consectetur at sed mi. Nullam fermentum iaculis ligula, nec facilisis felis venenatis molestie. Nullam id sem rutrum nisl dignissim elementum. Vivamus eu dolor quis lectus gravida feugiat. Aliquam accumsan dolor in elit porta, a faucibus tortor cursus. Nullam lacinia a eros ut aliquam. Suspendisse aliquam libero nunc, sit amet dignissim orci efficitur non. Nunc orci nibh, consectetur laoreet est eu, cursus hendrerit tortor.

                Nulla convallis nunc viverra risus consequat vestibulum. Nulla felis justo, dapibus quis lacus sit amet, luctus rhoncus turpis. Duis scelerisque massa sed augue pellentesque, et ornare lectus commodo. Nullam porttitor justo sed porta tincidunt. Phasellus in pretium eros, non congue augue. Pellentesque finibus mauris ut est feugiat fermentum. Sed ac tempus mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur volutpat urna lorem, nec egestas erat ultrices aliquam. Mauris ullamcorper ante urna, eu vestibulum turpis vehicula vel. Cras sodales mattis ante, quis pellentesque urna imperdiet molestie. Nunc sodales quam justo, et fringilla tellus porttitor ut. Sed euilgod convallis massa ac maximus. Vivamus enim massa, cursus a laoreet ac, rhoncus at nunc. Praesent metus quam, ultrices id mauris ut, lobortis tristique erat.

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a viverra mi. Praesent suscipit varius felis sed viverra. Aenean auctor malesuada commodo. Quisque vel egestas tellus. Morbi in auctor erat, non consequat arcu. Etiam quis rutrum enim. In rhoncus mi in faucibus venenatis. Morbi tincidunt fermentum ornare. Etiam tincidunt condimentum massa sit amet posuere.

                Suspendisse suscipit hendrerit vestibulum. Fusce rutrum magna ac vulputate convallis. Duis viverra dapibus diam, sit amet viverra orci ultrices in. Etiam auctor augue non dolor condimentum interdum. Nullam semper suscipit commodo. Aliquam ut rhoncus dolor. Quisque id luctus est. Integer imperdiet porta lorem, ut rutrum nisl dignissim id. Aliquam molestie nibh ante, finibus sagittis lectus porta non. Nam luctus metus id suscipit tempus. Proin ut ligula odio. Suspendisse pellentesque mollis ipsum, a bibendum nisl maximus vel.

                Vivamus dignissim, justo nec commodo varius, felis dui venenatis neque, vulputate molestie orci nulla vel mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac ipsum ac dui convallis cursus. Aliquam venenatis sagittis feugiat. Vivamus quis ornare risus. Mauris blandit, sem at maximus eleifend, turpis sem blandit mi, suscipit luctus leo justo eu augue. Pellentesque quis convallis orci. Nulla justo velit, vulputate sed lobortis eu, dignissim nec magna. Quisque mauris arcu, mattis id tristique sodales, porta ac urna. In id imperdiet mauris. Maecenas at purus id augue convallis viverra. Etiam dolor ipsum, semper luctus posuere a, scelerisque id turpis. Etiam odio metus, lobortis nec quam eu, pulvinar accumsan lacus. Ut efficitur interdum bibendum. Vestibulum scelerisque non sapien nec malesuada. Sed nec massa neque.

                Duis ut nibh et lorem placerat consectetur at sed mi. Nullam fermentum iaculis ligula, nec facilisis felis venenatis molestie. Nullam id sem rutrum nisl dignissim elementum. Vivamus eu dolor quis lectus gravida feugiat. Aliquam accumsan dolor in elit porta, a faucibus tortor cursus. Nullam lacinia a eros ut aliquam. Suspendisse aliquam libero nunc, sit amet dignissim orci efficitur non. Nunc orci nibh, consectetur laoreet est eu, cursus hendrerit tortor.

                Nulla convallis nunc viverra risus consequat vestibulum. Nulla felis justo, dapibus quis lacus sit amet, luctus rhoncus turpis. Duis scelerisque massa sed augue pellentesque, et ornare lectus commodo. Nullam porttitor justo sed porta tincidunt. Phasellus in pretium eros, non congue augue. Pellentesque finibus mauris ut est feugiat fermentum. Sed ac tempus mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur volutpat urna lorem, nec egestas erat ultrices aliquam. Mauris ullamcorper ante urna, eu vestibulum turpis vehicula vel. Cras sodales mattis ante, quis pellentesque urna imperdiet molestie. Nunc sodales quam justo, et fringilla tellus porttitor ut. Sed euilgod convallis massa ac maximus. Vivamus enim massa, cursus a laoreet ac, rhoncus at nunc. Praesent metus quam, ultrices id mauris ut, lobortis tristique erat.</p>
        </div>
        <div class="headerProjet col-lg-6 ">
            <h2 class="titelCenterProjet text-center">A propos de moi</h2>
        </div>
    </section>
