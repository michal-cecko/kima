# KIMA — sladká chuť tradície

Static-ish PHP marketing site for **KIMA**, a Slovak family confectionery producing traditional sweets since 1989.

> Showcases: Turkish honey, Košice honey, kokosový kmeň, grilážky, and seasonal specialties.

## Stack

- **PHP** (no framework — `include 'includes/header.php'` pattern)
- **PHPMailer** for the contact form
- **Composer** for the one dependency (PHPMailer)
- **Vanilla CSS** + custom assets (no build step)

## Layout

```
├── index.php                  # homepage with product category sections
├── produkty.php               # /produkty?kategoria=X — product catalog page
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── email.php              # POST handler for contact form (PHPMailer over SMTP)
├── assets/
│   ├── images/                # product photos, hero backgrounds
│   ├── css/
│   └── js/
└── composer.json              # PHPMailer ^7.0
```

## Local dev

```bash
composer install
php -S localhost:8000          # built-in dev server
```

Then open <http://localhost:8000>.

## Contact form env vars

The contact form (`includes/email.php`) reads SMTP credentials from environment variables. Set them on the host:

```
SMTP_HOST=mail.webglobe.sk
SMTP_PORT=587
SMTP_USERNAME=<inbox-email>
SMTP_PASSWORD=<smtp-password>
```

## Deploy

Static-ish — drop on any PHP-capable host. No build step.

## License

[MIT](LICENSE) © Michal Čečko
