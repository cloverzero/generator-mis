<?
/**
 * @author <%= author %>
 * @date <%= date %>
 */


PhizView::page('common:page/Index.class.php')->assign($this->_arrVars)->fetch();

$this->display("<%= templateName %>/<%= templateName %>.php");
