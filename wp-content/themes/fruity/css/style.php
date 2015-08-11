/* less codes */
<?php
if (!isset($_GET['theme']))
    $_GET['theme'] = "";

?>
@mainColor: #fff;

@themeColor: #1d8d20;
@themeColor: #20689b;
@themeColor: #1cb3f3;
@themeColor: #c42423;
@themeColor: #199dd4;
@themeColor: #<?php echo $_GET['color']?$_GET['color']:"199dd4"?>;

@themeColor2: #<?php echo $_GET['color2']?$_GET['color2']:"199dd4"?>;

@typoColor: #333;
@grayColor: #f6f6f6;
@moreGrayColor: #efefef;
.whiteBg() {
	background: url(../images/transparent-white.png);
}
.bcSeparator() {
    background: url(../images/bc-separator.png) right center no-repeat;
}
.splashBg() {
	background: (@mainColor);
}








<?php if ($_GET['theme'] == "dark") {?>

@themeColor: #eee06d; /*default color */
@themeColor: #<?php echo $_GET['color']?$_GET['color']:"eee06d"?>;
@mainColor: #555;
@typoColor: #fff;
@grayColor: #444;
@moreGrayColor: #222;
.whiteBg() {
	background: #222;
}
.splashBg() {
	background: (@moreGrayColor);
}
.bcSeparator() {
    background: url(../images/bc-separator-dark.png) right center no-repeat;
}

<?php } ?>

.drop-shadow(@x-axis: 0, @y-axis: 1px, @blur: 2px, @alpha: 0.1) {
  -webkit-box-shadow: @x-axis @y-axis @blur rgba(0, 0, 0, @alpha);
  -moz-box-shadow: @x-axis @y-axis @blur rgba(0, 0, 0, @alpha);
  box-shadow: @x-axis @y-axis @blur rgba(0, 0, 0, @alpha);
}

.opacity(@opacity: 0.5) {
  -moz-opacity: @opacity;
  -khtml-opacity: @opacity;
  -webkit-opacity: @opacity;
  opacity: @opacity;
}
.gradient(@color1, @color2){
  background: -moz-linear-gradient(top,  @color1 0%, @color2 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,@color1), color-stop(100%,@color2)); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  @color1 0%,@color2 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  @color1 0%,@color2 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  @color1 0%,@color2 100%); /* IE10+ */
  background: linear-gradient(to bottom,  @color1 0%,@color2 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=@color1, endColorstr=@color2,GradientType=0 ); /* IE6-8 */  
}

.transition-duration(@duration: 0.2s) {
  -moz-transition-duration: @duration;
  -webkit-transition-duration: @duration;
  transition-duration: @duration;
}

.box-sizing{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -o-box-sizing: border-box;
}


.shadowMe(@params){
  box-shadow: @params;
  -webkit-box-shadow: @params;
  -moz-box-shadow: @params;
  -o-box-shadow: @params;
  
  /*-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=5, Direction=5, Color='#ccc')";*/
  /*filter: progid:DXImageTransform.Microsoft.Shadow(Strength=5, Direction=5, Color='#ccc');*/
  /*behavior: url(PIE.htc);*/
}


.borderRadiusMe(@params){
  border-radius: @params;
  -webkit-border-radius: @params;
  -moz-border-radius: @params;
  -o-border-radius: @params;
  
}


.rotation(@deg:5deg){
  -webkit-transform: rotate(@deg);
  -moz-transform: rotate(@deg);
  transform: rotate(@deg);
}


#splash {
    .splashBg;
    width: 100%;
    height: 120%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 10000;
    
    #splash-content {
        margin: 0 auto;
    }
    img#splash-bg {
        width: 100%;
        height: 100%;
        position: absolute;
        opacity: 0.6;
    }
    img#splash-title,img#splash-footer {
        position: absolute; 
    }
    img#splash-title {
        width: 141px;
        height: 120px;
        top: 70%;
        margin-top: -136px;
        left: 50%;
        margin-left: -70px;
    }
	p {
		color: #fff;
		font-size: 20px;
		font-weight: 100;
		text-shadow: none;
		text-align: center;
		margin-top: 40%;
	}
}

