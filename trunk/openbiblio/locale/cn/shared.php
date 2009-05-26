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
$trans["sharedCancel"]             = "\$text = 'ȡ��';";
$trans["sharedDelete"]             = "\$text = 'ɾ��';";

#****************************************************************************
#*  Translation text for page biblio_view.php
#****************************************************************************
$trans["biblioViewTble1Hdr"]       = "\$text = '��Ŀ��Ϣ';";
$trans["biblioViewMaterialType"]   = "\$text = '��������';";
$trans["biblioViewCollection"]     = "\$text = '����';";
$trans["biblioViewCallNmbr"]       = "\$text = '�����';";
$trans["biblioViewTble2Hdr"]       = "\$text = '��Ŀ������Ϣ';";
$trans["biblioViewTble2Col1"]      = "\$text = '���� #';";
$trans["biblioViewTble2Col2"]      = "\$text = '����';";
$trans["biblioViewTble2Col3"]      = "\$text = '״̬';";
$trans["biblioViewTble2Col4"]      = "\$text = 'Status Dt';";
$trans["biblioViewTble2Col5"]      = "\$text = 'Due Back';";
$trans["biblioViewTble2ColFunc"]   = "\$text = '����';";
$trans["biblioViewTble2Coldel"]    = "\$text = 'ɾ��';";
$trans["biblioViewTble2Coledit"]   = "\$text = '�༭';";
$trans["biblioViewTble3Hdr"]       = "\$text = '������Ŀ��Ϣ';";
$trans["biblioViewNoAddInfo"]      = "\$text = 'û�и�����Ŀ��Ϣ';";
$trans["biblioViewNoCopies"]       = "\$text = 'No copies have been created.';";
$trans["biblioViewOpacFlg"]        = "\$text = '��OPAC�ɼ�';";
$trans["biblioViewNewCopy"]        = "\$text = '�½�����';";
$trans["biblioViewNeweCopy"]       = "\$text = '�½����ӿ���';";
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
$trans["headerTodaysDate"]         = "\$text='������:';";
$trans["headerDateFormat"]         = "\$text='m.d.Y';";
$trans["headerLibraryHours"]       = "\$text='������:';";
$trans["headerLibraryPhone"]       = "\$text='��ϵ�绰:';";
$trans["headerHome"]               = "\$text=' �� ҳ';";
$trans["headerCirculation"]        = "\$text=' �� ͨ';";
$trans["headerCataloging"]         = "\$text=' �� Ŀ';";
$trans["headerAdmin"]              = "\$text=' �� ��';";
$trans["headerReports"]            = "\$text=' �� ��';";

#****************************************************************************
#*  Translation text for page footer.php
#****************************************************************************
$trans["footerLibraryHome"]        = "\$text='Library Home';";
$trans["footerOPAC"]               = "\$text='OPAC';";
$trans["footerHelp"]               = "\$text='����';";
$trans["footerPoweredBy"]          = "\$text='�ṩ������ OpenBiblio version';";
$trans["footerDatabaseVersion"]    = "\$text='���ݿ�汾';";
$trans["footerCopyright"]          = "\$text='��Ȩ';";
$trans["footerUnderThe"]           = "\$text='��ѭ';";
$trans["footerGPL"]                = "\$text='GNU General Public License';";

?>