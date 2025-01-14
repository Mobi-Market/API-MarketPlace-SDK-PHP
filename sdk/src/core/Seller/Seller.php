<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 27/09/2016
 * Time: 15:20
 */

namespace Sdk\Seller;

class Seller
{
    private $_email = null;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email): void
    {
        $this->_email = $email;
    }

    /**
     * @var
     */
    private $_isAvailable = null;

    /**
     * @return mixed
     */
    public function getIsAvailable()
    {
        return $this->_isAvailable;
    }

    /**
     * @param mixed $isAvailable
     */
    public function setIsAvailable($isAvailable): void
    {
        $this->_isAvailable = $isAvailable;
    }

    private $_login = null;

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->_login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login): void
    {
        $this->_login = $login;
    }

    private $_mobileNumber = null;

    /**
     * @return mixed
     */
    public function getMobileNumber()
    {
        return $this->_mobileNumber;
    }

    /**
     * @param mixed $mobileNumber
     */
    public function setMobileNumber($mobileNumber): void
    {
        $this->_mobileNumber = $mobileNumber;
    }

    private $_phoneNumber = null;

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->_phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber): void
    {
        $this->_phoneNumber = $phoneNumber;
    }

    private $_sellerAddress = null;

    /**
     * @return \Sdk\Seller\Address
     */
    public function getSellerAddress()
    {
        return $this->_sellerAddress;
    }

    /**
     * @param null $sellerAdress
     */
    public function setSellerAddress($sellerAdress): void
    {
        $this->_sellerAddress = $sellerAdress;
    }

    private $_shopName = null;

    /**
     * @return null
     */
    public function getShopName()
    {
        return $this->_shopName;
    }

    /**
     * @param null $shopName
     */
    public function setShopName($shopName): void
    {
        $this->_shopName = $shopName;
    }

    private $_shopUrl = null;

    /**
     * @return null
     */
    public function getShopUrl()
    {
        return $this->_shopUrl;
    }

    /**
     * @param null $shopUrl
     */
    public function setShopUrl($shopUrl): void
    {
        $this->_shopUrl = $shopUrl;
    }

    private $_siretNumber = null;

    /**
     * @return null
     */
    public function getSiretNumber()
    {
        return $this->_siretNumber;
    }

    /**
     * @param null $siretNumber
     */
    public function setSiretNumber($siretNumber): void
    {
        $this->_siretNumber = $siretNumber;
    }

    private $_state = null;

    /**
     * @return null
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * @param null $state
     */
    public function setState($state): void
    {
        $this->_state = $state;
    }
}
