# Magento2 Ceneo Trusted Reviews

Magento integration module with the program [**Ceneo Trusted Reviews**](https://biznes.ceneo.pl/zaufane-opinie).

## Requirements
Magento 2.2.x, 2.3.x, 2.4.x

## Installation

- download ZIP archive and extract to the project directory: `{Magento}/app/code/Geekster/CeneoTrustedReviews` or clone the repository:
```bash
git clone https://github.com/geekster-dev/Magento2-Ceneo-Trusted-Reviews.git
```

- run the following commands in the Magento directory:
```bash
php bin/magento module:enable Geekster_CeneoTrustedReviews
php bin/magento setup:upgrade
```

## Documentation

The module is available in the tab: 

Stores -> Settings -> Configuration -> **Geekster -> Ceneo Trusted Reviews**

![App Screenshot](https://geekster.pl/wp-content/uploads/2023/03/magento2-ceneo-trusted-reviews.jpg)

### Settings
- **GUID** - Your store ID in [Ceneo](https://shops.ceneo.pl/Account/Login?returnUrl=Reviews%2FTrustedReviews%2FInformation;instruction%3Dtrue;script%3Dtrue),
- **Days Number** - number of working days to send the survey,
- **Product Identifier** - SKU or product ID.
 
## License

MIT

