# :sparkles: PAYPAL PAYMENT GATEWAY PHP SQL
> PayPal Payment Gateway Integration in PHP using PayPal REST API

## :gear: QUICK INSTALL:

### Pre Requirements:

- Composer.
- PHP.
- MySQL/MariaDB.

PayPal is one of the most trusted payment gateways on the internet. It is widely used on websites to accept payment online. However, PayPal API documentation is not easy to understand. For a developer who is going to integrate PayPal payment gateway the first time, it will take long hours to succeed in it. We spent an insane amount of hours reading PayPal API documentation. And later realize that there is no need to read Paypal documentation in-depth to integrate it.
In this article, we study how to integrate PayPal payment gateway using PayPal REST API. We are going to use GitHub library provided by Omnipay. Omnipay provides a clean and easy way to integrate different payment gateway on your web application. Their code structure is also clean and efficient. Developers would love it.

## Get PayPal Client ID and Client Secret

For PayPal integration in the website, you first need to create a REST API app on PayPal developer account. Once you created the app, you will get the client id and client secret which will require in the next steps.  
To create REST API app, go to your PayPal developer account and login to the dashboard.  
In the developer dashboard, click on the menu ‘My Apps & Credentials’. Click on the ‘Create App’ button under the REST API apps section.

On the next step, fill out the app name and you will get your client id and client secret. In our case, in the below screenshot we are showing sandbox credentials. It can be live credentials in your case. Or you can try with your sandbox credentials also.

## Library Installation and Basic Setup

As we said, we will use Omnipay for PayPal REST API integration. We need to first install their libraries using the Composer. Run the command below to install the libraries.  

```bash
composer require league/omnipay omnipay/paypal
```

After installing the library, create a configuration file where we store our API credentials, write DB connection and initialize the gateway.


## :inbox_tray: DEPENDENCIES:

### LIST OF REQUIREMENTS DEPENDENCIES:
- [league/omnipay omnipay/paypal](https://github.com/thephpleague/omnipay-paypal): Omnipay is a framework agnostic, multi-gateway payment processing library for PHP. This package implements PayPal support for Omnipay.

## :heart: SUPPORT ME
<a href='https://ko-fi.com/fernandocalmet' target='_blank'>
  <img height='36' style='border:0px;height:36px;' src='https://az743702.vo.msecnd.net/cdn/kofi3.png?v=2' border='0' alt='Buy Me a Coffee at ko-fi.com' />
</a>