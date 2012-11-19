<?php
namespace Blocks;

/**
 * Nicetime by Pv Ledoux
 *
 * @package   Nicetime
 * @author    Pierre-Vincent Ledoux
 * @copyright Copyright (c) 2012, Pierre-Vincent Ledoux
 * @link      http://www.twitter.com/pvledoux
 */

/**
 * @copyright (c) 2012, Pv Ledoux
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *	* Redistributions of source code must retain the above copyright
 *	   notice, this list of conditions and the following disclaimer.
 *	* Redistributions in binary form must reproduce the above copyright
 *	   notice, this list of conditions and the following disclaimer in the
 *	   documentation and/or other materials provided with the distribution.
 *	* Neither the name of the <organization> nor the
 *	   names of its contributors may be used to endorse or promote products
 *	   derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL <COPYRIGHT HOLDER> BE LIABLE FOR ANY
 * DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
 * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

class NicetimePlugin extends BasePlugin
{
	function getName()
	{
		return Blocks::t('Nice Time');
	}

	function getVersion()
	{
		return '1.0';
	}

	function getDeveloper()
	{
		return 'Pv Ledoux';
	}

	function getDeveloperUrl()
	{
		return 'http://www.twitter.com/pvledoux/';
	}

	/**
	 * Register our Nicetime_Twig_Extension
	 *
	 * @return Twig_Extension
	 */
	public function hookAddTwigExtension()
	{
		// require our Nicetime_Twig_Extension class definition
		require_once blx()->path->getPluginsPath() . 'nicetime/twig_extensions/Nicetime_Twig_Extension.php';

		// return instance of
		return new Nicetime_Twig_Extension();
	}
}