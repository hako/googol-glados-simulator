/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-firefox' : '&#x21;',
			'icon-IE' : '&#x22;',
			'icon-opera' : '&#x23;',
			'icon-chrome' : '&#x24;',
			'icon-safari' : '&#x25;',
			'icon-css3' : '&#x26;',
			'icon-github' : '&#x27;',
			'icon-point-down' : '&#x28;',
			'icon-spam' : '&#x29;',
			'icon-info' : '&#x2a;',
			'icon-enter' : '&#x2b;',
			'icon-globe' : '&#x2d;',
			'icon-heart' : '&#x2e;',
			'icon-notification' : '&#x2f;',
			'icon-earth' : '&#x30;',
			'icon-facebook' : '&#x31;',
			'icon-github-2' : '&#x32;',
			'icon-download' : '&#x2c;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};