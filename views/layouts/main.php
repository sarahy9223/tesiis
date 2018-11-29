<?php
use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use yii\debug\Toolbar;
use app\assets\AppAsset;

// You can use the registerAssetBundle function if you'd like
//$this->registerAssetBundle('app');
AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<title><?php echo Html::encode($this->title); ?> </title>
<meta property='og:site_name' content='<?php echo Html::encode($this->title); ?>' />
<meta property='og:title' content='<?php echo Html::encode($this->title); ?>' />
<meta property='og:description' content='<?php echo Html::encode($this->title); ?>' />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<!-- <link rel='stylesheet' type='text/css' href='<?php echo $this->theme->baseUrl; ?>/files/main_style.css' title='wsite-theme-css' />
-->
<?php $this->head(); ?>
</head>
<body class='wsite-theme-light tall-header-page wsite-page-index weeblypage-index'>
  <?php $this->beginBody(); ?>
<div id="container">
  <table id="header">
    <tr>
      <td id="logo">
        <div id="title">
          <div id="title-r">
            <div id="title-m">
              <span class='wsite-logo'><a href='/'><span id="wsite-title"><?php echo Html::encode(\Yii::$app->name); ?></span></a></span>
            </div>
          </div>
        </div>
      </td>
      <td id="header-right">
        <table>
          <tr>
            <td class="phone-number"></td>
            <td class="social"></td>
          </tr>
        </table>
        <div class="search"></div>
      </td>
    </tr>
  </table>
  <div id="main">
    <div id="main-bot">
      <div id="main-in">
        <div id="banner">
          <div class="wsite-header"></div>
          <em id="tl"></em>
          <em id="tr"></em>
          <em id="bl"></em>
          <em id="br"></em>
        </div>
        <div id="navigation">
          <div id="nav-bot">
            <div id="nav-in">
 <?php echo Menu::widget(array(
        'options' => array('class' => 'nav'),
        'items' => array(
          array('label' => 'Inicio', 'url' => array('/site/index')),
          array('label' => 'Quienes Somos', 'url' => array('/site/about')),
          array('label' => 'Contactanos', 'url' => array('/site/contact')),
          Yii::$app->user->isGuest ?
            array('label' => 'Acceder', 'url' => array('/site/login')) :
            array('label' => 'Logout (' . Yii::$app->user->identity->username .')' , 'url' => array('/site/logout')),
        ),
      )); ?>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div id="content">
          <div id='wsite-content' class='wsite-not-footer'>
            <?php echo $content; ?>
</div>

          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <div id="footer-wrap">
    <div id="footer">
      <div id="footer-bot">
        <div id="footer-in">
          <?php echo Html::encode(\Yii::$app->name); ?>

          <div class="clear"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>