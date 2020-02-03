<?php
/**
 * @package WP2Static
 *
 * Copyright (c) 2011 Leon Stafford
 */

?>

<hr>

<h3>Advanced Detection Options</h3>

<label
    for="<?php echo $view['wp2static_zip_addon_options']['deployment_url']->name; ?>"
>Deployment URL</label>

<input
    type="url"
    name="<?php echo $view['wp2static_zip_addon_options']['deployment_url']->name; ?>"
    id="<?php echo $view['wp2static_zip_addon_options']['deployment_url']->name; ?>"
    value="<?php echo $view['wp2static_zip_addon_options']['deployment_url']->value; ?>"
    required
>
    
<p><i><?php echo $view['wp2static_zip_addon_options']['deployment_url']->description; ?></i></p>


 

 
<h4>Exclude URL Patterns</h4>

<p>After checking the Initial Crawl List, add any paths to filter out here.</p>

<p>WP2Static automatically filters out common backup plugin directories, but please review your initial crawl list to ensure no unwanted URLs are detectected.</p>

<p>You can enter this as a partial string or full path (wildcards/regex not currently supported)</p>

<pre>
<code>.zip</code>
<code>768x768.jpg</code>
<code><?php echo $view['site_info']['site_url']; ?>/wp-content/themes/twentyseventeen/banana.jpg</code>
<code>/my_pricelist.pdf</code>
</pre>

<textarea class="widefat" name="excludeURLs" id="excludeURLs" rows="5" cols="10"><?php echo $this->options->excludeURLs ? $this->options->excludeURLs : ''; ?></textarea>

<h4>Force-include URLs</h4>

<p>Where the plugin fails to detect certain URLs that you know you want to include, please add these here. This will be applied after any exclusions, in case you want to exclude a whole directory, then include just one file from it.</p>

<p><em>Supported formats are site root relative URLs</em></p>

<pre>
<code><?php echo $view['site_info']['site_url']; ?></code>
<code><?php echo $view['site_info']['site_url']; ?>/wp-content/themes/twentyseventeen/banana.jpg</code>
<code>my_pricelist.pdf</code>
</pre>

<textarea class="widefat" name="additionalUrls" id="additionalUrls" rows="5" cols="10"><?php echo $this->options->additionalUrls ? $this->options->additionalUrls : ''; ?></textarea>
