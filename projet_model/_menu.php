<style>
button,
input {
    font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
}

h4 {
    font-weight: 400;
}

a {
    color: #f96332;
}

a:hover,
a:focus {
    color: #f96332;
}

h4,
.h4 {
    font-size: 1.5em;
    line-height: 1.45em;
    margin-top: 30px;
    margin-bottom: 15px;
}

p {
    line-height: 1.61em;
    font-weight: 300;
    font-size: 1.2em;
}

body {
    color: #2c2c2c;
    font-size: 14px;
    font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
    overflow-x: hidden;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
}

.nav-item .nav-link,
.navbar {
    -webkit-transition: all 300ms ease 0s;
    -moz-transition: all 300ms ease 0s;
    -o-transition: all 300ms ease 0s;
    -ms-transition: all 300ms ease 0s;
    transition: all 300ms ease 0s;
}

[data-toggle="collapse"][data-parent="#accordion"] i {
    -webkit-transition: transform 150ms ease 0s;
    -moz-transition: transform 150ms ease 0s;
    -o-transition: transform 150ms ease 0s;
    -ms-transition: all 150ms ease 0s;
    transition: transform 150ms ease 0s;
}

[data-toggle="collapse"][data-parent="#accordion"][aria-expanded="true"] i {
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
}

@font-face {
    font-family: 'Nucleo Outline';
  src: url("../fonts/nucleo-outline.eot");
  src: url("../fonts/nucleo-outline.eot") format("embedded-opentype"), url("../fonts/nucleo-outline.woff2") format("woff2"), url("../fonts/nucleo-outline.woff") format("woff"), url("../fonts/nucleo-outline.ttf") format("truetype");
  font-weight: normal;
  font-style: normal;
}

