            </div>
        </div>
        <footer>
            <div id='footer-nav-wrapper'>
                <nav>
                    <?php wp_nav_menu(array('menu'=>'footer-1')) ?>
                </nav>
                <nav>
                    <?php wp_nav_menu(array('menu'=>'footer-2')) ?>
                </nav>
                <nav>
                    <?php wp_nav_menu(array('menu'=>'footer-3')) ?>
                </nav>
            </div>
            <div id='copyright'>© velo autonomus GbR | 2021<?php if(date('Y')!='2021') { echo ' - '.date('Y');};?></div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>