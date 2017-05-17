# Login Redirect

This is a fork of [Peter's Login Redirect](https://de.wordpress.org/plugins/peters-login-redirect/) plugin for wordpress.
It extends the plugin by a shortcode, which can be included in order to redirect the logged in user to the configured login page.

To use this shortcode, simply put

```
[redirect_user]
```

into your content. The redirect is done via javascript, because the function `wp_redirect()` does not work after the content
has started to deliver.