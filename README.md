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

## Versions

The only active version is presently 1.7.x

It is set up for PHP8, PHPPro/Soapclient v2, and Symfony 6.x

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

In the directory /R+V_Documentation/Corrected WSDL you'll find prod and test versions of the WSDL
The only difference between the two of them is the URL of the server.

| Environment          | WSDL Path | Location |
|----------------------|-----------|----------|
| S-test (development) | R+V_Documentation/Corrected WSDL/test/Mietkaution/2020/1/_impl/RuV/Service.wsdl   | https://s.webservice.ruv.de/integ/kredit/mietkaution/2020_1/ |
| Production           | R+V_Documentation/Corrected WSDL/prod/Mietkaution/2020/1/_impl/RuV/Service.wsdl    | https://ws.kredit-privat-webservice.de/bonipruef   |


```yaml
# config/packages/plusforta_ruv_soap.yaml
plusforta_ruv_soap:
    wsdl: Path to WSDL document (note that as of 01.01.2024, you must provide a local WSDL)
    connection:
        proxy:
          host: proxyserver Hostname
          port: proxyserver Port
        basicAuth:
          username: username for the R+V API Server (stest only)
          password: password for the R+V API Server (stest only)
        ssl:
          verify_peer: false
          verify_peer_name: false
    Antrag:
        Kennung:
          benutzer: R+V API Username (varys by environment and product type)
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

The *soapbundle* is based on the Soap Client (https://github.com/phpro/soap-client). If a new
new R+V API version is to be addressed, the wizard of `phpro/soap-client` should be used to create the value objects.

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
git push --tags
git push
```

## Testing

Run [mitmproxy](https://mitmproxy.org/) on the proxy server
```bash
$ ssh -L8888:127.0.0.1:8080 root@rv-proxy.pfdev.de /root/.local/bin/mitmweb --no-web-open-browser --web-port 8080 --listen-port 9999 --set block_global=false
```

Change the port number in the configuration to 9999
Open http://127.0.0.1:8888 in your browser to see all the transactions