/* ==============================*/
/* General Styles */
/* ==============================*/

/* Utility css */
a{
  text-decoration: none;
}

.left{
  float: left;
}
.right{
  float: right;
}
.clear {
  clear: both;
}
.color {
  color: @themeColor;
}
.alpha{
  margin-left: 0 !important;
}
.omega{
  margin-right: 0 !important;
}
.hidden {
    display: none;
}
.center {
	p {
		text-align: center;
	}
    text-align: center;
}
 .no-text-shadow {
  text-shadow: none;
 }
 .white {
  color: #fff;
 }
.full-width {
  width: 100%;
}
.justify {
    text-align: justify;
}
.content-padding {
    padding: 0 30px;
}
.content-margin {
  margin: 0 30px;
}
.no-margin {
  margin: 0;
}
.white-content-box {
    padding: 30px;    
    color: @typoColor;
    background: @mainColor;
}
.theme-bg-color {
    background: @themeColor2;
    color: @moreGrayColor;
    h1 {
        color: @grayColor !important;
    }
    a {
        color: @grayColor !important;
        text-decoration: underline;
    }
}
.gradient-box {
  .gradient(@mainColor, @moreGrayColor);
}
.gradient-box-invert {
  .gradient(@moreGrayColor, @mainColor);
}
.round-inner-images {
  img {
    /*.borderRadiusMe(5px);*/
  }
}
.shadow-inner-images {
  img {
    /*.drop-shadow(1px, 1px, 4px, 0.78);*/
  }
}
hr {
  border-color: @moreGrayColor;
  margin-bottom: 15px !important;
  margin-top: 15px !important;
  display: block;
}
.white-box {
  background: @mainColor;
}
.font-14 {
  font-size: 14px !important;
}
.font-16 {
  font-size: 16px !important;
}
.font-18 {
  font-size: 18px !important;
}
.font-20 {
  font-size: 20px !important;
}


.twitter-box {
  h2 {
    margin-bottom: 2px;
  }
}
body {
  /*font-family: 'Quattrocento', serif;*/
    -webkit-text-size-adjust:none;
    font-family: "Roboto";
    background: @themeColor !important;
    
    
    font-weight: 100;
  
  ::selection {
    background-color: @themeColor;
    text-shadow: none;
    color: #fff;
  }
  ::-moz-selection {
    background-color: @themeColor;
    text-shadow: none;
    color: #fff;
  }
  #container {
    max-width: 1000px;
    margin: 0 auto;
    height: 120%;
    position: relative;
    background: #5A5959 !important;
  }
  
}
.pages {
  .transition-duration(0.2s);
}

.ui-header {
    background: @themeColor;
    color: @moreGrayColor;
    text-shadow: none;
    border: 1px solid @themeColor;
    
    
    
    h1.ui-title {
        margin: 0 20% !important;
        text-transform: uppercase;
	color: @themeColor2;
	
        p {
            font-size: 12px;
            margin: 15px 0;
        }
        p:first-child {
            font-size: 15px;
            color: @moreGrayColor;
        }
        p.no-margin {
            margin-top: 0;
            margin-bottom: 7px;
        }
        p.no-margin:first-child {
            margin-top: 7px;
            margin-bottom: 0;
        }
    }
    
    .menu-button {
        left: 0;
		.gradient(lighten(@themeColor, 6%), lighten(@themeColor, 3%));
		.drop-shadow(1px, 1px, 3px, 0.18);
		margin-top: -1px;
    }
    .back-button {
        right: 0;
		.gradient(lighten(@themeColor, 6%), lighten(@themeColor, 3%));
		.drop-shadow(1px, 1px, 3px, 0.18);
		margin-top: -1px;
    }
    .menu-button, .back-button {
        margin: 5px;
        display: block;
        position: absolute;
    }
    .menu-button.hover, .back-button.hover {
        img {
            background: #fafafa;
        }
    }
    
}
.ui-footer {
    .box-sizing;
    font-size: 15px;
    padding: 0;
    text-shadow: none;
    background: @themeColor;
    border: 0;
    font-weight: 100;
	overflow: hidden;
	color: @moreGrayColor;
	p {
		margin: 8px 0 !important;
                span {
                    float: right;
                    color: @moreGrayColor;
                }
	}
        a {
            color: @moreGrayColor !important;
        }
}
.header-shadow {
    display: none;
    background: url(../images/shadow.png) center bottom no-repeat;
    height: 31px;
	position: absolute;
	z-index: 1;
	width: 100%;
}

