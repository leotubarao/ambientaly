# Update URL in Database

## Local to dev

```text
UPDATE ltco_options SET option_value = replace(option_value, 'http://localhost/ambientaly', 'http://ambientaly1.hospedagemdesites.ws') WHERE option_name = 'home' OR option_name = 'siteurl';

UPDATE ltco_posts SET guid = replace(guid, 'http://localhost/ambientaly','http://ambientaly1.hospedagemdesites.ws');

UPDATE ltco_posts SET post_content = replace(post_content, 'http://localhost/ambientaly', 'http://ambientaly1.hospedagemdesites.ws');

UPDATE ltco_postmeta SET meta_value = replace(meta_value,'http://localhost/ambientaly','http://ambientaly1.hospedagemdesites.ws');

```

## Dev to Prod

```text
UPDATE ltco_options SET option_value = replace(option_value, 'http://ambientaly1.hospedagemdesites.ws', 'http://ambientaly.com') WHERE option_name = 'home' OR option_name = 'siteurl';

UPDATE ltco_posts SET guid = replace(guid, 'http://ambientaly1.hospedagemdesites.ws','http://ambientaly.com');

UPDATE ltco_posts SET post_content = replace(post_content, 'http://ambientaly1.hospedagemdesites.ws', 'http://ambientaly.com');

UPDATE ltco_postmeta SET meta_value = replace(meta_value,'http://ambientaly1.hospedagemdesites.ws','http://ambientaly.com');
```
