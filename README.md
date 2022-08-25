# R+V soapbundle 

Das *soapbundle* implementiert einen Soap-Client für die Kommunikation mit der R+V Schnittstelle.
Das Projekt ist ein Symfony Bundle (https://symfony.com/doc/current/bundles.html).

## Installation

Zuerst muss das github-Repository zur composer.json hinzugefügt werden. 

**composer.json**
````json
"repositories": [
    ...
    {
      "type": "git",
      "url": "https://github.com/plusForta/soapbundle.git"
    }
  ],
````


```shell
composer require plusforta/soapbundle:x.x.x
```


## Konfiguration

Nach der Installation muss die R+V Wsdl konfiguriert werden. Diese wird im Projekt 
`config/packages/plusforta_ruv_soap.yaml` festgelegt. 
Da die R+V ein IP-Whitelisting nutzt, sollte das Projekt zusätzlich einen Proxy nutzen, 
der whitelisted ist. 

```yaml
# config/packages/plusforta_ruv_soap.yaml
plusforta_ruv_soap:
  wsdl: '%env(WSDL)%'
  connection:
    proxy:
      host: '%env(PROXY_HOST)%'
      port: '%env(PROXY_PORT)%'

    ssl:
      verify_peer: false
      verify_peer_name: false

```


## Upgrade auf eine neue Schnittstelle

Das *soapbundle* basiert auf dem Soap Client (https://github.com/phpro/soap-client). Soll eine 
neue R+V Schnittstellenversion angesprochen werden, sollte der Wizard von `phpro/soap-client` 
verwendet werden, um die Value-Objects zu erzeugen.

```shell
./vendor/bin/soap-client wizard
```
Als Konfiguration sollte die `config/soap-client.php` verwendet werden. Die bestehenden 
Value-Objects (`src/Type/*`) sollten durch die Neuen aktualisiert werden (nicht einfach überschreiben).
Danach müssen die Factories (`src/Messages/*`) angepasst werden.

## Versionierung

Das Projekt verwendet Semantic Versioning. Werden Änderungen gepusht, sollte ein entsprechendes Tag für 
die Version hinzugefügt werden.