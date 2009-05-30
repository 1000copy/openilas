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
$trans["circCancel"]              = "\$text = '取消';";
$trans["circDelete"]              = "\$text = '删除';";
$trans["circLogout"]              = "\$text = '退出';";
$trans["circAdd"]                 = "\$text = '添加';";
$trans["mbrDupBarcode"]           = "\$text = '条码, %barcode%, 已经使用.';";

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
$trans["Mailing Address:"] = "\$text='邮政地址:';";
$trans["mbrNewForm"]              = "\$text='新建';";
$trans["mbrEditForm"]             = "\$text='编辑';";
$trans["mbrFldsHeader"]           = "\$text='会员:';";
$trans["mbrFldsCardNmbr"]         = "\$text='卡号:';";
$trans["mbrFldsLastName"]         = "\$text='姓:';";
$trans["mbrFldsFirstName"]        = "\$text='名:';";
$trans["mbrFldsAddr1"]            = "\$text='地址1:';";
$trans["mbrFldsAddr2"]            = "\$text='地址2:';";
$trans["mbrFldsCity"]             = "\$text='城市:';";
$trans["mbrFldsStateZip"]         = "\$text='省,邮编:';";
$trans["mbrFldsHomePhone"]        = "\$text='家庭电话:';";
$trans["mbrFldsWorkPhone"]        = "\$text='工作电话:';";
$trans["mbrFldsEmail"]            = "\$text='Email :';";
$trans["mbrFldsClassify"]         = "\$text='分类:';";
$trans["mbrFldsGrade"]            = "\$text='School Grade:';";
$trans["mbrFldsTeacher"]          = "\$text='School Teacher:';";
$trans["mbrFldsSubmit"]           = "\$text='提交';";
$trans["mbrFldsCancel"]           = "\$text='取消';";
$trans["mbrsearchResult"]         = "\$text='结果页面: ';";
$trans["mbrsearchprev"]           = "\$text='向前';";
$trans["mbrsearchnext"]           = "\$text='向后';";
$trans["mbrsearchNoResults"]      = "\$text='无结果.';";
$trans["mbrsearchFoundResults"]   = "\$text=' 个结果找到';";
$trans["mbrsearchSearchResults"]  = "\$text='搜索结果:';";
$trans["mbrsearchCardNumber"]     = "\$text='卡号:';";
$trans["mbrsearchClassification"] = "\$text='分类:';";

#****************************************************************************
#*  Translation text for page mbr_new.php
#****************************************************************************
$trans["mbrNewSuccess"]           = "\$text='会员已经添加';";

#****************************************************************************
#*  Translation text for page mbr_edit.php
#****************************************************************************
$trans["mbrEditSuccess"]          = "\$text='会员已经修改.';";

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
$trans["mbrViewHoldHdr1"]         = "\$text='操作';";
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
$trans["checkoutBalErr"]          = "\$text='会员借用之前必须先缴纳罚金.';";
$trans["checkoutErr1"]            = "\$text='条码必须是英文和数字.';";
$trans["checkoutErr2"]            = "\$text='这个条码没有对应的书目.';";
$trans["checkoutErr3"]            = "\$text='这个条码 %barcode% 的书目已经借出.';";
$trans["checkoutErr4"]            = "\$text='这个条码 %barcode% 不能借出.';";
$trans["checkoutErr5"]            = "\$text='这个条码 %barcode% 的数码当前被其他会员预约 .';";
$trans["checkoutErr6"]            = "\$text='会员借出的这个载体类型的书目已经超过限定.';";
$trans["checkoutErr7"]            = "\$text='这个条码 %barcode% 的书目已经超过续借的限度';";
$trans["checkoutErr8"]            = "\$text='这个条码 %barcode% 的书目 不能续借，因为续借已经过期.';";

#****************************************************************************
#*  Translation text for page shelving_cart.php
#****************************************************************************
$trans["shelvingCartErr1"]        = "\$text='条码必须有英文和数字构成.';";
$trans["shelvingCartErr2"]        = "\$text='没有找到这个条码的书目.';";
$trans["shelvingCartTrans"]       = "\$text='延期罚金  (条码=%barcode%)';";

#****************************************************************************
#*  Translation text for page checkin_form.php
#****************************************************************************
$trans["checkinFormHdr1"]         = "\$text='还书:';";
$trans["checkinFormBarcode"]      = "\$text='条码:';";
$trans["checkinFormShelveButton"] = "\$text='Add to Shelving Cart';";
$trans["checkinFormCheckinLink1"] = "\$text='还书：选定的';";
$trans["checkinFormCheckinLink2"] = "\$text='还书：全部';";
$trans["checkinFormHdr2"]         = "\$text='Current Shelving Cart List:';";
$trans["checkinFormColHdr1"]      = "\$text='Date Scanned';";
$trans["checkinFormColHdr2"]      = "\$text='条码';";
$trans["checkinFormColHdr3"]      = "\$text='标题';";
$trans["checkinFormColHdr4"]      = "\$text='作者';";
$trans["checkinFormEmptyCart"]    = "\$text='没有状态为 shelving cart status 的书目.';";

