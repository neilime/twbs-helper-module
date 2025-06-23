---
sidebar_position: 1
---

# Installation

## Install this library using composer

```bash
composer require neilime/twbs-helper-module
```

## Include Twitter Bootstrap assets

### With **AssetsBundle** module (easy way)

- Install the [AssetsBundle module](https://github.com/neilime/zf-assets-bundle/wiki/Installation)
- Install [Twitter Bootstrap](https://github.com/twbs/bootstrap#quick-start):

  ```bash
  composer require twbs/bootstrap
  ```

- Edit the application module configuration file `module/Application/config/module.config.php`, adding the configuration fragment below:

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

- Edit layout file `module/Application/view/layout/layout.phtml`, to render head scripts:

  ```php
  //...
  echo $this->headScript();
  //...
  ```

### Manually

- Copy `bootstrap.css` file (available on [Twitter Bootstrap website](https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css)) into your assets folder and add it in your head scripts.
