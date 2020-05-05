<?php
namespace App\Services;

use App\Models\User;

/**
 *
 * @author Daiki Tamura
 *
 */
interface UserService
{
    /**
     * ユーザを削除する
     *
     * @param int $id 削除するユーザId
     */
    public function delete(int $id);

    /**
     * 全ユーザを取得する
     */
    public function getList();

    /**
     * ユーザIdからユーザを取得する
     *
     * @param int $id ユーザId
     */
    public function getDetail(int $id);

}