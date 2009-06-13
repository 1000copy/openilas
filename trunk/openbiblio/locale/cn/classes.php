<?php
/* 本页不必汉化，因为信息是给开发者看的，不是给用户看的*/
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
$trans["biblioError1"]            = "\$text = '需要录入索书号.';";

#****************************************************************************
#*  Translation text for class BiblioField
#****************************************************************************
$trans["biblioFieldError1"]       = "\$text = '字段需要录入.';";
$trans["biblioFieldError2"]       = "\$text = '标签必须是数字.';";

#****************************************************************************
#*  Translation text for class BiblioQuery
#****************************************************************************
$trans["biblioQueryQueryErr1"]    = "\$text = '访问书目信息错误.';";
$trans["biblioQueryQueryErr2"]    = "\$text = '访问书目字段信息错误.';";
$trans["biblioQueryInsertErr1"]   = "\$text = '插入新书目信息错误.';";
$trans["biblioQueryInsertErr2"]   = "\$text = '插入新书目字段错误.';";
$trans["biblioQueryUpdateErr1"]   = "\$text = '更新书目信息错误.';";
$trans["biblioQueryUpdateErr2"]   = "\$text = '更新书目字段信息错误.';";
$trans["biblioQueryDeleteErr"]    = "\$text = '删除书目错误.';";

#****************************************************************************
#*  Translation text for class BiblioSearchQuery
#****************************************************************************
$trans["biblioSearchQueryErr1"]   = "\$text = '书目结果计数错误.';";
$trans["biblioSearchQueryErr2"]   = "\$text = '搜索书目信息错误.';";
$trans["biblioSearchQueryErr3"]   = "\$text = '读书目信息错误.';";

#****************************************************************************
#*  Translation text for class BiblioCopy
#****************************************************************************
$trans["biblioCopyError1"]        = "\$text = '条码需要录入.';";
$trans["biblioCopyError2"]        = "\$text = '条码必须有英文和数字构成.';";

#****************************************************************************
#*  Translation text for class BiblioCopyQuery
#****************************************************************************
$trans["biblioCopyQueryErr1"]     = "\$text = '检查重复条码错误.';";
$trans["biblioCopyQueryErr2"]     = "\$text = '条码 %barcodeNmbr% 已经使用.';";
$trans["biblioCopyQueryErr3"]     = "\$text = '插入新书目拷贝错误.';";
$trans["biblioCopyQueryErr4"]     = "\$text = '访问书目拷贝信息错误.';";
$trans["biblioCopyQueryErr5"]     = "\$text = '更新书目拷贝信息错误.';";
$trans["biblioCopyQueryErr6"]     = "\$text = '删除书目拷贝信息错误.';";
$trans["biblioCopyQueryErr7"]     = "\$text = '访问书目信息获得馆藏号错误.';";
$trans["biblioCopyQueryErr8"]     = "\$text = '访问借阅到期书目错误.';";
$trans["biblioCopyQueryErr9"]     = "\$text = '还入拷贝错误';";
$trans["biblioCopyQueryErr10"]    = "\$text = '检查借出权限错误';";
$trans["biblioCopyQueryErr11"]    = "\$text = '获取最大拷贝号错误.';";

#****************************************************************************
#*  Translation text for class BiblioFieldQuery
#****************************************************************************
$trans["biblioFieldQueryErr1"]    = "\$text = '阅读书目字段错误.';";
$trans["biblioFieldQueryErr2"]    = "\$text = '访问书目字段错误.';";
$trans["biblioFieldQueryInsertErr"] = "\$text = '插入书目字段错误.';";
$trans["biblioFieldQueryUpdateErr"] = "\$text = '更新书目字段错误.';";
$trans["biblioFieldQueryDeleteErr"] = "\$text = '删除书目字段错误.';";

#****************************************************************************
#*  Translation text for class UsmarcBlockDmQuery
#****************************************************************************
$trans["usmarcBlockDmQueryErr1"]  = "\$text = '访问marc 块数据错误.';";

#****************************************************************************
#*  Translation text for class UsmarcTagDmQuery
#****************************************************************************
$trans["usmarcTagDmQueryErr1"]    = "\$text = '访问 marc 标签数据错误.';";

#****************************************************************************
#*  Translation text for class UsmarcSubfieldDmQuery
#****************************************************************************
$trans["usmarcSubfldDmQueryErr1"] = "\$text = '访问 marc 子字段数据错误.';";

#****************************************************************************
#*  Translation text for class BiblioHoldQuery
#****************************************************************************
$trans["biblioHoldQueryErr1"]     = "\$text = '通过书目id访问预约数据错误.';";
$trans["biblioHoldQueryErr2"]     = "\$text = '通过会员id访问预约数据错误.';";
$trans["biblioHoldQueryErr3"]     = "\$text = '为预约找到书目id和拷贝id错误.';";
$trans["biblioHoldQueryErr4"]     = "\$text = '插入预约数据错误.';";
$trans["biblioHoldQueryErr5"]     = "\$text = '删除预约数据错误.';";
$trans["biblioHoldQueryErr6"]     = "\$text = '当获取拷贝的第一个预约时出错.';";

#****************************************************************************
#*  Translation text for class ReportQuery
#****************************************************************************
$trans["reportQueryErr1"]         = "\$text = '执行报表出错.';";

#****************************************************************************
#*  Translation text for class ReportCriteria
#****************************************************************************
$trans["reportCriteriaErr1"]      = "\$text = '对数字列必须录入数字.';";
$trans["reportCriteriaDateTimeErr"] = "\$text = '日期时间格式非法.';";
$trans["reportCriteriaDateErr"]   = "\$text = '非法日期格式.';";

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
