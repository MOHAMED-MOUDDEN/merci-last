<style>
    @import "https://designmodo.github.io/Flat-UI/dist/css/flat-ui.min.css";
@import "https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css";
@import "https://daneden.github.io/animate.css/animate.min.css";
/*-------------------------------*/
/*           VARIABLES           */
/*-------------------------------*/

// BACKGROUND COLOR
@bg-color: #583e7e;

// TEXT COLOR
@text-color: #fff;

// SIDEBAR LINK COLOR VARIABLES
@side-color-1: #1a1a1a;
@side-color-2: darken(@side-color-3, 5%);
@side-color-3: darken(@side-color-4, 5%);
@side-color-4: @bg-color;
@side-color-5: lighten(@side-color-4, 5%);
@side-color-6: lighten(@side-color-5, 5%);
@side-color-7: lighten(@side-color-6, 5%);
@side-color-8: lighten(@side-color-7, 5%);
@side-color-9: lighten(@side-color-8, 5%);

// HAMBURGER COLOR
@hamburger-color-closed: fadeout(@text-color, 30);
@hamburger-color-open: @text-color;

// WIDTH VARIABLES
@width1: 220px;
@width2: 100px;
@full-width: 100%;

// HEIGHT VARIABLES
@full-height: 100%;

body {
    position: relative;
    overflow-x: hidden;
}
body,
html {
  height: @full-height;
  background-color: @bg-color;
}







.nav {
  .open>a {
    background-color: transparent;
    &:hover {
      background-color: transparent;
    }
    &:focus {
      background-color: transparent;
    }
  }
}













/*-------------------------------*/
/*           Wrappers            */
/*-------------------------------*/

#wrapper {
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
  padding-left: 0;
  transition: all 0.5s ease;
}
#wrapper.toggled {
  padding-left: 220px;
  #sidebar-wrapper {
    width: @width1;
  }
  #page-content-wrapper {
    margin-right: -220px;
    position: absolute;
  }
}
#sidebar-wrapper {
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
  background: #1a1a1a;
  height: @full-height;
  left: 220px;
  margin-left: -220px;
  overflow-x: hidden;
  overflow-y: auto;
  transition: all 0.5s ease;
  width: 0;
  z-index: 1000;
  &::-webkit-scrollbar {
    display: none;
  }
}
#page-content-wrapper {
  padding-top: 70px;
  width: @full-width;
}
























/*-------------------------------*/
/*     Sidebar nav styles        */
/*-------------------------------*/

.sidebar-nav {
  list-style: none;
  margin: 0;
  padding: 0;
  position: absolute;
  top: 0;
  width: @width1;
  li {
    display: inline-block;
    line-height: 20px;
    position: relative;
    width: @full-width;
    &:before {
      background-color: #1c1c1c;
      content: '';
      height: @full-height;
      left: 0;
      position: absolute;
      top: 0;
      transition: width .2s ease-in;
      width: 3px;
      z-index: -1;
    }
    &:first-child {
      a {
        background-color: @side-color-1;
        color: #ffffff;
      }
    }
    &:nth-child(2) {
      &:before {
        background-color: @side-color-2;
      }
    }
    &:nth-child(3) {
      &:before {
        background-color: @side-color-3;
      }
    }
    &:nth-child(4) {
      &:before {
        background-color: @side-color-4;
      }
    }
    &:nth-child(5) {
      &:before {
        background-color: @side-color-5;
      }
    }
    &:nth-child(6) {
      &:before {
        background-color: @side-color-6;
      }
    }
    &:nth-child(7) {
      &:before {
        background-color: @side-color-7;
      }
    }
    &:nth-child(8) {
      &:before {
        background-color: @side-color-8;
      }
    }
    &:nth-child(9) {
      &:before {
        background-color: @side-color-9;
      }
    }
    &:hover {
      &:before {
        transition: width .2s ease-in;
        width: @full-width;
      }
    }
    a {
      color: #dddddd;
      display: block;
      padding: 10px 15px 10px 30px;
      text-decoration: none;
    }
  }
  li.open {
    &:hover {
      before {
        transition: width .2s ease-in;
        width: @full-width;
      }
    }
  }
  .dropdown-menu {
    background-color: #222222;
    border-radius: 0;
    border: none;
    box-shadow: none;
    margin: 0;
    padding: 0;
    position: relative;
    width: @full-width;
  }
}
.sidebar-nav li a:hover, .sidebar-nav li a:active, .sidebar-nav li a:focus, .sidebar-nav li.open a:hover, .sidebar-nav li.open a:active, .sidebar-nav li.open a:focus {
  background-color: transparent;
  color: #ffffff;
  text-decoration: none;
}
.sidebar-nav>.sidebar-brand {
  font-size: 20px;
  height: 65px;
  line-height: 44px;
}



























/*-------------------------------*/
/*       Hamburger-Cross         */
/*-------------------------------*/

