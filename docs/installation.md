# Installation

## Install this library using composer

```shell-session
composer require neilime/twbs-helper-module
```

## Include Twitter Bootstrap assets

### With **AssetsBundle** module (easy way)

- Install the [AssetsBundle module](https://github.com/neilime/zf-assets-bundle/wiki/Installation)
- Install [Twitter Bootstrap](https://github.com/twbs/bootstrap#quick-start):

  ```shell-session
  composer require twbs/bootstrap
  ```

- Edit the application module configuration file `module/Application/config/module.config.php`, adding the configuration fragment below:

  ```php title="module/Application/config/module.config.php" {3-7}
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

- Edit layout file `module/Application/view/layout/layout.phtml`, to render head scripts:

  ```php title="module/Application/view/layout/layout.phtml" {2}
  //...
  echo $this->headScript();
  //...
  ```

### Manually

- Copy `bootstrap.css` file (available on [Twitter Bootstrap website](https://github.com/twbs/bootstrap/archive/v3.0.0.zip)) into your assets folder and add it in your head scripts.
