<?php

/**
 * WPSpeed - Performs several front-end optimizations for fast downloads
 *
 * @package   WPSpeed
 * @author    JExtensions Store <info@storejextensions.org>
 * @copyright Copyright (c) 2022 JExtensions Store / WPSpeed
 * @license   GNU/GPLv3, or later. See LICENSE file
 *
 * If LICENSE file missing, see <http://www.gnu.org/licenses/>.
 */

namespace WPSpeed\Core\Interfaces;

defined('_WPSPEED_EXEC') or die('Restricted access');

use WPSpeed\Platform\Settings;

interface Plugin
{
        public static function getPluginId();
        
        public static function getPlugin();
        
        public static function saveSettings(Settings $params);
        
        public static function getPluginParams();
}
