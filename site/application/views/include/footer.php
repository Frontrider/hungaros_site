<div id="page-footer" class="page-footer" role="contentinfo">
  <div class="navbar" role="navigation">
    <div class="inner">
      <ul id="nav-footer" class="nav-footer linklist" role="menubar">

        <li class="responsive-menu hidden rightside dropdown-container">
          <a href="javascript:void(0);" class="js-responsive-menu-link responsive-menu-link dropdown-toggle"><i class="icon fa-bars fa-fw" aria-hidden="true"></i></a>
          <div class="dropdown">
            <div class="pointer">
              <div class="pointer-inner"></div>
            </div>
            <ul class="dropdown-contents"></ul>
          </div>
        </li>

        <li class="rightside" data-last-responsive="true">
          <a href="http://www.hungaros.hu/memberlist.php" title="Felhasználók listájának megtekintése" role="menuitem">
          <i class="icon fa-group fa-fw" aria-hidden="true"></i><span>Taglista</span>
          </a>
        </li>
        <li class="rightside" data-last-responsive="true">
          <a href="http://www.hungaros.hu/memberlist.php?mode=team" role="menuitem">
          <i class="icon fa-shield fa-fw" aria-hidden="true"></i><span>A csapat</span>
          </a>
        </li>
        <li class="rightside" data-last-responsive="true">
          <a href="http://www.hungaros.hu/memberlist.php?mode=contactadmin" role="menuitem">
          <i class="icon fa-envelope fa-fw" aria-hidden="true"></i><span>Kapcsolat</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="copyright">
    <br><strong><span>Téma:</span>Original Author: <a href="http://www.bradleyv.com/">Brad Veryard</a></strong>
    <br><strong><span></span>Updated to 3.2 by <a href="https://twitter.com/MannixMD">MannixMD</a></strong>
  </div>
  <div id="darkenwrapper" class="darkenwrapper" data-ajax-error-title="AJAX_ERROR_TITLE" data-ajax-error-text="AJAX_ERROR_TEXT" data-ajax-error-text-abort="AJAX_ERROR_TEXT_ABORT" data-ajax-error-text-timeout="AJAX_ERROR_TEXT_TIMEOUT" data-ajax-error-text-parsererror="AJAX_ERROR_TEXT_PARSERERROR">
    <div id="darken" class="darken">&nbsp;</div>
  </div>
  <div id="phpbb_alert" class="phpbb_alert" data-l-err="ERROR" data-l-timeout-processing-req="TIMEOUT_PROCESSING_REQ">
    <a href="#" class="alert_close">
    <i class="icon fa-times-circle fa-fw" aria-hidden="true"></i>
    </a>
    <h3 class="alert_title">&nbsp;</h3>
    <p class="alert_text"></p>
  </div>
  <div id="phpbb_confirm" class="phpbb_alert">
    <a href="#" class="alert_close">
    <i class="icon fa-times-circle fa-fw" aria-hidden="true"></i>
    </a>
    <div class="alert_text"></div>
  </div>
</div>
</div>

<div class="servermenu">
  <div class="slider">
    <div class="label">Szerver</div>
  </div>
  <div id="serverstats" class="mycontent">
    <iframe src="http://jatek.hungaros.hu/server_status/index.php" width="180px"></iframe>
  </div>
</div>
<script type="text/javascript" src="./assets/javascript/jquery.min.js?assets_version=3"></script>
<script type="text/javascript" src="./assets/javascript/core.js?assets_version=3"></script>
<script type="text/javascript">
  $(document).ready($.get( "http://jatek.hungaros.hu/server_status",function (data) {
    document.getElementById("serverstats").innerHTML = data;
  }));
</script>
<script type="text/javascript" src="./styles/prosilver/template/forum_fn.js?assets_version=3"></script>
<script type="text/javascript" src="./styles/prosilver/template/ajax.js?assets_version=3"></script>
</div>
</body>
</html>
