<?php
/**
 * @package   HeadlineMarqueeTest
 * @type      Plugin (Headline)
 * @version   1.0.0
 * @author    Simon Champion
 * @copyright (C) 2016 Simon Champion
 * @license   GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/

defined('_JEXEC') or die;

class plgHeadlineHeadlineMarqueeTest extends JPlugin
{
	function onGetConfigFields()
	{
        return <<<eof
<field
    name="hmtest"
    type="text"
    showon="source:headlinemarqueetest"
    label="Test field"
    description="This field comes from the test plugin"
    default="" />
<field
    name="hmtesttwo"
    type="text"
    showon="source:headlinemarqueetest"
    label="Test field Two"
    description="This field also comes from the test plugin"
    default="" />
eof;
	}
}