#****************************************************************************
#*  Translation text for page checkin.php
#****************************************************************************
$trans["checkinErr1"]             = "\$text='没有任何选择.';";

#****************************************************************************
#*  Translation text for page hold_message.php
#****************************************************************************
$trans["holdMessageHdr"]          = "\$text='书目已经成功预约!';";
$trans["holdMessageMsg1"]         = "\$text='条码 %barcode% 的书目已经被预约 <b>请暂时持有，不必放到书架上 (shelving cart).</b>  这本书已经被设置为 被预约 状态.';";
$trans["holdMessageMsg2"]         = "\$text='返回 还书 页面.';";

#****************************************************************************
#*  Translation text for page place_hold.php
#****************************************************************************
$trans["placeHoldErr1"]           = "\$text='条码必须为数字.';";
$trans["placeHoldErr2"]           = "\$text='条码不存在.';";
$trans["placeHoldErr3"]           = "\$text='会员已经借出这个数目 - 不是预约.';";

#****************************************************************************
#*  Translation text for page mbr_del_confirm.php
#****************************************************************************
$trans["mbrDelConfirmWarn"]       = "\$text = '会员, %name%, 已经借出 %checkoutCount% 次，并且有预约 %holdCount% 个.  删除会员前必须还书和删除预约';";
$trans["mbrDelConfirmReturn"]     = "\$text = '返回 会员信息';";
$trans["mbrDelConfirmMsg"]        = "\$text = '确认删除会员, %name%?  会员的全部历史也会清除.';";

#****************************************************************************
#*  Translation text for page mbr_del.php
#****************************************************************************
$trans["mbrDelSuccess"]           = "\$text='会员, %name%, 已经删除.';";
$trans["mbrDelReturn"]            = "\$text='返回 会员搜索';";

#****************************************************************************
#*  Translation text for page mbr_history.php
#****************************************************************************
$trans["mbrHistoryHead1"]         = "\$text='借出历史:';";
$trans["mbrHistoryNoHist"]        = "\$text='无历史.';";
$trans["mbrHistoryHdr1"]          = "\$text='条码';";
$trans["mbrHistoryHdr2"]          = "\$text='标题';";
$trans["mbrHistoryHdr3"]          = "\$text='作者';";
$trans["mbrHistoryHdr4"]          = "\$text='新状态';";
$trans["mbrHistoryHdr5"]          = "\$text='状态变化日期';";
$trans["mbrHistoryHdr6"]          = "\$text='归还日期';";

#****************************************************************************
#*  Translation text for page mbr_account.php
#****************************************************************************
$trans["mbrAccountLabel"]         = "\$text='添加账目:';";
$trans["mbrAccountTransTyp"]      = "\$text='账目类型:';";
$trans["mbrAccountAmount"]        = "\$text='数量:';";
$trans["mbrAccountDesc"]          = "\$text='描述:';";
$trans["mbrAccountHead1"]         = "\$text='会员账目:';";
$trans["mbrAccountNoTrans"]       = "\$text='无账目.';";
$trans["mbrAccountOpenBal"]       = "\$text='Opening Balance';";
$trans["mbrAccountDel"]           = "\$text='删除';";
$trans["mbrAccountHdr1"]          = "\$text='操作';";
$trans["mbrAccountHdr2"]          = "\$text='日期';";
$trans["mbrAccountHdr3"]          = "\$text='账目类型';";
$trans["mbrAccountHdr4"]          = "\$text='描述';";
$trans["mbrAccountHdr5"]          = "\$text='金额';";
$trans["mbrAccountHdr6"]          = "\$text='余额';";

#****************************************************************************
#*  Translation text for page mbr_transaction.php
#****************************************************************************
$trans["mbrTransactionSuccess"]   = "\$text='完成账目.';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del_confirm.php
#****************************************************************************
$trans["mbrTransDelConfirmMsg"]   = "\$text='要删除这个账目吗?';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del.php
#****************************************************************************
$trans["mbrTransactionDelSuccess"] = "\$text='账目已经删除.';";

#****************************************************************************
#*  Translation text for page mbr_print_checkouts.php
#****************************************************************************
$trans["mbrPrintCheckoutsTitle"]  = "\$text='为 %mbrName% 借出';";
$trans["mbrPrintCheckoutsHdr1"]   = "\$text='当前日期:';";
$trans["mbrPrintCheckoutsHdr2"]   = "\$text='会员:';";
$trans["mbrPrintCheckoutsHdr3"]   = "\$text='卡号:';";
$trans["mbrPrintCheckoutsHdr4"]   = "\$text='分类:';";
$trans["mbrPrintCloseWindow"]     = "\$text='关闭窗口';";

?>
