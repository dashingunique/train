<?php
/**
 * @author    张大宝的程序人生 <1107842285@qq.com>
 * ==========================================================================
 * @Desc      助手函数
 * ==========================================================================
 * @link    https://github.com/dashingunique
 * ==========================================================================
 */

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

if (!function_exists('systemCarbonConfig')) {
    /**
     * 系统碳滑板相关配置信息
     * @param null $key
     * @param null $value
     * @return mixed|void
     */
    function systemCarbonConfig($key = null, $value = null)
    {
        $session = session();
        /**
         * @var Session $session
         */
        if (!$config = $session->get('system.carbon_config')) {
            $config = config('carbon');
        }
        if (is_array($key)) {
            foreach ($key as $k => $v) {
               Arr::set($config, $k, $v);
            }
            $session->put('system.carbon_config', $config);
            return;
        }
        if ($key === null) {
            return $config;
        }

        return Arr::get($config, $key, $value);
    }
}


if (!function_exists('systemConfig')) {
    /**
     * 系统配置信息
     * @param null $key
     * @param null $value
     * @return mixed|void
     */
    function systemConfig($key = null, $value = null) {
        $session = session();
        /**
         * @var Session $session
         */
        if (! $config = $session->get('admin.config')) {
            $config = config('admin');
        }

        if (is_array($key)) {
            // 保存
            foreach ($key as $k => $v) {
                Arr::set($config, $k, $v);
            }

            $session->put('admin.config', $config);

            return;
        }

        if ($key === null) {
            return $config;
        }

        return Arr::get($config, $key, $value);
    }
}
