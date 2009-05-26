<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
/**********************************************************************************
 *   Instructions for translators:
 *
 *   All gettext key/value pairs are specified as follows:
 *     $trans["key"] = "<php translation code to set the $text variable>";
 *   Allowing translators the ability to execute php code withint the transFunc string
 *   provides the maximum amount of flexibility to format the languange syntax.
 *
 *   Formatting rules:
 *   - Resulting translation string must be stored in a variable called $text.
 *   - Input arguments must be surrounded by % characters (i.e. %pageCount%).
 *   - A backslash ('\') needs to be placed before any special php characters 
 *     (such as $, ", etc.) within the php translation code.
 *
 *   Simple Example:
 *     $trans["homeWelcome"]       = "\$text='Welcome to OpenBiblio';";
 *
 *   Example Containing Argument Substitution:
 *     $trans["searchResult"]      = "\$text='page %page% of %pages%';";
 *
 *   Example Containing a PHP If Statment and Argument Substitution:
 *     $trans["searchResult"]      = 
 *       "if (%items% == 1) {
 *         \$text = '%items% result';
 *       } else {
 *         \$text = '%items% results';
 *       }";
 *
 **********************************************************************************
 */

#****************************************************************************
#*  Common translation text shared among multiple pages
#****************************************************************************
$trans["sharedCancel"]             = "\$text = '取消';";
$trans["sharedDelete"]             = "\$text = '删除';";

#****************************************************************************
#*  Translation text for page biblio_view.php
#****************************************************************************
$trans["biblioViewTble1Hdr"]       = "\$text = '书目信息';";
$trans["biblioViewMaterialType"]   = "\$text = '载体类型';";
$trans["biblioViewCollection"]     = "\$text = '分类';";
$trans["biblioViewCallNmbr"]       = "\$text = '索书号';";
$trans["biblioViewTble2Hdr"]       = "\$text = '书目拷贝信息';";
$trans["biblioViewTble2Col1"]      = "\$text = '条码 #';";
$trans["biblioViewTble2Col2"]      = "\$text = '描述';";
$trans["biblioViewTble2Col3"]      = "\$text = '状态';";
$trans["biblioViewTble2Col4"]      = "\$text = 'Status Dt';";
$trans["biblioViewTble2Col5"]      = "\$text = 'Due Back';";
$trans["biblioViewTble2ColFunc"]   = "\$text = '操作';";
$trans["biblioViewTble2Coldel"]    = "\$text = '删除';";
$trans["biblioViewTble2Coledit"]   = "\$text = '编辑';";
$trans["biblioViewTble3Hdr"]       = "\$text = '更多书目信息';";
$trans["biblioViewNoAddInfo"]      = "\$text = '没有更多书目信息';";
$trans["biblioViewNoCopies"]       = "\$text = 'No copies have been created.';";
$trans["biblioViewOpacFlg"]        = "\$text = '在OPAC可见';";
$trans["biblioViewNewCopy"]        = "\$text = '新建拷贝';";
$trans["biblioViewNeweCopy"]       = "\$text = '新建电子拷贝';";
$trans["biblioViewYes"]            = "\$text = 'yes';";
$trans["biblioViewNo"]             = "\$text = 'no';";

#****************************************************************************
#*  Translation text for page biblio_search.php
#****************************************************************************
$trans["biblioSearchNoResults"]    = "\$text = 'No results found.';";
$trans["biblioSearchResults"]      = "\$text = 'Search Results';";
$trans["biblioSearchResultPages"]  = "\$text = 'Result Pages';";
$trans["biblioSearchPrev"]         = "\$text = 'prev';";
$trans["biblioSearchNext"]         = "\$text = 'next';";
$trans["biblioSearchResultTxt"]    = "if (%items% == 1) {
                                        \$text = '%items% result found.';
                                      } else {
                                        \$text = '%items% results found';
                                      }";
