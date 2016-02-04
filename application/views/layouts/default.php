<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Right - Bootstrap Admin Template</title>
    <link rel="icon" type="image/png" href="<?php echo base_url('img/favicon.png'); ?>">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-favicon.png">
    <link href="<?php echo base_url('ux/libs/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('ux/libs/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('ux/libs/jquery.scrollbar/jquery.scrollbar.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('ux/libs/ionrangeslider/css/ion.rangeSlider.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('ux/libs/ionrangeslider/css/ion.rangeSlider.skinFlat.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('ux/libs/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css'); ?>" rel="stylesheet">
		
		<?php if(isset($controller_stylesheet_files)): foreach($controller_stylesheet_files as $controller_stylesheet_file): ?>
		
		 <link href="<?php echo base_url($controller_stylesheet_file); ?>" rel="stylesheet">
		
		<?php endforeach; endif; ?>
		
    <link href="<?php echo base_url('ux/css/right.css'); ?>" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body class="solid_dark">
    <div class="wrapper">
      <nav class="navbar navbar-static-top header-navbar">
        <div class="header-navbar-mobile">
          <div class="header-navbar-mobile__menu">
            <button type="button" class="btn"><i class="fa fa-bars"></i></button>
          </div>
          <div class="header-navbar-mobile__title"><span>Blank</span></div>
          <div class="header-navbar-mobile__settings dropdown"><a href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn dropdown-toggle"><i class="fa fa-power-off"></i></a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="#">Log Out</a></li>
            </ul>
          </div>
        </div>
        <div class="navbar-header">
					<!-- Todo : Fix this nonsense -->
					<div class="navbar-brand">
						<a href="#" class="logo">
							<img src="<?php echo base_url('img/varyx-logo.png'); ?>" alt="logo">
							<span class="menu-toggle hidden-xs">
								CMP
							</span>
						</a>
					</div>
				</div>
				
        <div class="topnavbar">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="<?php echo site_url('dashboard'); ?>"><span>Dashboard</span></a></li>
            <li><a href="inbox.html"><span>Mailbox</span></a></li>
            <li class="dropdown active"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><span>Pages&nbsp;<i class="caret"></i></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url('posts'); ?>"><span>Posts</span></a></li>
                <li><a href="<?php echo site_url('pages'); ?>"><span>Pages</span></a></li>
                <li><a href="<?php echo site_url('users'); ?>"><span>Users</span></a></li>
              </ul>
            </li>
          </ul>
          <ul class="userbar nav navbar-nav">
            <li class="dropdown"><a href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="userbar__settings dropdown-toggle"><i class="fa fa-power-off"></i></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url('logout'); ?>">Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <div class="dashboard">
        <div class="sidebar">
          <div class="quickmenu">
            <div class="quickmenu__cont">
              <div class="quickmenu__list">
                <div class="quickmenu__item active">
                  <div class="fa fa-fw fa-home"></div>
                </div>
                <div class="quickmenu__item">
                  <div class="fa fa-fw fa-envelope-o"></div>
                </div>
                <div class="quickmenu__item new">
                  <div class="fa fa-fw fa-comments-o"></div>
                </div>
                <div class="quickmenu__item">
                  <div class="fa fa-fw fa-feed"></div>
                </div>
                <div class="quickmenu__item">
                  <div class="fa fa-fw fa-cog"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="scrollable scrollbar-macosx">
            <div class="sidebar__cont">
              <div class="sidebar__menu">
                <div class="sidebar__title">Pages</div>
                <ul class="nav nav-menu">
                  <li <?php if($active == 'dashboard'):?>class="active"<?php endif; ?>><a href="<?php echo site_url('dashboard'); ?>">
                      <div class="nav-menu__ico"><i class="fa fa-fw fa-star"></i></div>
                      <div class="nav-menu__text"><span>Dashboard</span></div></a></li>
                  <li><a href="products.html">
                      <div class="nav-menu__ico"><i class="fa fa-fw fa-cube"></i></div>
                      <div class="nav-menu__text"><span>Products</span></div></a></li>
                  <li><a href="#">
                      <div class="nav-menu__ico"><i class="fa fa-fw fa-envelope"></i></div>
                      <div class="nav-menu__text"><span>Mailbox</span></div>
                      <div class="nav-menu__right"><i class="fa fa-fw fa-angle-right arrow"></i></div></a>
                    <ul class="nav nav-menu__second collapse">
                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="sent.html">Sent</a></li>
                      <li><a href="compose.html">Compose</a></li>
                    </ul>
                  </li>
                  <li><a href="orders.html">
                      <div class="nav-menu__ico"><i class="fa fa-fw fa-truck"></i></div>
                      <div class="nav-menu__text"><span>Orders</span></div>
                      <div class="nav-menu__right"><i class="badge">2</i></div></a></li>
                  <li <?php if($active == 'users'):?>class="active"<?php endif; ?>><a href="<?php echo site_url('users'); ?>">
                      <div class="nav-menu__ico"><i class="fa fa-fw fa-user"></i></div>
                      <div class="nav-menu__text"><span>Users</span></div></a></li>
                  <li><a href="#">
                      <div class="nav-menu__ico"><i class="fa fa-fw fa-folder-o"></i></div>
                      <div class="nav-menu__text"><span>Other</span></div>
                      <div class="nav-menu__right"><i class="fa fa-fw fa-angle-right arrow"></i></div></a>
                    <ul class="nav nav-menu__second collapse in">
                      <li><a href="blank.html">Blank</a></li>
                      <li><a href="login.html">Login</a></li>
                    </ul>
                  </li>
                </ul>
                <div class="sidebar__title">Administration</div>
                <ul class="nav nav-menu">
                  <li>
										<a href="#">
                      <div class="nav-menu__ico"><i class="fa fa-fw fa-th-large"></i></div>
                      <div class="nav-menu__text"><span>UI Elements</span></div>
                      <div class="nav-menu__right"><i class="fa fa-fw fa-angle-right arrow"></i></div>
										</a>
                    <ul class="nav nav-menu__second collapse">
                      <li><a href="general.html">General</a></li>
                      <li><a href="panels.html">Panels</a></li>
                      <li><a href="tabs.html">Tabs</a></li>
                      <li><a href="modals.html">Modals</a></li>
                      <li><a href="buttons.html">Buttons</a></li>
                    </ul>
                  </li>
                  <li><a href="#">
                      <div class="nav-menu__ico"><i class="fa fa-fw fa-clone"></i></div>
                      <div class="nav-menu__text"><span>Forms</span></div>
                      <div class="nav-menu__right"><i class="fa fa-fw fa-angle-right arrow"></i></div></a>
                    <ul class="nav nav-menu__second collapse">
                      <li><a href="controls.html">Controls</a></li>
                      <li><a href="validation.html">Validation</a></li>
                      <li><a href="texteditor.html">Text Editor</a></li>
                    </ul>
                  </li>
                  <li><a href="#">
                      <div class="nav-menu__ico"><i class="fa fa-fw fa-table"></i></div>
                      <div class="nav-menu__text"><span>Tables</span></div>
                      <div class="nav-menu__right"><i class="fa fa-fw fa-angle-right arrow"></i></div></a>
                    <ul class="nav nav-menu__second collapse">
                      <li><a href="table_static.html">Static</a></li>
                      <li><a href="table_sortable.html">Sortable</a></li>
                      <li><a href="table_data.html">DataTable</a></li>
                    </ul>
                  </li>
                  <li><a href="charts.html">
                      <div class="nav-menu__ico"><i class="fa fa-fw fa-pie-chart"></i></div>
                      <div class="nav-menu__text"><span>Charts</span></div>
										</a>
									</li>
                </ul>
              </div>
              <div class="sidebar__menu">
                <div class="sidebar__btn"><a href="compose.html" class="btn btn-block btn-default">Compose Mail</a></div>
                <div class="sidebar__title">Mail</div>
                <ul class="nav nav-menu">
                  <li><a href="inbox.html">
                      <div class="nav-menu__ico"><i class="fa fa-fw fa-inbox"></i></div>
                      <div class="nav-menu__text"><span>Inbox</span></div>
                      <div class="nav-menu__right"><i class="badge"><b>2</b> / 100</i></div></a></li>
                  <li><a href="sent.html">
                      <div class="nav-menu__ico"><i class="fa fa-fw fa-upload"></i></div>
                      <div class="nav-menu__text"><span>Sent</span></div>
                      <div class="nav-menu__right"><i class="badge">30</i></div></a></li>
                </ul>
                <div class="sidebar__title">Tags</div>
                <div class="ul nav nav-menu">
                  <li><a href="inbox.html">
                      <div class="nav-menu__ico tag_clients"><i class="fa fa-fw fa-tag"></i></div>
                      <div class="nav-menu__text"><span>Clients</span></div></a></li>
                  <li><a href="inbox.html">
                      <div class="nav-menu__ico tag_social"><i class="fa fa-fw fa-tag"></i></div>
                      <div class="nav-menu__text"><span>Social</span></div></a></li>
                  <li><a href="inbox.html">
                      <div class="nav-menu__ico tag_support"><i class="fa fa-fw fa-tag"></i></div>
                      <div class="nav-menu__text"><span>Support</span></div></a></li>
                </div>
              </div>
              <div class="sidebar__menu">
                <div class="sidebar__title">New Messages</div>
                <div class="lm-widget">
                  <div class="lm-widget__list">
                    <div class="lm-widget__item new">
                      <div class="lm-widget__title"><i class="fa fa-fw fa-tag tag_support"></i><span>Support</span></div>
                      <div class="lm-widget__text">Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis.</div><a href="inbox.html" class="lm-widget__link"></a>
                    </div>
                    <div class="lm-widget__item new">
                      <div class="lm-widget__title"><i class="fa fa-fw fa-tag tag_clients"></i><span>Stephen Olson</span></div>
                      <div class="lm-widget__text">Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue.</div><a href="inbox.html" class="lm-widget__link"></a>
                    </div>
                  </div>
                </div>
                <div class="sidebar__title">Recent list</div>
                <div class="lm-widget">
                  <div class="lm-widget__list">
                    <div class="lm-widget__item">
                      <div class="lm-widget__title"><i class="fa fa-fw fa-tag tag_social"></i><span>Jesse Shaw</span></div>
                      <div class="lm-widget__text">Nam ultrices, libero non mattis pulvinar.</div><a href="inbox.html" class="lm-widget__link"></a>
                    </div>
                    <div class="lm-widget__item">
                      <div class="lm-widget__title"><i class="fa fa-fw fa-tag"></i><span>Mary Payne</span></div>
                      <div class="lm-widget__text">Vivamus tortor. Duis mattis egestas metus.</div><a href="inbox.html" class="lm-widget__link"></a>
                    </div>
                    <div class="lm-widget__item">
                      <div class="lm-widget__title"><i class="fa fa-fw fa-tag"></i><span>Bob Romero</span></div>
                      <div class="lm-widget__text">Morbi porttitor lorem id ligula.</div><a href="inbox.html" class="lm-widget__link"></a>
                    </div>
                    <div class="lm-widget__item">
                      <div class="lm-widget__title"><i class="fa fa-fw fa-tag tag_social"></i><span>Kevin Hosser</span></div>
                      <div class="lm-widget__text">Libero non mattis pulvinar.</div><a href="inbox.html" class="lm-widget__link"></a>
                    </div>
                    <div class="lm-widget__item">
                      <div class="lm-widget__title"><i class="fa fa-fw fa-tag tag_clients"></i><span>Perry Winter</span></div>
                      <div class="lm-widget__text">Tortor. Duis mattis egestas metus.</div><a href="inbox.html" class="lm-widget__link"></a>
                    </div>
                    <div class="lm-widget__item">
                      <div class="lm-widget__title"><i class="fa fa-fw fa-tag tag_support"></i><span>Ivan Nemirov</span></div>
                      <div class="lm-widget__text">Portitor lorem id ligula.</div><a href="inbox.html" class="lm-widget__link"></a>
                    </div>
                    <div class="lm-widget__item">
                      <div class="lm-widget__title"><i class="fa fa-fw fa-tag"></i><span>Jonny Fount</span></div>
                      <div class="lm-widget__text">Lorem id ligula morbi porttitor .</div><a href="inbox.html" class="lm-widget__link"></a>
                    </div>
                    <div class="lm-widget__item">
                      <div class="lm-widget__title"><i class="fa fa-fw fa-tag"></i><span>Hue Logan</span></div>
                      <div class="lm-widget__text">Pulvinar libero non mattis.</div><a href="inbox.html" class="lm-widget__link"></a>
                    </div>
                    <div class="lm-widget__item">
                      <div class="lm-widget__title"><i class="fa fa-fw fa-tag tag_clients"></i><span>Summer Gordon</span></div>
                      <div class="lm-widget__text">Hattis tortor. Duis egestas metus.</div><a href="inbox.html" class="lm-widget__link"></a>
                    </div>
                    <div class="lm-widget__item">
                      <div class="lm-widget__title"><i class="fa fa-fw fa-tag tag_support"></i><span>Sonya Blade</span></div>
                      <div class="lm-widget__text">Itor lorem id ligula.</div><a href="inbox.html" class="lm-widget__link"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sidebar__menu">
                <div class="sidebar__title">Recent activity</div>
                <div class="ra-widget">
                  <div class="ra-widget__cont">
                    <div class="ra-widget__list">
                      <div class="ra-widget__item ra-widget__item_user">
                        <div class="ra-widget__ico"><i class="fa fa-fw"></i></div>
                        <div class="ra-widget__info">
                          <div class="ra-widget__text"><a href='./'>Gary Long</a> has registered.<span class="ra-widget__date">09:20</span></div>
                        </div>
                      </div>
                      <div class="ra-widget__item ra-widget__item_product">
                        <div class="ra-widget__ico"><i class="fa fa-fw"></i></div>
                        <div class="ra-widget__info">
                          <div class="ra-widget__text">New product <a href='./'>Sony PlayStation 4</a>.<span class="ra-widget__date">10:08</span></div>
                        </div>
                      </div>
                      <div class="ra-widget__item ra-widget__item_order">
                        <div class="ra-widget__ico"><i class="fa fa-fw"></i></div>
                        <div class="ra-widget__info">
                          <div class="ra-widget__text">Order <a href='./'>#35108243</a>.<span class="ra-widget__date">Jan 28, 09:42</span></div>
                        </div>
                      </div>
                      <div class="ra-widget__item ra-widget__item_subscriber">
                        <div class="ra-widget__ico"><i class="fa fa-fw"></i></div>
                        <div class="ra-widget__info">
                          <div class="ra-widget__text"><a href='./'>Julie Payne</a> subscribed to news.<span class="ra-widget__date">Jan 28, 18:06</span></div>
                        </div>
                      </div>
                      <div class="ra-widget__item ra-widget__item_mail">
                        <div class="ra-widget__ico"><i class="fa fa-fw"></i></div>
                        <div class="ra-widget__info">
                          <div class="ra-widget__text">30 letters was sent.<span class="ra-widget__date">Jan 27, 03:08</span></div>
                        </div>
                      </div>
                      <div class="ra-widget__item ra-widget__item_order">
                        <div class="ra-widget__ico"><i class="fa fa-fw"></i></div>
                        <div class="ra-widget__info">
                          <div class="ra-widget__text">Order <a href='./'>#35597433</a>.<span class="ra-widget__date">Jan 26, 19:02</span></div>
                        </div>
                      </div>
                      <div class="ra-widget__item ra-widget__item_payment">
                        <div class="ra-widget__ico"><i class="fa fa-fw"></i></div>
                        <div class="ra-widget__info">
                          <div class="ra-widget__text">$385 incoming payment.<span class="ra-widget__date">Jan 26, 18:06</span></div>
                        </div>
                      </div>
                      <div class="ra-widget__item ra-widget__item_payment">
                        <div class="ra-widget__ico"><i class="fa fa-fw"></i></div>
                        <div class="ra-widget__info">
                          <div class="ra-widget__text">$2824 incoming payment.<span class="ra-widget__date">Jan 26, 09:11</span></div>
                        </div>
                      </div>
                      <div class="ra-widget__item ra-widget__item_subscriber">
                        <div class="ra-widget__ico"><i class="fa fa-fw"></i></div>
                        <div class="ra-widget__info">
                          <div class="ra-widget__text"><a href='./'>Greg Bush</a> subscribed to news.<span class="ra-widget__date">Jan 26, 05:36</span></div>
                        </div>
                      </div>
                      <div class="ra-widget__item ra-widget__item_product">
                        <div class="ra-widget__ico"><i class="fa fa-fw"></i></div>
                        <div class="ra-widget__info">
                          <div class="ra-widget__text">New product <a href='./'>Shoober</a>.<span class="ra-widget__date">Jan 25, 23:19</span></div>
                        </div>
                      </div>
                      <div class="ra-widget__item ra-widget__item_order">
                        <div class="ra-widget__ico"><i class="fa fa-fw"></i></div>
                        <div class="ra-widget__info">
                          <div class="ra-widget__text">Order <a href='./'>#31248769</a>.<span class="ra-widget__date">Jan 25, 16:51</span></div>
                        </div>
                      </div>
                      <div class="ra-widget__item ra-widget__item_payment">
                        <div class="ra-widget__ico"><i class="fa fa-fw"></i></div>
                        <div class="ra-widget__info">
                          <div class="ra-widget__text">$3205 incoming payment.<span class="ra-widget__date">Jan 25, 10:44</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sidebar__menu">
                <div class="sidebar__title">Settings</div>
                <div class="ss-widget">
                  <div class="ss-widget__cont">
                    <div class="ss-widget__row">
                      <div class="ss-widget__cell">Site</div>
                      <div class="ss-widget__cell">
                        <input type="checkbox" checked="checked" data-size="micro" data-on-color="success" data-off-color="danger" class="bs-switch">
                      </div>
                    </div>
                    <div class="ss-widget__row">
                      <div class="ss-widget__cell">Mailing</div>
                      <div class="ss-widget__cell">
                        <input type="checkbox" data-size="micro" data-on-color="success" data-off-color="danger" class="bs-switch">
                      </div>
                    </div>
                    <div class="ss-widget__item">
                      <div class="ss-widget__label">Limit</div>
                      <div class="ss-widget__value">
                        <input type="text" name="" value="" data-grid="false" data-min="0" data-max="2000" data-from="600" data-step="200" class="settings-slider">
                      </div>
                    </div>
                    <div class="ss-widget__row">
                      <div class="ss-widget__cell">Timeout</div>
                      <div class="ss-widget__cell">
                        <input type="number" min="5" max="50" step="5" value="15" class="form-control input-sm">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="sidestat">
                  <div class="sidestat__cont">
                    <div class="sidestat__item">
                      <div class="sidestat__value">1,760</div>
                      <div class="sidestat__text">visits of your site</div>
                      <div class="sidestat__chart sparkline bar">1699,1686,8368,9011,6129,3837,0997,2034,0483,1457,2950,8946,0866,6247,8222,5727,0020,6883,3410,5224,2034,0483,1457,2950,5946,0866</div>
                    </div>
                    <div class="sidestat__item">
                      <div class="sidestat__value">2,034</div>
                      <div class="sidestat__text">views of your products</div>
                      <div class="sidestat__chart sparkline area">5696,6514,9647,6326,6028,8869,8251,9146,6137,8997,6892,9544,7011,6556,7737,8348,7011,6558,7556</div>
                    </div>
                    <div class="sidestat__item">
                      <div class="sidestat__value">$2,950</div>
                      <div class="sidestat__text">average day earning</div>
                      <div class="sidestat__chart sparkline bar_thin">6658,8005,9033,8360,3385,9018,9089,7804,5574,7556,6910,4327,7500,6563,0649,2584,8757,6815,8368,9011,6129,3837,0997,2034,0483,1457,2950,8946,0866,6247,3385,9018,9089,7804,5574,7556,6910,4327,7500,7804,5574,7556,6910,4327,7500,6563,0649,2584</div>
                    </div>
                    <div class="sidestat__item">
                      <div class="sidestat__value">290</div>
                      <div class="sidestat__text">month orders</div>
                      <div class="sidestat__chart sparkline line">075,487,581,520,075,630,350,631,794,666,466,322,833,471,721,703,042,328,844,996,099,342,841,599</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="main">
          <div class="scrollable scrollbar-macosx">
            <div class="main__cont">
              <div class="main-heading">
                <div class="main-title">
                  <ol class="breadcrumb">
                    <li class="active"><?php echo $page_title; if(isset($page_sub_title) && strlen($page_sub_title) > 0): echo sprintf(' <small>%s</small>',$page_sub_title); endif; ?></li>
                  </ol>
                </div>
                <div class="main-filter">
                  <form class="main-filter__search">
                    <div class="input-group">
                      <input type="text" placeholder="Search..." class="form-control"><span class="input-group-btn">
                        <button type="button" class="btn btn-default">
                          <div class="fa fa-search"></div>
                        </button></span>
                    </div>
                  </form>
                </div>
              </div>
              <div class="container-fluid half-padding">
								
								<?php	echo $this->alert->display(); ?>
								<?php echo $template['body']; ?>
					
							</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="<?php echo base_url('ux/libs/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('ux/libs/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('ux/libs/jquery.scrollbar/jquery.scrollbar.min.js'); ?>"></script>
    <script src="<?php echo base_url('ux/libs/bootstrap-tabdrop/bootstrap-tabdrop.min.js'); ?>"></script>
    <script src="<?php echo base_url('ux/libs/sparkline/jquery.sparkline.min.js'); ?>"></script>
    <script src="<?php echo base_url('ux/libs/ionrangeslider/js/ion.rangeSlider.min.js'); ?>"></script>
    <script src="<?php echo base_url('ux/libs/inputNumber/js/inputNumber.js'); ?>"></script>
    <script src="<?php echo base_url('ux/libs/bootstrap-switch/dist/js/bootstrap-switch.min.js'); ?>"></script>
		
		<?php if(isset($controller_javascript_files)): foreach($controller_javascript_files as $controller_javascript_file): ?>
		
		<script src="<?php echo base_url($controller_javascript_file); ?>"></script>
		
		<?php endforeach; endif; ?>
		
    <script src="<?php echo base_url('ux/js/main.js'); ?>"></script>

  </body>
</html>