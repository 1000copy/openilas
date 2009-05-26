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
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]       = "\$text='��ӭʹ��OpenBiblio';";
$trans["indexIntro"]         = "\$text=
  'ʹ�������������
  ������.';";
$trans["indexTab"]           = "\$text='��ǩ';";
$trans["indexDesc"]          = "\$text='����';";
$trans["indexCirc"]          = "\$text='��ͨ';";
$trans["indexCircDesc1"]     = "\$text='�����Ա.';";
$trans["indexCircDesc2"]     = "\$text='��Ա����(�½����������༭��ɾ��)';";
$trans["indexCircDesc3"]     = "\$text='��Ա��Ŀ��������裬���ˣ���ʷ';";
$trans["indexCircDesc4"]     = "\$text='Bibliography checkin and shelving cart list';";
//$trans["indexCircDesc5"]     = "\$text='Member late fee payment';";
$trans["indexCat"]           = "\$text='��Ŀ';";
$trans["indexCatDesc1"]      = "\$text='������Ŀ .';";
$trans["indexCatDesc2"]      = "\$text='��Ŀ���� (�½����������༭��ɾ��)';";
//$trans["indexCatDesc3"]      = "\$text='Import bibliography from USMarc record';";
$trans["indexAdmin"]         = "\$text='����';";
$trans["indexAdminDesc1"]    = "\$text='����Ա���ͻ�����Ϣ.';";
$trans["indexAdminDesc2"]    = "\$text='Ա������ (�½����������༭������,ɾ��)';";
$trans["indexAdminDesc3"]    = "\$text='ͬ��ͼ�������';";
$trans["indexAdminDesc5"]    = "\$text='��������';";
$trans["indexAdminDesc4"]    = "\$text='�ݲ��嵥';";
$trans["indexAdminDesc6"]    = "\$text='��ʽ�༭��';";
$trans["indexReports"]       = "\$text='����';";
$trans["indexReportsDesc1"]  = "\$text='������';";
$trans["indexReportsDesc2"]  = "\$text='����.';";
$trans["indexReportsDesc3"]  = "\$text='��ǩ.';";

?>
