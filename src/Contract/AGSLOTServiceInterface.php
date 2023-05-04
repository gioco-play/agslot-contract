<?php
declare(strict_types=1);
namespace GiocoPlus\AGSLOT\Contract;
/**
 * AG電子
 */
interface AGSLOTServiceInterface {

    /**
     * 遊戲啟動
     *
     * @param string $op_code
     * @param string $account
     * @param string $game_code
     * @param string $language
     * @return mixed
     */
    function gameLaunch(string $op_code, string $account, string $game_code, string $language);

    /**
     * 交易失敗，補分
     * @param string $op_code
     * @param string $order_no
     * @return mixed
     */
    function orderFailCheck(string $op_code, string $order_no);

    /**
     * 會員帳號轉換(GF->AGSLOT)
     * @param string $op_code
     * @param array $vendor
     * @param string $member_code
     * @return mixed
     */
    function accountToVendor(string $op_code, array $vendor, string $member_code);

    /**
     * 會員帳號轉換(AGSLOT->GF)
     * @param string $op_code
     * @param array $vendor
     * @param string $vendor_account
     * @return mixed
     */
    function accountToOperator(string $op_code, array $vendor, string $vendor_account);
}

