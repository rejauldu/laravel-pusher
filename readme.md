<h1>Laravel live notification</h1>
<ol>
<li>Create account to pusher website</li>
<li>Install laravel project-5.5[command]</li>
<li>Run to install <code>composer require pusher/pusher-php-server</code> [command]</li>
<li>Check composer.json if pusher installed correctly</li>
<li>Install node.js [for npm command]</li>
<li>Update <code>.env</code> file (do not forget to set BROADCAST_DRIVER)</li>
  <li>Now go to <code>config/broadcasting.php</code> and update <code>options</code> of <code>pusher</code> as like below:
  <blockquote><pre>
    'pusher' => [<br/>
            'driver' => 'pusher',<br/>
            'key' => env('PUSHER_APP_KEY'),<br/>
            'secret' => env('PUSHER_APP_SECRET'),<br/>
            'app_id' => env('PUSHER_APP_ID'),<br/>
            'options' => [<br/>
                'cluster' => 'ap2',<br/>
		'encrypted' => true,<br/>
            ],<br/>
        ],
    </pre></blockquote>
  </li>
<li>Create event and notification</li>
<li>Uncomment <code>EventServiceProvider</code> from <code>config/app</code>.</li>
<li>Create 2 routes; One for generating event and other for viewing.</li>
<li>Now check the debug console of pusher server if the message was sent.</li>
<li>Run: <code>npm install --save laravel-echo pusher-js</code></li>
<li>Run: <code>npm install</code> (installs dependencies inside node_modules)</li>
<li>Update <code>resources/assets/js/bootstrap.js</code></li>
<li>Create view with <code>Echo.channel</code> and <code>csrf meta</code></li>
<li>Run: <code>npm run watch</code> (this command will compile and build)</li>
<li>Do some refreshing work as like: use version (ie. <code>?{{ time() }}</code>) to refresh <code>app.js</code> in view (<code>notification.bloade.js</code>), Maybe restart server etc.</li>
<li>Check eveerything should work</li>
</ol>
Make your channel private or presence (I will make presence)
<ol>
	<li>Go to Chat Event and change:
	<blockquote><pre>
	public function broadcastOn()
	{
		return new PresenceChannel('chat');
	}
    </pre></blockquote></li>
	<li>
		There are two Service Providers with Same name but different namespace in config/app.php. Uncomment them.
		<blockquote>Illuminate\Broadcasting\BroadcastServiceProvider::class,
		App\Providers\BroadcastServiceProvider::class,</blockquote>
	</li>
	<li>
		In you view (notification.blade.php in this example), change <code>Echo.listen</code> to <code>Echo.join</code>.
		<blockquote><pre>
			Echo.join('chat')
			    .listen('ChatEvent', (e) => {
				console.log(e);
			    });
		</pre></blockquote>
	</li>
</ol>
<p>Error:</p>
<p>If you find any error like:</p>
<p>Class 'Pusher' not found</p>
or,
<p>Oops, Something went wrong</p>
<p>Solution:</p>
A solution is to create an alias in config/app.php. Under the 'aliases' key, add this to the array in the "Third Party Aliases" section:

<blockquote>'Pusher' => Pusher\Pusher::class,</blockquote>
