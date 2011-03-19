<?php

class eTemplating {
    
    public static function create($content = 'index.php') {
		fHTML::sendHeader();
		
        $template = new fTemplating(TEMPLATE_DIR);
		$template->buffer();

		$template->set('header', 'header.php');
		$template->set('content', $content);
		$template->set('footer', 'footer.php');

		$template->set('title', eConfig::get('HTML.Title'));
		
		$template->add('css', 'css/default.css');

		$template->place('header');
		$template->place('content');
		$template->place('footer');

		return $template;
    }

}

/**
 * "THE COFFEE-WARE LICENSE" (Revision 12/2007):
 *
 * Sebastian Wicki <gandro@gmx.net> wrote this file. As long as you retain
 * this notice you can do whatever you want with this stuff. If we meet some
 * day, and you think this stuff is worth it, you can buy me a cup of coffee
 * in return.
 */