.hamburger {
  background: transparent;
  border: none;
  display: block;
  height: 32px;
  margin-left: 15px;
  position: fixed;
  top: 20px;
  width: 32px;
  z-index: 999;
  &:hover {
    outline: none;
  }
  &:focus {
    outline: none;
  }
  &:active {
    outline: none;
  }
}
.hamburger.is-closed {
  &:before {
    -webkit-transform: translate3d(0,0,0);
    -webkit-transition: all .35s ease-in-out;
    color: #ffffff;
    content: '';
    display: block;
    font-size: 14px;
    line-height: 32px;
    opacity: 0;
    text-align: center;
    width: @width2;
  }
  &:hover {
    before {
      -webkit-transform: translate3d(-100px,0,0);
      -webkit-transition: all .35s ease-in-out;
      display: block;
      opacity: 1;
    }
    .hamb-top {
      -webkit-transition: all .35s ease-in-out;
      top: 0;
    }
    .hamb-bottom {
      -webkit-transition: all .35s ease-in-out;
      bottom: 0;
    }
  }
  .hamb-top {
    -webkit-transition: all .35s ease-in-out;
    background-color: @hamburger-color-closed;
    top: 5px;
  }
  .hamb-middle {
    background-color: @hamburger-color-closed;
    margin-top: -2px;
    top: 50%;
  }
  .hamb-bottom {
    -webkit-transition: all .35s ease-in-out;
    background-color: @hamburger-color-closed;
    bottom: 5px;
  }
}
.hamburger.is-closed .hamb-top, .hamburger.is-closed .hamb-middle, .hamburger.is-closed .hamb-bottom, .hamburger.is-open .hamb-top, .hamburger.is-open .hamb-middle, .hamburger.is-open .hamb-bottom  {
  height: 4px;
  left: 0;
  position: absolute;
  width: @full-width;
}
.hamburger.is-open {
  .hamb-top {
    -webkit-transform: rotate(45deg);
    -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
    background-color: @hamburger-color-open;
    margin-top: -2px;
    top: 50%;
  }
  .hamb-middle {
    background-color: @hamburger-color-open;
    display: none;
  }
  .hamb-bottom {
    -webkit-transform: rotate(-45deg);
    -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
    // background-color: #1a1a1a;
    background-color: @hamburger-color-open;
    margin-top: -2px;
    top: 50%;
  }
  &:before {
    -webkit-transform: translate3d(0,0,0);
    -webkit-transition: all .35s ease-in-out;
    color: #ffffff;
    content: '';
    display: block;
    font-size: 14px;
    line-height: 32px;
    opacity: 0;
    text-align: center;
    width: @width2;
  }
  &:hover {
    before {
      -webkit-transform: translate3d(-100px,0,0);
      -webkit-transition: all .35s ease-in-out;
      display: block;
      opacity: 1;
    }
  }
}
















/*-------------------------------*/
/*          Dark Overlay         */
/*-------------------------------*/

.overlay {
    position: fixed;
    display: none;
    width: @full-width;
    height: @full-height;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,.4);
    z-index: 1;
}


































/* SOME DEMO STYLES - NOT REQUIRED */
body, html {background-color: @bg-color} body {h1,h2,h3,h4 {color:fadeout(@text-color, 10);}p, blockquote {color:fadeout(@text-color, 30);}a {color:fadeout(@text-color, 20);text-decoration:underline;&:hover {color:@text-color;}}}



</style>







<script>
    $(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
</script>













<div id="wrapper">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                   Bootstrap 3
                </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-home"></i> Home</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-folder"></i> Page one</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-file-o"></i> Second page</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-cog"></i> Third page</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i> Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li class="dropdown-header">Dropdown heading</li>
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-bank"></i> Page four</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-dropbox"></i> Page 5</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-twitter"></i> Last page</a>
            </li>
        </ul>
    </nav>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
        <span class="hamb-top"></span>
        <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
      </button>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1 class="page-header">Awesome Bootstrap 3 Sidebar Navigation</h1>  
                    <p class="lead">Originally authored by <a href="https://bootsnipp.com/maridlcrmn">maridlcrmn</a> on Bootsnipp and then converted to Less and customized further by <a href="https://jay.holtslander.ca/?utm_source=codepen&utm_medium=pen-link" target="_blank">j_holtslander</a> who is building a <a href="https://codepen.io/collection/nJGkWV" target="_new">collection</a> of great Bootstrap 3 navbars.</p>
                    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue.</p>
                    <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum.</p>
                    <p>Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <h3>A heading in the mix.</h3>
                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum. Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                    <blockquote>Maecenas sed diam eget risus varius blandit sit amet non magna. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue.</blockquote>
                    <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum.</p>
                    <p>Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <h3>Another heading for typography's sake.</h3>
                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum. Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue.</p>
                    <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum.</p>
                    <p>Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->




