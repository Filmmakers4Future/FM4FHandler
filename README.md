# Filmmakers for Future handler
The Filmmakers for Future handler is a handler for [Urlaube](https://github.com/urlaube/urlaube). The handler is providing the static legacy content until it is migrated to Urlaube. It is based on the [fff-signup](https://github.com/yahesh/fff-signup) core written by [Yahe](https://github.com/yahesh).

## Installation
Place the folder containing the handler into your handlers directory located at ./user/handlers/.

## Configuration
To configure the handler you **HAVE TO** set the corresponding settings in your configuration file located at `./user/config/config.php`.

### Admin Mail
You have to set the admin mail address:
```
  // this is mail address where administrative mails will be sent to
  define("ADMIN_MAIL", "admin@example.com");
```

### Base URL
You have to set the base URL:
```
  // this is the base URL expected in REFERER headers sent by browsers when submitting a form,
  // this value is used to check the actual REFERER header during a form submission,
  // the check is used to prevent cross-site request forgery attempts
  define("BASE_URL", http://localhost:8080/);
```

### MailGun Configuration
You have to set the MailGun configuration:
```
  // this is the MailGun configuration needed to send mails
  define("MAILGUN_AUTH",     "api:key-0123456789abcdef0123456789abcdef");
  define("MAILGUN_ENDPOINT", "https://api.eu.mailgun.net/v3/mg.filmmakersforfuture.org/messages");
  define("MAILGUN_FROM",     "Filmmakers for Future <noreply@mg.filmmakersforfuture.org>");
```

### Newsletter Send Password:
You have to set the newsletter send password:
```
  // this is the newsletter submission password, it has to be set in the CRYPT password format,
  // the value can be generated via:
  // php -r 'print(str_replace("\$", "\\\$", password_hash(readline("Password: "), PASSWORD_DEFAULT)."\n"));'
  define("NEWSLETTER_SEND_PASSWORD", null);
```

You can generate the newsletter send password with this command:
```
php -r 'print(str_replace("\$", "\\\$", password_hash(readline("Password: "), PASSWORD_DEFAULT)."\n"));'
```

### Database Configuration
You have to set the database configuration:
```
  define("DB_HOST", "127.0.0.1");
  define("DB_PORT", 3306);
  define("DB_NAME", "fff");
  define("DB_USER", "fff");
  define("DB_PASS", "fff");
```

### Contact Form Configuration
You have to set the contact form configuration:
```
  // defines the recipients and mail subjects of messages sent through the contact form
  define("CONTACT_SUBJECTS", [[MAIL_MAIL => "admin@example.com", MAIL_SUBJECT => "Message for example.com"],
                              [MAIL_MAIL => "admin@example.net", MAIL_SUBJECT => "Message for example.net"]]);
```

### Mail Template Configuration
You have to set the mail template configuration:
```
  // defines the contents of the mail that is sent to the admin DURING verification
  define("ADMIN_VERIFY_MAIL_BODY",    file_get_contents(__DIR__."/templates/admin_verify.txt"));
  define("ADMIN_VERIFY_MAIL_SUBJECT", "Please verify this user registration");

  // defines the contents of the mail that is sent to the admin when the contact form is used
  define("CONTACT_MAIL_BODY",    file_get_contents(__DIR__."/templates/contact.txt"));
  define("CONTACT_MAIL_SUBJECT", "Filmmakers for Future: {%SUBJECT}");

  // defines the default contents of the newsletter submission form
  define("NEWSLETTER_MAIL_BODY",    file_get_contents(__DIR__."/templates/newsletter.txt"));
  define("NEWSLETTER_MAIL_SUBJECT", "");

  // defines the contents of the mail that is sent to the user when requesting a newsletter management link
  define("USER_NEWSLETTER_MAIL_BODY",    file_get_contents(__DIR__."/templates/user_newsletter.txt"));
  define("USER_NEWSLETTER_MAIL_SUBJECT", "Newsletter subscription management link");

  // defines the contents of the mail that is sent to the user AFTER verification
  define("USER_VERIFIED_MAIL_BODY",    file_get_contents(__DIR__."/templates/user_verified.txt"));
  define("USER_VERIFIED_MAIL_SUBJECT", "Your registration has been verified!");

  // defines the contents of the mail that is sent to the user DURING verification
  define("USER_VERIFY_MAIL_BODY",    file_get_contents(__DIR__."/templates/user_verify.txt"));
  define("USER_VERIFY_MAIL_SUBJECT", "Please verify your registration!");
```

### Error Handling Configuration
You have to set the error handling configuration:
```
  define("ERRORS_ENABLED",    true);
  define("ERRORS_FOLDER",     __DIR__."/errors/");
  define("ERRORS_NEWSLETTER", "Your signature has not yet been verified.");
  define("ERRORS_REGISTER",   "Your email address has already been used to sign our statement.");
  define("ERRORS_VERIFY",     "Your signature does not need to be verified.");
```
