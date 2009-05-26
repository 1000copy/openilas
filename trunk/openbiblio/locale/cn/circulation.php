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
$trans["circCancel"]              = "\$text = 'Cancel';";
$trans["circDelete"]              = "\$text = 'Delete';";
$trans["circLogout"]              = "\$text = 'Logout';";
$trans["circAdd"]                 = "\$text = 'Add';";
$trans["mbrDupBarcode"]           = "\$text = 'Barcode number, %barcode%, is currently in use.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]            = "\$text='编目';";
$trans["indexCardHdr"]            = "\$text='用卡号找会员:';";
$trans["indexCard"]               = "\$text='卡号:';";
$trans["indexSearch"]             = "\$text='搜索';";
$trans["indexNameHdr"]            = "\$text='用名查找会员:';";
$trans["indexName"]               = "\$text='名字开头:';";

#****************************************************************************
#*  Translation text for page mbr_new_form.php, mbr_edit_form.php and mbr_fields.php
#****************************************************************************
$trans["Mailing Address:"] = "\$text='Mailing Address:';";
$trans["mbrNewForm"]              = "\$text='Add New';";
$trans["mbrEditForm"]             = "\$text='Edit';";
$trans["mbrFldsHeader"]           = "\$text='Member:';";
$trans["mbrFldsCardNmbr"]         = "\$text='Card Number:';";
$trans["mbrFldsLastName"]         = "\$text='Last Name:';";
$trans["mbrFldsFirstName"]        = "\$text='First Name:';";
$trans["mbrFldsAddr1"]            = "\$text='Address Line 1:';";
$trans["mbrFldsAddr2"]            = "\$text='Address Line 2:';";
$trans["mbrFldsCity"]             = "\$text='City:';";
$trans["mbrFldsStateZip"]         = "\$text='State, Zip:';";
$trans["mbrFldsHomePhone"]        = "\$text='Home Phone:';";
$trans["mbrFldsWorkPhone"]        = "\$text='Work Phone:';";
$trans["mbrFldsEmail"]            = "\$text='Email Address:';";
$trans["mbrFldsClassify"]         = "\$text='Classification:';";
$trans["mbrFldsGrade"]            = "\$text='School Grade:';";
$trans["mbrFldsTeacher"]          = "\$text='School Teacher:';";
$trans["mbrFldsSubmit"]           = "\$text='Submit';";
$trans["mbrFldsCancel"]           = "\$text='Cancel';";
$trans["mbrsearchResult"]         = "\$text='Result Pages: ';";
$trans["mbrsearchprev"]           = "\$text='prev';";
$trans["mbrsearchnext"]           = "\$text='next';";
$trans["mbrsearchNoResults"]      = "\$text='No results found.';";
$trans["mbrsearchFoundResults"]   = "\$text=' results found.';";
$trans["mbrsearchSearchResults"]  = "\$text='Search Results:';";
$trans["mbrsearchCardNumber"]     = "\$text='Card Number:';";
$trans["mbrsearchClassification"] = "\$text='Classification:';";

#****************************************************************************
#*  Translation text for page mbr_new.php
#****************************************************************************
$trans["mbrNewSuccess"]           = "\$text='Member has been successfully added.';";

#****************************************************************************
#*  Translation text for page mbr_edit.php
#****************************************************************************
$trans["mbrEditSuccess"]          = "\$text='Member has been successfully updated.';";

