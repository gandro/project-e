<?php

class eAction {
    
    public static function getAction() {
        return fRequest::get('a', 'string', 'index');
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
