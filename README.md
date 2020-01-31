# Check If a Plugin is Active

On a WordPress site, plugins can be (1) activated on the site, (2) network activated on a multisite and (3) added as a must use plugin.  This class adds method to check if a plugin is active in all these cases. 


Please, [read](https://yakub.xyz/the-right-way-to-check-if-a-plugin-is-active/) the associated blog post. 

## Example 
```
// Check if WooCommerce is active.
Utils_Plugins::is_active('woocommerce.php'); //True|False

// Check if WooCommerce is network active.
Utils_Plugins::is_network_active('woocommerce.php'); //True|False

// Check if a plugin is added as must use (mu-plugins).
Utils_Plugins::is_mu_active('plugin.php');  //True|False