#****************************************************************************
#*  Translation text for page mbr_view.php
#****************************************************************************
$trans["mbrViewHead1"]            = "\$text='会员信息:';";
$trans["mbrViewName"]             = "\$text='名:';";
$trans["mbrViewAddr"]             = "\$text='地址:';";
$trans["mbrViewCardNmbr"]         = "\$text='卡号:';";
$trans["mbrViewClassify"]         = "\$text='分类:';";
$trans["mbrViewPhone"]            = "\$text='电话:';";
$trans["mbrViewPhoneHome"]        = "\$text='H:';";
$trans["mbrViewPhoneWork"]        = "\$text='W:';";
$trans["mbrViewEmail"]            = "\$text='Email :';";
$trans["mbrViewGrade"]            = "\$text='School Grade:';";
$trans["mbrViewTeacher"]          = "\$text='School Teacher:';";
$trans["mbrViewHead2"]            = "\$text='借出统计:';";
$trans["mbrViewStatColHdr1"]      = "\$text='载体类型';";
$trans["mbrViewStatColHdr2"]      = "\$text='计数';";
$trans["mbrViewStatColHdr3"]      = "\$text='限定';";
$trans["mbrViewStatColHdr4"]      = "\$text='借出';";
$trans["mbrViewStatColHdr5"]      = "\$text='续借';";
$trans["mbrViewHead3"]            = "\$text='借出书目:';";
$trans["mbrViewBarcode"]          = "\$text='条码:';";
$trans["mbrViewCheckOut"]         = "\$text='借出';";
$trans["mbrViewHead4"]            = "\$text='当前借出书目:';";
$trans["mbrViewOutHdr1"]          = "\$text='借出';";
$trans["mbrViewOutHdr2"]          = "\$text='载体类型';";
$trans["mbrViewOutHdr3"]          = "\$text='条码';";
$trans["mbrViewOutHdr4"]          = "\$text='标题';";
$trans["mbrViewOutHdr5"]          = "\$text='作者';";
$trans["mbrViewOutHdr6"]          = "\$text='归还时间';";
$trans["mbrViewOutHdr7"]          = "\$text='超期天数';";
$trans["mbrViewOutHdr8"]          = "\$text='续借';";
$trans["mbrViewOutHdr9"]          = "\$text='time/s';";
$trans["mbrViewNoCheckouts"]      = "\$text='当前没有借出书目.';";
$trans["mbrViewHead5"]            = "\$text='预约:';";
$trans["mbrViewHead6"]            = "\$text='当前预约清单:';";
$trans["mbrViewPlaceHold"]        = "\$text='预约';";
$trans["mbrViewHoldHdr1"]         = "\$text='Function';";
$trans["mbrViewHoldHdr2"]         = "\$text='预约';";
$trans["mbrViewHoldHdr3"]         = "\$text='载体类型';";
$trans["mbrViewHoldHdr4"]         = "\$text='条码';";
$trans["mbrViewHoldHdr5"]         = "\$text='标题';";
$trans["mbrViewHoldHdr6"]         = "\$text='作者';";
$trans["mbrViewHoldHdr7"]         = "\$text='状态';";
$trans["mbrViewHoldHdr8"]         = "\$text='到期时间';";
$trans["mbrViewNoHolds"]          = "\$text='当前无预约.';";
$trans["mbrViewBalMsg"]           = "\$text='Note: Member has an outstanding account balance of %bal%.';";
$trans["mbrPrintCheckouts"]	  = "\$text='打印借出清单';";
$trans["mbrViewDel"]              = "\$text='del';";

#****************************************************************************
#*  Translation text for page checkout.php
#****************************************************************************
$trans["checkoutBalErr"]          = "\$text='Member must pay outstanding account balance before checking out.';";
$trans["checkoutErr1"]            = "\$text='Barcode number must be all alphanumeric.';";
$trans["checkoutErr2"]            = "\$text='No bibliography was found with that barcode number.';";
$trans["checkoutErr3"]            = "\$text='Bibliography with barcode number %barcode% is already checked out.';";
$trans["checkoutErr4"]            = "\$text='Bibliography with barcode number %barcode% is not available for checkout.';";
$trans["checkoutErr5"]            = "\$text='Bibliography with barcode number %barcode% is currently on hold for another member.';";
$trans["checkoutErr6"]            = "\$text='Member has reached the checkout limit for the specified bibliography\'s material type.';";
$trans["checkoutErr7"]            = "\$text='Bibliography with barcode number %barcode% has reached the member\'s renewal limit.';";
$trans["checkoutErr8"]            = "\$text='Bibliography with barcode number %barcode% can not be renew as it is already late.';";

#****************************************************************************
#*  Translation text for page shelving_cart.php
#****************************************************************************
$trans["shelvingCartErr1"]        = "\$text='Barcode number must be all alphanumeric.';";
$trans["shelvingCartErr2"]        = "\$text='No bibliography was found with that barcode number.';";
$trans["shelvingCartTrans"]       = "\$text='Late fee (barcode=%barcode%)';";

#****************************************************************************
#*  Translation text for page checkin_form.php
#****************************************************************************
$trans["checkinFormHdr1"]         = "\$text='Bibliography Check In:';";
$trans["checkinFormBarcode"]      = "\$text='Barcode Number:';";
$trans["checkinFormShelveButton"] = "\$text='Add to Shelving Cart';";
$trans["checkinFormCheckinLink1"] = "\$text='Check in selected items';";
$trans["checkinFormCheckinLink2"] = "\$text='Check in all items';";
$trans["checkinFormHdr2"]         = "\$text='Current Shelving Cart List:';";
$trans["checkinFormColHdr1"]      = "\$text='Date Scanned';";
$trans["checkinFormColHdr2"]      = "\$text='Barcode';";
$trans["checkinFormColHdr3"]      = "\$text='Title';";
$trans["checkinFormColHdr4"]      = "\$text='Author';";
$trans["checkinFormEmptyCart"]    = "\$text='No bibliographies are currently in shelving cart status.';";

#****************************************************************************
#*  Translation text for page checkin.php
#****************************************************************************
$trans["checkinErr1"]             = "\$text='No items have been selected.';";

