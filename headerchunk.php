    <header class="page-head bg-about">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap bg-transparent {if $_modx->resource.id == 1}rd-navbar-wrap-mod-1{/if}">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth" data-md-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static">
            <div class="rd-navbar-top-panel bg-dark">
              <div class="rd-navbar-inner">
                <button data-rd-navbar-toggle=".list-inline" type="submit" class="rd-navbar-collapse-toggle"><span></span></button>
                
                
              </div>
            </div>
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" type="submit" class="rd-navbar-toggle"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a href="/" class="brand-name">
                    <span><img src="assets/tpl/images/cheese-logo.png" alt="">
                      </span></a></div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Search-->
                {*'mSearchForm' | snippet : [
					'tplForm' => 'my.tpl.mSearch2.form',
					'autocomplete' => 'results',
					'pageId' => 18
				]}
                
                {'msMiniCart' | snippet : [
                    'tpl' => 'my.tpl.msMiniCart'
                ]*}
               
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                    <li class="show_768"><a href="/" >Главная</a></li>
                    {'pdoMenu' | snippet : [
				        'parents' => 0,
				        'innerClass' =>'rd-navbar-dropdown opened',
				        'tplOuter' => '@INLINE {$wrapper}',
				        'tplInner' => '@INLINE <ul{$classes}>{$wrapper}</ul>',
				        'rowClass' => 'nav-item',
				        'outerClass' => '',
				        'hereClass' => 'selected',
				        'where' => ['class_key:!=' => 'msProduct']
				    ]}
                </ul>
                    
              </div>
            </div>
          </nav>
        </div>
        {if $_modx->resource.id == 1}
        <section>
          <div class="swiper-container swiper-slider">
            <div class="jumbotron-mod-1 text-center">
              <div>
                {1 | resource : 'text'}
                <div class='btn-group-variant'> 
                    <div>
                        <a class='btn btn-primary btn-sm magnificPopup form-analytics' href='#callback' data-form='1'>Заказать звонок</a> 
                        <a class='btn btn-white btn-sm magnificPopup form-analytics' href='#zaiavka' data-form='2'>Отправить заявку</a>
                    </div>
                </div>
              </div>
            </div>
            <div class="swiper-wrapper">
                {'pdoResources' | snippet: [ 
                	'parents' => 0,
                	'resources' => 1,
                	'tpl' => 'migx_slider.tpl',
                	'limit' => 0,
                	'name_tv' => 'migx_slider_tv'
                ]}
            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination"></div>
          </div>
        </section>
        {else}
        <section class="text-center">
          <div class="container">
            <div class="jumbotron text-center">
              <h1>{$_modx->resource.pagetitle}</h1>
            </div>
          </div>
        </section>
        {/if}
      </header>
