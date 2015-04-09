<?
/**
 * @author <%= author %>
 * @date <%= date %>
 */
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><%= projectName %></title>
    <link rel="shortcut icon" href="http://static.tieba.baidu.com/tb/favicon.ico" />
    <?php
      echo HTML::combocss(array(
        'devplatcommon/lib/bootstrap/bootstrap.css',<% if(uiPlugins.indexOf('sweetalert')>-1){ %>
        //sweetalert插件 doc:http://tristanedwards.me/sweetalert
        '<%= modName %>/libs/sweetalert/sweet_alert.css',<% } %><% if(uiPlugins.indexOf('animate.css')>-1){ %>
        //animate.css插件 doc:http://daneden.github.io/animate.css/
        '<%= modName %>/libs/animate.css',<% } %>
        //views下面合并后的css
        '<%= modName %>/<%= projectFoler %>/app_all.css',
        //本项目css 文件
        '<%= modName %>/template/<%= projectFoler %>/index.css'
      ));
    ?>
    <?php
      echo HTML::combojs(array(
        'devplatcommon/lib/jquery/jquery.js',
        'devplatcommon/lib/require/require.js'));

      echo HTML::combojs(array(
        //使用传统bootstrap布局
        'devplatcommon/lib/angular/angular.js',
        'devplatcommon/lib/angular/angular-resource.js',
        'devplatcommon/lib/angular/angular-route.js', 
        'devplatcommon/lib/angular/angular-sanitize.js',
        'devplatcommon/lib/angular/ui-bootstrap.js',
        'devplatcommon/lib/bootstrap/bootstrap.js',
        //内部平台公共库
        'devplatcommon/js/ng_common/ng_common.js', 

        //本项目的插件,其他文件类似这样引入即可<% if(uiPlugins.indexOf('sweetalert')>-1){ %>
        //sweetalert插件 doc:http://tristanedwards.me/sweetalert
        '<%= modName %>/libs/sweetalert/sweet_alert.js',<% } %>
        '<%= modName %>/template/<%= projectFoler %>/index.js'
      ));
    ?>
  </head>
  <body>
      <header class="header">
          <div class="banner">
              <a class="logo" href="http://tieba.baidu.com"><img src="http://tieba.baidu.com/tb/static-bawu/img/bawu/logo.png" alt="百度贴吧"></a>                
          </div>
      </header>
      <div class="wrap">            
          <navbar></navbar>
          <div class="main">
              <div ng-view>
              </div>
          </div>
          <!-- <div class="fixed_area"></div> -->
          <footer class="footer">
              <span>@2015&nbsp;Baidu&nbsp;</span>
              <a target="_blank" href="http://tieba.baidu.com/tb/eula.html">贴吧协议</a>&nbsp;|&nbsp;
              <a target="_blank" href="http://tieba.baidu.com/tb/system.html">吧主制度</a>&nbsp;|&nbsp;
              <a target="_blank" href="http://tieba.baidu.com/f?kw=%E8%B4%B4%E5%90%A7%E6%84%8F%E8%A7%81%E5%8F%8D%E9%A6%88&ie=utf-8">意见反馈</a>&nbsp;|&nbsp;
              <a target="_blank" href="http://tieba.baidu.com/tb/zt/declare/">网络谣言警示</a>
          </footer>
      </div>        
  </body>
  
  <?php
  /**
   * 如下代码用将由框架负责处理js资源加载到页面
   */
  echo HTML::js('<%= projectFoler %>/app_all.js', "<%= modName %>");
  ?>

  <?php
  echo HTML::getScript('important'); ?>
  <?php
  echo HTML::getJs(); ?>
  <?php
  echo HTML::getScript('normal'); ?>
  <?php
  echo HTML::getScript('optional'); ?>
</html>
