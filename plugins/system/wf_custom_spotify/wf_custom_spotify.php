<?php

/**
 * @copyright   Copyright (C) 2022 Ryan Demmer. All rights reserved
 * @license     GNU General Public License version 2 or later
 */
defined('JPATH_BASE') or die;

class PlgSystemWf_Custom_Spotify extends JPlugin
{
    public function onWfGetCustomEmbedData($url = '')
    {
    	if ($url && strpos($url, 'spotify') !== false) {
    		
    		$value = preg_replace('#open\.spotify\.com\/track\/#', 'open.spotify.com/embed/track/', $url);

    		return array(
    			'spotify' => array(
    				'src' => $value,
    				'width' => 300,
                	'height' => 380,
                	'frameborder' => 0,
                	'allowtransparency' => true,
                	'allow' => 'encrypted-media'
    			)
    		);
    	}
    	
    	return array();
    }
}
