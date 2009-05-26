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
#*  Translation text shared by various php files under the navbars dir
#****************************************************************************
$trans["login"]                    = "\$text = '��½';";
$trans["logout"]                   = "\$text = '�˳�';";
$trans["help"]                     = "\$text = '����';";

#****************************************************************************
#*  Translation text for page home.php
#****************************************************************************
$trans["homeHomeLink"]             = "\$text = '��ҳ';";
$trans["homeLicenseLink"]          = "\$text = '���';";

#****************************************************************************
#*  Translation text for page admin.php
#****************************************************************************
$trans["adminSummary"]             = "\$text = '�������';";
$trans["adminStaff"]               = "\$text = 'Ա������';";
$trans["adminSettings"]            = "\$text = 'ͼ�������';";
$trans["adminMaterialTypes"]       = "\$text = '��������';";
$trans["adminCollections"]         = "\$text = '�ݲ�';";
$trans["adminThemes"]              = "\$text = '��ʽ';";
$trans["adminTranslation"]         = "\$text = '����';";

#****************************************************************************
#*  Translation text for page cataloging.php
#****************************************************************************
$trans["catalogSummary"]           = "\$text = '��Ŀ���';";
$trans["catalogSearch1"]           = "\$text = '��Ŀ����';";
$trans["catalogSearch2"]           = "\$text = '��Ŀ����';";
$trans["catalogResults"]           = "\$text = '�������';";
$trans["catalogBibInfo"]           = "\$text = '��Ŀ��Ϣ';";
$trans["catalogBibEdit"]           = "\$text = 'Edit-Basic';";
$trans["catalogBibEditMarc"]       = "\$text = 'Edit-MARC';";
$trans["catalogBibMarcNewFld"]     = "\$text = 'New MARC Field';";
$trans["catalogBibMarcNewFldShrt"] = "\$text = 'New MARC';";
$trans["catalogBibMarcEditFld"]    = "\$text = 'Edit MARC Fld';";
$trans["catalogCopyNew"]           = "\$text = '�¿���';";
$trans["catalogCopyEdit"]          = "\$text = '�༭����';";
$trans["catalogHolds"]             = "\$text = 'ԤԼ����';";
$trans["catalogDelete"]            = "\$text = 'ɾ��';";
$trans["catalogBibNewLike"]        = "\$text = '�����½�';";
$trans["catalogBibNew"]            = "\$text = '�½���Ŀ';";
$trans["Upload Marc Data"]         = "\$text = 'Upload Marc Data';";

#****************************************************************************
#*  Translation text for page reports.php
#****************************************************************************
$trans["reportsSummary"]           = "\$text = '�������';";
$trans["reportsReportListLink"]    = "\$text = '�����嵥';";
$trans["reportsLabelsLink"]        = "\$text = '��ӡ��ǩ';";
$trans["reportsLettersLink"]        = "\$text = 'Print Letters';";

#****************************************************************************
#*  Translation text for page opac.php
#****************************************************************************
$trans["catalogSearch1"]           = "\$text = '����';";
$trans["catalogSearch2"]           = "\$text = '��Ŀ����';";
$trans["catalogResults"]           = "\$text = '�������';";
$trans["catalogBibInfo"]           = "\$text = '��Ŀ��Ϣ';";

#Added

$trans["memberInfo"]="\$text = '��Ա��Ϣ';";
$trans["memberSearch"]="\$text = '����';";
$trans["editInfo"]="\$text = '�༭';";
$trans["checkoutHistory"]= "\$text = '�����ʷ';";
$trans["account"]="\$text = '����';";
$trans["checkIn"]="\$text = '����';";
$trans["memberSearch"]= "\$text = '��Ա����';";
$trans["newMember"]= "\$text = '�»�Ա';";
//$trans["account"]        	= "\$text = 'Account';";
?>
