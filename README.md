# mobi-market/cdiscount-sdkphpapi
> This package has now been updated to use laminas framework (replacement of zend) and a minimum requirement of PHP 7.4 *or* PHP 8.0
> to allow for usage in more modern code.

This package is an update to the [Cdiscount/API-MarketPlace-SDK-PHP](https://github.com/Cdiscount/API-MarketPlace-SDK-PHP) parent.

Main Changes include the ability to pass in the username, password, token url and cURL options into the API functionality without the need to modify the supplied `config.ini` file.

The reasons for these changes are to better support frameworks like Laravel and to dissuade users from directly editing files in the `vendor` directory.

## Installation

## 1- Install a web server (for example wamp for windows)

### 1.1 - Min requirements :

*   PHP 8.0 - [https://www.php.net/downloads.php](https://www.php.net/downloads.php)
*   PHP 7.4 - [https://www.php.net/downloads.php](https://www.php.net/downloads.php)
*   Composer - [https://getcomposer.org/download/](https://getcomposer.org/download/)

## 2- Install the package
Either with composer or by cloning.

### 2.1a - Add to your project with composer
`composer require autumndev/cdiscount-sdkphpapi`

### 2.1b - Clone the Git repository in your root project folder

The SDK is structured like that :

*   config/ : config files
*   samples/ : samples folder
*   sdk/ : content of the Cdiscount SDK (do not modify any file of this folder)

### 2.2b - Run the 'composer update' command in the root path of the sdk folder to download Laminas Framework dependencies

## 3 - Insert your API credentials

### 3.1 - Requirements

To use Cdiscount Marketplace API and Cdiscount Marketplace SDK you first need to follow the steps described in the Cdiscount Marketplace API website.

The sections are the following :

*   Request your account creation.
*   Have set up your account

### 3.2 - Update the config files

Follow the procedure to insert your API credentials

*   Open the config folder
*   Open the config.ini file
*   Set the api mode : 'preprod' or 'prod'
*   Open the preprod.config.ini file or the prod.config.ini file (if you set mode to 'prod')
*   Set your api username
*   Set your api password

## 4 - Use the SDK

### 4.1 - Use the endpoints

The SDK contains the following endpoints :

*   Seller
*   Offer
*   Discussion
*   Product
*   Order
*   Relay

All the SDK methods are described in the MarketPlace API Website because they have the same names of the Cdiscount Marketplace API methods.

For each method, you have a PHP file with a sample to call the corresponding API function.

For example, to call the GetSellerInformation API method, open the `GetSellerInformation.php` file contained in the Seller folder and follow the same steps of the sample.

### 4.2 - CDSApiClient Object

The CDSApiClient allows you to call the API.

The CDSApiClient object contains all the endpoints. It's also create an API call to get a token for you.

Don't create a new CDSApiClient each time you call the API !

You can (have to) use the same CDSApiClient for all your API' calls.

Here an example of how use the same CDSApiClient for many API calls :

```php
$client = new \Sdk\ApiClient\CDSApiClient();
$token = $client->init();
if ($token == null || !$client->isTokenValid()) {
	echo "Souci lors de la génération du token";
	die;
}
$offerPoint = $client->getOfferPoint();
$offerListResponse = $offerPoint->getOfferList(null); /** Parse here $offerListResponse **/
$sellerPoint = $client->getSellerPoint();
$sellerResponse = $sellerPoint->getSellerInformation(); /** Parse here $sellerResponse **/
```


## 5 - Update the SDK
Download the new SDK Zip file from the CDiscount Marketplace API Website

Erase the SDK folder with the new one

Erase the vendor folder with the new one

## Notes
In the sample, the parameter error_reporting is set to '-1'. Do not let it in production mode.
