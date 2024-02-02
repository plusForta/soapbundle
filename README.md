# This is the SOAP Client for the R+V API

The *soapbundle* implements a soap client for communication with the R+V API.

The project is a Symfony bundle (https://symfony.com/doc/current/bundles.html).

## Installation

First, the github repository must be added to composer.json.

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

Then you can install the bundle with composer.

```shell
composer require plusforta/soapbundle:x.x.x
```

# Versions Overview

We currently maintain two active versions of our project: **1.8.x** and **1.7.x**.

- **1.8.x** is the latest and default version, incorporating the most up-to-date features and optimizations.
- **1.7.x** represents the previous iteration, which we continue to maintain for backward compatibility and stability.

## Compatibility and Requirements

- **PHP Compatibility:**
    - Version **1.7.x** is compatible up to PHP 8.1.
    - Version **1.8.x** supports PHP 8.2 and later, aligning with the latest PHP advancements.

- **Dependencies:**
  Both versions require:
    - `PHPPro/Soapclient v2` for enhanced SOAP client capabilities.
    - `Symfony 6.x` for robust framework support.

## Key Differences Between 1.7.x and 1.8.x

The transition from 1.7.x to 1.8.x includes significant improvements, especially in adapting to PHP 8.2's changes:

- **Dynamic Properties:**
    - In version **1.8.x**, we've removed all dynamic properties in response to their deprecation in PHP 8.2. 
      This modification ensures our codebase is compliant with the latest PHP standards and enhances code stability and predictability.

- **Readonly Properties:**
    - Additionally, **1.8.x** introduces the use of **readonly properties** where applicable. 
      This feature, available from PHP 8.2 onwards, is used for properties that should not change after initialization, 
      providing better immutability guarantees and contributing to the overall code safety and maintainability.

## Configuration

After installation, the Connection parameters must be configured. This is defined in the project
`config/packages/plusforta_ruv_soap.yaml`.

As R+V uses IP whitelisting, the project should also use a proxy, that is whitelisted.
We have a single server, running on oa-stage (rv-proxy.pfdev.de) that hosts squid http proxy

We also have two new servers, running over a load balancer, but they aren't in production use yet

Starting on 1.1.2024, production will no longer use whitelisting.

### WSDL

Starting on 1.1.2024, we also must have a local version of the WSDL.   The WSDL provided by
R+V is not usable because it has absolute links between documents that only work on the computer
of the person that created the WSDL.

The corrected WSDL is here: R+V_Documentation/Corrected WSDL/Mietkaution/2020/1/_impl/RuV/Service.wsdl

| Environment          | WSDL Path | Location |
|----------------------|-----------|----------|
| S-test (development) | R+V_Documentation/Corrected WSDL/test/Mietkaution/2020/1/_impl/RuV/Service.wsdl   | https://s.webservice.ruv.de/integ/kredit/mietkaution/2020_1/ |
| Production           | R+V_Documentation/Corrected WSDL/prod/Mietkaution/2020/1/_impl/RuV/Service.wsdl    | https://webservice.ruv.de/integ/kredit/mietkaution/2020_1/   |


```yaml
# config/packages/plusforta_ruv_soap.yaml
plusforta_ruv_soap:
    wsdl: Path to WSDL document (note that as of 01.01.2024, you must provide a local WSDL)
    location: Set to either the production or s-test URL above
    connection:
        proxy:  # set proxy server here for development servers
          host: proxyserver Hostname
          port: proxyserver Port
        basicAuth:
          username: username for the R+V API Server
          password: password for the R+V API Server
        ssl:
          verify_peer: false
          verify_peer_name: false
    Antrag:
        Kennung:
          benutzer: R+V API Username (varies by environment and product type)
          passwort: R+V API Password
        Identity: # optional
          name: optional, defaults to 'plusforta GmbH Düsseldorf'
          userid: optional
        Agenturdaten:
          AgenturNummer: optional Agency Number (varies by product type, defaults to '166923')
          MitarbeiterNummer: optional, defaults to Null
          MitarbeiterNummerZusaetzlicherMA: optional, defaults to Null
          StellnnummerZusaetzlicherMA: optional, defaults to Null
        Vertragsdaten:
          Produkt: optional, defaults to 'Mietkaution'
          Versicherungsbedingung: Conditions Code (varies by product type, defaults to 'Miet0422')
        Werbewiderspruch: # optional
          KeineTelefonWerbung: optional, defaults to True
          KeineEmailWerbung: optional, defaults to True
          KeineDatenweitergabe: optional, defaults to True
          KeineSchriftlicheWerbung: optional, defaults to True
        UebergabeDokumente: #optional
          VertragsbestimmungenUebergeben: optional, defaults to True
          BuergschaftUebergeben: optional, defaults to False
          VersicherungsscheinUebergeben: optional, defaults to False
          RechnungUebergeben: optional, defaults to False
```

## Upgrade to a new API

The *soapbundle* is based on the Soap Client (https://github.com/phpro/soap-client). If a new R+V API version is to be addressed, the wizard of `phpro/soap-client` should be used to create the value objects.

```shell
./vendor/bin/soap-client wizard
```

The configuration should be `config/soap-client.php`. The existing
value objects (`src/Type/*`) should be updated with the new ones (do not simply overwrite them).
The factories (`src/Messages/*`) must then be adapted.

### Moving from 2020 WSDL to 2023

For example, we will need to do this when moving from the 2020 WSDL to the 2023 WSDL.  This is one of those "when we
have free time type of projects."

_When recreating the Types, don't reinsert all stupid assertions.   They just cause more work.  We should be verifying
user input @ the interface the user, not deep inside the API call.   This only makes life difficult for us when we are
changing product types and such._

## Versioning

The project uses semantic versioning. If changes are pushed, a corresponding tag should be added for
version should be added.

There are multiple branches for each major version. The master branch is the latest version.
To update a particular version, checkout the corresponding branch, make a new commit, and tag it.

```shell
git pull
git checkout 1.7.x
# make changes
git add .
git commit -m "Describe what you changed"
git tag $newVersion  # $newVersion is the new version number.
git push
git push --tags
```

## Testing

Run [mitmproxy](https://mitmproxy.org/) on the proxy server
```bash
$ ssh -L8888:127.0.0.1:8080 root@rv-proxy.pfdev.de /root/.local/bin/mitmweb --no-web-open-browser --web-port 8080 --listen-port 9999 --set block_global=false
```

Change the port number in the configuration to 9999
Open http://127.0.0.1:8888 in your browser to see all the transactions
