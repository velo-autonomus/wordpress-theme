        </div>
        <footer>
            <nav>
                <?php wp_nav_menu(array('menu'=>'footer')) ?>
            </nav>
            <div>© velo autonomus GbR | 2021<?php if(date('Y')!='2021') { echo ' - '.date('Y');};?></div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>