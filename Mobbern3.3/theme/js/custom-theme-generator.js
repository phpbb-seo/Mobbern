// Functions:
function adjustCSS (compiled_css) {
	compiled_css = compiled_css.replace("a, a:link, a:visited, .opts-container .button2, .info-block .display-options .button2, .sidebar-block.tabs-panel .nav-tabs, .sidebar-block.tabs-panel .nav-tabs li.active a, .nav-tabs li.active a:hover, .nav-tabs li.active a:focus, a.forumtitle:hover, a.forumtitle:active, a.topictitle:hover, a.topictitle:active, .navbar.beadcrumb ul.navlinks a:hover, input.search-icon:focus, .navbar-default .nav .mega-menu.open a, .navbar-default .nav .mega-menu.open a:hover, .navbar-default .nav .mega-menu.open a:focus, #main-navbar .dropdown-menu li a, #tabs .activetab a span, #tabs .activetab a:hover span, .search-box .button2", "a, a:link, a:visited, .opts-container .button2, .info-block .display-options .button2, .sidebar-block.tabs-panel .nav-tabs, .sidebar-block.tabs-panel .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus, a.forumtitle:hover, a.forumtitle:active, a.topictitle:hover, a.topictitle:active, .navbar.beadcrumb ul.navlinks a:hover, input.search-icon:focus, .navbar-default .nav > .mega-menu.open > a, .navbar-default .nav > .mega-menu.open > a:hover, .navbar-default .nav > .mega-menu.open > a:focus, #main-navbar .dropdown-menu > li > a, #tabs .activetab a span, #tabs .activetab a:hover span, .search-box .button2");
	
	compiled_css = compiled_css.replace("#mobbern-header-2 #main-navbar.navbar, .info-block .display-options .button2:hover, .sidebar-block.tabs-panel .nav-tabs, .topiclist li.header, #main-navbar.navbar-fixed, #main-navbar.navbar-default, .panel .panel-heading, #minitabs li, .posthilit, #tabs, .table1 thead, a.button1, input.button1, input.button3, a.button2, input.button2", "#mobbern-header-2 #main-navbar.navbar, .info-block .display-options .button2:hover, .sidebar-block.tabs-panel .nav-tabs, .topiclist > li.header, #main-navbar.navbar-fixed, #main-navbar.navbar-default, .panel .panel-heading, #minitabs li, .posthilit, #tabs, .table1 thead, a.button1, input.button1, input.button3, a.button2, input.button2");
	
	compiled_css = compiled_css.replace("#main-navbar .dropdown-menu li a:hover, #main-navbar .dropdown-menu li a:focus", "#main-navbar .dropdown-menu > li > a:hover, #main-navbar .dropdown-menu > li > a:focus");

	compiled_css = compiled_css.replace("a.button1:hover, input.button1:hover, a.button2:hover, input.button2:hover, input.button3:hover, #main-navbar .navbar-toggle:hover, #main-navbar .navbar-toggle:focus, #tabs a:hover span, .sidebar-block.tabs-panel .nav-tabs li a:hover, .sidebar-block.tabs-panel .nav-tabs li a:focus", "a.button1:hover, input.button1:hover, a.button2:hover, input.button2:hover, input.button3:hover, #main-navbar .navbar-toggle:hover, #main-navbar .navbar-toggle:focus, #tabs a:hover span, .sidebar-block.tabs-panel .nav-tabs > li > a:hover, .sidebar-block.tabs-panel .nav-tabs > li > a:focus");
	
	compiled_css = compiled_css.replace(".panel-primary .panel-heading .badge, .pagination li a, .pagination li span, .btn-link, .btn-primary .badge, .text-primary", ".panel-primary > .panel-heading .badge, .pagination > li > a, .pagination > li > span, .btn-link, .btn-primary .badge, .text-primary");
	
	compiled_css = compiled_css.replace(".progress-bar, .badge, .label-primary, .navbar-default, .nav-pills li.active a, .nav-pills li.active a:hover, .nav-pills li.active a:focus, .dropdown-menu .active a, .dropdown-menu .active a:hover, .dropdown-menu .active a:focus, .btn-primary.disabled, .btn-primary[disabled], fieldset[disabled] .btn-primary, .btn-primary.disabled:hover, .btn-primary[disabled]:hover, fieldset[disabled] .btn-primary:hover, .btn-primary.disabled:focus, .btn-primary[disabled]:focus, fieldset[disabled] .btn-primary:focus, .btn-primary.disabled:active, .btn-primary[disabled]:active, fieldset[disabled] .btn-primary:active, .btn-primary.disabled.active, .btn-primary[disabled].active, fieldset[disabled] .btn-primary.active, .btn-primary, .bg-primary", ".progress-bar, .badge, .label-primary, .navbar-default, .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus, .dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus, .btn-primary.disabled, .btn-primary[disabled], fieldset[disabled] .btn-primary, .btn-primary.disabled:hover, .btn-primary[disabled]:hover, fieldset[disabled] .btn-primary:hover, .btn-primary.disabled:focus, .btn-primary[disabled]:focus, fieldset[disabled] .btn-primary:focus, .btn-primary.disabled:active, .btn-primary[disabled]:active, fieldset[disabled] .btn-primary:active, .btn-primary.disabled.active, .btn-primary[disabled].active, fieldset[disabled] .btn-primary.active, .btn-primary, .bg-primary");
	
	compiled_css = compiled_css.replace(".pagination .active a, .pagination .active span, .pagination .active a:hover, .pagination .active span:hover, .pagination .active a:focus, .pagination .active span:focus, a.thumbnail:hover, a.thumbnail:focus, a.thumbnail.active, .panel-primary, .nav .open a, .nav .open a:hover, .nav .open a:focus", ".pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus, a.thumbnail:hover, a.thumbnail:focus, a.thumbnail.active, .panel-primary, .nav .open > a, .nav .open > a:hover, .nav .open > a:focus");
	
	compiled_css = compiled_css.replace(".panel-primary .panel-heading, .list-group-item.active, .list-group-item.active:hover, .list-group-item.active:focus", ".panel-primary > .panel-heading, .list-group-item.active, .list-group-item.active:hover, .list-group-item.active:focus");
	
	compiled_css = compiled_css.replace(".panel-primary .panel-heading + .panel-collapse .panel-body", ".panel-primary > .panel-heading + .panel-collapse > .panel-body");
	
	compiled_css = compiled_css.replace(".panel-primary .panel-footer + .panel-collapse .panel-body", ".panel-primary > .panel-footer + .panel-collapse > .panel-body");
	
	compiled_css = compiled_css.replace(".navbar-default .navbar-nav .open .dropdown-menu .active a, .navbar-default .navbar-nav .open .dropdown-menu .active a:hover, .navbar-default .navbar-nav .open .dropdown-menu .active a:focus, .navbar-default .navbar-nav .open .dropdown-menu li a:hover, .navbar-default .navbar-nav .open .dropdown-menu li a:focus, .navbar-default .navbar-nav .open a, .navbar-default .navbar-nav .open a:hover, .navbar-default .navbar-nav .open a:focus, .navbar-default .navbar-nav .active a, .navbar-default .navbar-nav .active a:hover, .navbar-default .navbar-nav .active a:focus, .navbar-default .navbar-nav li a:hover, .navbar-default .navbar-nav li a:focus", ".navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus, .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus");
	
	compiled_css = compiled_css.replace(".navbar-default .btn-link[disabled]:hover, fieldset[disabled] .navbar-default .btn-link:hover, .navbar-default .btn-link[disabled]:focus, fieldset[disabled] .navbar-default .btn-link:focus, .navbar-default .navbar-nav .open .dropdown-menu .disabled a, .navbar-default .navbar-nav .open .dropdown-menu .disabled a:hover, .navbar-default .navbar-nav .open .dropdown-menu .disabled a:focus, .navbar-default .navbar-nav .disabled a, .navbar-default .navbar-nav .disabled a:hover, .navbar-default .navbar-nav .disabled a:focus", ".navbar-default .btn-link[disabled]:hover, fieldset[disabled] .navbar-default .btn-link:hover, .navbar-default .btn-link[disabled]:focus, fieldset[disabled] .navbar-default .btn-link:focus, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus, .navbar-default .navbar-nav > .disabled > a, .navbar-default .navbar-nav > .disabled > a:hover, .navbar-default .navbar-nav > .disabled > a:focus");
	
	return compiled_css
}



