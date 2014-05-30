# README

## Requires

```json
        "sansis/basebundle" : "dev-master",
        "sansis/develbundle" : "dev-master",
        "friendsofsymfony/jsrouting-bundle" : "1.4.*@dev",
        "braincrafted/bootstrap-bundle" : "2.0.*",
        "twitter/bootstrap" : "3.1.*",
        "knplabs/knp-menu-bundle" : "1.1.2",
        "knplabs/knp-paginator-bundle" : "~2.4",
        "psliwa/pdf-bundle" : "dev-master"
```
        
## Use it in another project

composer.json:
```json
    [...]
    "require-dev" : {
        [...]
        "sansis/sandboxbundle" : "dev-master"
    },
    "repositories" : [{
        "type" : "vcs",
        "url" : "https://github.com/phackwer/SandboxlBundle.git"
    }],
    [...]
```

## Add to AppKernel

```php
         //SanSIS Core Labs Sandbox Bundle
         $bundles[] = new SanSIS\Core\SandboxBundle\SanSISCoreSandboxBundle();
```

## Add to routing.yml

```yml
san_sis_core_sandbox:
    resource: "@SanSISCoreSandboxBundle/Resources/config/routing.yml"
    prefix:   /sandbox
```

## Copy configuration and parameters

Copy the content or the files:

@SanSISCoreSandboxBundle/Resources/config/config_dev.yml 
@SanSISCoreSandboxBundle/Resources/config/parameters_dev.yml 

into yours
config_dev.yml and parameters_dev.yml so you can try the bundle