#****************************************************************************
#*  Translation text for page hold_message.php
#****************************************************************************
$trans["holdMessageHdr"]          = "\$text='Bibliography Has Been Placed On Hold!';";
$trans["holdMessageMsg1"]         = "\$text='The bibliography with barcode number %barcode% that you are attempting to check in has one or more hold requests placed on it.  <b>Please file this bibliography with your held items instead of placing it on your shelving cart.</b>  The status code for this bibliography has been set to hold.';";
$trans["holdMessageMsg2"]         = "\$text='Return to bibliography check in.';";

#****************************************************************************
#*  Translation text for page place_hold.php
#****************************************************************************
$trans["placeHoldErr1"]           = "\$text='Barcode number must be numeric.';";
$trans["placeHoldErr2"]           = "\$text='Barcode does not exist.';";
$trans["placeHoldErr3"]           = "\$text='This member already has that item checked out -- not placing hold.';";

#****************************************************************************
#*  Translation text for page mbr_del_confirm.php
#****************************************************************************
$trans["mbrDelConfirmWarn"]       = "\$text = 'Member, %name%, has %checkoutCount% checkout(s) and %holdCount% hold request(s).  All checked out materials must be checked in and all hold requests deleted before deleting this member.';";
$trans["mbrDelConfirmReturn"]     = "\$text = 'return to member information';";
$trans["mbrDelConfirmMsg"]        = "\$text = 'Are you sure you want to delete the member, %name%?  This will also delete all checkout history for this member.';";

#****************************************************************************
#*  Translation text for page mbr_del.php
#****************************************************************************
$trans["mbrDelSuccess"]           = "\$text='Member, %name%, has been deleted.';";
$trans["mbrDelReturn"]            = "\$text='return to Member Search';";

#****************************************************************************
#*  Translation text for page mbr_history.php
#****************************************************************************
$trans["mbrHistoryHead1"]         = "\$text='Member Checkout History:';";
$trans["mbrHistoryNoHist"]        = "\$text='No history was found.';";
$trans["mbrHistoryHdr1"]          = "\$text='Barcode';";
$trans["mbrHistoryHdr2"]          = "\$text='Title';";
$trans["mbrHistoryHdr3"]          = "\$text='Author';";
$trans["mbrHistoryHdr4"]          = "\$text='New Status';";
$trans["mbrHistoryHdr5"]          = "\$text='Date of Status Change';";
$trans["mbrHistoryHdr6"]          = "\$text='Due Back Date';";

#****************************************************************************
#*  Translation text for page mbr_account.php
#****************************************************************************
$trans["mbrAccountLabel"]         = "\$text='Add a Transaction:';";
$trans["mbrAccountTransTyp"]      = "\$text='Transaction Type:';";
$trans["mbrAccountAmount"]        = "\$text='Amount:';";
$trans["mbrAccountDesc"]          = "\$text='Description:';";
$trans["mbrAccountHead1"]         = "\$text='Member Account Transactions:';";
$trans["mbrAccountNoTrans"]       = "\$text='No transactions found.';";
$trans["mbrAccountOpenBal"]       = "\$text='Opening Balance';";
$trans["mbrAccountDel"]           = "\$text='del';";
$trans["mbrAccountHdr1"]          = "\$text='Function';";
$trans["mbrAccountHdr2"]          = "\$text='Date';";
$trans["mbrAccountHdr3"]          = "\$text='Trans Type';";
$trans["mbrAccountHdr4"]          = "\$text='Description';";
$trans["mbrAccountHdr5"]          = "\$text='Amount';";
$trans["mbrAccountHdr6"]          = "\$text='Balance';";

#****************************************************************************
#*  Translation text for page mbr_transaction.php
#****************************************************************************
$trans["mbrTransactionSuccess"]   = "\$text='Transaction successfully completed.';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del_confirm.php
#****************************************************************************
$trans["mbrTransDelConfirmMsg"]   = "\$text='Are you sure you want to delete this transaction?';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del.php
#****************************************************************************
$trans["mbrTransactionDelSuccess"] = "\$text='Transaction successfully deleted.';";

#****************************************************************************
#*  Translation text for page mbr_print_checkouts.php
#****************************************************************************
$trans["mbrPrintCheckoutsTitle"]  = "\$text='Checkouts for %mbrName%';";
$trans["mbrPrintCheckoutsHdr1"]   = "\$text='Current Date:';";
$trans["mbrPrintCheckoutsHdr2"]   = "\$text='Member:';";
$trans["mbrPrintCheckoutsHdr3"]   = "\$text='Card Number:';";
$trans["mbrPrintCheckoutsHdr4"]   = "\$text='Classification:';";
$trans["mbrPrintCloseWindow"]     = "\$text='Close Window';";

?>