function generateThemeCSS ( main_color, scss_file ) {
	var theme_scss = "$primary-color: " + main_color + ";";
	
	theme_scss = theme_scss + $.ajax({type: "GET", url: scss_file, async: false}).responseText;
	
	var theme_css  = Sass.compile(theme_scss);
	theme_css = adjustCSS(theme_css);
	return theme_css
}




function getThemeCSS ( main_color, scss_file ) {
	var theme_css = generateThemeCSS(main_color, scss_file);
	return theme_css
}

function downloadThemeCSS ( main_color ) {
	// trigger download of the css generated by the MASIVO API
	window.location = 'http://masivotech.com/api/phpbb3/mobbern/?action=getColorThemeCSS&color=' + main_color.replace("#","");
}

function previewTheme ( main_color, scss_file ) {
	var theme_css = getThemeCSS (main_color,scss_file);
	var style_tag = "<style>" + theme_css + "</style>";
	$( style_tag ).appendTo( "head" );
}

function enableCustomColor ( user_color ) {
	$(".user_color").val(user_color);
	
	$("#color_picker").css("background-color", user_color );
	$("#color_picker").css("opacity", "1");
	
	$( "#color_picker" ).prop( "disabled", false );
	$( "#download_theme" ).prop( "disabled", false );
}
function disableCustomColor ( user_color ) {
	$(".user_color").val("");
	$("#color_picker").css("opacity", "0.2");
	$( "#color_picker" ).prop( "disabled", true );

	$(".user_color").attr("placeholder", user_color );
	$( "#download_theme" ).prop( "disabled", true );
}

function colorCookie () {
	
	var color_cookie_var = $.cookie("m_user_color") ? $.cookie("m_user_color") : false;
	
	if ( color_cookie_var )
	  return color_cookie_var
	else
	  return false
}



// Scripting:

function initThemeGenerator () {

  color_var = "#000";
  if ( colorCookie() )
	  color_var = colorCookie();

	$("#color_picker").css("background-color", color_var );


	if ( $("#set_customColor_enable").prop('checked') ) {
	  enableCustomColor(color_var);
	}
	else
	  disableCustomColor(color_var);

	// Initialize ColorPicker
	$('#color_picker').colpick({
		layout:'hex',
		color: color_var,
		submit: false,
			
		onShow: function (colpkr) {
			$(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			$(colpkr).fadeOut(500);
			
			$(".user_color").val(color_var);
			// Save color as a cookie
			$.cookie("m_user_color", color_var);
			
			return false;
		},
		onChange: function (hsb, hex, rgb, el, bySetColor) {
			color_var = '#' + hex;
			$('#color_picker').css('background-color', color_var);
			if(!bySetColor) $(".user_color").val("#" + hex);

		}
	});

}