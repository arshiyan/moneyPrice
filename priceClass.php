<?php
/*
 * Mohammad Javad Arshiyan
 * example :
 *      priceClass::sellUSD() // return usd
 */

/**
 * Class priceClass
 */
class priceClass
{
    static $apiUrl = "https://www.megaweb.ir/api/money";

    /**
     * @return false|string
     */
    public static function getConetnt()
    {
        $priceList = file_get_contents(priceClass::$apiUrl);
        return $priceList;
    }

    /**
     * @return price of buy USD
     */
    public static function buyUSD()
    {
        return json_decode(priceClass::getConetnt())->buy_usd->price;
    }

    /**
     * @return price of sell USD
     */
    public static function sellUSD()
    {
        return json_decode(priceClass::getConetnt())->sell_usd->price;
    }

    /**
     * @return price of buy EUR
     */
    public static function buyEUR()
    {
        return json_decode(priceClass::getConetnt())->buy_eur->price;
    }

    /**
     * @return price of sell EUR
     */
    public static function sellEUR()
    {
        return json_decode(priceClass::getConetnt())->sell_eur->price;
    }

    /**
     * @return price of buy AED
     */
    public static function buyAED()
    {
        return json_decode(priceClass::getConetnt())->buy_aed->price;
    }

    /**
     * @return price of sell AED
     */
    public static function sellAED()
    {
        return json_decode(priceClass::getConetnt())->sell_aed->price;
    }
}