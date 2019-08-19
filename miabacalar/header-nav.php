

<header <?php echo overlap_get_attributes( $attrs );?>>
    <div class="container">
        <span class="mobile-nav-icon">
            <i class="menu-icon"></i>
        </span>
        <?php
        if( overlap_get_option('header_logo', true) ){
            overlap_logo();
        }
        ?>
        <nav id="top-nav" class="dropdown-nav">
            <ul class="top-menu">
                <?php
                if( overlap_get_nav_layout() != 'fullscreen' ){
                    overlap_primary_menu();
                }
                if( overlap_get_nav_layout() != 'center' ){
                    overlap_extra_menu();
                }
                ?>
                <li class="menu-item">
                    <a id="js-desktop">
                        <div class="eng" 
                        data-projectcode="irv"
                        data-rendericon="true"
                        data-isdesktop="true"
                        
                        data-lang="en">
                        </div>
                    </a>
                </li>
                <li class="menu-item" >
                    <a id="js-desktop">  
                        <div class ="esp"
                            data-projectcode="irv"
                            data-rendericon="true"
                            data-isdesktop="true"
                            
                            data-lang="es">
                        </div>
                    </a>
                </li>
            </ul>


            <?php if( overlap_get_nav_layout() == 'center' ):?>
            <ul class="ex-menu">
                <?php overlap_extra_menu(); ?>
            </ul>
            <?php endif;?>
        </nav>

        <div class="content-itemsrooms">
            <ul class="itemsrooms">
                <li><a href="#room3"> Grand Je´ex Suite</a></li>
                <!-- <li><a href="#room2"> Je ́ex Nahil</a></li> -->
                <li><a href="#room1">Luxe Saasil</a> </li>
            </ul>
        </div>


        <?php if( overlap_get_nav_layout() == 'fullscreen' ):?>
        <div class="full-nav-button">
            <span class="full-nav-icon">
                <i class="menu-icon"></i>
            </span>
        </div>
        <?php endif; ?>
    </div>
    <script>
        //muestra y esconde elementos dependiendo la url 
        var url = document.location.href;
        if (url.indexOf('www.midominio.com/es/') >= 0) {
            $('.esp').show();
            $('.eng').remove();
        } else {
            $('.eng').show();
            $('.esp').remove();
        }
    </script>
    <script src="bookreservation.js"></script>

    <script>
        setTimeout(() => {
            $('#icon .tooltip').hide()
        }, 3000);
    </script>
</header>
