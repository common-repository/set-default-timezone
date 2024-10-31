<?php
/*
Plugin Name: Default Timezone Set
Plugin URI: http://www.santosj.name
Description: Sets the default timezone for PHP 5.1+, even if one is already set. Works to correct WordPress timezone calucations based off of offset to GMT.
Author: Jacob Santos
Version: 1.0
Author URI: http://www.santosj.name
*/

/*
Copyright (c) 2008, Jacob Santos
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:
	Redistributions of source code must retain the above copyright
		notice, this list of conditions and the following disclaimer.
	Redistributions in binary form must reproduce the above copyright
		notice, this list of conditions and the following disclaimer in the
		documentation and/or other materials provided with the distribution.
	Neither the name of the Jacob Santos nor the
		names of its contributors may be used to endorse or promote products
		derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY Jacob Santos ``AS IS'' AND ANY
EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL Jacob Santos BE LIABLE FOR ANY
DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

if( !function_exists('wp_set_default_timezone') ) :
/**
 * dragonu_set_default_timezone() - Sets the default timezone to GMT.
 *
 * @since 1.0
 *
 * @return void Returns nothing
 */
function dragonu_set_default_timezone() {
	if( function_exists('date_default_timezone_set') ) {
		date_default_timezone_set('Etc/GMT');
	}
}

dragonu_set_default_timezone();
endif;