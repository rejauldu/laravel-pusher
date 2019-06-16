<h1>Laravel live notification</h1>
<ol>
<li>Create account to pusher website</li>
<li>Install laravel project-5.5[command]</li>
<li>install <code>pusher-php-server</code> [command]</li>
<li>Check composer.json if pusher installed correctly</li>
<li>Install node.js [for npm command]</li>
<li>Update <code>.env</code> file (do not forget to set BROADCAST_DRIVER)</li>
<li>Create event and notification</li>
<li>Uncomment <code>EventServiceProvider</code> from <code>config/app</code>.</li>
<li>Create 2 routes; One for generating event and other for viewing.</li>
<li>Now check the debug console of pusher server if the message was sent.</li>
<li>Run: <code>npm install --save laravel-echo pusher-js</code></li>
<li>Run: <code>npm install</code> (installs dependencies inside node_modules)</li>
<li>Update <code>resources/assets/js/bootstrap.js</code></li>
<li>Create view with <code>Echo.channel</code> and <code>csrf meta</code></li>
<li>Run: <code>npm run watch</code> (this command will compile and build)</li>
<li>Check eveerything should work</li>
</ol>
<p>Error:</p>
<p>If you find any error like:</p>
<p>Class 'Pusher' not found</p>
or,
<p>Oops, Something went wrong</p>
<p>Solution:</p>
A solution is to create an alias in config/app.php. Under the 'aliases' key, add this to the array in the "Third Party Aliases" section:

<blockquote>'Pusher' => Pusher\Pusher::class,</blockquote>
