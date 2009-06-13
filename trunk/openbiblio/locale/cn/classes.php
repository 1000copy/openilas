<?php
/* ��ҳ���غ�������Ϊ��Ϣ�Ǹ������߿��ģ����Ǹ��û�����*/
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
#*  Translation text for class Biblio
#****************************************************************************
$trans["biblioError1"]            = "\$text = '��Ҫ¼�������.';";

#****************************************************************************
#*  Translation text for class BiblioField
#****************************************************************************
$trans["biblioFieldError1"]       = "\$text = '�ֶ���Ҫ¼��.';";
$trans["biblioFieldError2"]       = "\$text = '��ǩ����������.';";

#****************************************************************************
#*  Translation text for class BiblioQuery
#****************************************************************************
$trans["biblioQueryQueryErr1"]    = "\$text = '������Ŀ��Ϣ����.';";
$trans["biblioQueryQueryErr2"]    = "\$text = '������Ŀ�ֶ���Ϣ����.';";
$trans["biblioQueryInsertErr1"]   = "\$text = '��������Ŀ��Ϣ����.';";
$trans["biblioQueryInsertErr2"]   = "\$text = '��������Ŀ�ֶδ���.';";
$trans["biblioQueryUpdateErr1"]   = "\$text = '������Ŀ��Ϣ����.';";
$trans["biblioQueryUpdateErr2"]   = "\$text = '������Ŀ�ֶ���Ϣ����.';";
$trans["biblioQueryDeleteErr"]    = "\$text = 'ɾ����Ŀ����.';";

#****************************************************************************
#*  Translation text for class BiblioSearchQuery
#****************************************************************************
$trans["biblioSearchQueryErr1"]   = "\$text = '��Ŀ�����������.';";
$trans["biblioSearchQueryErr2"]   = "\$text = '������Ŀ��Ϣ����.';";
$trans["biblioSearchQueryErr3"]   = "\$text = '����Ŀ��Ϣ����.';";

#****************************************************************************
#*  Translation text for class BiblioCopy
#****************************************************************************
$trans["biblioCopyError1"]        = "\$text = '������Ҫ¼��.';";
$trans["biblioCopyError2"]        = "\$text = '���������Ӣ�ĺ����ֹ���.';";

#****************************************************************************
#*  Translation text for class BiblioCopyQuery
#****************************************************************************
$trans["biblioCopyQueryErr1"]     = "\$text = '����ظ��������.';";
$trans["biblioCopyQueryErr2"]     = "\$text = '���� %barcodeNmbr% �Ѿ�ʹ��.';";
$trans["biblioCopyQueryErr3"]     = "\$text = '��������Ŀ��������.';";
$trans["biblioCopyQueryErr4"]     = "\$text = '������Ŀ������Ϣ����.';";
$trans["biblioCopyQueryErr5"]     = "\$text = '������Ŀ������Ϣ����.';";
$trans["biblioCopyQueryErr6"]     = "\$text = 'ɾ����Ŀ������Ϣ����.';";
$trans["biblioCopyQueryErr7"]     = "\$text = '������Ŀ��Ϣ��ùݲغŴ���.';";
$trans["biblioCopyQueryErr8"]     = "\$text = '���ʽ��ĵ�����Ŀ����.';";
$trans["biblioCopyQueryErr9"]     = "\$text = '���뿽������';";
$trans["biblioCopyQueryErr10"]    = "\$text = '�����Ȩ�޴���';";
$trans["biblioCopyQueryErr11"]    = "\$text = '��ȡ��󿽱��Ŵ���.';";

#****************************************************************************
#*  Translation text for class BiblioFieldQuery
#****************************************************************************
$trans["biblioFieldQueryErr1"]    = "\$text = '�Ķ���Ŀ�ֶδ���.';";
$trans["biblioFieldQueryErr2"]    = "\$text = '������Ŀ�ֶδ���.';";
$trans["biblioFieldQueryInsertErr"] = "\$text = '������Ŀ�ֶδ���.';";
$trans["biblioFieldQueryUpdateErr"] = "\$text = '������Ŀ�ֶδ���.';";
$trans["biblioFieldQueryDeleteErr"] = "\$text = 'ɾ����Ŀ�ֶδ���.';";

#****************************************************************************
#*  Translation text for class UsmarcBlockDmQuery
#****************************************************************************
$trans["usmarcBlockDmQueryErr1"]  = "\$text = '����marc �����ݴ���.';";

#****************************************************************************
#*  Translation text for class UsmarcTagDmQuery
#****************************************************************************
$trans["usmarcTagDmQueryErr1"]    = "\$text = '���� marc ��ǩ���ݴ���.';";

#****************************************************************************
#*  Translation text for class UsmarcSubfieldDmQuery
#****************************************************************************
$trans["usmarcSubfldDmQueryErr1"] = "\$text = '���� marc ���ֶ����ݴ���.';";

