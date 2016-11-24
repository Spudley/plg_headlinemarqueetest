<?php
/**
 * @package  mod_headlinemarquee
 *
 * @copyright   Copyright (C) 2016 Simon Champion.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

require_once(JPATH_SITE.'/modules/mod_headlinemarquee/headlineGenerators/generateFromNone.php');

class generateFromHeadlineMarqueeTest extends generateFromNone
{
    public function getHeadlines()
    {
        $test1 = $this->params['headlines']->hmtest;
        $test2 = $this->params['headlines']->hmtesttwo;
 
        $output = [];

        $output[] = [$test1, ''];
        $output[] = ['foobar', 'http://example.com/'];
        $output[] = ['barfoo', ''];
        $output[] = [$test2, ''];
        
        return $output;
    }
}