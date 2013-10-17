// summary:
//
// description:
//
// author:
//		Stephen Simpson <me@simpo.org>, <http://simpo.org>
define([
	"dojo/_base/declare",
	"dijit/_WidgetBase",
	"dijit/_TemplatedMixin",
	"dijit/_WidgetsInTemplateMixin",
	"dojo/i18n",
	"dojo/i18n!./nls/tweet",
	"dojo/text!./views/tweet.html",
	"./_item",
	"dojo/_base/lang"
], function(
	declare, _widget, _templated, _wTemplate, i18n, strings, template, _item, lang
) {
	"use strict";
	
	var construct = declare([_widget, _templated, _wTemplate, _item], {
		// i18n: object
		//		The internationalisation text-strings for current browser language.
		"i18n": strings,
		
		// templateString: string
		//		The loaded template string containing the HTML formatted template for this widget.
		"templateString": template,
		
		
		postMixInProperties: function(){
			this.i18n = lang.mixin(this._i18n, this.i18n);
		}
	});
	
	return construct;
});