#****************************************************************************
#*  Translation text for class BiblioHoldQuery
#****************************************************************************
$trans["biblioHoldQueryErr1"]     = "\$text = 'ͨ����Ŀid����ԤԼ���ݴ���.';";
$trans["biblioHoldQueryErr2"]     = "\$text = 'ͨ����Աid����ԤԼ���ݴ���.';";
$trans["biblioHoldQueryErr3"]     = "\$text = 'ΪԤԼ�ҵ���Ŀid�Ϳ���id����.';";
$trans["biblioHoldQueryErr4"]     = "\$text = '����ԤԼ���ݴ���.';";
$trans["biblioHoldQueryErr5"]     = "\$text = 'ɾ��ԤԼ���ݴ���.';";
$trans["biblioHoldQueryErr6"]     = "\$text = '����ȡ�����ĵ�һ��ԤԼʱ����.';";

#****************************************************************************
#*  Translation text for class ReportQuery
#****************************************************************************
$trans["reportQueryErr1"]         = "\$text = 'ִ�б������.';";

#****************************************************************************
#*  Translation text for class ReportCriteria
#****************************************************************************
$trans["reportCriteriaErr1"]      = "\$text = '�������б���¼������.';";
$trans["reportCriteriaDateTimeErr"] = "\$text = '����ʱ���ʽ�Ƿ�.';";
$trans["reportCriteriaDateErr"]   = "\$text = '�Ƿ����ڸ�ʽ.';";

#****************************************************************************
#*  Translation text for class LabelFormat and LetterFormat
#****************************************************************************
$trans["labelFormatFontErr"]      = "\$text = 'Invalid font type specified in label definition xml.  Valid font types are Courier, Helvetica, and Times-Roman.';";
$trans["labelFormatFontSizeErr"]  = "\$text = 'Invalid font size specified in label definition xml.  Font size must be numeric.';";
$trans["labelFormatFontSizeErr2"] = "\$text = 'Invalid font size specified in label definition xml.  Font size must be greater than zero.';";
$trans["labelFormatLMarginErr"]   = "\$text = 'Invalid left margin specified in label definition xml.  Left margin must be numeric.';";
$trans["labelFormatLMarginErr2"]  = "\$text = 'Invalid left margin specified in label definition xml.  Left margin must be greater than zero.';";
$trans["labelFormatRMarginErr"]   = "\$text = 'Invalid right margin specified in label definition xml.  Right margin must be numeric.';";
$trans["labelFormatRMarginErr2"]  = "\$text = 'Invalid right margin specified in label definition xml.  Right margin must be greater than zero.';";
$trans["labelFormatTMarginErr"]   = "\$text = 'Invalid top margin specified in label definition xml.  Top margin must be numeric.';";
$trans["labelFormatTMarginErr2"]  = "\$text = 'Invalid top margin specified in label definition xml.  Top margin must be greater than zero.';";
$trans["labelFormatBMarginErr"]   = "\$text = 'Invalid bottom margin specified in label definition xml.  Bottom margin must be numeric.';";
$trans["labelFormatBMarginErr2"]  = "\$text = 'Invalid bottom margin specified in label definition xml.  Bottom margin must be greater than zero.';";
$trans["labelFormatColErr"]       = "\$text = 'Invalid columns specified in label definition xml.  Columns must be numeric.';";
$trans["labelFormatColErr2"]      = "\$text = 'Invalid columns specified in label definition xml.  Columns must be greater than zero.';";
$trans["labelFormatWidthErr"]     = "\$text = 'Invalid width specified in label definition xml.  Width must be numeric.';";
$trans["labelFormatWidthErr2"]    = "\$text = 'Invalid width specified in label definition xml.  Width must be greater than zero.';";
$trans["labelFormatHeightErr"]    = "\$text = 'Invalid height specified in label definition xml.  Height must be numeric.';";
$trans["labelFormatHeightErr2"]   = "\$text = 'Invalid height specified in label definition xml.  Height must be greater than zero.';";
$trans["labelFormatNoLabelsErr"]  = "\$text = 'Invalid label lines specified in label definition xml.';";

#****************************************************************************
#*  Translation text for class BiblioStatusHistQuery
#****************************************************************************
$trans["biblioStatusHistQueryErr1"] = "\$text = 'Error getting bibliography status history by bibliography id.';";
$trans["biblioStatusHistQueryErr2"] = "\$text = 'Error getting bibliography status history by member id';";
$trans["biblioStatusHistQueryErr3"] = "\$text = 'Error inserting bibliography status history';";
$trans["biblioStatusHistQueryErr4"] = "\$text = 'Error deleting bibliography status history by copy id';";
$trans["biblioStatusHistQueryErr5"] = "\$text = 'Error deleting bibliography status history by member id';";

#****************************************************************************
#*  Translation text for class MemberAccountTransaction
#****************************************************************************
$trans["memberAccountTransError1"]  = "\$text = 'Amount is required.';";
$trans["memberAccountTransError2"]  = "\$text = 'Amount must be numeric.';";
$trans["memberAccountTransError3"]  = "\$text = 'Description is required.';";

#****************************************************************************
#*  Translation text for class MemberAccountQuery
#****************************************************************************
$trans["memberAccountQueryErr1"]    = "\$text = 'Error accessing member account information.';";
$trans["memberAccountQueryErr2"]    = "\$text = 'Error inserting member account information.';";
$trans["memberAccountQueryErr3"]    = "\$text = 'Error deleting member account information.';";

?>
