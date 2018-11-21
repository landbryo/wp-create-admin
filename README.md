# WordPress Create Admin User

Super straight forward WordPress MU (must use) plugin or function for creating an admin user.

### Configuration

Update these 3 variables:

`$login = 'username';`
`$passw = 'mysuperlongcomplicatedpassword';`
`$email = 'webmin@example.com';`

### Installation

- If you have mu-plugins in your wp-content directory, just add `new-user.php` to it.
- If you don't have an mu-plugins directory in wp-content, create one and add `new-user.php` to it.

### Tips

This runs on `init` so if your username/password combo doesn't work on thefirst try, simply try again.