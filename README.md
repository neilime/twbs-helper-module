<p align="center">
  <a href="https://github.com/neilime/twbs-helper-module" target="_blank"><img src="https://repository-images.githubusercontent.com/80362393/425f1180-7115-11ea-96d4-75646c99df22" width="600"></a>
</p>

[![Continuous integration](https://github.com/neilime/twbs-helper-module/workflows/Continuous%20integration/badge.svg)](https://github.com/neilime/twbs-helper-module/actions?query=workflow%3A%22Continuous+integration%22)
[![Coverage Status](https://codecov.io/gh/neilime/twbs-helper-module/branch/master/graph/badge.svg)](https://codecov.io/gh/neilime/twbs-helper-module)
[![Latest Stable Version](https://poser.pugx.org/neilime/twbs-helper-module/v/stable)](https://packagist.org/packages/neilime/twbs-helper-module)
[![Total Downloads](https://poser.pugx.org/neilime/twbs-helper-module/downloads)](https://packagist.org/packages/neilime/twbs-helper-module)
[![License](https://poser.pugx.org/neilime/twbs-helper-module/license)](https://packagist.org/packages/neilime/twbs-helper-module)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg)](CONTRIBUTING.md)
[![Sponsor](https://img.shields.io/badge/%E2%9D%A4-Sponsor-ff69b4)](https://github.com/sponsors/neilime)

📢 **TwbsHelper** is a Laminas (formerly Zend Framework) module for easy integration of the [Twitter Bootstrap v4](https://getbootstrap.com/).

# Helping Project

❤️ If this project helps you reduce time to develop and/or you want to help the maintainer of this project. You can [sponsor](https://github.com/sponsors/neilime) him. Thank you !

# Contributing

👍 If you wish to contribute to TwbsHelper, PRs are welcome! Please read the [CONTRIBUTING.md](CONTRIBUTING.md) file.

# Demonstration / example

🚀 Render **ALL** of the [Twitter Bootstrap v4](https://getbootstrap.com/) elements with TwbsHelper : [see it in action, on-line](https://neilime.github.io/twbs-helper-module/demo.html).

# Documentation

## 1. Installation

### Install this library using composer:

`composer require neilime/twbs-helper-module`

### Include Twitter Bootstrap assets

#### With __AssetsBundle__ module (easy way)

* Install the [AssetsBundle module](https://github.com/neilime/zf-assets-bundle/wiki/Installation)
* Install [Twitter Bootstrap](https://github.com/twbs/bootstrap#quick-start): `composer require twbs/bootstrap`
* Edit the application module configuration file `module/Application/config/module.config.php`, adding the configuration fragment below:
 
    ```php
    return [
        //...
         'assets_bundle' => [
             'assets' => [
                 'less' => ['@zfRootPath/vendor/twitter/bootstrap/less/bootstrap.less'],
             ],
         ],
         //...
     ];
     ```
* Edit layout file `module/Application/view/layout/layout.phtml`, to render head scripts :
 
    ```php
    //...
    echo $this->headScript();
    //...
    ```

#### Manually

* Copy `bootstrap.css` file (available on [Twitter Bootstrap website](https://github.com/twbs/bootstrap/archive/v3.0.0.zip)) into your assets folder and add it in your head scripts

## 2. [Code coverage](https://codecov.io/gh/neilime/twbs-helper-module)
## 3. [PHP Doc](https://neilime.github.io/twbs-helper-module/phpdoc)