.now-ui-icons {
    display: inline-block;
    font: normal normal normal 14px/1 'Nucleo Outline';
    font-size: inherit;
    speak: none;
    text-transform: none;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

@-webkit-keyframes nc-icon-spin {
    0% {
        -webkit-transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
    }
}

@-moz-keyframes nc-icon-spin {
    0% {
        -moz-transform: rotate(0deg);
    }

    100% {
        -moz-transform: rotate(360deg);
    }
}

@keyframes nc-icon-spin {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

.now-ui-icons.objects_globe:before {
    content: "\ea2f";
}

.now-ui-icons.ui-1_settings-gear-63:before {
    content: "\ea4e";
}

.now-ui-icons.users_circle-08:before {
    content: "\ea23";
}

.navbar {
    padding-top: 0.625rem;
    padding-bottom: 0.625rem;
    min-height: 53px;
    margin-bottom: 20px;
    box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.15);
}

.navbar a {
    vertical-align: middle;
}

.navbar a:not(.btn):not(.dropdown-item) {
    color: #FFFFFF;
}

.navbar p {
    display: inline-block;
    margin: 0;
    line-height: 21px;
    font-weight: inherit;
    font-size: inherit;
}

.navbar .navbar-nav .nav-link:not(.btn) {
    text-transform: uppercase;
    font-size: 0.7142em;
    padding: 0.5rem 0.7rem;
    line-height: 1.625rem;
}

.navbar .navbar-nav .nav-link:not(.btn) i.fab+p,
.navbar .navbar-nav .nav-link:not(.btn) i.now-ui-icons+p {
    margin-left: 3px;
}

.navbar .navbar-nav .nav-link:not(.btn) i.fab,
.navbar .navbar-nav .nav-link:not(.btn) i.now-ui-icons {
    font-size: 18px;
    position: relative;
    top: 3px;
    text-align: center;
    width: 21px;
}

.navbar .navbar-nav .nav-link:not(.btn) i.now-ui-icons {
    top: 4px;
    font-size: 16px;
}

.navbar .navbar-nav .nav-item.active .nav-link:not(.btn),
.navbar .navbar-nav .nav-item .nav-link:not(.btn):focus,
.navbar .navbar-nav .nav-item .nav-link:not(.btn):hover,
.navbar .navbar-nav .nav-item .nav-link:not(.btn):active {
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 0.1875rem;
}

.navbar .navbar-brand {
    text-transform: uppercase;
    font-size: 0.8571em;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    line-height: 1.625rem;
}

.navbar .navbar-toggler {
    width: 37px;
    height: 27px;
    outline: 0;
    cursor: pointer;
}

.navbar.navbar-transparent {
    background-color: transparent !important;
    box-shadow: none;
    color: #FFFFFF;
    padding-top: 20px !important;
}

.bg-primary {
    background-color: #f96332 !important;
}

.bg-info {
    background-color: #2CA8FF !important;
}

.bg-success {
    background-color: #18ce0f !important;
}

.bg-danger {
    background-color: #FF3636 !important;
}

.bg-warning {
    background-color: #FFB236 !important;
}

img {
    max-width: 100%;
    border-radius: 1px;
}

.login-page .link {
    font-size: 10px;
    color: #FFFFFF;
    text-decoration: none;
}

.section {
    padding: 70px 0;
    position: relative;
    background: #FFFFFF;
}

.section-navbars {
    padding-bottom: 0;
}

[data-background-color="orange"] {
    background-color: #e95e38;
}

[data-background-color="black"] {
    background-color: #2c2c2c;
}

[data-background-color]:not([data-background-color="gray"]) {
    color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) p {
    color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) h4,
[data-background-color]:not([data-background-color="gray"]) a:not(.btn):not(.dropdown-item) {
    color: #FFFFFF;
}

@media screen and (max-width: 991px) {
    .sidebar-collapse .navbar-collapse {
        position: fixed;
        display: block;
        top: 0;
        height: 100% !important;
        width: 300px;
        right: 0;
        z-index: 1032;
        visibility: visible;
        background-color: #999;
        overflow-y: visible;
        border-top: none;
        text-align: left;
        max-height: none !important;
        -webkit-transform: translate3d(300px, 0, 0);
        -moz-transform: translate3d(300px, 0, 0);
        -o-transform: translate3d(300px, 0, 0);
        -ms-transform: translate3d(300px, 0, 0);
        transform: translate3d(300px, 0, 0);
        -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    }

    .sidebar-collapse .navbar-collapse:before {
        background: #f96332;
        background: -webkit-linear-gradient(#f96332 0%, #000 80%);
        background: -o-linear-gradient(#f96332 0%, #000 80%);
        background: -moz-linear-gradient(#f96332 0%, #000 80%);
        background: linear-gradient(#f96332 0%, #000 80%);
        opacity: 0.76;
        filter: alpha(opacity=76);
        display: block;
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: -1;
    }

    .sidebar-collapse .navbar-collapse .navbar-nav:not(.navbar-logo) .nav-link {
        margin: 0 1rem;
        margin-top: 0.3125rem;
    }

    .sidebar-collapse .navbar-collapse .navbar-nav:not(.navbar-logo) .nav-link:not(.btn) {
        color: #FFFFFF !important;
    }

    .sidebar-collapse .navbar .navbar-nav {
        margin-top: 53px;
        position: relative;
        max-height: calc(100vh - 75px);
        min-height: 100%;
        overflow: auto;
    }

    .sidebar-collapse .navbar .navbar-translate {
        width: 100%;
        position: relative;
        display: flex;
        -ms-flex-pack: justify !important;
        justify-content: space-between !important;
        -ms-flex-align: center;
        align-items: center;
        -webkit-transform: translate3d(0px, 0, 0);
        -moz-transform: translate3d(0px, 0, 0);
        -o-transform: translate3d(0px, 0, 0);
        -ms-transform: translate3d(0px, 0, 0);
        transform: translate3d(0px, 0, 0);
        -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    }

    .sidebar-collapse .navbar .navbar-toggler-bar {
        display: block;
        position: relative;
        width: 22px;
        height: 1px;
        border-radius: 1px;
        background: #FFFFFF;
    }

    .sidebar-collapse .navbar .navbar-toggler-bar+.navbar-toggler-bar {
        margin-top: 7px;
    }

    .sidebar-collapse .navbar .navbar-toggler-bar.bar2 {
        width: 17px;
        transition: width .2s linear;
    }

    .sidebar-collapse [class*="navbar-expand-"] .navbar-collapse {
        width: 300px;
    }

    .navbar-nav .nav-link i.fab,
  .navbar-nav .nav-link i.now-ui-icons {
        opacity: .5;
    }

    .navbar-nav .nav-link i.now-ui-icons {
        opacity: .5;
    }
}

@media screen and (min-width: 992px) {
    .navbar-collapse:not(.has-image) {
        background: transparent !important;
    }

    .navbar-nav .nav-item:not(:last-child) {
        margin-right: 5px;
    }
}

@media screen and (max-width: 576px) {
    .navbar[class*='navbar-expand-'] .container {
        margin-left: 0;
        margin-right: 0;
    }
}

.navigation-example {
    background-position: center center;
    background-size: cover;
    margin-top: 0;
    min-height: 740px;
    height: 100%;
}

.section-navbars {
    padding-top: 0;
}

#navbar .navbar {
    margin-bottom: 20px;
}

#navbar .navbar-toggler {
    pointer-events: none;
}


footer{
    margin-top:0px;
    color: #555;
    background: #fff;
    padding: 25px;
    font-weight: 300;
    
}
.footer p{
    margin-bottom: 0;
}
footer p a{
    color: #555;
    font-weight: 400;
}

@font-face {
  font-family: 'Nucleo Outline';
  src: url("https://github.com/creativetimofficial/now-ui-kit/blob/master/assets/fonts/nucleo-outline.eot");
  src: url("https://github.com/creativetimofficial/now-ui-kit/blob/master/assets/fonts/nucleo-outline.eot") format("embedded-opentype");
  src: url("https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/fonts/nucleo-outline.woff2");
  font-weight: normal;
  font-style: normal;
        
}

.now-ui-icons {
  display: inline-block;
  font: normal normal normal 14px/1 'Nucleo Outline';
  font-size: inherit;
  speak: none;
  text-transform: none;
  /* Better Font Rendering */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

@media screen and (max-width: 991px) {
    .section-navbars .navbar-collapse {
        display: none !important;
    }
}
</style>
<nav class="navbar navbar-expand-lg bg-primary">
            <div class="container">
              <div class="navbar-translate">
                <a class="navbar-brand" href="#pablo">GestAB</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-primary" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse" id="example-navbar-primary">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="index_classe.php">
                      <i class="now-ui-icons users_circle-08"></i>
                      <p>Classes</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index_etudiant.php">
                      <i class="now-ui-icons users_circle-08"></i>
                      <p>Etudiants</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index_absence.php">
                      <i class="now-ui-icons ui-1_settings-gear-63"></i>
                      <p>Absences</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="deconnexion.php">
                      <i class="now-ui-icons ui-1_settings-gear-63"></i>
                      <p>Deconnexion</p>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- End Navbar Primary -->
         