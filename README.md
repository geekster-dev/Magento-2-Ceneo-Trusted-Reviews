# Ceneo.pl Trusted Reviews - Magento 2 Extension

Magento integration module with the program [**Ceneo Trusted Reviews**](https://biznes.ceneo.pl/zaufane-opinie).

## Requirements
Magento 2.2.x, 2.3.x, 2.4.x

## Installation

- download ZIP archive and extract to the project directory: `{Magento}/app/code/Geekster/CeneoTrustedReviews`
- run the following commands:
```bash
php bin/magento module:enable Geekster_CeneoTrustedReviews
php bin/magento setup:upgrade
php bin/magento cache:flush
```

## Documentation

The module is available in the tab: 

Stores -> Settings -> Configuration -> **Geekster -> Ceneo Trusted Reviews**

![App Screenshot](https://geekster.pl/wp-content/uploads/2023/04/ceneo-trusted-reviewspl.jpg)

### Settings
- **GUID** - store key in [Ceneo](https://shops.ceneo.pl/Account/Login?returnUrl=Reviews%2FTrustedReviews%2FInformation;instruction%3Dtrue;script%3Dtrue),
- **Days Number** - number of working days to send the survey,
- **Product Identifier** - code SKU or product ID.
 
## License

MIT