$trans["biblioSearchauthor"]       = "\$text = ' sorted by author';";
$trans["biblioSearchtitle"]        = "\$text = ' sorted by title';";
$trans["biblioSearchSortByAuthor"] = "\$text = 'sort by author';";
$trans["biblioSearchSortByTitle"]  = "\$text = 'sort by title';";
$trans["biblioSearchTitle"]        = "\$text = 'Title';";
$trans["biblioSearchAuthor"]       = "\$text = 'Author';";
$trans["biblioSearchMaterial"]     = "\$text = 'Material';";
$trans["biblioSearchCollection"]   = "\$text = 'Collection';";
$trans["biblioSearchCall"]         = "\$text = 'Call Number';";
$trans["biblioSearchCopyBCode"]    = "\$text = 'Copy Barcode';";
$trans["biblioSearchCopyStatus"]   = "\$text = 'Status';";
$trans["biblioSearchNoCopies"]     = "\$text = 'No copies are available.';";
$trans["biblioSearchHold"]         = "\$text = 'hold';";
$trans["biblioSearchOutIn"]        = "\$text = 'check out/in';";
$trans["biblioSearchDetail"]       = "\$text = 'Show detailed Bibliography information';";
$trans["biblioSearchBCode2Chk"]    = "\$text = 'Barcode to Check Out or Check In Form';";
$trans["biblioSearchBCode2Hold"]   = "\$text = 'Barcode to Hold Form';";

#****************************************************************************
#*  Translation text for page loginform.php
#****************************************************************************
$trans["loginFormTbleHdr"]         = "\$text = 'Staff Login';";
$trans["loginFormUsername"]        = "\$text = 'Username';";
$trans["loginFormPassword"]        = "\$text = 'Password';";
$trans["loginFormLogin"]           = "\$text = 'Login';";

#****************************************************************************
#*  Translation text for page hold_del_confirm.php
#****************************************************************************
$trans["holdDelConfirmMsg"]        = "\$text = 'Are you sure you want to delete this hold request?';";

#****************************************************************************
#*  Translation text for page hold_del.php
#****************************************************************************
$trans["holdDelSuccess"]           = "\$text='Hold request was successfully deleted.';";

#****************************************************************************
#*  Translation text for page help_header.php
#****************************************************************************
$trans["helpHeaderTitle"]          = "\$text='OpenBiblio Help';";
$trans["helpHeaderCloseWin"]       = "\$text='Close Window';";
$trans["helpHeaderContents"]       = "\$text='Contents';";
$trans["helpHeaderPrint"]          = "\$text='Print';";

$trans["catalogResults"]           = "\$text='Search Results';";

#****************************************************************************
#*  Translation text for page header.php and header_opac.php
#****************************************************************************
$trans["headerTodaysDate"]         = "\$text='今天是:';";
$trans["headerDateFormat"]         = "\$text='m.d.Y';";
$trans["headerLibraryHours"]       = "\$text='工作日:';";
$trans["headerLibraryPhone"]       = "\$text='联系电话:';";
$trans["headerHome"]               = "\$text=' 首 页';";
$trans["headerCirculation"]        = "\$text=' 流 通';";
$trans["headerCataloging"]         = "\$text=' 编 目';";
$trans["headerAdmin"]              = "\$text=' 管 理';";
$trans["headerReports"]            = "\$text=' 报 表';";

#****************************************************************************
#*  Translation text for page footer.php
#****************************************************************************
$trans["footerLibraryHome"]        = "\$text='Library Home';";
$trans["footerOPAC"]               = "\$text='OPAC';";
$trans["footerHelp"]               = "\$text='帮助';";
$trans["footerPoweredBy"]          = "\$text='提供动力由 OpenBiblio version';";
$trans["footerDatabaseVersion"]    = "\$text='数据库版本';";
$trans["footerCopyright"]          = "\$text='版权';";
$trans["footerUnderThe"]           = "\$text='遵循';";
$trans["footerGPL"]                = "\$text='GNU General Public License';";

?>