.ui-body-a, .ui-content {
	color: @typoColor;
    background: @grayColor !important;
    padding: 0;
    text-shadow: 1px 0 @mainColor;
    text-shadow: none !important;
/*    typography */
    h1 {
        font-weight: 100;
        font-size: 20px;
        margin-top: 0;
	color: @themeColor2;
        text-transform: uppercase;
    }
    h3 {
      color: @themeColor;
    }
    p {
      margin-top: 0;
      .drop-cap {
	float: left;
	display: block;
	font-size: 38px;
	line-height: 26px;
	margin: 0 1px 2px 0;
      }
      strong {
	font-weight: 100;
      }
    }
    h2 {
        color: @typoColor;
		background: @grayColor;
		border-right: 4px solid @themeColor2;
		font-size: 18px;
		font-weight: 100;
		text-shadow: none;
		padding: 2px;
    }
    
    ul.nav-list {
        margin-top: 0;
        padding: 0;
        overflow: hidden;
        border: 1px solid @moreGrayColor;
    }
    ul.nav-list li {
        margin: 0;
        border-bottom: 1px solid @moreGrayColor;
        
        ul {
            padding-left: 0px;
            margin: 0;
        }
        li a:before {
            content: ">  ";
        }
        li {
            list-style: none;
            
            a {
                border-left: 5px solid @themeColor2;
                padding-left: 5%;
            }
        }
    }
    ul.nav-list li:last-child {
        border: 0px;
    }
    ul.nav-list li a {
        border-left: 5px solid @themeColor2;
        background: @grayColor;
        font-weight: 100;
        padding: 5%;
	@media only screen and (min-width: 500px) {
	  padding: 3%;
	}
        display: block;
        color: @typoColor !important;
	cursor: pointer;
    }
    ul.nav-list li a.hover {
        .gradient(@moreGrayColor, @mainColor);
    }
    ul.nav-list li a span {
        float: right;
        color: @themeColor;
        font-size: 14px;
        line-height: 17px;
    }
    .ui-link, .ui-link:visited {
        font-weight: normal;
		color: @themeColor;
    }
    
    
    
    .bread-crumb {
        float: left;
        
        ul {
            border-left: 0;
            border-right: 0;
            margin: 0;
            padding: 0;
            font-size: 12px;
            overflow: hidden;
            li {
                list-style: none;
                float: left;
				.bcSeparator;
                padding: 8px;
                padding-right: 21px;
                a, a.ui-link {
                    color: @typoColor;
                }
                span {
                    margin: 2px 0 3px 0;
                    display: block;
                }
                img {
                    margin-top: 2px;
                }
            }
        }
    }
    
    /* bullet list styles */
    /* Bullet Styles */
    ol {
      padding: 0 0 0 30px;
      
      li {
	color: @typoColor;
	margin-bottom: 3px;
	span {
	  
	}
      }
    }
    ul.bullet-1, ul.bullet-2, ul.bullet-3, ul.bullet-4 {padding: 0 0 0 15px;}
    ul.bullet-1 li, ul.bullet-2 li, ul.bullet-3 li, ul.bullet-4 li {
	padding-left: 1em; 
	text-indent: -16px;
	list-style: none;
	padding: 0 0 0 15px;
	margin: 0 0 5px;
	background: none;
	margin-bottom: 3px;
    }
    ul.bullet-1 li a, ul.bullet-2 li a, ul.bullet-3 li a, ul.bullet-4 li a {font-size: 100%;line-height: 1.7;}
    ul.bullet-1 li {}
    ul.bullet-1 li:before {
      content: "o";
      color: @typoColor;
      margin-right: 9px;
      font-family: arial;
    }
    ul.bullet-2 li:before {
      content: "|";
      color: @themeColor;
      margin-right: 9px;
      font-family: arial;
    }
    ul.bullet-3 li:before {
      content: ">";
      color: @themeColor;
      margin-right: 9px;
      font-family: arial;
    }
    ul.bullet-4 li:before {
      content: "-";
      color: @themeColor;
      margin-right: 9px;
      font-family: arial;
    }

    
    /* Button Styles */
    .button {
      display: inline-block;
      padding: 6px 10px;
      border: 0px solid @moreGrayColor !important;
      margin-bottom: 4px;
      
      &.full-width {
	display: block;
	text-align: center;
      }
      
      .borderRadiusMe(5px);
      text-shadow: none;
      .gradient(@grayColor, @moreGrayColor);
    }
    .button1 {
      .gradient(@mainColor, darken(@mainColor, 5%));
      color: @themeColor;
      border: 1px solid @grayColor;
    }
    .button1.hover {
      .gradient(darken(@mainColor, 5%), @mainColor);
      border: 1px solid @grayColor;
    }
    .button2 {
      .gradient(lighten(@themeColor, 10%), @themeColor);
      color: @mainColor !important;
      border: 1px solid @themeColor;
    }
    .button2.hover {
      .gradient(@themeColor, lighten(@themeColor, 10%));
    }
    
    .button3 {
      .gradient(lighten(@typoColor, 30%), @typoColor);
      color: @mainColor !important;
      border: 1px solid #000;
    }
    .button3.hover {
      .gradient(#000, lighten(#000, 30%));
    }
    
    .button4 {
      .gradient(lighten(#5F8789, 30%), #5F8789);
      color: @mainColor !important;
      border: 1px solid #ccc;
    }.button5 {
      .gradient(lighten(#B02B2C, 30%), #B02B2C);
      color: @mainColor !important;
      border: 1px solid #ccc;
    }.button6 {
      .gradient(lighten(#D65799, 30%), #D65799);
      color: @mainColor !important;
      border: 1px solid #ccc;
    }.button7 {
      .gradient(lighten(#83A846, 30%), #83A846);
      color: @mainColor !important;
      border: 1px solid #ccc;
    }.button8 {
      .gradient(lighten(#555, 30%), #555);
      color: @mainColor !important;
      border: 1px solid #ccc;
    }.button9 {
      .gradient(lighten(#7BB0E7, 15%), #7BB0E7);
      color: @mainColor !important;
      border: 1px solid #ccc;
    }.button10 {
      .gradient(lighten(#D86D37, 30%), #D86D37);
      color: @mainColor !important;
      border: 1px solid #ccc;
    }.button11 {
      .gradient(lighten(#EDAE44, 15%), #EDAE44);
      color: @mainColor !important;
      border: 1px solid #ccc;
    }.button12 {
      .gradient(lighten(red, 30%), red);
      color: @mainColor !important;
      border: 1px solid #ccc;
    }
    .button4.hover, .button5.hover, .button6.hover, .button7.hover, .button8.hover, .button9.hover, .button10.hover, .button11.hover, .button12.hover {
      background: @typoColor !important;
      color: @mainColor !important;
    }
    
  
    .no-border {
      border: 0 !important;
    }
    
    /* Table Styles */
    table {
	border: 1px solid @moreGrayColor;
	margin-bottom: 5px;
    }
    table td, table th {
	padding: 5px 9px;
	text-align: left;
	font-weight: normal;
    }
    
    table.table1 th {
	color: @themeColor;
	font-weight: normal;
    }
    table.table1 td, table.table1 th {
	.gradient(@mainColor, @moreGrayColor);
    }
    
    table.table2 td, table.table2 th {
	background: @grayColor;
    }
    table.table2 th {
	border-bottom: 1px solid #d8d8d8;
    }
    
    table.table3 td, table.table3 th {
	background: @grayColor;
    }
    table.table3 th {
	background: @typoColor;
	color: @mainColor;
	text-shadow: none;
    }
  
  
    /* Notice Styles */
    pre  {background: #F9F1ED;border-bottom: 1px solid #DCD7D4;border-right: 1px solid #DCD7D4;color: #AC3400;font-style:italic;overflow: auto;padding: 10px;}
    .cssstyle-style1 pre, .cssstyle-style3 pre, .cssstyle-style5 pre {background: #333;border-bottom: 1px solid #3a3a3a;border-right: 1px solid #3a3a3a;color: #bbb;}
    .alert, .approved, .attention, .camera, .cart, .doc, .download, .media, .note, .notices {display: block;margin: 0 0 15px 0;background: repeat-x 0 100%;background-color: #FAFCFD;}
    .typo-icon {display: block;padding: 8px 10px 0px 36px;margin: 0 0 9px 0;background: no-repeat 10px 10px;}
    .alert {color: #D0583F;background-image: url(../images/icons/alert.png);border-bottom: 1px solid #F8C9BB;border-right: 1px solid #F8C9BB;}
    .approved {color: #6CB656;background-image: url(../images/icons/approved.png);border-bottom: 1px solid #C1CEC1;border-right: 1px solid #C1CEC1;}
    .attention {color: #E1B42F;background-image: url(../images/icons/attention.png);border-bottom: 1px solid #E4E4D5;border-right: 1px solid #E4E4D5;}
    .camera {color: #55A0B4;background-image: url(../images/icons/camera.png);border-bottom: 1px solid #C9D5D8;border-right: 1px solid #C9D5D8;}
    .cart {color: #559726;background-image: url(../images/icons/cart.png);border-bottom: 1px solid #D3D3D3;border-right: 1px solid #D3D3D3;}
    .doc {color: #666666;background-image: url(../images/icons/doc.png);border-bottom: 1px solid #E5E5E5;border-right: 1px solid #E5E5E5;}
    .download {color: #666666;background-image: url(../images/icons/download.png);border-bottom: 1px solid #D3D3D3;border-right: 1px solid #D3D3D3;}
    .media {color: #8D79A9;background-image: url(../images/icons/media.png);border-bottom: 1px solid #DBE1E6;border-right: 1px solid #DBE1E6;}
    .note {color: #B76F38;background-image: url(../images/icons/note.png);border-bottom: 1px solid #E6DAD2;border-right: 1px solid #E6DAD2;}
    .notices {color: #6187B3;background-image: url(../images/icons/notice.png);border-bottom: 1px solid #C7CDDA;border-right: 1px solid #C7CDDA;}
    .approved .typo-icon {background-image: url(../images/icons/approved-icon.png);}
    .alert .typo-icon {background-image: url(../images/icons/alert-icon.png);}
    .attention .typo-icon {background-image: url(../images/icons/attention-icon.png);}
    .camera .typo-icon {background-image: url(../images/icons/camera-icon.png);}
    .cart .typo-icon {background-image: url(../images/icons/cart-icon.png);}
    .doc .typo-icon {background-image: url(../images/icons/doc-icon.png);}
    .download .typo-icon {background-image: url(../images/icons/download-icon.png);}
    .media .typo-icon {background-image: url(../images/icons/media-icon.png);}
    .note .typo-icon {background-image: url(../images/icons/note-icon.png);}
    .notices .typo-icon {background-image: url(../images/icons/notice-icon.png);}


    
    
/*    end typography*/

    .cherry-slider {
        
        position: relative;
	overflow: hidden;
	margin: 0 auto;
        .anim-item {
	    whitespace: no-wrap;
            display: none;
            position: absolute;
            white-space: nowrap;
            p {
                margin: 0;
                padding: 3px 7px;
            }
        }
        .white-item {
            margin-left: -6px !important;
        }
    }
    
    .absolute {
        position: absolute;
    }
    .little-padding {
        padding: 3px 7px;
    }
    .white-bg {
        .whiteBg;
    }
    .gray-border {
        border: 1px solid @grayColor;
    }
    .justify {
      text-align: justify;
    }
    .wrap-right {
      margin: 15px;
      margin-right: 0;
      float: right;
    }
    .wrap-left, .alignleft {
      float: left;
      margin: 15px;
      margin-left: 0;
    }
}

.flexslider {
  margin: 0;
  min-height: 145px;
	background: transparent;
}

.rotate-10 {
  .rotation(10deg);
  display: block;
}
.rotate-minus-10 {
  .rotation(-10deg);
  display: block;
}
.rotate-10 {
  .rotation(5deg);
  display: block;
}


/* ==============================*/
/* Styles for Gallery */
/* ==============================*/
.news-item {
  li {
    margin-bottom: 10px;
  }
  
  p {
    margin-bottom: 0;
  }
}
.column-split {
  padding: 0;
  margin: 0;
  position: relative;
  
  .box-sizing;
  
  li {
    display: inline-block;
    float: left;
    list-style: none;
    width: 33.3%;
    color: @typoColor;
    iframe {
      margin-left: 5px;
    }
    strong {
        color: @themeColor2;
    }
    
  }
  &.gallery {
    li {
      img {
	display: block;
	width: 100%;
	height: auto;
	border: none;
	margin: 0;
      }
      a {
	display: block;
	margin-right: 5px;
	margin-bottom: 5px;
	border: 2px solid @mainColor;
	overflow: hidden;
      }
      a.hover {
	border-color: @themeColor;
      }
      
    }
  }
  
  &.four-column {
    li {
      width: 25%;
    }
  }
  &.two-column {
    li {
      width: 50%;
    }
  }
  &.one-column {
    li {
      width: 100%;
    }
  }
  &.flexible-column {
    li {
      @media only screen and (min-width: 90px) {
	width: 100%;
      }
      @media only screen and (min-width: 300px) {
	width: 50%;
      }
      @media only screen and (min-width: 500px) {
	width: 33.3%;
      }
      @media only screen and (min-width: 700px) {
	width: 25%;
      }
      @media only screen and (min-width: 900px) {
	/*width: 20%;*/
      }
    }
  }
  .left-padding {
    padding-left: 3px;
  }
  .right-padding {
    padding-right: 3px;
  }
}



/* ==============================*/
/* Styles for Search Page */
/* ==============================*/
.search-item {
  margin-bottom: 10px;
  padding-bottom: 10px;
  border-bottom: 1px dashed @moreGrayColor;
}


/* ==============================*/
/* Styles for Contact Page */
/* ==============================*/

form.designed {
    .form-element {
      margin-bottom: 10px; 
    }
    label {
      font-size: 14px;
    }
    input, textarea {
      background: @mainColor !important;
      margin: 0.1em 0;
      font-size: 14px;
      .drop-shadow(1px, 1px, 4px, 0);
      .borderRadiusMe(0px);
    }
    input.invalid, textarea.invalid {
      border-color: red;
    }
}
.address {
  height: 180px;
  p {
    margin-bottom: 8px;
  }
  img, .address-info {
    left: 50%;
    margin-left: -83px;
    width: 165px;
  }
}

/* ==============================*/
/* Styles for Blog Page */
/* ==============================*/

.blog-article {
    .article-body {
        img {
            float: right;
            margin: 0 0 10px 10px;
            width: 90px;
            height: auto;
          }
          img.left {
            float: left;
          }
          img.right {
            float: right;
          }
    }
}

.blog-article, .blog-full-article {
  .article-header {
    background: @grayColor;
    border-bottom: 1px solid @moreGrayColor;
    padding: 12px;
    margin-bottom: 10px;
    
    .title {
      text-transform: uppercase;
      color: @themeColor;
      margin: 0 !important;
    }
    .info {
      color: #ccc;
      margin: 0 !important;
      
      span {
        color: #aaa;
      }
    }
  }
  .article-body {
    padding: 4%;
    .text {
    }
  }
  
  .article-footer {
    padding: 4%;
    padding-top: 0;
    
    .social {
      margin-top: 3px;
    }
    .tags a {
        .borderRadiusMe(5px);
        color: @typoColor;
        border: 1px dotted @typoColor;
        float: left;
        display: block;
        margin-right: 5px;
        padding: 5px;
    }
  }
}
.blog-full-article {
    .article-body {
        padding: 0;
    }
    .article-footer {
        padding: 0;
        padding-top: 4%;
        
    }
}



/*management team*/
.info-items {
	.info-item {
		.gradient(@mainColor, @moreGrayColor);
		border-left: 5px solid @themeColor;
                
		&.special-member {

		}
		.left {
		    width: auto;
		}
                .first {
                    width: auto;
                    
                }
                .last {
                    padding: 0 10px;

                    @media only screen and (min-width: 219px) {
                        max-width: 104px;
                    }
                    @media only screen and (min-width: 319px) {
                        max-width: 164px;
                    }
                    @media only screen and (min-width: 400px) {
                        max-width: 264px;
                    }
                    @media only screen and (min-width: 600px) {
                        max-width: 324px;
                    }
                    .box-sizing;
                }
		img.photo {
			height: 163;
                        
                        display: block;
                        margin-bottom: 1px;
		}
		strong {
			display: block;
			font-weight: 100;
			margin-bottom: 2px;
                        margin-top: 10px;
		}
		p {
			margin-bottom: 10px;
		}
	}
}

.minus-shadow {
    padding-top: 0 !important;
}


#menu {
  background: @themeColor !important;
  background-attachment: fixed;
  width: 165px;
  height: auto;
  display: block;
  float: left;
  display: none;
  position: absolute;
  z-index: 1000;
  margin-top: 47px;
  .opacity(0.9);
}

#search {
	padding: 5px;
	border-radius: 5px;
	width: 90%;
	box-sizing: border-box;
        margin: 6px 4px;
	background: #fff url(../images/magnifier.png) no-repeat 95% center;
}

#menu h3{
	height: 51px;
        margin: 6px 4px;
	box-sizing: border-box;
	font-size:12px;
	color:#fff;
	margin:0;
	padding:4px 0 4px 4px;
	border-top:solid #6b6b6b 1px;
	border-bottom:solid #3d3d3d 1px;
	text-shadow: 0px -1px 1px #333;
}
#menu ul {
  margin: 0;
  padding: 0;
  width: inherit;
	.children {
		display: none !important;
	}
}
#menu ul li {
  list-style-type: none;
  margin: 0px 0;
}
#menu ul li a:link, #menu ul li a:visited, #menu ul li a:active {
  border-bottom: solid darken(@themeColor, 3%) 1px;
  box-shadow: 0 0px 0 lighten(@themeColor, 3%);
  color: #fff;
  font-size: 14px;
  text-decoration: none;
  width: 165px;
  display: block;
  padding: 10px 0px 10px 10px;
  box-sizing: border-box;
  text-shadow: none;
}
#menu ul li a.hover, #menu ul li a:active {
  background-color: #716f6f;
}
.current_page_item {
  /*background-color: #383737;
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1e1d1d), color-stop(21%, #383737));*/
  border-left: 3px solid @themeColor2;
  
  a {
    padding-left: 6px;
  }
}



/* icon styles */
.icon {
  float: left;
  text-align: center;
  width: 33%;
  margin-bottom: 25px;
  display: block;
  color: @typoColor !important;
  
  @media only screen and (max-width: 300px) {
    width: 50%;
  }
  @media only screen and (min-width: 550px) {
    width: 25%;
  }
  @media only screen and (min-width: 750px) {
    width: 20%;
  }
  
  img {
    margin: 0 auto;
    display: block;
  }
  span {
    
  }
}



  
/* responsive for ipad and bigger devices */
@media only screen and (min-width: 550px) {
    .anim-item {
      font-size: 15px;
    }
	.ipad-width-optimize {
		max-width: 500px;
		margin: 0 auto;
	}
}

.ui-controlgroup-controls {
  .ui-checkbox {
  }
}
.ui-btn-inner {
  border-top: none !important;
}
.ui-loader .ui-icon {
  background-color: transparent !important;
}
.ui-loading .ui-loader {
  display: block !important;
  .opacity;
  background: transparent !important;
}
.ui-content .ui-listview {
  margin: 0;
}
.ui-li {
  border-top: 0;
  a {
    padding-top: 5% !important;
    padding-bottom: 5% !important;
    padding-left: 5% !important;
  }
}
.ui-btn-up-a, .ui-btn-hover-a {
  .gradient-box;
  font-weight: 100;
  border: none !important;
  color: @typoColor !important;
  a {
    font-size: 13px !important;
    color: @typoColor !important;
  }
}
.ui-btn-hover-a {
  .gradient-box-invert;
}

.ui-collapsible-content {
  border-color: @moreGrayColor !important;
  padding: 10px;
  background: @grayColor;
}


/* Highlight Styles */
.highlight {
  background-color: @themeColor;
  color: @mainColor;
  text-shadow: none;
  margin-top: 5px;
  padding: 0px;
}
.white-highlight {
  background-color: #fff;
  color: #333;
}
.black-highlight {
  background-color: #333;
  color: #fff;
}

@media only screen and (min-width: 1010px) {
    #menu {
        display: block !important;
        border: 1px solid;
        .opacity(0.8);
    }
    .ui-mobile [data-role="page"], .ui-mobile [data-role="dialog"], .ui-page {
        width: 845px;
        left: 50% !important;
        margin-left: -420px !important;
        margin-top: 47px;
        min-height: 0 !important;
    }
    .menu-button {
        display: none !important;
    }
    .ui-footer, .ui-header {
        position: absolute !important;
    }
}

.comments-list {
    list-style: none;
    margin: 0;
    padding: 0;
    border-bottom: 1px dotted @typoColor;
    li {
        padding: 10px;
        border: 1px dotted @typoColor;
        border-bottom: none;
    }
    .comment-meta, .comment-meta a {
        cursor: default !important;
        color: @typoColor !important;
        margin-bottom: 10px;
    }
    .avatar {
        display: none;
    }
    .reply {
        display:none;
    }
    .comment-edit-link {
        display: none;
    }
    p {
        margin: 0;
        margin-bottom: 10px;
        font-weight: bold;
    }
    .comment-author {
    }
    .comment-meta {
    }
}
.logged-in-as {
    margin: 0;
    margin-bottom: 10px;
}

#twitter_update_list {
    padding-left: 0;
    padding-right: 0;
}


<?php
if ($_GET['bg']) {
?>

body {
        background-image: url('<?php echo $_GET['bg'];?>') !important;
        background-size: 100% auto !important;
        background-repeat: no-repeat;
}

<?php
}
?>