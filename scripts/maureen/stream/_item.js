// summary:
//
// description:
//
// author:
//		Stephen Simpson <me@simpo.org>, <http://simpo.org>
define([
	"dojo/_base/declare",
	"dojo/i18n",
	"dojo/i18n!./nls/_item"
], function(
	declare, i18n, strings, template
) {
	"use strict";
	
	var construct = declare(null, {
		// i18n: object
		//		The internationalisation text-strings for current browser language.
		"_i18n": strings
	});
	
	return construct;
});